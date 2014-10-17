<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVocationalTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_clients')->create('vocationals', function($table) {
            $table->integer('mtk')->unsigned();
            $table->smallInteger('employed');
            $table->integer('employer');
            $table->smallInteger('retired');
            $table->smallInteger('vocational_services');
            $table->integer('vocational_contact');
            $table->smallInteger('in_school');
            $table->integer('school');
            $table->text('other');
            $table->text('history');
            $table->text('current');
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
        Schema::connection('fcs_clients')->dropIfExists('vocationals');
    }

}
