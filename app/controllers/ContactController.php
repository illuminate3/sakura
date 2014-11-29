<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ContactController extends BaseController
{
public function getDetails()
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
    
}