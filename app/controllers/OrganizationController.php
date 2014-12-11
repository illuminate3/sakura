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
    
    public function show($id=null)
    {
        if($id==null || Input::has('id'))
        {
            $id = Input::get('id');
        }
        return View::make('sections.organizations.show')
                ->with('organization', \Organizations::find($id));
    }
    
    public function create()
    {
        $org_id = Input::get('selected');
        $organization = Organization::find($org_id);
        return View::make('sections.organizations.create')
                ->with('organization',$organization);
                
    }
    
    public function information(){
        if(\Input::has('selected'))
        {
        $organization = Organization::find(Input::get('selected'));
        if($organization->address->address==null)
        {
            $organization->address->address = new OrganizationAddress();
        }
        if($organization->phone == null )
        {
            $organization->phone = new OrganizationPhones();
        }
        return View::make('panels.organizations.information')
                        ->with('organization',$organization);
        }
         return null;
        
        
    }
    public function storeInformation()
    {
        
    }
    
    public function getContacts(){
        $org_id = Input::get('selected');
        //$org = Organization::find($org_id);
        $contacts = Contact::where("org_id","=",$org_id)->get();
        
        
        return View::make('panels.contacts.all')
                ->with('contacts',$contacts);
    }
    
    public function editContacts()
    {
        
    }
    
    public static function getOrganizationPopup(){
        
        return View::make('forms.organization.createPopup');
        
    }
    
}
