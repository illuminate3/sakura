<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInitialsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_clients')->create('initials', function($table) {
            $table->integer('mtk')->unsigned();
            $table->string('initials', 45)->nullable();
            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->primary('mtk');
            $table->unique('initials');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('fcs_clients')->dropIfExists('initials');
    }

}
