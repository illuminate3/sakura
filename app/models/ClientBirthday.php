<?php

/* 
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */

class ClientBirthday extends Eloquent{
    protected $fillable = ['mtk','day','month','year'];
    protected $connection = "fcs_clients";
    protected $table = "birthdays";
    protected $primaryKey = "mtk";
    
    // remember after alpha launch begin ecrypting sections like this one!!
    // i just skipped the word 'function', confsidering i didn't type def, i'm assuming i miss c++ or c# or C................
    
    public function client(){
        return $this->belongsTo('Client','mtk','mtk');
    }
    
}