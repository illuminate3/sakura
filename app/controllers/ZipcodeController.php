<?php

/* 
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */

class ZipcodeController extends BaseController{
    
    public function getIndex()
    {
        $zipcodes = \Zipcode::orderBy('state', 'asc')
                                   ->orderBy('city', 'asc')
                                   ->orderBy('zipcode', 'asc')
                                   ->get();
        return View::make('geographic.zipcodes.all', array('zipcodes'=>$zipcodes));
    }
    
    public function postIndex()
    {
        
        
    }
    
    
}