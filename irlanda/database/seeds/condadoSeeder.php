<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class condadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $condados = [array('id' => '1',
        'nombre' => 'Carlow',
        'descripcion' =>'El condado de Carlow (en irlandés, Contae Cheatharlach) está situado en el sureste de Irlanda, en la provincia de Leinster. Cuenta con una población total de 54.612 habitantes, según censo de 20011. El condado lleva el nombre de su capital, la ciudad de Carlow, construida al margen del río Barrow. Su punto más alto es el monte Leinster (794 m), en la cadena de las montañas de Blackstairs.' ,
        'imagen' =>'county/Carlow/Carlow.png' ),
        array('id' => '2',
         'nombre' => 'Dublin',
        'descripcion' => 'Dublín (en irlandés: Bhaile Átha Cliath) es el condado que incluye la ciudad de Dublín, la mayor ciudad y capital de la República de Irlanda.',
        'imagen' =>'county/Dublin/Dublin.png'),
        array('id' => '3',
        'nombre' => 'Galway',
       'descripcion' => 'El condado de Galway o contado de Galvia (en irlandés, Contae na Gaillimhe) se encuentra en la costa oeste de Irlanda y en el mismo paralelo que Dublín. Forma parte de la provincia de Connacht. Su capital es la ciudad de Galway. El condado contiene varias áreas, conocidas como Gaeltacht.',
       'imagen' =>'county/Galway/Galway.png'),
       array('id' => '4',
         'nombre' => 'Kerry',
        'descripcion' => 'El condado de Kerry (en irlandés: Contae Ciarraí) se encuentra en el suroeste de Irlanda, en la provincia de Munster.',
        'imagen' =>'county/Kerry/Kerry.png'),
        array('id' => '5',
         'nombre' => 'Limerick',
        'descripcion' => 'Limerick (en irlandés: Luimneach) es un condado en la provincia de Munster, al oeste de Irlanda. Limita con el condado de Clare por el norte, con el condado de Cork por el sur, con el condado de Tipperary por el este y con el condado de Kerry por el oeste. El río Shannon atraviesa la ciudad de Limerick y desemboca por un largo estuario que se abre al océano Atlántico. Su punto más alto es el Cnoc Mór na nGaibhlte (918 m), en la cadena de las montañas Galtee.',
        'imagen' =>'county/Limerick/Limerick.png'),
        array('id' => '6',
         'nombre' => 'Wexford',
        'descripcion' => 'Wexford (en irlandés: Loch Garman) es un condado costero, en el sureste de Irlanda, en la provincia de Leinster. Area: 2.352 km². El condado lleva el nombre de su capital, Wexford, fundada por los vikingos con el nombre de Veisafjǫrðr. Su punto más alto es el monte Leinster (794 m), en la cadena de las montañas de Blackstairs.',
        'imagen' =>'county/Wexford/Wexford.png'),
        array('id' => '7',
         'nombre' => 'Wicklow',
        'descripcion' => 'El condado de Wicklow está ubicado en la costa medio-oriental de Irlanda, al sur del condado de Dublín. Tiene una superficie de 2,024 km² y su punto más alto es el Log na Coille (925 m), en la cadena de los Montes Wicklow.',
        'imagen' =>'county/Wicklow/Wicklow.png'),
    ];
    
        krsort($condados);

        DB::table("condado")->insert($condados);
    }
}
?>