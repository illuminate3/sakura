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
    
    public function createProgram(){
        return View::make('programs.create');
    }
    
   
    
} 