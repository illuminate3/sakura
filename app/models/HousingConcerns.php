<?php

class HousingConcerns extends \Eloquent {

    protected $fillable = ['mtk', 'potentialChanges', 'changesDescription', 'safetyConcerns', 'concernsDescription', 'additional'];
    protected $connection = 'fcs_clients';
    protected $table = 'housing_concerns';
    protected $primaryKey = 'mtk';
    protected function client() {
        return $this->belongsTo('Client', 'mtk', 'mtk');
    }

}
