<?php

class StateFederalEntitlements extends \Eloquent {

    protected $fillable = ['mtk','federal','state','title','value','description'];

    protected $connection = 'fcs_clients';
    protected $table = 'state_federal_entitlements';
    protected $primaryKey = 'mtk';    
    public function client()
    {
        return $this->belongsTo('Client');
    }
}
