<?php

class StaffContactInfo extends \Eloquent {

    protected $fillable = ['staff_id','primary_phone','cell_phone','cell_provider','personal_email','company_email'];
    protected $connection = 'fcs_staff';
    // TO-DO Set tables names in arrays
    // protected $connection = Config::get(tables.staff.name);

    protected $table = 'staffContactInfo';
    protected $primaryKey = 'staff_id';
    public function user() {

        //TO-DO
        //return $this->belongsTo(Config::get('tables.staff.name') . '.users')

        return $this->belongsTo('Staff', 'staff_id', 'staff_id');
    }

}
