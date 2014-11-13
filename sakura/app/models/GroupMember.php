<?php

/* 
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */

class GroupMember extends \Eloquent
{
    
    protected $table = 'group_members';
    
    protected $connection = 'sakura';
    
    protected $fillable = ['group_id', 'user_id'];
    
    protected function group(){
        
        return $this->belongsTo('Group', 'group_id', 'group_id');
        
    }
    
    protected function user(){
        
        return $this->hasMany('User', 'user_id', 'user_id');
        
    }
    
    
}