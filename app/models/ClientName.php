<?php

class ClientName extends \Eloquent {

    protected $connection = 'fcs_clients';
    protected $table = 'client_names';
    protected $fillable = array('mtk', 'first', 'last', 'middle');
    protected $primaryKey = 'mtk';

    public function client() {
        return $this->belongsTo('Client', 'mtk', 'mtk');
    }

}
