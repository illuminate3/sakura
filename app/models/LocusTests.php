<?php

class LocusTests extends \Eloquent {

    protected $fillable = ['mtk', 'score', 'completed'];
    protected $connection = 'fcs_clients';
    protected $table = 'locus_tests';

    protected function client() {

        return $this->belongsTo('Client', 'mtk', 'mtk');
    }

}
