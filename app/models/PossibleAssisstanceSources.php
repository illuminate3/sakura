<?php

class PossibleAssisstanceSources extends \Eloquent {

    protected $fillable = ['mtk','rank','service','need'];
    
    protected $table = 'possible_assistance_sources';
    
    protected $coinnection = 'fcs_clients';
    
    protected function client(){
        return $this->belongsTo('Client','mtk','mtk');
    }
    
    

}
