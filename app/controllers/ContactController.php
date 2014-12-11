<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ContactController extends BaseController
{
public static function getDetails()
{
    if(Input::has('selected')){
        $contact_id = Input::get('selected');
        $contact = Contact::find($contact_id);
        //return json_encode($contact);
        $html = View::make('forms.contact.details')
                ->with('contact',$contact); 
        return $html;
    }else
    {return "fail";}
    
}    
public static function getContactsList($id = null){
    if(Input::has('org_id') )
    {$org_id = Input::get('org_id');}
    else{$org_id = $id;}
        $contacts = DB::table('fcs_clients.contacts')->select('first','last','title','specialization','org_id', 'contact_id')->where('org_id','=',$org_id)->get();
        $list = null;
        foreach($contacts as $contact)
        {
           
            $list[] = ['name'=>$contact->first.' '.$contact->last, 'title'=>$contact->title,'specialization'=>$contact->specialization, 'org_id'=>$contact->org_id, 'contact_id'=>$contact->contact_id ];
            
        }
        
        return $list;
        
        }
    
 
    
    public static function getContactsListBox(){
        $organization = Input::get('organization');
        $client = Input::get('selected');
        return View::make('components.contacts.prescriberselectlist')
                    ->with(array('organization'=>$organization));
    }
    
    public static function getContactPopup(){
        
        return View::make('forms.contact.createPopup');
        
    }            
    
}