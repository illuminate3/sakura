<?php

class Releases extends \Eloquent {

    protected $fillable = ['mtk','unq_id','organization_id','contact_id','form_id'];

    protected $table = 'releases';
    
    protected $connection = 'fcs_clients';
    
    protected $primaryKey = 'mtk';
    
    protected function client(){
        
        return $this->belongsTo('Client', 'mtk','mtk');
        
    }
    
    protected function organization(){
        
        return $this->hasOne('Organization', 'org_id', 'org_id');
        
    }
    
    protected function contact()
    {
        
        return $this->hasOne('Contact', 'contact_id','contact_id');
        
        
    }
    
    protected function form()
    {
        
        return $this->hasOne('Form', 'form_id', 'form_id');
        
    }
    
}
