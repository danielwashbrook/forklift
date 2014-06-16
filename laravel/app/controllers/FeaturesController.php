<?php

class FeaturesController extends \BaseController {
  /**
   * Display a listing of features
   *
   * @return Response
   */
  public function index()
  {
    $features = Feature::all();

    return View::make('features.index', compact('features'));
  }

  /**
   * Show the form for creating a new feature
   *
   * @return Response
   */
  public function create()
  {
    return View::make('features.create');
  }

  /**
   * Store a newly created feature in storage.
   *
   * @return Response
   */
  public function store()
  {
    $validator = Validator::make($data = Input::all(), Feature::$rules);

    if ($validator->fails())
    {
      return Redirect::back()->withErrors($validator)->withInput();
    }

    Feature::create($data);

    return Redirect::route('features.index');
  }

  /**
   * Display the specified feature.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $feature = Feature::findOrFail($id);

    return View::make('features.show', compact('feature'));
  }

  /**
   * Show the form for editing the specified feature.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $feature = Feature::find($id);

    return View::make('features.edit', compact('feature'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    $feature = Feature::findOrFail($id);

    $validator = Validator::make($data = Input::all(), Feature::$rules);

    if ($validator->fails())
    {
      return Redirect::back()->withErrors($validator)->withInput();
    }

    $feature->update($data);

    return Redirect::route('features.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    Feature::destroy($id);

    return Redirect::route('features.index');
  }

}