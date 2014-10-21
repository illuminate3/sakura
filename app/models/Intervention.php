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
    
    
    
    
}