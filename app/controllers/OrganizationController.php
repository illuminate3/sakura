<?php

/* 
 * Copyright Jeremy Leach,
 * Pegas Corp,
 * and Associates;
 */


class OrganizationController extends \Barryvdh\Debugbar\Controllers\BaseController{
    
    public function dashboard(){
        return View::make('dashboards.organizations.dashboard')
                ->with('organizations', $organizations = \Organization::all());
    }
    
    public function index()
    {
        return View::make('sections.organizations.index')
                ->with('organizations', $organizations = \Organization::all());
    }
    
}
