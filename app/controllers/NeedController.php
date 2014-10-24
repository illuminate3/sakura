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
        
        return \Need::all();
        
    }
}