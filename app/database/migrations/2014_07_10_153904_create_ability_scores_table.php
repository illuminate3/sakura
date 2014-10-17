<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbilityScoresTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_clients')->create('ability_scores', function($table) {
            $table->increments('ability_id');
            $table->integer('mtk')->unsigned();
            $table->integer('staff_id')->unsigned();
            $table->integer('ability_level');
            $table->timestamps();
            $table->softDeletes();

            $table->engine = 'InnoDB';
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('fcs_clients')->dropIfExists('ability_scores');
    }

}
