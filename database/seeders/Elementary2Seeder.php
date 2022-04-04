<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Elementary2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Raiz Cuadrada
        DB::table('elementarySecond')->insert([
            'question' => 'Determine la longitud del lado de un cuadrado si su área es 4cm².',
            'type' => '',
            'firstAnswer' => '2',
            'secondAnswer' => '4',
            'thirdAnswer' => '6',
            'quarterAnswer' => '8',
            'correctAnswer' => '1',
            'image' => ''
        ]);
        DB::table('elementarySecond')->insert([
            'question' => 'Determine la longitud del lado de un cuadrado si su área es 16cm².',
            'type' => '',
            'firstAnswer' => '2',
            'secondAnswer' => '4',
            'thirdAnswer' => '6',
            'quarterAnswer' => '8',
            'correctAnswer' => '2',
            'image' => ''
        ]);
        DB::table('elementarySecond')->insert([
            'question' => 'Determine la longitud del lado de un cuadrado si su área es 36cm².',
            'type' => '',
            'firstAnswer' => '2',
            'secondAnswer' => '4',
            'thirdAnswer' => '6',
            'quarterAnswer' => '8',
            'correctAnswer' => '3',
            'image' => ''
        ]);
        DB::table('elementarySecond')->insert([
            'question' => 'Determine la longitud del lado de un cuadrado si su área es 64cm².',
            'type' => '',
            'firstAnswer' => '2',
            'secondAnswer' => '4',
            'thirdAnswer' => '6',
            'quarterAnswer' => '8',
            'correctAnswer' => '4',
            'image' => ''
        ]);
        DB::table('elementarySecond')->insert([
            'question' => 'Determine la longitud del lado de un cuadrado si su área es 9cm².',
            'type' => '',
            'firstAnswer' => '3',
            'secondAnswer' => '4',
            'thirdAnswer' => '6',
            'quarterAnswer' => '8',
            'correctAnswer' => '1',
            'image' => ''
        ]);
        DB::table('elementarySecond')->insert([
            'question' => 'Determine la longitud del lado de un cuadrado si su área es 25cm².',
            'type' => '',
            'firstAnswer' => '2',
            'secondAnswer' => '5',
            'thirdAnswer' => '6',
            'quarterAnswer' => '8',
            'correctAnswer' => '2',
            'image' => ''
        ]);
        DB::table('elementarySecond')->insert([
            'question' => 'Determine la longitud del lado de un cuadrado si su área es 49cm².',
            'type' => '',
            'firstAnswer' => '2',
            'secondAnswer' => '4',
            'thirdAnswer' => '7',
            'quarterAnswer' => '8',
            'correctAnswer' => '3',
            'image' => ''
        ]);
        DB::table('elementarySecond')->insert([
            'question' => 'Determine la longitud del lado de un cuadrado si su área es 81cm².',
            'type' => '',
            'firstAnswer' => '2',
            'secondAnswer' => '4',
            'thirdAnswer' => '6',
            'quarterAnswer' => '9',
            'correctAnswer' => '4',
            'image' => ''
        ]);
        //Equivalencia de Ecuacion
        DB::table('elementarySecond')->insert([
            'question' => 'Teniendo la expresión 4x+5 escoja la opción que no sea equivalente.',
            'type' => '',
            'firstAnswer' => '3x + 3 + x + 2',
            'secondAnswer' => '2x - 6 + 1 + 2x',
            'thirdAnswer' => 'x + x + 4 + 2x + 1',
            'quarterAnswer' => '5x + 6 - x - 1',
            'correctAnswer' => '2',
            'image' => ''
        ]);
        DB::table('elementarySecond')->insert([
            'question' => 'Teniendo la expresión 2a + 3b escoja la opción que no sea equivalente.',
            'type' => '',
            'firstAnswer' => '3a +3b - a',
            'secondAnswer' => 'a + b + 2a + 2b',
            'thirdAnswer' => '4a - 2a + 5b - 2b',
            'quarterAnswer' => '2a + a - a +b - b + 3b',
            'correctAnswer' => '2',
            'image' => ''
        ]);
        DB::table('elementarySecond')->insert([
            'question' => 'Seleccione la ecuacion correspondiente para el siguiente acertijo: El primer número es igual al segundo más 5 y la suma del primero más el doble del segundo es igual a 11.',
            'type' => '',
            'firstAnswer' => 'x = y + 5; x + 2y = 11',
            'secondAnswer' => 'x = 2 - y; y = 5 - 11',
            'thirdAnswer' => 'y = 1 - 2 + 5; 1 +2x = 11',
            'quarterAnswer' => 'y = 9 + 5; 1 +4x = 11',
            'correctAnswer' => '1',
            'image' => ''
        ]);
        DB::table('elementarySecond')->insert([
            'question' => 'Seleccione el despeje correcto de x correspondiente para el siguiente acertijo: El primer número es igual al segundo más 5 y la suma del primero más el doble del segundo es igual a 11.',
            'type' => '',
            'firstAnswer' => 'x = y + 5; x = 11 - 2y',
            'secondAnswer' => 'x = 2 - y; x = y - 12',
            'thirdAnswer' => 'x = 1 - y + 5; 16 +2y = x',
            'quarterAnswer' => 'x = 9y + 5; 1 +4y = x',
            'correctAnswer' => '1',
            'image' => ''
        ]);
        //Proporcionalidad
        DB::table('elementarySecond')->insert([
            'question' => 'Observe la relación entre las magnitudes y seleccione el tipo de proporcionalidad. ',
            'type' => '',
            'firstAnswer' => 'Directa',
            'secondAnswer' => 'Inversa',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '2',
            'image' => ''
        ]);
        DB::table('elementarySecond')->insert([
            'question' => 'Observe la relación entre las magnitudes y seleccione el tipo de proporcionalidad. ',
            'type' => '',
            'firstAnswer' => 'Directa',
            'secondAnswer' => 'Inversa',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '2',
            'image' => ''
        ]);
        DB::table('elementarySecond')->insert([
            'question' => 'Observe la relación entre las magnitudes y seleccione el tipo de proporcionalidad. ',
            'type' => '',
            'firstAnswer' => 'Directa',
            'secondAnswer' => 'Inversa',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '1',
            'image' => ''
        ]);
        DB::table('elementarySecond')->insert([
            'question' => 'Observe la relación entre las magnitudes y seleccione el tipo de proporcionalidad. ',
            'type' => '',
            'firstAnswer' => 'Directa',
            'secondAnswer' => 'Inversa',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '1',
            'image' => ''
        ]);
        DB::table('elementarySecond')->insert([
            'question' => 'Observe la relación entre las magnitudes y seleccione el tipo de proporcionalidad. ',
            'type' => '',
            'firstAnswer' => 'Directa',
            'secondAnswer' => 'Inversa',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '1',
            'image' => ''
        ]);
        DB::table('elementarySecond')->insert([
            'question' => 'Observe la relación entre las magnitudes y seleccione el tipo de proporcionalidad. ',
            'type' => '',
            'firstAnswer' => 'Directa',
            'secondAnswer' => 'Inversa',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '2',
            'image' => ''
        ]);
    }
}