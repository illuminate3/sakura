<?php

class OptionsController extends \BaseController {

	/**
	 * Display a listing of options
	 *
	 * @return Response
	 */
	public function index()
	{
		$options = Option::all();

		return View::make('options.index', compact('options'));
	}

	/**
	 * Show the form for creating a new option
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('options.create');
	}

	/**
	 * Store a newly created option in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Option::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Option::create($data);

		return Redirect::route('options.index');
	}

	/**
	 * Display the specified option.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$option = Option::findOrFail($id);

		return View::make('options.show', compact('option'));
	}

	/**
	 * Show the form for editing the specified option.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$option = Option::find($id);

		return View::make('options.edit', compact('option'));
	}

	/**
	 * Update the specified option in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$option = Option::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Option::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$option->update($data);

		return Redirect::route('options.index');
	}

	/**
	 * Remove the specified option from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Option::destroy($id);

		return Redirect::route('options.index');
	}

}
