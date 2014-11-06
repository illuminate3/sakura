<?php

class Survey extends \Eloquent {
        protected $connection = 'survey';
        protected $table = 'surveys';
        protected $primaryKey = 'id';
	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['title', 'description'];
        
        
        public function question(){
            
            return $this->hasMany('Question','survey_id');
            
        }
        

}