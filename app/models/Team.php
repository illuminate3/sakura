<?php

/*
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */

class Team extends Eloquent {

    protected $connection = 'fcs_staff';
    protected $table = 'teams';
    protected $fillable = ['program_id'];
    protected $primaryKey = 'team_id';
    public $timestamps = false;

    public function program() {

        return $this->belongsTo('Program', 'program_id', 'program_id');
    }

    public function teamLeaders() {

        return $this->hasMany('TeamLeader', 'team_id', 'team_id');
    }

    public function staff() {

        return $this->belongsToMany('Staff', 'fcs_staff.staff_team', 'team_id', 'staff_id');
    }

}
