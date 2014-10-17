<?php

class MedicalConcerns extends \Eloquent {

    protected $fillable = ['mtk', 'description', 'comments'];

    protected $connection = 'fcs_clients';
    
    protected $table = 'medical_concerns';
    
    
    protected function client(){
        return $this->belongsTo('Client', 'mtk', 'mtk');
    }
}
