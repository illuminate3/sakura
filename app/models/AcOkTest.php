<?php

class AcOkTest extends \Eloquent {

    protected $fillable = ['mtk', 'completed'];
    protected $table = 'ac_ok_test';
    protected $connection = 'fcs_clients';
    protected $timestamps = false;
    protected function client() {

        return $this->belongsTo('Client', 'mtk', 'mtk');
    }

}
