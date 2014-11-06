<?php

class Drivetime extends \Eloquent {

    protected $fillable = ['mtk', 'origin_id', 'miles', 'drivetime'];
    protected $connection = 'fcs_staff';
    // TO-DO Set tables names in arrays
    // protected $connection = Config::get(tables.staff.name);
    protected $primaryKey = 'mtk';
    protected $table = 'drivetimes';

    public function client(){
        return $this->hasOne('Client','mtk','mtk');
    }
    
    public function origin()
            {
        return $this->hasOne('Origin','origin_id', 'origin_id');
            }

}
