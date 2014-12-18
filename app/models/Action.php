<?php

/* 
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */

class Action extends \Cartalyst\Sentry\Users\Eloquent{
    protected $connection = 'fcs_clients';
    protected $table = 'actions';
    
    protected $fillable = ['title', 'description', 'numeric_code'];
    
    protected $primaryKey = ['action_id', 'title'];
    
    public $timestamps=false;
    
    public function intervention(){
        return $this->belongsToMany('Intervention','action_intervention', 'intervention_id', 'intervention_id');
        
        
    }
    
}