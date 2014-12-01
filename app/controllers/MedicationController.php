<?php

/*
 * Copyright 2014
 * Jeremy Leach
 * pegas corporation
 * and affiliates
 */

Class MedicationController extends BaseController {

    /**
     * Function to select medication
     * @param type $id
     * @return View
     */
    public function getDetails($id = null) {
        if($id==null){$id = Input::get('medication');}
        $medication = Medication::find($id);
        return View::make('panels.medications.details', array('medication' => $medication));
    }
    
    public static function search($term){
        return \Medication::where('proprietaryname', 'LIKE', '%'.$term.'%')->take(15)->get();
        
    }
        
    /**
     * Function to retrieve all medications
     * @return View
     */
    public function getMedications() {
        $medications = Medication::all();
        return View::make('medications.all', array('medications' => $medications));
    }

    public function getMedicationDropdown() {
        $term = Input::get('term');
        $type = '';
        switch (Input::get('type')) {
            case 1:
                $type = 'PROPRIETARYNAME';
                break;
            case 2:
                $type = 'NONPROPRIETARYNAME';
                break;
            case 3:
                $type = 'SUBSTANCENAME';
                break;
            default:
                $type = 'PROPRIETARYNAME';
                break;
        }
        $html = Former::select("medication")
                ->fromQuery($this->search($term), $type, "PRODUCT_ID")
                ->class("form-control input-group-sm")
                ->setAttribute("onchange", "$('#proprietary-name').val($(this).find('option:selected').text());")
                ->label("Search Results: ");
        return $html;
    }
            public function getMedicationTable(){
                $term = Input::get('term');
                $type = '';
        switch (Input::get('type')) {
            case 1:
                $type = 'PROPRIETARYNAME';
                break;
            case 2:
                $type = 'NONPROPRIETARYNAME';
                break;
            case 3:
                $type = 'SUBSTANCENAME';
                break;
            default:
                $type = 'PROPRIETARYNAME';
                break;
        }
                //$term = Input::get('term');
                $medications = Medication::where($type, "LIKE", "%".$term."%")->get();

               
                return View::make('components.medications.table', array('medications'=>$medications));
            }
            
}
