<?php

class LivingArrangement extends \Eloquent {

    protected $fillable = ['mtk', 'alone', 'partner', 'supported_housing', 'homeless', 'other', 'description'];
    protected $connection = 'fcs_clients';
    protected $table = 'living_arrangements';

    protected function client() {

        return $this->belongsTo('Client', 'mtk', 'mtk');
    }

}
