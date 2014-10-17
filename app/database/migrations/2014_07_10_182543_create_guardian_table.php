<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuardianTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_clients')->create('guardian', function($table) {
            $table->integer('mtk')->unsigned();
            $table->string('first', 45);
            $table->string('last', 45);
            $table->string('relationship', 45);
            $table->string('telephone', 45);
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
        Schema::connection('fcs_clients')->dropIfExists('guardian');
    }

}
