<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array("name" => "holhen"),
            array("name" => "fleurania"),
            array("name" => "admin"),
            array("name" => "rabit")
        );
        User::insert($data);
    }
}
