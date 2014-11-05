<?php

class SurveysController extends \BaseController {

	/**
	 * Display a listing of surveys
	 *
	 * @return Response
	 */
	public function index()
	{
		$surveys = Survey::all();

		return View::make('surveys.index', compact('surveys'));
	}

	/**
	 * Show the form for creating a new survey
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('surveys.create');
	}

	/**
	 * Store a newly created survey in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Survey::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Survey::create($data);

		return Redirect::route('surveys.index');
	}

	/**
	 * Display the specified survey.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$survey = Survey::findOrFail($id);

		return View::make('surveys.show', compact('survey'));
	}

	/**
	 * Show the form for editing the specified survey.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$survey = Survey::find($id);

		return View::make('surveys.edit', compact('survey'));
	}

	/**
	 * Update the specified survey in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$survey = Survey::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Survey::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$survey->update($data);

		return Redirect::route('surveys.index');
	}

	/**
	 * Remove the specified survey from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Survey::destroy($id);

		return Redirect::route('surveys.index');
	}

}
