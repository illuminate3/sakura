<?php

/* 
 * Copyright Jeremy Leach
 * Pegas Corp and Associates
 * 
 */

class Goal extends \Eloquent
{
    protected $connection = 'fcs_clients';
    
    protected $table = 'goals';
    
    protected $primaryKey = 'goal_id';
    
    protected $fillable = ['goal_id', 'title', 'description','target_date','established'];
    
    public function supports(){
        return $this->hasMany('Supports','goal_id','goal_id');
    }
    public function objectives(){
        return $this->hasMany('Objectives');
    }
    
    public function goalArea(){
        return $this->hasOne('GoalArea');
    }
}