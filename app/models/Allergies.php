<?php

class Allergies extends \Eloquent {

    protected $fillable = ['allergen_id','rating','mtk'];
    protected $table = 'allergies';
    protected $connection = 'fcs_clients';

    protected function client() {
        return $this->belongsTo('Client', 'mtk', 'mtk');
    }

    protected function allergenSeverity() {

        return $this->hasOne('AllergenSeverity', 'rating', 'rating');
    }
    
    protected function allergen(){
        
        return $this->hasOne('Allergen', 'allergen_id', 'allergen_id');
        
    }
}
