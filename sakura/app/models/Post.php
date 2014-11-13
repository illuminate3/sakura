<?php

/* 
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */

/**
 * Description of Post
 *
 * @author jleach
 */
class Post extends \Eloquent
{
    //put your code here
    protected $connection = 'sakura';
    protected $table = 'posts';
    protected $fillable = ['post_id','thread_id', 'user_id', 'body', 'edited_on'];
    
    protected function thread(){
        
        return $this->belongsTo('Thread', 'thread_id', 'thread_id');
        
    }
    
    protected function user(){
        
        return $this->belongsTo('User', 'user_id', 'user_id');
        
    }
    
    protected function comments(){
        
        return $this->hasMany('Comment', 'post_id', 'post_id');
        
    }
    
    
}