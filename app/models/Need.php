<?php

/*
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */

class Need Extends \Eloquent {

    protected $connection = 'fcs_clients';
    protected $table = 'needs';
    protected $fillable = ['need_id', 'title', 'description'];
    protected $primaryKey = 'need_id';
    public $timestamps = false;
    public function clients() {

        return $this->belongsToMany('Client', 'client_need', 'mtk', 'need_id');
    }
    
    public function programs()
    {
        
        return $this->belongsToMany('Program', 'program_need', 'program_id', 'need_id');
        
    }

}
