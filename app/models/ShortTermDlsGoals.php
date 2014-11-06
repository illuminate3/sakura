<?php

/* 
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */

Class ShortTermDlsGoals extends \Eloquent
{
    protected $fillable = ['mtk','objective','investment','outcome','intervention','support','code'];
    protected $connection = 'fcs_clients';
    
    protected $table = 'roles';
    
        protected $primaryKey = 'mtk';
    
    public function client(){
        return $this->belongsTo('Client', 'mtk','mtk');
    }
    
    
    
    
    
}