<?php

class Ssn extends \Eloquent {

    protected $connection = 'fcs_clients';
    protected $table = 'ssns';
    
    protected $fillable = ['mtk', 'ssn'];

        protected $primaryKey = 'mtk';
    protected function client() {
        return $this->belongsTo('Client');
    }

}
