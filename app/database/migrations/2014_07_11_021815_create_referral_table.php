<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferralTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_clients')->create('referrals', function($table) {
            $table->integer('mtk')->unsigned();
            $table->date('date_of_referral');
            $table->integer('referrer_id')->unsigned();
            $table->integer('contact_id')->unsigned();
            $table->integer('organization_id')->unsigned();
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
        Schema::connection('fcs_clients')->dropIfExists('referrals');
    }

}
