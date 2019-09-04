<?php


namespace App\Services;


use App\Models\Posts;
use Illuminate\Support\Facades\DB;

class PostService
{
    public function getPosts($where = [], $status = [['status', 2]], $limit = 15)
    {
        return Posts::select(
            'posts.id as id',
            'posts.title',
            'posts.desc',
            'posts.area',
            'posts.home_type',
            'posts.post_type',
            'posts.price',
            'posts.room_count',
            'posts.email_allowed',
            'posts.address',
            'posts.created_at',
            'posts.updated_at',
            'c.name as city_name',
            'u.first_name as user_first_name',
            'u.last_name as user_last_name',
            'u.email as user_email',
            'pi.image_path')->join("cities as c", "c.id", "=", "posts.city_id")
            ->join("users as u", "u.id", "=", "posts.user_id")
            ->leftJoin(DB::raw("(select * from post_images where id in(select min(id) from post_images pti group by pti.post_id)) as pi"), 'pi.post_id', "=", "posts.id")
            ->where($where + $status)
            ->orderBy("created_at", "desc")
            ->paginate(15);
    }


    public function getLastLimitedSaleAndRentPosts($saleLimit = 15, $rentLimit = 15)
    {
        return Posts::select(
            'posts.id as id',
            'posts.title',
            'posts.desc',
            'posts.area',
            'posts.home_type',
            'posts.post_type',
            'posts.price',
            'posts.room_count',
            'posts.email_allowed',
            'posts.address',
            'posts.created_at',
            'posts.updated_at',
            'c.name as city_name',
            'u.first_name as user_first_name',
            'u.last_name as user_last_name',
            'u.email as user_email',
            'pi.image_path')->join("cities as c", "c.id", "=", "posts.city_id")
            ->join("users as u", "u.id", "=", "posts.user_id")
            ->leftJoin(DB::raw("(select * from post_images where id in(select min(id) from post_images pti group by pti.post_id)) as pi"), 'pi.post_id', "=", "posts.id")
            ->where([
                [
                    "status", "=", 2
                ],
                [
                    "post_type", "=", "sale"
                ],
                [
                    "posts.created_at", ">", "DATE(DATE_sub(NOW(), INTERVAL 365 DAY))"
                ]
            ])
            ->take($saleLimit)
            ->orderBy("posts.created_at", "desc")
            ->union(Posts::select(
                'posts.id as id',
                'posts.title',
                'posts.desc',
                'posts.area',
                'posts.home_type',
                'posts.post_type',
                'posts.price',
                'posts.room_count',
                'posts.email_allowed',
                'posts.address',
                'posts.created_at',
                'posts.updated_at',
                'c.name as city_name',
                'u.first_name as user_first_name',
                'u.last_name as user_last_name',
                'u.email as user_email',
                'pi.image_path')->join("cities as c", "c.id", "=", "posts.city_id")
                ->join("users as u", "u.id", "=", "posts.user_id")
                ->leftJoin(DB::raw("(select * from post_images where id in(select min(id) from post_images pti group by pti.post_id)) as pi"), 'pi.post_id', "=", "posts.id")
                ->where([
                    [
                        "status", "=", 2
                    ],
                    [
                        "post_type", "=", "rent"
                    ],
                    [
                        "posts.created_at", ">", "DATE(DATE_sub(NOW(), INTERVAL 365 DAY))"
                    ]
                ])
                ->take($rentLimit)
                ->orderBy("posts.created_at", "desc")
            )->get();
    }
}
