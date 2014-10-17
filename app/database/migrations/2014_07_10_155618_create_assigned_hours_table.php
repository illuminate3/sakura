<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignedHoursTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_clients')->create('assigned_hours', function($table) {
            $table->engine = 'InnoDB';
            $table->integer('mtk')->unsigned();
            $table->integer('weekly_hours')->default(null);
            $table->timestamps();
            $table->softDeletes();
            $table->primary('mtk');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('fcs_clients')->dropIfExists('assigned_hours');
    }

}
