<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class CargoSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('cargos')->insert([
            'Nombre' => 'Gerente Contable',
            'Descripcion' => 'Se encarga del manejo de las cuentas de la empresa',
        ]);
        
        DB::table('cargos')->insert([
            'Nombre' => 'Gerente de Ventas',
            'Descripcion' => 'Supervisa el equipo de ventas y estrategias de venta',
        ]);
        
        DB::table('cargos')->insert([
            'Nombre' => 'Jefe de Recursos Humanos',
            'Descripcion' => 'Gestiona el personal y las políticas de recursos humanos',
        ]);
        
        DB::table('cargos')->insert([
            'Nombre' => 'Analista de Marketing',
            'Descripcion' => 'Realiza análisis de mercado y estrategias de marketing',
        ]);
        
        DB::table('cargos')->insert([
            'Nombre' => 'Desarrollador Web',
            'Descripcion' => 'Diseña y desarrolla sitios web',
        ]);
        
        DB::table('cargos')->insert([
            'Nombre' => 'Diseñador Gráfico',
            'Descripcion' => 'Crea diseños gráficos para marketing y publicidad',
        ]);
        
        DB::table('cargos')->insert([
            'Nombre' => 'Técnico de Soporte',
            'Descripcion' => 'Brinda soporte técnico a los usuarios',
        ]);
        
        DB::table('cargos')->insert([
            'Nombre' => 'Especialista en SEO',
            'Descripcion' => 'Optimiza el contenido web para motores de búsqueda',
        ]);
        
        
    }
}
