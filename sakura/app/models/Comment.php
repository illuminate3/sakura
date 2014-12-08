<?php

/* 
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */

/**
 * Description of Comment
 *
 * @author jleach
 */
class Comment extends \Eloquent{
    //put your code here
    protected $connection = 'sakura';
    protected $table = 'comments';
    protected $fillable = ['comment_id','post_id','user_id','body'];
    
    protected function post(){
        
        return $this->belongsTo('Post', 'post_id','post_id');
        
    }
    
    protected function user(){
        
        $this->belongsTo('User', 'user_id', 'user_id');
        
    }
    
}