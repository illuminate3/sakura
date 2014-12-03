<?php

class ClientsController extends \BaseController {

    /**
     * Display a listing of the resource.
     * GET /clients
     *
     * @return View
     */
    public function index() {
        //return "shit balls"; 
        // $clients = Client::orderBy('mtk', 'asc');
        return View::make('sections.clients.index')
                        ->with('clients', $clients = \Client::all());
    }

    /**
     * Show the form for creating a new resource.
     * GET /clients/create
     *
     * @return Response
     */
    public function create() {
        //
        return View::make('sections.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     * POST /clients
     *
     * @return Response
     */
    public function store() {
        $data = \Input::all();

// instantiate mod3l
        $client = new \Client;
        return $data;
        //
        //populate fields
    }

    /**
     * Display the specified resource.
     * GET /clients/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id = 1) {
        //
        $client = Client::find($id);
        return View::make('sections.clients.show', array('client' => $client));
    }

    /**
     * Show the form for editing the specified resource.
     * GET /clients/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id = null) {
        if ($id == null && Input::has('selected')) {
            $id = Input::get('selected');
        } else if ($id == null && Input::has('mtk')) {
            $id = Input::get('mtk');
        }

        //
        //$client = Client::find(4);
        return json_encode($id);
        //return View::make('clients.create', array('client' => $client));
    }

    /**
     * Update the specified resource in storage.
     * PUT /clients/{id}
     * BAD DONT USE
     * @param  int  $id
     * @return Response
     * ITS BAD DON'T USE, UPDATE 
     * THE FORM BY FUNCTION NAMED
     * W/E --> WILL MAKE RESTFUL API 
     * FOR THESE TYPE OF FUNCTIONS, LATER.
     * NOT NOW. DON'T DO IT. 
     */
    public function update($id = null) {
        if ($id == null) {
            $id = Input::all();
        }

        //
        $client = Client::find(4);
        return json_encode($id);
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /clients/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

    // View Controller Fucntions

    /**
     * Display dashboard
     * GET /clients/dashboard
     * 
     * @return View
     */
    public function dashboard() {
        return View::make('dashboards.clients.dashboard')
                        ->with('clients', $clients = \Client::all());
    }

    /**
     * Display basic inforamtion panel
     * GET /clients/panels/basicinfo
     * 
     * @return View
     */
    public function basicInfo() {
        $client = Client::find(Input::get('selected'));

        if ($client->address == null) {
            $client->address = new ClientAddress();
        }


        if ($client->phone == null) {
            $client->phone = new \ClientPhone();
        }

        if ($client->emergencyContact == null) {
            $client->emergencyContact = new \EmergencyContact();
        }

        return View::make('panels.clients.basicinfo')
                        ->with('client', $client);
    }

    /**
     * Store data from basic info form,
     * Helps save headaches when using modular form system.  
     */
    public function storeBasicInfo() {
        $data = Input::all();

        $client = \Client::find($data['mtk']);

        // ensure name exists, then populate with data from view
        $name = $client->name;
        if ($name == null) {
            $name = new ClientName();
        }
        $name->mtk = $data['mtk'];
        $name->first = $data['firstname'];
        $name->middle = $data['middlename'];
        $name->last = $data['lastname'];
        $client->name()->save($name);

        // ensure address exists, then populate with data from view

        $address = $client->address;
        if ($address == null) {
            $address = new \ClientAddress();
        }
        $address->address1 = $data['address1'];
        $address->address2 = $data['address2'];
        $address->zip_code_id = $data['zipcode'];
        $client->address()->save($address);

        // ensure phone exists, then populate with data from view

        $phone = \ClientPhone::find($data['mtk']);
        if ($phone == null) {
            $phone = new \ClientPhone();
        }
        $phone->mtk = $data['mtk'];
        $phone->home = $data['home'];
        $phone->work = $data['work'];
        $phone->cell = $data['cell'];
        $client->phone()->save($phone);


        $emergencyContact = $client->emergencyContact;
        if ($emergencyContact == null) {
            $emergencyContact = new \EmergencyContact();
        }
        $emergencyContact->mtk = $data['mtk'];
        $emergencyContact->full_name = $data['contact_full_name'];
        $emergencyContact->phone_number = $data['contact_phone'];
        $emergencyContact->relationship = $data['relationship'];
        $client->emergencyContact()->save($emergencyContact);

        $client->save();
        return "Success";
    }

    /**
     * 
     * @return type
     */
    public function medications() {
        $mtk = Input::get('selected');
        $clientMedications = ClientMedication::where('mtk','=',$mtk);
        return View::make('panels.clients.medications')
                ->with('clientMedications',$clientMedications);
    }
    
    /**
     * 
     * 
     */
    public function biography(){
        $client = Client::find(Input::get('selected'));
        if($client->familyHistory == null)
        {
            $client->familyHistory = new FamilyHistory();
        }
        if
            ($client->birthday == null)
        {
            $client->birthday = new ClientBirthday();
        }
        return View::make('panels.clients.biography')
                ->with('client',$client);
    }
    
    
    
}
