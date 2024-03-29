<?php

/*
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */

/**
 * Description of Client
 *
 * @author jleach
 */
class Client extends Eloquent {

    protected $connection = 'fcs_clients';
    protected $table = 'clients';
    protected $fillable = Array('mtk');
    protected $primaryKey = 'mtk';

    // finally in alpha order!
    
    
    public function address() {
        return $this->hasOne('ClientAddress', 'mtk', 'mtk');
    }

    /*
      public function mailingAddress() {
      return $this->hasOne('MailAddress', 'mtk', 'mtk');
      }
     */

    public function allergies() {
        return $this->hasMany('Allergies', 'mtk', 'mtk');
    }

    public function assignedStaff() {
        return $this->hasOne('AssignedStaff', 'mtk', 'mtk');
    }

    public function birthday() {
        return $this->hasOne('ClientBirthday', 'mtk', 'mtk');
    }

    public function diagnosis() {
        return $this->hasMany('Diagnosis', 'mtk', 'mtk');
    }

    public function emergencyContact() {
        return $this->hasOne('EmergencyContact', 'mtk', 'mtk');
    }

    public function familyHistory() {
        return $this->hasOne('FamilyHistory', 'mtk', 'mtk');
    }

    public function gender() {
        return $this->hasOne('Gender', 'mtk', 'mtk');
    }

    public function guardian() {
        return $this->hasMany('Guardian', 'mtk', 'mtk');
    }

    public function healthcareProviders() {
        return $this->hasMany('HealthcareProviders', 'mtk', 'mtk');
    }

    public function housingConcerns() {
        return $this->hasMany('HousingConcerns', 'mtk', 'mtk');
    }

    public function income() {
        return $this->hasOne('Income', 'mtk', 'mtk');
    }

    public function initials() {
        return $this->hasOne('Initial', 'mtk', 'mtk');
    }

    public function livingArrangements() {
        return $this->hasOne('LivingArrangements', 'mtk', 'mtk');
    }

    public function marital() {
        return $this->hasOne('Marital', 'mtk', 'mtk');
    }

    public function medicalConcerns() {
        return $this->hasMany('MedicalConcerns', 'mtk', 'mtk');
    }

    public function medications() {
        return $this->hasMany('ClientMedication', 'mtk', 'mtk');
    }

    public function name() {
        return $this->hasOne('ClientName', 'mtk', 'mtk');
    }

    public function needs() {
        return $this->belongsToMany('Need', 'client_need', 'mtk', 'need_id');
    }

    public function phone() {
        return $this->hasOne('ClientPhone', 'mtk', 'mtk');
    }

    public function referral() {
        return $this->hasOne('Referral', 'mtk', 'mtk');
    }

    public function releases() {
        return $this->hasMany('Releases', 'mtk', 'mtk');
    }

    public function ssn() {
        return $this->hasOne('Ssn', 'mtk', 'mtk');
    }

    public function vocational() {
        return $this->hasOne('Vocational', 'mtk', 'mtk');
    }

}
