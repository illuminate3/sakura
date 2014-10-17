<?php

//namespace App\Controllers;

class StaffController extends \BaseController {

    /**
     * Display a listing of the resource.
     * GET /staff
     *
     * @return Response
     */
    public function index() {
        //return \Response::json(\Staff::get());
        return \View::make('staff.index')
        ->with('staffs', \Staff::orderBy('staff_id', 'asc')
        ->orderBy('username', 'asc')
        ->paginate(25));
    }

    /**
     * Show the form for creating a new resource.
     * GET /staff/create
     *
     * @return Response
     */
    public function create() {
        return \View::make('staff.create');
    }

    /**
     * Store a newly created resource in storage.
     * POST /staff
     *
     * @return Response
     */
    public function store() {
        $staff = new \Staff;
        /* $hire = [
          new \Hires(['interviewId'  => \Input::get('interviewId')]),
          new \Hires(['paperwordId'  => \Input::get('paperworkId')]),
          new \Hires(['completeDate' => \Input::get('completeDate')]),
          ]; */
        $staff->staff_id = \Input::get('staff_id');
        $staff->email = \Input::get('personalEmail');
        $staff->password = str_random(10);
        $staff->username = \Input::get('firstName')[0] . \Input::get('firstName');
        $staff->homeAddress->address1 = \Input::get('homeAddress1');
        $staff->homeAddress->address2 = \Input::get('homeAddress2');
        $staff->homeAddress->zipCodeId = \Input::get('homeZipCode'); //has to be linked with zipcodes
        //$staff->interviews-> = \Input::get('');
        $staff->mailAddress->address1 = \Input::get('mailAddress1');
        $staff->mailAddress->address2 = \Input::get('mailAddress2');
        //$staff->mailaddress->zipCodeId = \Input::get('mailZipCode'); //has to be linked with zip codes
        if (\Input::has('roleId'))
            $staff->staffRoles->roleId = \Input::get('roleId');
        if (\Input::has('dateStarted'))
            $staff->staffRoles->dateStarted = \Input::get('dateStarted');

        $staff->save();

        $staffContactInfo->primaryPhone = \Input::get('primaryPhone');
        $staffContactInfo->cellPhone = \Input::get('cellPhone');
        $staffContactInfo->cellProvider = \Input::get('cellProvider');
        $staffContactInfo->personalEmail = \Input::get('personalEmail');
        $staffContactInfo->workEmail = $staff->username . '@fcsinc.me'; //\Input::get('workEmail');

        if (\Input::has('vehicleMake')) {
            $vehicle = new \Vehicle;
            $vehicle->staff_id = \Input::get('staff_id');
            $vehicle->make = \Input::get('vehicleMake');
            $vehicle->model = \Input::get('vehicleModel');
            $vehicle->year = \Input::get('vehicleYear');
            $vehicle->insuranceVerified = \Input::get('insuranceVerified');
            $vehicle->save();
        }

        $name = new \StaffName;
        $vehicle->staff_id = \Input::get('staff_id');
        $name->first = \Input::get('firstName');
        $name->middle = \Input::get('middleName');
        $name->last = \Input::get('lastName');
        $name->save();

        if (\Input::has('interviewId')) {
            $hire = new \Hire;
            $hire->staff_id = \Input::get('staff_id');
            $hire->interviewId = \Input::get('interviewId');
            $hire->paperworkId = \Input::get('interviewId');
            $hire->completeDate = \Input::get('completeDate');
            $hire->save();
        }

        return Redirect::route('staff.index');

        //$staff-> = \Input::get('');

        /* \Staff::create([
          \Staff::getUserProvider()->create([
          'staff_id'		=>	\Input::get('staff_id'),
          //'password'		=>	Input::get('password'),
          'email'			=>	\Input::get('email'),
          'permissions'	=>	\Input::get('permissions'),
          //'activated'		=>	1,
          //'permissions'	=>	['basic.edit' => 1],
          ]); */

        return \Response::json(['success' => true]);
    }

    /**
     * Display the specified resource.
     * GET /staff/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
       
        
    }

    /**
     * Show the form for editing the specified resource.
     * GET /staff/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /staff/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /staff/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //\Staff::destroy($id);
        //return ();
    }

}
