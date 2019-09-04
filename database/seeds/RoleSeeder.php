<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $roles = [];
    public function __construct()
    {
        $this->roles = [
            [
                "type" => "ROLE_ADMIN"
            ],
            [
                "type" => "ROLE_USER"
            ],
            [
                "type" => "ROLE_UNAUTH"
            ]
        ];
    }

    public function run()
    {
        \App\Models\Roles::insert($this->roles);
    }
}
