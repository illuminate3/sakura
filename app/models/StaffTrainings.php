<?php

class StaffTraining extends \Eloquent {

    protected $fillable = ['staff_id','training_id','scheduled','completed'];
    protected $connection = 'fcs_staff';
    // TO-DO Set tables names in arrays
    // protected $connection = Config::get(tables.staff.name);

    protected $table = 'staff_trainings';
    protected $primaryKey = 'staff_id';
    public function user() {

        //TO-DO
        //return $this->belongsTo(Config::get('tables.staff.name') . '.users')

        return $this->belongsTo('Staff', 'staff_id', 'staff_id');
    }

    public function training() {

        return $this->hasMany('Training', 'training_id', 'training_id');
    }

}
