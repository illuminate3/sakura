<?php

class Equipment extends \Eloquent {

    protected $fillable = ['staff_id','equip_id','assigned','returned'];
    protected $connection = 'fcs_staff';
    protected $table = 'equipment';

    public function user() {

        //TO-DO
        //return $this->belongsTo(Config::get('tables.staff.name') . '.users')

        return $this->belongsTo('Staff', 'staff_id', 'staff_id');
    }

}
