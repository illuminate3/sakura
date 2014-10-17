<?php

class Paperwork extends \Eloquent {

    protected $fillable = ['staff_id','paperwork_id','interview_id','completion_date','staff_verified_id','admin_verified_id'];
    protected $connection = 'fcs_staff';
    // TO-DO Set tables names in arrays
    // protected $connection = Config::get(tables.staff.name);
    protected $timestamps = false;
    protected $table = 'paperwork';

    public function user() {

        //TO-DO
        //return $this->belongsTo(Config::get('tables.staff.name') . '.users')

        return $this->belongsTo('Staff', 'staff_id', 'staff_id');
    }
    
    public function verifier()
    {
        
        return $this->hasOne('Staff', 'staff_id', 'staff_verified_id');
        
        
    }
    
    public function approver()
    {
        
        return $this->hasOne('Staff', 'staff_id', 'admin_verified_id');
        
    }
    
}
