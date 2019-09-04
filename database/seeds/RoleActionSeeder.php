<?php

use Illuminate\Database\Seeder;

class RoleActionSeeder extends Seeder
{

    private $role_actions = [];
    public function __construct()
    {
        for ($i = 0; $i < 90; $i++) {
            $this->role_actions[$i]['role_id'] = rand(1, 3);
            $this->role_actions[$i]['action_id'] = rand(1, 30);
        }
    }

    public function run()
    {
        \Illuminate\Support\Facades\DB::table('role_action')->insert($this->role_actions);
    }
}
