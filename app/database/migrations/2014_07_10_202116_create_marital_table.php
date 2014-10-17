<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaritalTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_clients')->create('maritals', function($table) {
            $table->integer('mtk')->unsigned();
            $table->smallInteger('single')->nullable();
            $table->smallInteger('married')->nullable();
            $table->smallInteger('separated')->nullable();
            $table->smallInteger('divorced')->nullable();
            $table->smallInteger('cohabitating')->nullable();
            $table->text('marital_history');
            $table->smallInteger('children')->nullable();
            $table->string('childbirth_complications', 45)->nullable();
            $table->text('additional_notes');
            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->primary('mtk');
            //$table->foreign('mtk')->references('mtk')->on('clients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('fcs_clients')->dropIfExists('maritals');
    }

}
