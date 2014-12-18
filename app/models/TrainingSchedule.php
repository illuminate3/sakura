<?php

/* 
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */

Class TrainingSchedule
{
    protected $fillable  = ['staff_id','training_id','day','time'];
    protected $connection = 'fcs_clients';
    
    protected $table = 'training_schedules';
    protected $primaryKey = 'id';
    
    protected function training()
    {
        
        return $this->hasMany('Training','training_id','training_id');
        
    }
    protected function staff()
    {
        return $this->belongsTo('Staff', 'staff_id', 'staff_id');
    }
    
}