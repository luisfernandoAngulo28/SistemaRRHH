<?php

namespace Database\Seeders;

use App\Models\Departamento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuario = Departamento::create([
            'name'=>'Marketing',
        ]);

        $usuario = Departamento::create([
            'name'=>'Contabilidad',
        ]);
        $usuario = Departamento::create([
            'name'=>'Sistemas',
        ]);
        $usuario = Departamento::create([
            'name'=>'Recursos Humanos',
        ]);
        $usuario = Departamento::create([
            'name'=>'Ventas',
        ]);
        $usuario = Departamento::create([
            'name'=>'Operaciones',
        ]);
        $usuario = Departamento::create([
            'name'=>'Control de Calidad',
        ]);
    }
}
