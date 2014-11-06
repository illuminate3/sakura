<?php

class Roles extends \Eloquent {

    protected $fillable = ['role_id','title','description'];
    protected $connection = 'fcs_staff';
    // TO-DO Set tables names in arrays
    // protected $connection = Config::get(tables.staff.name);
    protected $timestamps = false;
    protected $table = 'roles';
    protected $primaryKey = 'role_id';
    
    
    
    
    
}
