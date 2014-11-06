<?php

class Referral extends \Eloquent {

    protected $fillable = ['mtk','date_of_referral', 'referrer_id', 'contact_id', 'organization_id'];

    protected $table = 'referrals';
    
    protected $connection = 'fcs_clients';
    
    protected $primaryKey = 'mtk';
        
    protected function client()
    {
        
        return $this->belongsTo('Client', 'mtk', 'mtk'); 
        
    }
    
    protected function referrer()
    {
        
        return $this->hasOne('Refferer', 'referrer_id', 'referrer_id');
        
        
    }
    
    protected function contact()
    {
        return $this->hasOne('Contact', 'contact_id', 'contact_id');
    }
    
    protected function organization()
    {
        
        return $this->hasOne('Organization', 'org_id', 'org_id');
        
    }
}
