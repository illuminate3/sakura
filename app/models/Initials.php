<?php

class Initials extends \Eloquent {

    protected $fillable = ['mtk', 'initials'];
    protected $connection = 'fcs_clients';
    protected $table = 'initials';
    
    protected function client(){
        return $this->belongsTo('Client','mtk','mtk');
    }

}
