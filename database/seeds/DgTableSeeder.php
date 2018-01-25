<?php

use App\DireccionGeneral;
use Illuminate\Database\Seeder;

class DgTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dg1=new DireccionGeneral();
        $dg1->nombre='Opinión Pública';
        $dg1->save();

        $dg1=new DireccionGeneral();
        $dg1->nombre='Comunicación Directa';
        $dg1->save();

        $dg1=new DireccionGeneral();
        $dg1->nombre='Participación Ciudadana';
        $dg1->save();

        $dg1=new DireccionGeneral();
        $dg1->nombre='Comunicación Digital';
        $dg1->save();
    }
}
