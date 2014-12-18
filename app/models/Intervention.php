<?php

/* 
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */

class Intervention extends Eloquent
{
    protected $connection = 'fcs_clients';
    
    protected $table = 'interventions';
    
    protected $fillable = ['title','description'];
    
    public $timestamps = false;
        protected $primaryKey = 'intervention_id';
    public function actions(){
        
        return $this->belongsToMany('Action', 'action_intervention', 'intervention_id', 'intervention_id');
        
    }
    
    public function needs(){
        
        return $this->belongsToMany('Need', 'intervention_id', 'intervention_id');
        
    }
}
