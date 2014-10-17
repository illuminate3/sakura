<?php

class Allergen extends \Eloquent {

    protected $fillable = ['allergen_id','title','description'];
    protected $table = 'allergens';
    protected $connection = 'fcs_clients';

    

    protected function allergies(){
        return $this->belongsToMany('Allergies', 'allergen_id', 'allergen_id');
    }

    
}
