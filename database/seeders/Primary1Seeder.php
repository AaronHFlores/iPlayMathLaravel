<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Primary1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('primaryFirst')->insert([
            'question' => 'Selecciona la imagen que contiene 6 elementos.',
            'type' => '5',
            'firstAnswer' => 'img/primary1/manzanas.png',
            'secondAnswer' => 'img/primary1/dulces3.png',
            'thirdAnswer' => 'img/primary1/libros.png',
            'quarterAnswer' => 'img/primary1/pelotas4.png',
            'correctAnswer' => '1',
            'image' => ''
        ]);
        //2
        DB::table('primaryFirst')->insert([
            'question' => '¿Cuántos dulces hay en la imagen?',
            'type' => '2',
            'firstAnswer' => '3',
            'secondAnswer' => '5',
            'thirdAnswer' => '8',
            'quarterAnswer' => '7',
            'correctAnswer' => '3',
            'image' => 'img/primary1/dulces8.png'
        ]);
        //3
        DB::table('primaryFirst')->insert([
            'question' => '¿Qué número falta en la imagen?',
            'type' => '2',
            'firstAnswer' => '7',
            'secondAnswer' => '10',
            'thirdAnswer' => '12',
            'quarterAnswer' => '5',
            'correctAnswer' => '1',
            'image' => 'img/primary1/cadena1-9.png'
        ]);
        //4
        DB::table('primaryFirst')->insert([
            'question' => '¿Cuántas bolitas de color azul hay en la imagen?',
            'type' => '2',
            'firstAnswer' => '5',
            'secondAnswer' => '9',
            'thirdAnswer' => '8',
            'quarterAnswer' => '10',
            'correctAnswer' => '4',
            'image' => 'img/primary1/canicasAzules.png'
        ]);
        //4.1
        DB::table('primaryFirst')->insert([
            'question' => '¿Cuántas bolitas de color verde hay en la imagen?',
            'type' => '2',
            'firstAnswer' => '5',
            'secondAnswer' => '9',
            'thirdAnswer' => '8',
            'quarterAnswer' => '10',
            'correctAnswer' => '3',
            'image' => 'img/primary1/canicasAzules.png'
        ]);
        //5
        DB::table('primaryFirst')->insert([
            'question' => '¿Qué número falta en la imagen?',
            'type' => '2',
            'firstAnswer' => '3',
            'secondAnswer' => '8',
            'thirdAnswer' => '2',
            'quarterAnswer' => '1',
            'correctAnswer' => '1',
            'image' => 'img/primary1/cadena1-3.png'
        ]);
        //6
        DB::table('primaryFirst')->insert([
            'question' => '¿Cuántas estrellas faltan para completar 10?',
            'type' => '2',
            'firstAnswer' => '2',
            'secondAnswer' => '1',
            'thirdAnswer' => '4',
            'quarterAnswer' => '3',
            'correctAnswer' => '4',
            'image' => 'img/primary1/tabla7.png'
        ]);
        //7
        DB::table('primaryFirst')->insert([
            'question' => '¿Cuánto es 3 +4?',
            'type' => '2',
            'firstAnswer' => '8',
            'secondAnswer' => '7',
            'thirdAnswer' => '4',
            'quarterAnswer' => '5',
            'correctAnswer' => '2',
            'image' => ''
        ]);
        //8
        DB::table('primaryFirst')->insert([
            'question' => ' ¿2+8 es igual a 10?',
            'type' => '3',
            'firstAnswer' => 'Verdadero',
            'secondAnswer' => 'Falso',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '1',
            'image' => ''
        ]);
        //9
        DB::table('primaryFirst')->insert([
            'question' => 'Si Aldo compra unas papas que cuestan 12 pesos con un billete de 20 pesos ¿Cuánto recibe de cambio?',
            'type' => '2',
            'firstAnswer' => '9',
            'secondAnswer' => '3',
            'thirdAnswer' => '7',
            'quarterAnswer' => '8',
            'correctAnswer' => '4',
            'image' => ''
        ]);
        //10
        DB::table('primaryFirst')->insert([
            'question' => 'Javier gastó 7 pesos en el recreo y le sobraron 18 ¿Cuánto tenía antes?',
            'type' => '2',
            'firstAnswer' => '22',
            'secondAnswer' => '25',
            'thirdAnswer' => '30',
            'quarterAnswer' => '28',
            'correctAnswer' => '2',
            'image' => ''
        ]);
        //11
        DB::table('primaryFirst')->insert([
            'question' => 'Aaron tiene 22 pesos y su mamá le da 5 pesos. ¿Cuánto tiene ahora?',
            'type' => '2',
            'firstAnswer' => '25',
            'secondAnswer' => '30',
            'thirdAnswer' => '32',
            'quarterAnswer' => '27',
            'correctAnswer' => '4',
            'image' => ''
        ]);
        //12
        DB::table('primaryFirst')->insert([
            'question' => '¿Cuántas pelotas hay en la imagen?',
            'type' => '2',
            'firstAnswer' => '3',
            'secondAnswer' => '5',
            'thirdAnswer' => '4',
            'quarterAnswer' => '2',
            'correctAnswer' => '2',
            'image' => 'img/primary1/pelotas5.png'
        ]);
        //13
        DB::table('primaryFirst')->insert([
            'question' => 'Selecciona la imagen que tiene 7 elementos',
            'type' => '5',
            'firstAnswer' => 'img/primary1/fresa.png',
            'secondAnswer' => 'img/primary1/dulces7.png',
            'thirdAnswer' => 'img/primary1/pelotas.png',
            'quarterAnswer' => 'img/primary1/canicas9.png',
            'correctAnswer' => '2',
            'image' => ''
        ]);
        //14
        DB::table('primaryFirst')->insert([
            'question' => '¿Cuántas estrellas faltan para completar 10?',
            'type' => '2',
            'firstAnswer' => '1',
            'secondAnswer' => '5',
            'thirdAnswer' => '3',
            'quarterAnswer' => '2',
            'correctAnswer' => '4',
            'image' => 'img/primary1/tabla9.png'
        ]);
        //15
        DB::table('primaryFirst')->insert([
            'question' => '¿Qué número falta en la imagen?',
            'type' => '2',
            'firstAnswer' => '1',
            'secondAnswer' => '2',
            'thirdAnswer' => '3',
            'quarterAnswer' => '4',
            'correctAnswer' => '4',
            'image' => 'img/primary1/cadena9-1.png'
        ]);
        //16
        DB::table('primaryFirst')->insert([
            'question' => '¿Cuánto es 9 + 1?',
            'type' => '4',
            'firstAnswer' => '',
            'secondAnswer' => '',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '10',
            'image' => ''
        ]);
        //17
        DB::table('primaryFirst')->insert([
            'question' => '¿Cuánto es 13 – 7?',
            'type' => '4',
            'firstAnswer' => '',
            'secondAnswer' => '',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '6',
            'image' => ''
        ]);
        //18
        DB::table('primaryFirst')->insert([
            'question' => 'Selecciona el Cuadrado',
            'type' => '5',
            'firstAnswer' => 'img/primary1/cuadrado.png',
            'secondAnswer' => 'img/primary1/rectangulo.png',
            'thirdAnswer' => 'img/primary1/circulo.png',
            'quarterAnswer' => 'img/primary1/triangulo.png',
            'correctAnswer' => '1',
            'image' => ''
        ]);
        //19
        DB::table('primaryFirst')->insert([
            'question' => 'Selecciona el Rectángulo',
            'type' => '5',
            'firstAnswer' => 'img/primary1/cuadrado.png',
            'secondAnswer' => 'img/primary1/rectangulo.png',
            'thirdAnswer' => 'img/primary1/circulo.png',
            'quarterAnswer' => 'img/primary1/triangulo.png',
            'correctAnswer' => '2',
            'image' => ''
        ]);
        //20
        DB::table('primaryFirst')->insert([
            'question' => 'Selecciona el Circulo',
            'type' => '5',
            'firstAnswer' => 'img/primary1/cuadrado.png',
            'secondAnswer' => 'img/primary1/rectangulo.png',
            'thirdAnswer' => 'img/primary1/circulo.png',
            'quarterAnswer' => 'img/primary1/triangulo.png',
            'correctAnswer' => '3',
            'image' => ''
        ]);
        //21
        DB::table('primaryFirst')->insert([
            'question' => 'Selecciona el Triángulo',
            'type' => '5',
            'firstAnswer' => 'img/primary1/cuadrado.png',
            'secondAnswer' => 'img/primary1/rectangulo.png',
            'thirdAnswer' => 'img/primary1/circulo.png',
            'quarterAnswer' => 'img/primary1/triangulo.png',
            'correctAnswer' => '4',
            'image' => ''
        ]);
    }
}
