<?php

/* 
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */

class ProgramController extends BaseController {
    
    /**
     *  Display the details for the selected program
     */
    
    public function showDetails($id)
    {
     $program = Program::find($id);
     
     return View::make('programs.details', array('program' => $program));
    }
    
    public function getPrograms()
    {
        
        //return \Need::all();
        $programs = Program::all();
        return View::make('programs.all', array('programs' => $programs));
        
    }
    
    public function createProgram(){
        return View::make('programs.create');
    }
    
   public function postProgram(){
       
       $postData = Input::all();
       $title = $postData['title'];
       $description = $postData['description'];
       
       $program = new Program;
       
       $program->title = $title;
       $program->description = $description;
       if($program->save())
       {
           return 'Save Successful';
       }else{
           return 'Save Failure';
       }
   }
    
} 