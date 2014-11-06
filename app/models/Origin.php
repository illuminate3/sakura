<?php

class Origin extends \Eloquent {

    protected $fillable = ['title', 'description'];
    protected $connection = 'fcs_staff';
    
   
    // TO-DO Set tables names in arrays
    // protected $connection = Config::get(tables.staff.name);

    protected $table = 'origins';

    protected $primaryKey = 'origin_id';
    
    protected function drivetime(){
        return $this->belongsTo('Drivetime','origin_id','origin_id');
    }
}
