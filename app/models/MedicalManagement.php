<?php

class MedicalManagement extends \Eloquent {

    protected $fillable = ['mtk','ability_score','comments'];
    
    
    protected $connection = 'fcs_clients';
    
    protected $table = 'medical_managements';
    
     protected function client(){
        return $this->belongsTo('Client', 'mtk', 'mtk');
    }
    
    protected function abilityScore(){
        
        return $this->hasOne('AbilityScore', 'ability_id', 'ability_id');
        
    }
}
