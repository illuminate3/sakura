<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_staff')->create('items', function(Blueprint $table) {
            $table->increments('id');
            $table->string('operating_system', 128)->nullable();
            $table->string('service_tag', 128)->unique();
            $table->string('setup_tech', 128)->nullable();
            $table->string('admin_name', 128)->nullable();
            $table->string('admin_pass', 128)->nullable();
            $table->string('model_make', 128)->nullable();
            $table->string('model_line', 128)->nullable();
            $table->string('model_maker', 128)->nullable();
            $table->string('hdd_pass', 128)->nullable();
            $table->string('bios_pass', 128)->nullable();
            $table->string('added_by', 128)->nullable();
            $table->string('comments', 128)->nullable();
            $table->string('new_asset_tag', 128)->unique();
            $table->string('type', 128)->nullable();
            $table->string('signed_out_to', 128)->nullable();
            $table->date('purchased_date')->nullable();
            $table->date('assigned_date')->nullable();
            $table->date('arrived_date')->nullable();
            $table->smallInteger('is_modem')->nullable();
            $table->smallInteger('is_mouse')->nullable();
            $table->smallInteger('is_keyboard')->nullable();
            $table->smallInteger('is_bag')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->primary = 'id';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('fcs_staff')->dropIfExists('items');
    }

}
