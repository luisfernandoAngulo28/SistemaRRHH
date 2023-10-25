<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {  //---------------Asignacion de Roles
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'empleado']);
        //-----------------Asignacion de Permisos
        Permission::create([
            'name' => 'usuarios.index',
            'description' => 'Ver Listado de usuarios'
        ])->syncRoles([$role1]);
        
        Permission::create([
            'name' => 'usuarios.crear',
            'description' => 'Crear usuarios'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'usuarios.editar',
            'description' => 'Editar usuario'
        ])->syncRoles([$role1]);
       
        //-----------------Mostrar Roles
        Permission::create([
            'name' => 'roles.index',
            'description' => 'Ver listado de roles'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'roles.create',
            'description' => 'Crear rol'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'roles.edit',
            'description' => 'Editar rol'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'roles.destroy',
            'description' => 'Eliminar rol'
        ])->syncRoles([$role1]);
        //----------------Mostrar Departamentos
        Permission::create([
            'name' => 'Departamentos.index',
            'description' => 'Ver listado de Departamentos'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'Departamentos.create',
            'description' => 'Crear  Departamentos'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'Departamentos.edit',
            'description' => 'Editar  Departamentos'
        ])->syncRoles([$role1]);
       

    }
}
