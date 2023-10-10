<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Activitylog\Models\Activity;

class RoleController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('can:roles.index')->only('index');
        $this->middleware('can:roles.create')->only('create', 'store');
        $this->middleware('can:roles.edit')->only('edit', 'update');
        $this->middleware('can:roles.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // $role=Role::all();
        return view('rol.index',['roles'=>Role::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions=Permission::all();
        return view('rol.create', compact('permissions'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $role=Role::create($request->all());
        $role->syncPermissions($request->permissions);
       // return redirect()->route('rol.index')->with('info', 'El rol se creó con exito');
      //  return view("rol.message",['msg'=>"Guardado con Exito"]);
      //return view('rol.index', ['msg'=>"Guardado con Exito"]);
      return view('rol.index',['roles'=>Role::all()]);
       /*
        activity()->useLog('Rol')->log('Nuevo')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = Role::all()->last()->id;
        $lastActivity->save();

        return redirect()->route('roles.index')->with('info', 'El rol se creó con exito');
       */
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        return view('rol.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('rol.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $role->update($request->all());
        $role->syncPermissions($request->permissions);
        $role->save();
        return redirect()->route('roles.index')->with('info', 'El rol se actualizó con exito');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('roles.index')->with('info', 'El rol se eliminó con exito');
  
    }
}
