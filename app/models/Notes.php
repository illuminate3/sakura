<?php

class Notes extends \Eloquent {

    protected $fillable = ['note_id','title','rel_url'];
    protected $connection = 'fcs_staff';
    // TO-DO Set tables names in arrays
    // protected $connection = Config::get(tables.staff.name);
    protected $timestamps = false;
    protected $table = 'notes';
    
    
    
    
    

}
