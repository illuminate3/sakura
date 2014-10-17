<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmergencyContactTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_clients')->create('emergency_contacts', function($table) {
            $table->integer('index');
            $table->integer('mtk')->unsigned();
            $table->string('full_name', 90);
            $table->string('phone_number', 45);
            $table->string('relationship', 45);
            $table->timestamps();
            $table->softDeletes();

            $table->engine = 'InnoDB';
            $table->primary('index');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('fcs_clients')->dropIfExists('emergency_contacts');
    }

}
