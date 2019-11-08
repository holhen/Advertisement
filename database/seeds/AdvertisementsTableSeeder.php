<?php

use Illuminate\Database\Seeder;
use App\Advertisement;

class AdvertisementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array("user_id" => 1, "title" => "Christmas tree for sale"),
            array("user_id" => 1, "title" => "Let me build your web page"),
            array("user_id" => 2, "title" => "Come to our language school"),
            array("user_id" => 2, "title" => "Flats for rent"),
            array("user_id" => 3, "title" => "Visit München during Octoberfest"),
            array("user_id" => 3, "title" => "Check out our newest DVD collection"),
            array("user_id" => 4, "title" => "Lorem ipsum"),
            array("user_id" => 4, "title" => "dolor sit amet")
        );

        Advertisement::insert($data);
    }
}
