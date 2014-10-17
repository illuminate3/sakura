<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropForeignKeys extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //

        
        Schema::connection('fcs_clients')->table('addresses', function($table) {
            $table->dropforeign('zip_codes_zip_code_id_foreign');
        });

        Schema::connection('fcs_clients')->table('assigned_staff', function($table) {
            $table->dropforeign('clients_mtk_foreign');
        });

        Schema::connection('fcs_clients')->table('assigned_hours', function($table) {

            $table->dropforeign('clients_mtk_foreign');
        });

        Schema::connection('fcs_clients')->table('tcm_clients', function($table) {
            $table->dropforeign('clients_mtk_foreign');
        });

        Schema::connection('fcs_clients')->table('ability_scores', function($table) {
            $table->dropforeign('clients_mtk_foreign');
        });

        Schema::connection('fcs_clients')->table('ac_ok_test', function($table) {
            $table->dropforeign('clients_mtk_foreign');
        });

        Schema::connection('fcs_clients')->table('allergies', function($table) {
            $table->dropforeign('clients_mtk_foreign');
        });

        Schema::connection('fcs_clients')->table('children', function($table) {
            $table->dropforeign('clients_mtk_foreign');
        });


        Schema::connection('fcs_clients')->table('contacts', function($table) {

            $table->dropforeign('organizations_org_id_foreign');
        });

        Schema::connection('fcs_clients')->table('custody', function($table) {

            $table->dropforeign('clients_mtk_foreign');
        });

        Schema::connection('fcs_clients')->table('diagnosis', function($table) {

            $table->dropforeign('clients_mtk_foreign');
        });

        Schema::connection('fcs_clients')->table('emergency_contacts', function($table) {

            $table->dropforeign('clients_mtk_foreign');
        });

        Schema::connection('fcs_clients')->table('family_history', function($table) {
            $table->dropforeign('clients_mtk_foreign');
        });

        Schema::connection('fcs_clients')->table('gender', function($table) {
            $table->dropforeign('clients_mtk_foreign');
        });

        Schema::connection('fcs_clients')->table('guardian', function($table) {
            $table->dropforeign('clients_mtk_foreign');
        });

        Schema::connection('fcs_clients')->table('healthcare_providers', function($table) {

            $table->dropforeign('clients_mtk_foreign');
            $table->dropforeign('organizations_org_id_foreign');
            $table->dropforeign('contacts_contact_id_foreign');
        });

        Schema::connection('fcs_clients')->table('housingConcerns', function($table) {
            $table->dropforeign('clients_mtk_foreign');
        });

        Schema::connection('fcs_clients')->table('income', function($table) {
            $table->dropforeign('clients_mtk_foreign');
        });

        Schema::connection('fcs_clients')->table('initials', function($table) {
            $table->dropforeign('clients_mtk_foreign');
        });

        Schema::connection('fcs_clients')->table('insurers', function($table) {
            $table->dropforeign('contacts_contact_id_foreign');
            $table->dropforeign('organizations_org_id_foreign');
        });

        Schema::connection('fcs_clients')->table('insurances', function($table) {
            $table->foreign('insurer_id')->references('insurer_id')->on('insurers');
            $table->dropforeign('clients_mtk_foreign');
        });

        Schema::connection('fcs_clients')->table('living_arrangements', function($table) {
            $table->dropforeign('clients_mtk_foreign');
        });

        Schema::connection('fcs_clients')->table('locus_tests', function($table) {
            $table->dropforeign('clients_mtk_foreign');
        });

        Schema::connection('fcs_clients')->table('maritals', function($table) {
            $table->dropforeign('clients_mtk_foreign');
        });

        Schema::connection('fcs_clients')->table('medical_concerns', function($table) {
            $table->dropforeign('clients_mtk_foreign');
        });

        Schema::connection('fcs_clients')->table('medical_supports', function($table) {
            $table->dropforeign('clients_mtk_foreign');
        });

        Schema::connection('fcs_clients')->table('medical_management', function($table) {
            $table->dropforeign('clients_mtk_foreign');
        });

        Schema::connection('fcs_clients')->table('possible_assistance_sources', function($table) {
            $table->dropforeign('clients_mtk_foreign');
        });
        Schema::connection('fcs_clients')->table('presenting_problem', function($table) {
            $table->dropforeign('clients_mtk_foreign');
        });

        Schema::connection('fcs_clients')->table('referral', function($table) {
            $table->dropforeign('clients_mtk_foreign');
            $table->dropforeign('contact_id_referrer_id_foreign');
            $table->dropforeign('contacts_contact_id_foreign');
            $table->dropforeign('organizations_org_id_foreign');
        });


        Schema::connection('fcs_clients')->table('releases', function($table) {
            $table->dropforeign('clients_mtk_foreign');
            $table->dropforeign('contacts_contact_id_foreign');
            $table->dropforeign('organizations_org_id_foreign');
        });

        Schema::connection('fcs_clients')->table('ssn', function($table) {
            $table->dropforeign('clients_mtk_foreign');
        });

        Schema::connection('fcs_clients')->table('state_federal_entitlements', function($table) {
            $table->dropforeign('clients_mtk_foreign');
        });

        Schema::connection('fcs_clients')->table('vocational', function($table) {
            $table->dropforeign('clients_mtk_foreign');
        });

        Schema::connection('fcs_clients')->table('vocational_financial_needs', function($table) {
            $table->dropforeign('clients_mtk_foreign');
        });

        Schema::connection('fcs_clients')->table('client_names', function($table) {
            $table->dropforeign('clients_mtk_foreign');
        });


        Schema::connection('fcs_clients')->table('client_phones', function($table) {
            $table->dropforeign('clients_mtk_foreign');
        });

        Schema::connection('fcs_clients')->table('client_addresses', function($table) {
            $table->dropforeign('clients_mtk_foreign');
            $table->dropforeign('addresses_address_id_foreign');
        });

        Schema::connection('fcs_clients')->table('organization_addresses', function($table) {
            $table->dropforeign('organizations_org_id_foreign');
            $table->dropforeign('addresses_address_id_foreign');
            $table->dropforeign('zip_codes_zip_code_id_foreign');
        });

        Schema::connection('fcs_clients')->table('organization_phones', function($table) {
            $table->dropforeign('organizations_org_id_foreign');
        });

        Schema::connection('fcs_clients')->table('organizations', function($table) {
            $table->dropforeign('addresses_address_id_foreign');
        });


        Schema::connection('fcs_staff')->table('equipments', function($table) {

            $table->dropforeign('fcsdb.users_staff_id_foreign');
            $table->dropforeign('fcs_staff_equip_id_foreign');
        });

        Schema::connection('fcs_staff')->table('hires', function($table) {

            $table->dropforeign('fcsdb.users_staff_id_foreign');
        });
        Schema::connection('fcs_staff')->table('home_addresses', function($table) {

            $table->dropforeign('fcsdb.users_staff_id_foreign');
        });
        Schema::connection('fcs_staff')->table('interviews', function($table) {

            $table->dropforeign('fcsdb.users_staff_id_foreign');
        });

        Schema::connection('fcs_staff')->table('mail_addresses', function($table) {

            $table->dropforeign('fcsdb.users_staff_id_foreign');
            $table->dropforeign('zip_codes_zip_code_id_foreign');
        });

        Schema::connection('fcs_staff')->table('mileages', function($table) {

            $table->dropforeign('fcsdb.users_staff_id_foreign');
        });

        Schema::connection('fcs_staff')->table('names', function($table) {

            $table->dropforeign('fcsdb.users_staff_id_foreign');
        });

        Schema::connection('fcs_staff')->table('staff_contact_info', function($table) {

            $table->dropforeign('fcsdb.users_staff_id_foreign');
        });

        Schema::connection('fcs_staff')->table('staff_notes', function($table) {

            $table->dropforeign('fcsdb.users_staff_id_foreign');
            $table->dropforeign('notes_note_id_foreign');
        });

        Schema::connection('fcs_staff')->table('staff_roles', function($table) {

            $table->dropforeign('fcsdb.users_staff_id_foreign');
            $table->dropforeign('roles_role_id_foreign');
        });
        Schema::connection('fcs_staff')->table('staff_trainings', function($table) {

            $table->dropforeign('fcsdb.users_staff_id_foreign');
            $table->dropforeign('trainings_training_id_foreign');
        });
        Schema::connection('fcs_staff')->table('time_ins', function($table) {

            $table->dropforeign('fcsdb.users_staff_id_foreign');
        });
        Schema::connection('fcs_staff')->table('time_outs', function($table) {

            $table->dropforeign('fcsdb.users_staff_id_foreign');
        });
        Schema::connection('fcs_staff')->table('vehicles', function($table) {

            $table->dropforeign('fcsdb.users_staff_id_foreign');
        });
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    
        
        }

}
