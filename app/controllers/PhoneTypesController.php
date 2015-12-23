<?php

class PhoneTypesController extends \BaseController {

	/**
	 * Display a listing of phonetypes
	 *
	 * @return Response
	 */
	public function index()
	{
		$phonetypes = Phonetype::all();

		return View::make('phonetypes.index', compact('phonetypes'));
	}

	/**
	 * Show the form for creating a new phonetype
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('phonetypes.create');
	}

	/**
	 * Store a newly created phonetype in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Phonetype::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Phonetype::create($data);

		return Redirect::route('phonetypes.index');
	}

	/**
	 * Display the specified phonetype.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$phonetype = Phonetype::findOrFail($id);

		return View::make('phonetypes.show', compact('phonetype'));
	}

	/**
	 * Show the form for editing the specified phonetype.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$phonetype = Phonetype::find($id);

		return View::make('phonetypes.edit', compact('phonetype'));
	}

	/**
	 * Update the specified phonetype in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$phonetype = Phonetype::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Phonetype::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$phonetype->update($data);

		return Redirect::route('phonetypes.index');
	}

	/**
	 * Remove the specified phonetype from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Phonetype::destroy($id);

		return Redirect::route('phonetypes.index');
	}

}
