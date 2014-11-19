<?php

/* 
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */

Class Medication Extends \Eloquent
{
    protected $connection = 'codes';
    
    protected $table = 'product';
    
    protected $primaryKey = 'product_id';
    
    public static function search($term){
        return \Medication::where('proprietaryname', 'LIKE', '%'.$term.'%')->take(15)->get();
        
    }
    
    
    
}