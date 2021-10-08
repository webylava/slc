<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$items 	= env('APP_PAGINATE',15);
        $roles 	= \Spatie\Permission\Models\Role::latest()->paginate($items);
		return view('roles.index', ['roles' => $roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view('roles.create');
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
		$request->validate(
					[
						'name' 	=> 'required|unique:roles',
					]);
		if ($request->isMethod('post')) {
			\Spatie\Permission\Models\Role::create([
				'name'		 => Str::lower($request->input('name')), 
			]);
			return redirect()->route('roles.index')->with('success','Role Added Successfully.');
		}
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
	
	public function assignPermissions(Request $request, $id){
		if ($request->isMethod('post')) {
			\Spatie\Permission\Models\Role::find($id)->syncPermissions($request->input('permission'));
			return redirect()->route('roles.index')->with('success','Permissions sync successfully.');
			//dd($request->input('permission'));
		}
		$permissions 		= \Spatie\Permission\Models\Permission::all();
		$role 				= \Spatie\Permission\Models\Role::find($id);
		$grantedPermisson	= \Spatie\Permission\Models\Role::find($id)->permissions()->get(['id','name'])->transform(function ($item, $key) {
			return $item->id; })->toArray();
			
		return view('roles.permission', ['permissions' => $permissions,'role'=>$role,'granted'=>$grantedPermisson]);
	}
	
}
