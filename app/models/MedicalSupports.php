<?php

class MedicalSupports extends \Eloquent {

    protected $fillable = ['mtk','ability_level','comments','current_medical_concerns'];

    protected $connection = 'fcs_clients';
    
    protected $table = 'medical_supports';
        protected $primaryKey = 'mtk';
     protected function client(){
        return $this->belongsTo('Client', 'mtk', 'mtk');
    }
    
}
