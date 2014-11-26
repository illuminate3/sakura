<?php

/* 
 * Copyright Jeremy Leach,
 * Pegas Corp,
 * and Associates;
 */


class OrganizationController extends \BaseController{
    
    public function dashboard(){
        return View::make('dashboards.organizations.dashboard')
                ->with('organizations', $organizations = \Organization::all());
    }
    
    public function index()
    {
        return View::make('sections.organizations.index')
                ->with('organizations', $organizations = \Organization::all());
    }
    
    public function create()
    {
        $org_id = Input::get('org_id');
        $organization = Organization::find($org_id);
        return View::make('sections.organizations.create')
                ->with('organization',$organization);
                
    }
}
