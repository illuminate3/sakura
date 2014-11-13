<?php

/* 
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */

Class Section Extends \Illuminate\Auth\Eloquent
{
    protected $connection = 'sakura';
    protected $table = 'sections';
    protected $fillable = [];
    
    protected function forums(){
                
        return $this->hasMany('forums', 'section_id', 'section_id');
        
    }
    
    
    
}