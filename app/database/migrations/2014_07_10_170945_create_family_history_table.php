<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamilyHistoryTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_clients')->create('family_histories', function($table) {
            $table->integer('mtk')->unsigned();
            $table->string('mothers_name', 45)->nullable();
            $table->string('fathers_name', 45)->nullable();
            $table->text('parental_history');
            $table->text('other_guardians');
            $table->integer('male_siblings');
            $table->integer('female_siblings');
            $table->integer('client_birth_order');
            $table->text('developmental_milestone_history');
            $table->text('developmental_notes');
            $table->text('childhood_events');
            $table->text('interpersonal_relationships');
            $table->text('client_family_values');
            $table->text('additional_information');
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
        Schema::connection('fcs_clients')->dropIfExists('family_histories');
    }

}
