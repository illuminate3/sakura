<?php

class MailAddress extends \Eloquent {

    protected $fillable = ['staff_id','address_1','address_2','zip_code_id'];
    protected $connection = 'fcs_staff';
    // TO-DO Set tables names in arrays
    // protected $connection = Config::get(tables.staff.name);

    protected $table = 'mailAddress';

    public function user() {

        //TO-DO
        //return $this->belongsTo(Config::get('tables.staff.name') . '.users')

        return $this->belongsTo('Staff', 'staff_id', 'staff_id');
    }
    
    public function zipcode()
    {
        
        return $this->hasOne('Zipcode','zip_code_id','zip_code_id');
        
    }

}
