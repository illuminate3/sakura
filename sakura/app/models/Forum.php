<?php

/* 
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */

/**
 * Description of Forum
 *
 * @author jleach
 */
class Forum extends \Eloquent {
    //put your code here
    protected $connection = 'sakura';
    protected $table = 'forums';
    protected $fillable = ['forum_id','section_id','user_id','title','description'];
    
    protected function section(){
        
        return $this->belongsTo('Section', 'section_id','section_id');
        
    }
    
    protected function user(){
        
        return $this->belongsTo('User', 'user_id', 'user_id');
        
    }
    
    protected function posts(){
        
        return $this->hasMany('Post', 'forum_id', 'forum_id');
        
    }
    
   
}