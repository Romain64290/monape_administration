<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {

            $dateMore1year=date("Y-m-d", strtotime("+1 year"));// Date + 1 an

            $table->increments('id');
            $table->integer('idBoss');
            $table->string('name');
            $table->string('school');            
            $table->string('address');
            $table->string('cp');
            $table->string('city');
            $table->string('uniqId');
            $table->tinyInteger('subscription')->default('1')->comment('1 => Basic, 2 => Standard, 3 => Premium');
            $table->date('endofsubscription')->default($dateMore1year);
            $table->timestamps();
        });

             // Insertion utisateurs initiaux
             DB::table('teams')->insert(
                ['idBoss' => '1','name' => 'Ape de Bosdarros','school' => 'Bosdarros', 'address' => 'place de la mairie', 'cp' => '64290', 'city' => 'BOSDARROS', 'uniqId' => 'djfmlksdhj','subscription' => '3','endofsubscription' => '2100-12-31'] ); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
