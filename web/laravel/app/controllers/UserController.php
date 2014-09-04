<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $users = User::all();
        return View::make('users.index')
            ->with('users', $users);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('users.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $user = new User;
        $user->name = Input::get('name');
        $user->email = Input::get('email');
        $user->save();
        return Redirect::to('users');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $user = User::find($id);
        return View::make('users.edit')
                ->with('user', $user);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $user = User::find($id);
        $user->name = Input::get('name');
        $user->email = Input::get('email');
        $user->save();
        return Redirect::to('users');
	}

    public function save($id) 
    {
        return $this->update($id);
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $user = User::find($id);
        $user->delete();
        return Redirect::to('users');
	}

    public function delete($id)
    {
        return $this->destroy($id);
    }
}
