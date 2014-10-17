<?php

class FormsNeeded extends \Eloquent {

    protected $fillable = ['mtk','formId','dueDate'];
    
    protected $table = 'formsNeeded';
    
    protected $connection = 'fcs_clients';
    
    protected function client()
    {
        return $this->belongsTo('Client', 'mtk', 'mtk');
    }
    
    
}
