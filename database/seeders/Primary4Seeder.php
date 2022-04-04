<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Primary4Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primaryFourth')->insert([
            'question' => 'Un estadio de futbol cuenta con 8 secciones de 600 asientos cada una, 4 de 500 asientos, y 2 de 135 asientos. ¿Cuál es la capacidad total del estadio?',
            'type' => '2',
            'firstAnswer' => '7035',
            'secondAnswer' => '7370',
            'thirdAnswer' => '7070',
            'quarterAnswer' => '7430',
            'correctAnswer' => '3',
            'image' => ''
        ]);

        DB::table('primaryFourth')->insert([
            'question' => '¿Cuántas pizzas se necesitan para que en un grupo de seis personas a cada una le toquen 4/6 de pizza?',
            'type' => '2',
            'firstAnswer' => '4',
            'secondAnswer' => '6',
            'thirdAnswer' => '5',
            'quarterAnswer' => '7',
            'correctAnswer' => '1',
            'image' => ''
        ]);

        DB::table('primaryFourth')->insert([
            'question' => 'Luis compro una torta especial y un jugo, y Alexis compro dos tortas de huevo y un licuado. ¿Quién de los dos pago más?',
            'type' => '3',
            'firstAnswer' => 'Luis',
            'secondAnswer' => 'Alexis',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '2',
            'image' => ''
        ]);

        DB::table('primaryFourth')->insert([
            'question' => '¿Hay triángulos que son isósceles y equiláteros al mismo tiempo?',
            'type' => '3',
            'firstAnswer' => 'Sí',
            'secondAnswer' => 'No',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '2',
            'image' => ''
        ]);

        DB::table('primaryFourth')->insert([
            'question' => '¿Hay triángulos equiláteros con un ángulo recto?',
            'type' => '3',
            'firstAnswer' => 'Sí',
            'secondAnswer' => 'No',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '1',
            'image' => ''
        ]);

        DB::table('primaryFourth')->insert([
            'question' => '¿Qué fracción representa la parte pintada de la figura?',
            'type' => '2',
            'firstAnswer' => '10/4',
            'secondAnswer' => '5/10',
            'thirdAnswer' => '4/10',
            'quarterAnswer' => '6/10',
            'correctAnswer' => '3',
            'image' => ''
        ]);

        DB::table('primaryFourth')->insert([
            'question' => 'El papá de Mariana ahorro para comprar un coche. Actualmente tiene treinta mil cuatrocientos cincuenta y seis pesos. ¿Para comprar cual coche de los de la imagen le falta menos dinero?',
            'type' => '2',
            'firstAnswer' => 'A',
            'secondAnswer' => 'B',
            'thirdAnswer' => 'C',
            'quarterAnswer' => 'D',
            'correctAnswer' => '1',
            'image' => ''
        ]);

        DB::table('primaryFourth')->insert([
            'question' => 'El papa de Mariana ahorro para comprar un coche. Actualmente tiene treinta mil cuatrocientos cincuenta y seis pesos. ¿Si quisiera comprar el coche más caro de los de la imagen cuánto dinero le faltaría?',
            'type' => '2',
            'firstAnswer' => '10549',
            'secondAnswer' => '18851',
            'thirdAnswer' => '26594',
            'quarterAnswer' => '4614',
            'correctAnswer' => '3',
            'image' => ''
        ]);

        DB::table('primaryFourth')->insert([
            'question' => '¿Qué signo falta en la imagen?',
            'type' => '3',
            'firstAnswer' => '<',
            'secondAnswer' => '>',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '2',
            'image' => ''
        ]);

        DB::table('primaryFourth')->insert([
            'question' => '¿Qué signo falta en la imagen?',
            'type' => '3',
            'firstAnswer' => '<',
            'secondAnswer' => '>',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '1',
            'image' => ''
        ]);

        DB::table('primaryFourth')->insert([
            'question' => '¿Qué signo falta en la imagen?',
            'type' => '3',
            'firstAnswer' => '<',
            'secondAnswer' => '>',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '2',
            'image' => ''
        ]);

        DB::table('primaryFourth')->insert([
            'question' => '¿Cuánto es 4 x 4 + 9?',
            'type' => '4',
            'firstAnswer' => '',
            'secondAnswer' => '',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '25',
            'image' => ''
        ]);

        DB::table('primaryFourth')->insert([
            'question' => '¿Cuánto es 3 x 8 – 2?',
            'type' => '4',
            'firstAnswer' => '',
            'secondAnswer' => '',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '22',
            'image' => ''
        ]);

        DB::table('primaryFourth')->insert([
            'question' => '¿Las dos expresiones de la imagen tienen el mismo valor?',
            'type' => '3',
            'firstAnswer' => 'Sí',
            'secondAnswer' => 'No',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '2',
            'image' => ''
        ]);

        DB::table('primaryFourth')->insert([
            'question' => '¿Las dos expresiones de la imagen tienen el mismo valor?',
            'type' => '3',
            'firstAnswer' => 'Sí',
            'secondAnswer' => 'No',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '1',
            'image' => ''
        ]);

        DB::table('primaryFourth')->insert([
            'question' => '¿6/12 es equivalente a 5/10?',
            'type' => '3',
            'firstAnswer' => 'Sí',
            'secondAnswer' => 'No',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '1',
            'image' => ''
        ]);

        DB::table('primaryFourth')->insert([
            'question' => '¿4/3 es equivalente a 2/2 + 1/6?',
            'type' => '3',
            'firstAnswer' => 'Sí',
            'secondAnswer' => 'No',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '2',
            'image' => ''
        ]);

        DB::table('primaryFourth')->insert([
            'question' => '¿Cuál imagen corresponde a la siguiente sucesión numérica: 6,0,8,1,10,2,12,3?',
            'type' => '5',
            'firstAnswer' => '',
            'secondAnswer' => '',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '4',
            'image' => ''
        ]);

        DB::table('primaryFourth')->insert([
            'question' => '¿Cuánto es 586 entre 4?',
            'type' => '4',
            'firstAnswer' => '',
            'secondAnswer' => '',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '146.5',
            'image' => ''
        ]);

        DB::table('primaryFourth')->insert([
            'question' => '¿Cuánto es 458 entre 8?',
            'type' => '4',
            'firstAnswer' => '',
            'secondAnswer' => '',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '57.25',
            'image' => ''
        ]);

        DB::table('primaryFourth')->insert([
            'question' => '¿Cuál es la moda de las calificaciones de Juan?',
            'type' => '2',
            'firstAnswer' => '5',
            'secondAnswer' => '7',
            'thirdAnswer' => '6',
            'quarterAnswer' => '8',
            'correctAnswer' => '2',
            'image' => ''
        ]);

        DB::table('primaryFourth')->insert([
            'question' => '¿Según las calificaciones quien tuvo un mejor rendimiento?',
            'type' => '3',
            'firstAnswer' => 'Juan',
            'secondAnswer' => 'María',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '2',
            'image' => ''
        ]);

    }
}
