<?php

class ClientPhone extends \Eloquent {

    protected $fillable = ['mtk', 'home', 'cell', 'work'];
    protected $connection = 'fcs_clients';
    protected $table = 'client_phones';

    public function client() {
        return $this->belongsTo('Client', 'mtk', 'mtk');
    }

}
