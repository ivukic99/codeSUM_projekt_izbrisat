<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            [
                "name" => "External User",
                "slug" => "external_user"
            ],
            [
                "name" => "Student",
                "slug" => "student"
            ],
            [
                "name" => "Teacher",
                "slug" => "teacher"
            ]
        ]);
    }
}
