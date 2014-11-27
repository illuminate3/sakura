<?php

/*
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */

class Program Extends \Eloquent {

    protected $connection = 'fcs_clients';
    protected $table = 'programs';
    protected $fillable = ['program_id', 'title', 'description'];
    protected $primaryKey = 'program_id';

    public function clients() {
        return $this->belongsToMany('Client');
    }

    public function directors(){
        return $this->hasOne('Hierarchy');
    }
    
    public function team() {
        return $this->hasOne('Team');
    }

    public function needs() {
        return $this->belongsToMany('Need', 'need_program', 'program_id', 'program_id');
    }

    public function interventions() {
        return $this->belongsToMany('Intervention', 'intervention_program', 'program_id', 'program_id');
    }

}
