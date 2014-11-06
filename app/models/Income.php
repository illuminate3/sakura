<?php

class Income extends \Eloquent {

    protected $fillable = ['mtk', 'wages', 'ssdi', 'ssi', 'va_benefits', 'other', 'description'];
    protected $connection = 'fcs_clients';
    protected $primaryKey = 'mtk';
    protected function client() {

        return $this->belongsTo('Client', 'mtk', 'mtk');
    }

}
