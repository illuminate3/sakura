<?php

/*
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */

class Hierarchy extends \Eloquent {

    protected $connection = 'fcs_staff';
    protected $table = 'hierarchys';
    protected $fillable = ['team_id', 'program_id', 'director_id'];
    public $timestamps = false;
    public function team() {

        return $this->hasOne('Team', 'team_id', 'team_id');
    }

    public function program() {
        return $this->belongsTo('Program', 'program_id', 'program_id');
    }

    public function director() {
        return $this->hasOne('Director', 'director_id', 'director_id');
    }
    
    
}
