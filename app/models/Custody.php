<?php

class Custody extends \Eloquent {

    protected $fillable = ['mtk', 'child_name', 'both_parents', 'mother', 'father', 'relative', 'dhs', 'other', 'comments'];
    protected $connection = 'fcs_clients';
    protected $table = 'custodies';
    protected $primaryKey = 'mtk';
    protected function client() {

        return $this->belongsTo('Client', 'mtk', 'mtk');
    }

}
