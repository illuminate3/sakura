<?php

class ClientsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /clients
	 *
	 * @return View
	 */
	public function index()
	{
		//return "shit balls"; 
           
           // $clients = Client::orderBy('mtk', 'asc');
            return View::make('clients.index')
                   ->with('clients', $clients = \Client::all());
       
	}
        
        /**
         * Display dashboard
         * GET /clients/dashboard
         * 
         * @return View
         */
        
        
        
        public function dashboard()
        {
            return View::make('clients.dashboard')
                    ->with('clients', $clients = \Client::all());
            
        }
        
        
	/**
	 * Show the form for creating a new resource.
	 * GET /clients/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
            return View::make('clients.create');
                    
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /clients
	 *
	 * @return Response
	 */
	public function store()
	{
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
	public function show($id =1)
	{
		//
             $client = Client::find($id);
        
        return View::make('clients.show', array('client' => $client));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /clients/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
            $client = Client::find($id);
            return View::make('clients.create', array('client' => $client));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /clients/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /clients/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

        // View Controller Fucntions
        
        
        public function basicInfo(){
            
            return View::make('clients.panels.basicinfo');
            
        }
        
        
        public function medications(){
            
            return View::make('clients.panels.medications');
            
        }
}