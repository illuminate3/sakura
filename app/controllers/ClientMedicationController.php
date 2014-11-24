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
            $med = Medication::find($clientMed->product_id);
            $html.="<option value='".$clientMed->product_id."'>".$med->substance_name."</option>";
            
            
        }
        return $html;
    }
            
    
    
}