<?php

/* 
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */

class NeedController extends BaseController

{
    public function showDetails($id)
    {
        $need = \Need::find($id);
        $html = View::make('needs.details', array('need'=> $need));
        
        return $html;
    }
    
    public function getNeeds()
    {
        
        //return \Need::all();
        $needs = Need::all();
        return View::make('needs.all', array('needs' => $needs));
        
    }
    
    public function createNeed(){
        
        return View::make('needs.create');
        
    }
    
    public function postNeed(){
        $postData = Input::all();
        
        $title = $postData['title'];
        $description = $postData['description'];
        $need = new Need;
        $need->title = $title;
        $need->description = $description;
        if($need->save()){
            return "Save Successful!";
        }else
        {
            
            return "save failure";
            
        }
    }
    
}