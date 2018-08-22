<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('lastName');
            $table->string('firstName');            
            $table->string('email')->unique();
            $table->string('password');
            $table->tinyInteger('role')->default('1')->comment('1 => User, 2 => Admin, 3 => Super-Admin');
            $table->boolean('state')->default('0');// utilsateur validé ou non
            $table->tinyInteger('subscription')->default('1')->comment('1 => Basic, 2 => Standard, 3 => Premium');
            
            $dateMore1year=date("Y-m-d", strtotime("+1 year"));// Date + 1 an

            $table->date('endofsubscription')->default($dateMore1year);
            $table->string('team_id')->default('0');// clé étrangere
            $table->foreign('team_id')->references('id')->on('team')->onDelete('cascade');// verifier pertinence cascade ?
            $table->rememberToken();
            $table->timestamps();
        });

         // Insertion utisateurs initiaux
         DB::table('users')->insert(
        ['lastName' => 'TALDU','firstName' => 'Romain', 'email' => 'romain.taldu@gmail.com', 'password' => 'anonymous', 'role' => '3', 'state' => '1','subscription' => '3','endofsubscription' => '2100-12-31']
    ); 

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