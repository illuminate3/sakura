<?php

class Children extends \Eloquent {

    protected $fillable = ['mtk', 'name', 'birth_year'];
    protected $connection = 'fcs_clients';
    protected $table = 'children';
    protected $primaryKey = 'mtk';
    protected function client() {

        return $this->belongsTo('Client', 'mtk', 'mtk');
    }

}
