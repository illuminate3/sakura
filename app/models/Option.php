<?php

class Option extends \Eloquent {
	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];
        
	// Don't forget to fill this array
	protected $fillable = ['body', 'fieldtype'];
        protected $table = 'options';
        protected $connection = 'survey';
        
        protected $primaryKey = 'id';
        
        public function question(){
            
            return $this->belongsToMany('Question', 'options_results','option_id','result_id');
            
        }

}