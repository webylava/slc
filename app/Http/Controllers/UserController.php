<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Usermeta;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //		
        return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($type = null)
    {
        //
		$roles			= \Spatie\Permission\Models\Role::with('permissions:id,name')->get();
		$roles			= \Spatie\Permission\Models\Role::all()->whereNotIn('name', ['client'])->pluck('name','id');
		//dd($type);
		if('client' == $type)
			return view('users.client'); 
		else
			return view('users.create', ['roles'=>$roles]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
		//dd($request->all());
		
		$request->validate(
					[
						'email' 		=> 'required|email|unique:users,email',
						'first_name' 	=> 'required',
						'last_name' 	=> 'required',
						/* 'password' 		=> 'required', */
						/* 'role' 			=> 'required', */
					]);
		$password = $request->input('password') ?? Str::random(10);
		//dd($password);
		$user = User::create([
			'name' 		=> $request->input('first_name'),
			'email' 	=> $request->input('email'),
			'password' 	=> Hash::make($password)
		]);
		
		if($request->input('type') == 'client')
			$role = Role::findByName($request->input('type'));
		else
			$role = $request->input('role');
		
		$user->assignRole($role);
		Usermeta::insert([
			['user_id' => $user->id, 'key' => 'company_name', 'value' => $request->input('company_name')],
			['user_id' => $user->id, 'key' => 'website', 'value' => $request->input('website')],
			['user_id' => $user->id, 'key' => 'phone', 'value' => $request->input('phone')],
			['user_id' => $user->id, 'key' => 'key_phrases', 'value' => $request->input('key_phrases')],
			['user_id' => $user->id, 'key' => 'address', 'value' => $request->input('address')],
			['user_id' => $user->id, 'key' => 'nameoncard', 'value' => $request->input('nameoncard')],
			['user_id' => $user->id, 'key' => 'card_number', 'value' => $request->input('card_number')],
			['user_id' => $user->id, 'key' => 'expiry', 'value' => $request->input('expiry')],
			['user_id' => $user->id, 'key' => 'cvv', 'value' => $request->input('cvv')],
			['user_id' => $user->id, 'key' => 'account_holder', 'value' => $request->input('account_holder')],
			['user_id' => $user->id, 'key' => 'account_number', 'value' => $request->input('account_number')],
			['user_id' => $user->id, 'key' => 'sort_code', 'value' => $request->input('sort_code')],
			['user_id' => $user->id, 'key' => 'registered_address', 'value' => $request->input('registered_address')],
			['user_id' => $user->id, 'key' => 'plainpass', 'value' => $password],
		]);
        return redirect()->route('users.index')->with('success','User added successfully.');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
	
    public function all($type = ""){
		$items 	= env('APP_PAGINATE',15);
		if($type == 'client'){
			$users = User::role('client')->paginate($items); 
			//$users = User::role('client')->with('metas')->paginate($items); 
			return view('users.allclients', ['users' => $users]);
		}else{
			$users 	= User::latest()->paginate($items);
			return view('users.all', ['users' => $users]);
		}
    }
	
    public function client(){
        return view('users.clientdashboard');
    }
	
	
}
