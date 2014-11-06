<?php

class ClientPhone extends \Eloquent {

    protected $fillable = ['mtk', 'home', 'cell', 'work'];
    protected $connection = 'fcs_clients';
    protected $table = 'client_phones';
    protected $primaryKey = 'mtk';
    public function client() {
        return $this->belongsTo('Client', 'mtk', 'mtk');
    }

}
