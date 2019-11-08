<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\User;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
        });

        //DB::table("users")->insert([["name" => "holhen"], ["name" => "fleurania"], ["name" => "admin"], ["name" => "rabit"]]);
        $data = array(
            array("name" => "holhen"),
            array("name" => "fleurania"),
            array("name" => "admin"),
            array("name" => "rabit")
        );
        User::insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
