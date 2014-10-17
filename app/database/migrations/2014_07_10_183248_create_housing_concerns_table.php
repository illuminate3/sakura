<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousingConcernsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_clients')->create('housingConcerns', function($table) {
            $table->integer('mtk')->unsigned();
            $table->smallInteger('potentialChanges')->nullable();
            $table->text('changesDescription');
            $table->smallInteger('safetyConcerns')->nullable();
            $table->text('concernsDescription');
            $table->text('additional');
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
        Schema::connection('fcs_clients')->dropIfExists('housingConcerns');
    }

}
