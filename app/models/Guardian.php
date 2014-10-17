<?php

class Guardian extends \Eloquent {

    protected $fillable = ['mtk', 'first', 'last', 'relationship', 'telephone'];
    protected $table = 'guardian';
    protected $connection = 'fcs_clients';

    protected function client() {

        return $this->belongsTo('Client', 'mtk', 'mtk');
    }

}
