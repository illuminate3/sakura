<?php

class TimeOut extends \Eloquent {

    protected $fillable = ['staff_id', 'time_out'];
    protected $connection = 'fcs_staff';
    // TO-DO Set tables names in arrays
    // protected $connection = Config::get(tables.staff.name);

    protected $table = 'timeOut';

    public function user() {

        //TO-DO
        //return $this->belongsTo(Config::get('tables.staff.name') . '.users')

        return $this->belongsTo('Staff', 'staff_id', 'staff_id');
    }

}
