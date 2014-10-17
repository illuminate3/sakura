<?php

class Ssn extends \Eloquent {

    protected $fillable = ['mtk', 'ssn'];

    protected function client() {
        return $this->belongsTo('Client');
    }

}
