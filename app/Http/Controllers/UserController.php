<?php

namespace scm\Http\Controllers;

use Illuminate\Http\Request;

use scm\User;
use scm\Type;
use Session;
use Redirect;
use scm\Http\Requests;
use scm\Http\Requests\UserCreateRequest;
use scm\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @Get("user/")
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::All();
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     * @Get("user/create")
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create', ['types' => Type::lists('name', 'id')]);
    }

    /**
     * Store a newly created resource in storage.
     * @Post("user/store")
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
    */
    public function store(UserCreateRequest $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->type_id = $request->type;
        $user->save(); 

        return redirect('/user')->with('message', 'store');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit', ['user'=>$user, 'types' => Type::lists('name', 'id')]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();

        Session::flash('message', 'Usuario Editado Correctamente');

        return Redirect::to('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);

        Session::flash('message', 'Usuario Eliminado Correctamente');

        return Redirect::to('/user');
    }
}
