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
    
    protected $fillable = ['PRODUCTID', 'PRODUCTNDC'];
    
    
    
    
    
}