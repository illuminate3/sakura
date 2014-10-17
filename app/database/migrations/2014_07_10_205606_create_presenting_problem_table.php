<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresentingProblemTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_clients')->create('presenting_problems', function($table) {
            $table->integer('mtk')->unsigned();
            $table->text('referral_source_concern');
            $table->text('client_perception');
            $table->text('problem_duration');
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
        Schema::connection('fcs_clients')->dropIfExists('presenting_problems');
    }

}
