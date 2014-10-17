<?php

class Insurance extends \Eloquent {

    protected $connection = 'fcs_clients';
    protected $table = 'insurances';
    protected $fillable = ['mtk', 'insurer_id', 'policy_number'];

    protected function client() {

        return $this->belongsTo('Client', 'mtk' , 'mtk');
    }

    protected function insurer() {

        return $this->hasOne('Insurer', 'insurer_id', 'insurer_id');
    }

}
