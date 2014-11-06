<?php

class Question extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['body'];
        protected $connection = 'survey';
        protected $table = 'questions';
        protected $primaryKey = 'question_id';
        
        public function option(){
            return $this->belongsToMany('Option','option_question', 'question_id', 'option_id');
        }
        
        public function survey(){
            return $this->belongsTo('Survey', 'id', 'survey_id');
        }
        
        public function result(){
            return $this->hasMany('Result','question_id','id');
        }
                
                

}