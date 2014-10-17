<?php

use Cartalyst\Sentry\Users\Eloquent\User as SentryModel;

//class Staff extends \Eloquent {
class Staff extends SentryModel {

    protected $fillable = [];
    protected $primaryKey = 'staff_id';
    //protected $connection = 'fcsdb';

    protected $table = 'fcsdb.users';

    public function equipment() {

        return $this->hasMany('equipment', 'staff_id', 'staff_id');
    }

    public function hires() {

        return $this->hasMany('hire', 'staff_id', 'staff_id');
    }

    public function homeAddress() {

        return $this->hasMany('homeAddress', 'staff_id', 'staff_id');
    }

    public function interviews() {

        return $this->hasMany('interviews', 'staff_id', 'staff_id');
    }

    public function mailAddress() {

        return $this->hasMany('mailAddress', 'staff_id', 'staff_id');
    }

    public function mileages() {

        return $this->hasMany('mileages', 'staff_id', 'staff_id');
    }

    public function name() {

        return $this->hasMany('staffName', 'staff_id', 'staff_id');
    }

    public function notes() {

        return $this->hasMany('notes', 'staff_id', 'staff_id');
    }

    public function paperwork() {

        return $this->hasMany('paperwork', 'staff_id', 'staff_id');
    }

    public function programs()
    {
        
        return $this->belongsToMany('program', 'fcs_clients.staff_program', 'staff_id', 'program_id');
        
    }
    
    public function staffNotes() {

        return $this->hasMany('staffNotes', 'staff_id', 'staff_id');
    }

    public function staffContactInfo() {

        return $this->hasMany('staffContactInfo', 'staff_id', 'staff_id');
    }

    public function staffRoles() {

        return $this->hasMany('staffRoles', 'staff_id', 'staff_id');
    }

    public function staffTrainings() {

        return $this->hasMany('staffTrainings', 'staff_id', 'staff_id');
    }

    public function timeIn() {

        return $this->hasMany('timeIn', 'staff_id', 'staff_id');
    }

    public function timeOut() {

        return $this->hasMany('timeOut', 'staff_id', 'staff_id');
    }

    public function trainings() {

        return $this->hasMany('trainings', 'staff_id', 'staff_id');
    }

    public function vehicles() {

        return $this->hasMany('vehicles', 'staff_id', 'staff_id');
    }

    public function zipCodes() {

        return $this->hasMany('zipCodes', 'staff_id', 'staff_id');
    }

}
