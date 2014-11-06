<?php

class Hire extends \Eloquent {

    protected $fillable = ['staff_id','interview_id','paperwork_date','complete_date'];
    protected $connection = 'fcs_staff';
    // TO-DO Set tables names in arrays
    // protected $connection = Config::get(tables.staff.name);

    protected $timestamps = false;
    protected $table = 'hires';
    protected $primaryKey = 'staff_id';
    public function staff() {

        //TO-DO
        //return $this->belongsTo(Config::get('tables.staff.name') . '.users')

        return $this->belongsTo('Staff', 'staff_id', 'staff_id');
    }

}
