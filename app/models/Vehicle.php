<?php

class Vehicle extends \Eloquent {

    protected $fillable = ['staff_id'];
    protected $connection = 'fcs_staff';
    // TO-DO Set tables names in arrays
    // protected $connection = Config::get(tables.staff.name);

    public $timestamps = false;

    public function staff() {

        //TO-DO
        //return $this->belongsTo(Config::get('tables.staff.name') . '.users')

        return $this->belongsTo('staff', 'staff_id', 'staff_id');
    }

}
