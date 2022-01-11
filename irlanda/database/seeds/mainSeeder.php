<?php

use Illuminate\Database\Seeder;

class mainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $main = [array('id_main' => '1','titulo' => 'Irlanda',
        'texto' => 'Irlanda, oficialmente la República de Irlanda, para diferenciarla de Irlanda del Norte, es un país soberano, miembro de la Unión Europea, que ocupa la mayor parte de la isla homónima.','imagen' => 'imagen/main/dublin.jpg'),
        array('id_main' => '2', 'titulo' => 'Explora la isla de Irlanda', 'texto' => 'Sigue los pasos de los gigantes en la costa de la Calzada; disfruta del mosaico de sabores irlandeses en Cork; déjate cautivar por las historias que las gentes de Dublín tienen que contarte.','imagen' =>'imagen/main/mapa.jpg')];
    
        krsort($main);

        DB::table("mains")->insert($main);
    }
}
?>