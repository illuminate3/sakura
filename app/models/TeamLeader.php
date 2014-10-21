<?php

/* 
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */

class TeamLeader extends Eloquent {
    
    protected $connection = 'fcs_staff';
     
    protected $table = 'team_leaders';
    
    protected $fillable = ['staff_id', 'team_id'];
    
    
    protected $primaryKey = 'team_leader_id';
    
    public function staff(){
        return $this ->hasOne('Staff', 'staff_id', 'staff_id');
    }
    
    public function team(){
        return $this->belongsTo('Team', 'team_id', 'team_id');
    }
    
    
    
    
}