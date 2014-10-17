<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignedStaffTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_clients')->create('assigned_staff', function($table) {
            $table->integer('mtk')->unsigned();
            $table->integer('ciw')->unsigned()->nullable();
            $table->date('ciw_assigned_date')->nullable();
            $table->integer('dls_team_leader')->nullable();
            $table->date('dls_assigned_date')->nullable();
            $table->integer('ciw_backup')->unsigned()->nullable();
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
        Schema::connection('fcs_clients')->dropIfExists('assigned_staff');
    }

}
