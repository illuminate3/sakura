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
        $input = Input::all();
        
        $code = $input['code'];
        $state = $input['state'];
        $city = $input['city'];
        
        $zipcode = new \Zipcode();
        
        $zipcode->city = $city;
        $zipcode->state= $state;
        $zipcode->zipcode = $code;
        $result = $zipcode->save();
        if ($result === true){
            return "";
            
        }else{
            return "fail";
            
        }
        
        
    }
    
    public function getSelect(){
        $zipcodes = \Zipcode::lists('zipcode','zip_codes_id');
        $cities = \Zipcode::lists('city', 'zip_codes_id');
        return View::make('geographic.zipcodes.select', array('zipcodes'=>$zipcodes,'cities'=>$cities));
        
    }
    
    public function getCreate()
    {
        return View::make('geographic.zipcodes.create');
        
        
    }
    
    public function uploadZipcodes()
    {
        
        
        
    }
    
}