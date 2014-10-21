<?php

/* 
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */

class Team extends Eloquent {
    
    protected $connection = 'fcs_staff';
    
    protected $table= 'teams';
    
    protected $fillable = ['program_id', 'director_id'];
    
    protected $primaryKey = 'team_id';
    
    
    public function director()
    {
        return $this->hasOne('Director', 'director_id', 'director_id');
        
    }
    
    public function program()
    {
        
        return $this->belongsTo('Program', 'program_id', 'program_id');
        
    }
    
}