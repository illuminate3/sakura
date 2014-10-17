<?php

class Vocational extends \Eloquent {

    protected $fillable = ['mtk','employed','employer','retired','vocational_services','vocational_contact','in_school','scchool','other','history','current'];
    
    protected $table = 'vocationals';
    
    protected $connection = 'fcs_clients';
    
    protected function client(){
        
        return $this->belongsTo('Client');
        
    }
}
