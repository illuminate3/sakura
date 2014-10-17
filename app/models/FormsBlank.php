<?php

class FormsBlank extends \Eloquent {

    protected $fillable = ['form_id','form_title','rel_url','updated_date','updated_by'];
    
    protected $table = 'form_blanks';
    
    protected $connection = 'fcs_clients';
    
    
    protected function formsNeeded(){
        return $this->belongsTo('FormsNeeded','form_id','form_id');
    }
    
    

}
