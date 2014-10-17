<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncomeTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_clients')->create('incomes', function($table) {
            $table->integer('mtk')->unsigned();
            $table->smallInteger('wages');
            $table->smallInteger('ssdi');
            $table->smallInteger('ssi');
            $table->smallInteger('va_benefits');
            $table->string('other', 45)->nullable();
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
        Schema::connection('fcs_clients')->dropIfExists('incomes');
    }

}
