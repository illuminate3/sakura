<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllergenSeverityTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_clients')->create('allergen_severities', function($table) {
            $table->increments('rating');
            $table->text('description');
            $table->timestamps();
            $table->softDeletes();

            $table->engine = 'InnoDB';
            $table->unique('rating');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('fcs_clients')->dropIfExists('allergen_severities');
    }

}
