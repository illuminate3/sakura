<?php

class Result extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['survey_id','question_id','option_id', 'result'];
        
            protected $primaryKey = 'id';
        public function survey(){
            return $this->belongsTo('Survey', 'survey_id', 'id');
        }
        
        public function question(){
            return $this->belongsTo('Question', 'question_id', 'id');
        }
        
        public function option(){
            return $this->belongsTo('Option', 'option_id', 'id');
        }
}