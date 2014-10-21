<?php

class HomeAddress extends \Eloquent {

    protected $fillable = ['staff_id','address_1', 'address_2','zip_code_id'];
    protected $connection = 'fcs_staff';
    // TO-DO Set tables names in arrays
    // protected $connection = Config::get(tables.staff.name);

    protected $table = 'home_addresses';

    public function staff() {

        //TO-DO
        //return $this->belongsTo(Config::get('tables.staff.name') . '.users')

        return $this->belongsTo('Staff', 'staff_id', 'staff_id');
    }

}
 