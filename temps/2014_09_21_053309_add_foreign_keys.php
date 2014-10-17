<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeys extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        Schema::connection('fcs_clients')->table('addresses', function($table) {
            $table->foreign('zip_code_id')->references('zip_code_id')->on('zip_codes')->onDelete('cascade');
        });

        Schema::connection('fcs_clients')->table('assigned_staff', function($table) {
            $table->foreign('mtk')->references('mtk')->on('clients')->onDelete('cascade');
        });

        Schema::connection('fcs_clients')->table('assigned_hours', function($table) {

            $table->foreign('mtk')->references('mtk')->on('clients')->onDelete('cascade');
        });

        Schema::connection('fcs_clients')->table('tcm_clients', function($table) {
            $table->foreign('client_id')->references('mtk')->on('clients')->onDelete('cascade');
        });

        Schema::connection('fcs_clients')->table('ability_scores', function($table) {
            $table->foreign('mtk')->references('mtk')->on('clients')->onDelete('cascade');
        });

        Schema::connection('fcs_clients')->table('ac_ok_test', function($table) {
            $table->foreign('client_id')->references('mtk')->on('clients')->onDelete('cascade');
        });

        Schema::connection('fcs_clients')->table('allergies', function($table) {
            $table->foreign('client_id')->references('mtk')->on('clients')->onDelete('cascade');
        });

        Schema::connection('fcs_clients')->table('children', function($table) {
            $table->foreign('client_id')->references('mtk')->on('clients')->onDelete('cascade');
        });


        Schema::connection('fcs_clients')->table('contacts', function($table) {

            $table->foreign('org_id')->references('org_id')->on('organizations')->onDelete('cascade');
        });

        Schema::connection('fcs_clients')->table('custody', function($table) {

            $table->foreign('mtk')->references('mtk')->on('clients')->onDelete('cascade');
        });

        Schema::connection('fcs_clients')->table('diagnosis', function($table) {

            $table->foreign('mtk')->references('mtk')->on('clients')->onDelete('cascade');
        });

        Schema::connection('fcs_clients')->table('emergency_contacts', function($table) {

            $table->foreign('mtk')->references('mtk')->on('clients')->onDelete('cascade');
        });

        Schema::connection('fcs_clients')->table('family_history', function($table) {
            $table->foreign('mtk')->references('mtk')->on('clients')->onDelete('cascade');
        });

        Schema::connection('fcs_clients')->table('gender', function($table) {
            $table->foreign('mtk')->references('mtk')->on('clients')->onDelete('cascade');
        });

        Schema::connection('fcs_clients')->table('guardian', function($table) {
            $table->foreign('mtk')->references('mtk')->on('clients')->onDelete('cascade');
        });

        Schema::connection('fcs_clients')->table('healthcare_providers', function($table) {

            $table->foreign('mtk')->references('mtk')->on('clients')->onDelete('Cascade');
            $table->foreign('org_id')->references('org_id')->on('organizations')->onDelete('Cascade');
            $table->foreign('contact_id')->references('contact_id')->on('contacts')->onDelete('Cascade');
        });

        Schema::connection('fcs_clients')->table('housingConcerns', function($table) {
            $table->foreign('mtk')->references('mtk')->on('clients')->onDelete('cascade');
        });

        Schema::connection('fcs_clients')->table('income', function($table) {
            $table->foreign('mtk')->references('mtk')->on('clients')->onDelete('cascade');
        });

        Schema::connection('fcs_clients')->table('initials', function($table) {
            $table->foreign('mtk')->references('mtk')->on('clients')->onDelete('cascade');
        });

        Schema::connection('fcs_clients')->table('insurers', function($table) {
            $table->foreign('contact_id')->references('contact_id')->on('contacts');
            $table->foreign('org_id')->references('org_id')->on('organizations')->onDelete('Cascade');
        });

        Schema::connection('fcs_clients')->table('insurances', function($table) {
            $table->foreign('insurer_id')->references('insurer_id')->on('insurers')->onDelete('Cascade');
            $table->foreign('mtk')->references('mtk')->on('clients')->onDelete('cascade');
        });

        Schema::connection('fcs_clients')->table('living_arrangements', function($table) {
            $table->foreign('mtk')->references('mtk')->on('clients')->onDelete('cascade');
        });

        Schema::connection('fcs_clients')->table('locus_tests', function($table) {
            $table->foreign('mtk')->references('mtk')->on('clients')->onDelete('cascade');
        });

        Schema::connection('fcs_clients')->table('maritals', function($table) {
            $table->foreign('mtk')->references('mtk')->on('clients')->onDelete('cascade');
        });

        Schema::connection('fcs_clients')->table('medical_concerns', function($table) {
            $table->foreign('mtk')->references('mtk')->on('clients')->onDelete('cascade');
        });

        Schema::connection('fcs_clients')->table('medical_supports', function($table) {
            $table->foreign('mtk')->references('mtk')->on('clients')->onDelete('cascade');
        });

        Schema::connection('fcs_clients')->table('medical_management', function($table) {
            $table->foreign('mtk')->references('mtk')->on('clients')->onDelete('cascade');
        });

        Schema::connection('fcs_clients')->table('possible_assistance_sources', function($table) {
            $table->foreign('mtk')->references('mtk')->on('clients')->onDelete('cascade');
        });
        Schema::connection('fcs_clients')->table('presenting_problem', function($table) {
            $table->foreign('mtk')->references('mtk')->on('clients')->onDelete('cascade');
        });

        Schema::connection('fcs_clients')->table('referral', function($table) {
            $table->foreign('mtk')->references('mtk')->on('clients')->onDelete('cascade');
            $table->foreign('referrer_id')->references('contact_id')->on('contacts')->onDelete('cascade');
            $table->foreign('contact_id')->references('contact_id')->on('contacts')->onDelete('cascade');
            $table->foreign('organization_id')->references('org_id')->on('organization')->onDelete('cascade');
        });


        Schema::connection('fcs_clients')->table('releases', function($table) {
            $table->foreign('mtk')->references('mtk')->on('clients')->onDelete('cascade');
            $table->foreign('referrer_id')->references('contact_id')->on('contacts')->onDelete('cascade');
            $table->foreign('contact_id')->references('contact_id')->on('contacts')->onDelete('cascade');
            $table->foreign('organization_id')->references('org_id')->on('organization')->onDelete('cascade');
        });

        Schema::connection('fcs_clients')->table('ssn', function($table) {
            $table->foreign('client_id')->references('mtk')->on('clients')->onDelete('cascade');
        });

        Schema::connection('fcs_clients')->table('state_federal_entitlements', function($table) {
            $table->foreign('client_id')->references('mtk')->on('clients')->onDelete('cascade');
        });

        Schema::connection('fcs_clients')->table('vocational', function($table) {
            $table->foreign('client_id')->references('mtk')->on('clients')->onDelete('cascade');
        });

        Schema::connection('fcs_clients')->table('vocational_financial_needs', function($table) {
            $table->foreign('client_id')->references('mtk')->on('clients')->onDelete('cascade');
        });

        Schema::connection('fcs_clients')->table('client_names', function($table) {
            $table->foreign('client_id')->references('mtk')->on('clients')->onDelete('cascade');
        });


        Schema::connection('fcs_clients')->table('client_phones', function($table) {
            $table->foreign('client_id')->references('mtk')->on('clients')->onDelete('cascade');
        });

        Schema::connection('fcs_clients')->table('client_addresses', function($table) {
            $table->foreign('client_id')->references('mtk')->on('clients')->onDelete('cascade');
            $table->foreign('address_id')->references('address_id')->on('addresses')->onDelete('Cascade');
        });

        Schema::connection('fcs_clients')->table('organization_addresses', function($table) {
            $table->foreign('org_id')->references('org_id')->on('organizations')->onDelete('Cascade');
            $table->foreign('address_id')->references('address_id')->on('addresses')->onDelete('Cascade');
            $table->foreign('zip_code_id')->references('zip_code_id')->on('zip_codes')->onDelete('Cascade');
        });

        Schema::connection('fcs_clients')->table('organization_phones', function($table) {
            $table->foreign('org_id')->references('org_id')->on('organizations')->onDelete('cascade');
        });

        Schema::connection('fcs_clients')->table('organizations', function($table) {
            $table->foreign('address_id')->references('address_id')->on('addresses')->onDelete('Cascade');
        });


        Schema::connection('fcs_staff')->table('equipments', function($table) {

            $table->foreign('staff_id')->references('staff_id')->on('fcsdb.users')->onDelete('cascade');
            $table->foreign('equip_id')->references('id')->on('fcs_staff.items')->onDelete('cascade');
        });

        Schema::connection('fcs_staff')->table('hires', function($table) {

            $table->foreign('staff_id')->references('staff_id')->on('fcsdb.users')->onDelete('cascade');
        });
        Schema::connection('fcs_staff')->table('home_addresses', function($table) {

            $table->foreign('staff_id')->references('staff_id')->on('fcsdb.users')->onDelete('cascade');
        });
        Schema::connection('fcs_staff')->table('interviews', function($table) {

            $table->foreign('staff_id')->references('staff_id')->on('fcsdb.users')->onDelete('cascade');
        });

        Schema::connection('fcs_staff')->table('mail_addresses', function($table) {

            $table->foreign('staff_id')->references('staff_id')->on('fcsdb.users')->onDelete('cascade');
            $table->foreign('zip_code_id')->references('zip_code_id')->on('fcs_staff.zip_codes')->onDelete('cascade');
        });

        Schema::connection('fcs_staff')->table('mileages', function($table) {

            $table->foreign('staff_id')->references('staff_id')->on('fcsdb.users')->onDelete('cascade');
        });

        Schema::connection('fcs_staff')->table('names', function($table) {

            $table->foreign('staff_id')->references('staff_id')->on('fcsdb.users')->onDelete('cascade');
        });

        Schema::connection('fcs_staff')->table('staff_contact_info', function($table) {

            $table->foreign('staff_id')->references('staff_id')->on('fcsdb.users')->onDelete('cascade');
        });

        Schema::connection('fcs_staff')->table('staff_notes', function($table) {

            $table->foreign('staff_id')->references('staff_id')->on('fcsdb.users')->onDelete('cascade');
            $table->foreign('note_id')->references('note_id')->on('notes')->onDelete('cascade');
        });

        Schema::connection('fcs_staff')->table('staff_roles', function($table) {

            $table->foreign('staff_id')->references('staff_id')->on('fcsdb.users')->onDelete('cascade');
            $table->foreign('role_id')->references('note_id')->on('roles')->onDelete('cascade');
        });
        Schema::connection('fcs_staff')->table('staff_trainings', function($table) {

            $table->foreign('staff_id')->references('staff_id')->on('fcsdb.users')->onDelete('cascade');
            $table->foreign('training_id')->references('note_id')->on('trainings')->onDelete('cascade');
        });
        Schema::connection('fcs_staff')->table('time_ins', function($table) {

            $table->foreign('staff_id')->references('staff_id')->on('fcsdb.users')->onDelete('cascade');
        });
        Schema::connection('fcs_staff')->table('time_outs', function($table) {

            $table->foreign('staff_id')->references('staff_id')->on('fcsdb.users')->onDelete('cascade');
        });
        Schema::connection('fcs_staff')->table('staff_trainings', function($table) {

            $table->foreign('staff_id')->references('staff_id')->on('fcsdb.users')->onDelete('cascade');
            $table->foreign('training_id')->references('note_id')->on('trainings')->onDelete('cascade');
        });
        Schema::connection('fcs_staff')->table('vehicles', function($table) {

            $table->foreign('staff_id')->references('staff_id')->on('fcsdb.users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    /*
    
    
    }
        public function down() {
        //
        
        
        /*
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
*/
          }
     

//}
