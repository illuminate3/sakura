<?php

class PossibleAssisstanceSources extends \Eloquent {

    protected $fillable = ['mtk','rank','service','need'];
    
    protected $table = 'possible_assistance_sources';
    
    protected $connection = 'fcs_clients';
    
    protected $primaryKey = 'mtk';
    
    protected function client(){
        return $this->belongsTo('Client','mtk','mtk');
    }
    
    

}
