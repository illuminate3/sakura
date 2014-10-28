<?php

/* 
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */

class ActionController extends BaseController {
    
    /**
     *  Display the details for the selected action
     */
    
    public function showDetails($id)
    {
     $action = Action::find($id);
     
     return View::make('actions.details', array('action' => $action));
    }
    
    public function getActions()
    {
        
        //return \Need::all();
        $actions = Action::all();
        return View::make('actions.all', array('actions' => $actions));
        
    }
    
    public function createAction(){
        return View::make('actions.create');
    }
    
   public function postAction(){
       
       $postData = Input::all();
       $title = $postData['title'];
       $description = $postData['description'];
       
       $action = new Action;
       
       $action->title = $title;
       $action->description = $description;
       $action->save();
       if($action->save())
       {
           return 'Save Successful';
       }else{
           return 'Save Failure';
       }
   }
    
} 