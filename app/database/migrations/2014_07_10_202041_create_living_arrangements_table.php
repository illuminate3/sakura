<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivingArrangementsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_clients')->create('living_arrangements', function($table) {
            $table->integer('mtk')->unsigned();
            $table->smallInteger('alone')->nullable();
            $table->smallInteger('partner')->nullable();
            $table->smallInteger('parent')->nullable();
            $table->smallInteger('supported_housing')->nullable();
            $table->smallInteger('homeless')->nullable();
            $table->text('other');
            $table->text('description');
            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->primary('mtk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('fcs_clients')->dropIfExists('living_arrangements');
    }

}
