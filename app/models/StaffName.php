<?php

class StaffName extends \Eloquent {

    protected $fillable = ['staff_id','first','middle','last'];
    protected $connection = 'fcs_staff';
    // TO-DO Set tables names in arrays
    // protected $connection = Config::get(tables.staff.name);

    protected $table = 'names';

    public function staff() {

        //TO-DO
        //return $this->belongsTo(Config::get('tables.staff.name') . '.users')

        return $this->belongsTo('Staff', 'staff_id', 'staff_id');
        
    }

}
