<?php

class StaffNotes extends \Eloquent {

    protected $fillable = ['staff_id','note_id'];
    protected $connection = 'fcs_staff';
    // TO-DO Set tables names in arrays
    // protected $connection = Config::get(tables.staff.name);
    protected $timestamps = false;
    protected $table = 'staffNotes';
    protected $primaryKey = 'staff_id';
    public function user() {

        //TO-DO
        //return $this->belongsTo(Config::get('tables.staff.name') . '.users')

        return $this->belongsToMany('Staff', 'staff_id', 'staff_id');
    }

    public function notes() {

        return $this->hasMany('Note', 'note_id', 'note_id');
    }

}
