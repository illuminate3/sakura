<?php

class AllergenSeverity extends \Eloquent {

    protected $fillable = ['rating', 'description'];
    protected $table = 'allergen_severities';
    protected $connection = 'fcs_clients';
    protected $primaryKey = 'rating';
    protected function allergies() {

        return $this->belongsToMany('Allergies','rating', 'rating');
    }

}
