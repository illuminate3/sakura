<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustodyTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_clients')->create('custodies', function($table) {
            $table->integer('mtk')->unsigned();
            $table->string('child_name', 45)->nullable();
            $table->smallInteger('both_parents')->nullable();
            $table->smallInteger('mother')->nullable();
            $table->smallInteger('father')->nullable();
            $table->smallInteger('relative')->nullable();
            $table->smallInteger('dhs')->nullable();
            $table->text('other');
            $table->text('comments');
            $table->timestamps();
            $table->softDeletes();

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
        Schema::connection('fcs_clients')->dropIfExists('custodies');
    }

}
