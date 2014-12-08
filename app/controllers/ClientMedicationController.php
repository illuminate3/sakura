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
        if($id==null)
        {
            $id = Input::get('medication');
        }
        $clientMed = ClientMedication::where('productndc','like',"%".$id."%");
        return json_encode($clientMed);
    }
    
}