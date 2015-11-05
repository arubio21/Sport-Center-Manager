<?php

namespace scm\Http\Controllers;

use Illuminate\Http\Request;

use scm\User;
use scm\Type;
use Session;
use Redirect;
use scm\Http\Requests;
use scm\Http\Requests\UserCreateRequest;
use scm\Http\Requests\TypeCreateRequest;
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
        $aData = [
            'tittle' => 'Nuevo Usuario',
            'url'   => 'user/store',
            'include'   => 'user.forms.usr',
            'types' => Type::lists('name', 'id'),                    
        ];

        return view('user.create', $aData);
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
        //First we take the Unix date in ms, we get the first 10 characters and we encrypt 
        //with md5 and finally we encrypt again with the laravel method bcrypt            
        $user->password = bcrypt(substr( md5(microtime()), 1, 10));
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
     * @Get("user/edit/{id}")
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
     * @Put("user/update/{id}")
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
     * @Delete("user/delete/{id}")
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);

        Session::flash('message', 'Usuario Eliminado Correctamente');

        return Redirect::to('/user');
    }

    /**
    * Show all the types
    *
    * @Get("user/type")
    * @return \Illuminate\Http\Response
    */
    public function indexType(){

        return view('user.indexType', ['types' => Type::all()]);
    }

    /**
    * Show the form for creating a new type
    *
    * @Get("user/type/create")
    * @return \Illuminate\Http\Response
    */
    public function createType(){

        $aData = [
            'tittle' => 'Nuevo tipo de usuario',
            'url'   => 'user/type/store',
            'include'   => 'user.forms.type'
        ];

        return view('user.create', $aData);
    }

    /**
     * Store a newly created type in storage.
     *
     * @Post("user/type/store")
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
    */
    public function storeType(TypeCreateRequest $request)
    {        
        $type = new Type;
        $type->name = $request->name;
        $type->save();

        return Redirect::to('/user/type');    
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @Get("user/type/edit/{id}")
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editType($id)
    {
        $type = Type::find($id);
        return view('user.editType', ['type' => $type]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @Put("user/type/update/{id}")
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateType(Request $request, $id)
    {
        $type = Type::find($id);
        $type->fill($request->all());
        $type->save();

        Session::flash('message', 'Tipo Editado Correctamente');

        return Redirect::to('/user/type');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @Delete("user/type/delete/{id}")
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyType($id)
    {
        $usersToDelete = [];
        $users = User::where('type_id', $id)->get(); //We retrieve all users which have the type that we want to delete

        foreach ($users as $user) {
            $usersToDelete[] = $user->id; //We store the users id to delete
        }
        User::destroy($usersToDelete); //We delete those users. We need delete them before becouse users have a foreign key (type_id)
        Type::destroy($id);
        Session::flash('message', 'Tipo Eliminado Correctamente');

        return Redirect::to('/user/type');
    }
}
