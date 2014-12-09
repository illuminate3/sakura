<?php

/* 
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */

class ClientMedicationController extends BaseController{
    

    public function getClientMedications($id = null)
    {
        if($id == null){
            $id = Input::get('selected');
        }
        
        $clientMeds = ClientMedication::where('mtk','=',$id);
        
        $html = '';
        foreach($clientMeds as $clientMed)
        {
            $med = Medication::find($clientMed->productndc);
            $html.="<option value='".$clientMed->productndc."'>".$med->substance_name."</option>";
            
            
        }
        return $html;
    }
            
    public function getClientMedication($id = null)
    {
        $medication = "";
        if(Input::has('medication'))
        {
            $started = Input::get('started');
            $stopped = Input::get('stopped');
            $med = Input::get('medication');
            $client = Input::get('selected');
            $medid = DB::select("select id from fcs_clients.client_meds where PRODUCTNDC = ? and mtk = ? and started = ? and stopped = ?", array($med,$client,"$started","$stopped"));
            $medication = ClientMedication::find($medid[0]->id);
            $organizations = Organization::all();
            $contacts = Contact::all();
            $html = View::make('forms.medication.clientMedication')
                    ->with('medication',$medication)
                    ->with('organizations', $organizations)
                    ->with('contacts', $contacts);
            return $html;
        }
        else
        {
            return  "NO RESULTS";
        }
    }
    
}