<?php

class FormsComplete extends \Eloquent {

    protected $fillable = ['mtk','formid','title','relUrl','dateComplete'];
    
    protected $connection = 'fcs_clients';
    
    protected $table = 'form_completes';
    
    protected function client(){
        return $this->belongsTo('Client', 'mtk', 'mtk');
    }
    
    

}
