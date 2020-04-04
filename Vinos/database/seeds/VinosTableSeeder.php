<?php

use App\Vino;
use Illuminate\Database\Seeder;

class VinosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vino::truncate();
        for($i = 1; $i<=20; $i++){
            Vino::create([
                'nombre' => "Vino  $i",
                'marca' => "Marca $i",
                'precio'=> $i,
                'descripcion'=>"El vino $i es muy bueno traido desde asgard, aprovado por el mismísimo odín",
                'region'=>'francia',
                'color'=>'blaco',
                'tipo'=>'botella',
                'meses_tiempo'=>10+$i,
                't_azucar'=>'dulce'
            ]);
        }
    }
}
