<?php

/* 
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */

class InterventionController extends BaseController {
    
    /**
     *  Display the details for the selected intervention
     */
    
    public function showDetails($id)
    {
     $intervention = Intervention::find($id);
     
     return View::make('interventions.details', array('intervention' => $intervention));
    }
    
    public function getInterventions()
    {
        
        //return \Need::all();
        $interventions = Intervention::all();
        return View::make('interventions.all', array('interventions' => $interventions));
        
    }
    
    public function createIntervention(){
        return View::make('interventions.create');
    }
    
   public function postIntervention(){
       
       $postData = Input::all();
       $title = $postData['title'];
       $description = $postData['description'];
       
       $intervention = new Intervention;
       
       $intervention->title = $title;
       $intervention->description = $description;
       $intervention->save();
       return $intervention->id;
   }
    
} 