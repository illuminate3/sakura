<?php

class StaffRoles extends \Eloquent {

    protected $fillable = ['staff_id','time_in'];
    protected $connection = 'fcs_staff';
    // TO-DO Set tables names in arrays
    // protected $connection = Config::get(tables.staff.name);
    protected $timestamps = false;
    protected $table = 'staff_roles';
    protected $primaryKey = 'staff_id';
    public function staff() {

        //TO-DO
        //return $this->belongsTo(Config::get('tables.staff.name') . '.users')

        return $this->belongsTo('Staff', 'staff_id', 'staff_id');
    }

    public function roles() {

        //TO-DO
        //return $this->belongsTo(Config::get('tables.staff.name') . '.roles')
        return $this->hasMany('Roles', 'role_id', 'role_id');
    }

}
