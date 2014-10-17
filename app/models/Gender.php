<?php

class Gender extends \Eloquent {

    protected $connection = 'fcs_clients';
    protected $table = 'gender';
    protected $fillable = ['mtk', 'male', 'female'];

    protected function client() {

        return $this->belongsTo('Client', 'mtk', 'mtk');
    }

}
