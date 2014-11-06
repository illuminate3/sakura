<?php

class VocationalFinancialNeeds extends \Eloquent {

    protected $fillable = ['mtk','need','description','date_of_need'];
    
    protected $table = 'vocational_financial_needs';
    
    protected $connection = 'fcs_clients';

    protected $primaryKey = 'mtk';
    
    
    protected function client(){
        return $this->belongsTo('Client');
    }
    
    
}
