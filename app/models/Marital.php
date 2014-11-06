<?php

class Marital extends \Eloquent {

    protected $fillable = ['mtk', 'single', 'married', 'separated', 'divorced', 'cohabitating', 'marital_history', 'children', 'childbirth_complications', 'additional_notes'];
    protected $connection = 'fcs_clients';
    protected $table = 'maritals';
    protected $primaryKey = 'mtk';
    protected function client(){
        return $this->belongsTo('Client', 'mtk','mtk' );
    }
}
