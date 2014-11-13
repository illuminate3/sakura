<?php

/* 
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */

class Group extends \Eloquent
{
    
    protected $table = 'groups';
    
    protected $connection = 'sakura';
    
    protected $fillable = ['group_id', 'user_id', 'title', 'description'];
    
    protected function group(){
        
        return $this->belongsTo('Group');
        
    }
    
    protected function user(){
        
        return $this->belongsTo('User');
        
    }
    
    protected function members(){
        
        return $this->hasManyThrough('Group','GroupMember','group_id','group_id');
        
    }  
}