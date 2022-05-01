<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Primary2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('primarySecond')->insert([
            'question' => 'En la juguetería venden trompos sueltos y cajas con 20 trompos; Daniel dice que para juntar 63 trompos necesita 3 cajas y 3 trompos sueltos. Alonso dice que se pueden juntar con 2 cajas y con 23 trompos sueltos. ¿Quién tiene razón?',
            'type' => '2',
            'firstAnswer' => 'Daniel',
            'secondAnswer' => 'Alonso',
            'thirdAnswer' => 'Ninguno de los 2',
            'quarterAnswer' => 'Los 2 tienen razón',
            'correctAnswer' => '4',
            'image' => ''
        ]);
        //2
        DB::table('primarySecond')->insert([
            'question' => '¿20-4 es igual a 16?',
            'type' => '3',
            'firstAnswer' => 'Verdadero',
            'secondAnswer' => 'Falso',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '1',
            'image' => ''
        ]);
        //3
        DB::table('primarySecond')->insert([
            'question' => '¿14+4 es igual a 20?',
            'type' => '3',
            'firstAnswer' => 'Verdadero',
            'secondAnswer' => 'Falso',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '2',
            'image' => ''
        ]);
        //4
        DB::table('primarySecond')->insert([
            'question' => '¿Cuánto necesitas para pagar por un helado, ensalada de frutas y dos aguas de Jamaica?',
            'type' => '2',
            'firstAnswer' => '35',
            'secondAnswer' => '28',
            'thirdAnswer' => '43',
            'quarterAnswer' => '34',
            'correctAnswer' => '4',
            'image' => 'img/primary2/Tienda.png'
        ]);
        //5
        DB::table('primarySecond')->insert([
            'question' => 'Luis compró una torta y un flan, pagó con un billete de 50 pesos, ¿Cuánto le regresaron de cambio?',
            'type' => '2',
            'firstAnswer' => '15',
            'secondAnswer' => '22',
            'thirdAnswer' => '24',
            'quarterAnswer' => '18',
            'correctAnswer' => '1',
            'image' => 'img/primary2/Tienda.png'
        ]);
        //6
        DB::table('primarySecond')->insert([
            'question' => 'El salto del conejo es de tamaño 2. ¿Si el conejo da 4 saltos hasta que número llega?',
            'type' => '2',
            'firstAnswer' => '4',
            'secondAnswer' => '8',
            'thirdAnswer' => '12',
            'quarterAnswer' => '2',
            'correctAnswer' => '2',
            'image' => 'img/primary2/conejo3.png'
        ]);
        //7
        DB::table('primarySecond')->insert([
            'question' => 'El salto del conejo es de tamaño 4. ¿Si el conejo da 3 saltos hasta que número llega? ',
            'type' => '2',
            'firstAnswer' => '4',
            'secondAnswer' => '6',
            'thirdAnswer' => '7',
            'quarterAnswer' => '12',
            'correctAnswer' => '4',
            'image' => 'img/primary2/conejo2.png'
        ]);
        //8
        DB::table('primarySecond')->insert([
            'question' => 'Si hay 9 montones de peras. ¿Cuántas peras hay en total?',
            'type' => '4',
            'firstAnswer' => '',
            'secondAnswer' => '',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '36',
            'image' => 'img/primary2/Peras.png'
        ]);
        //9
        DB::table('primarySecond')->insert([
            'question' => 'Si hay 5 montones de dulces. ¿Cuántos dulces hay en total?',
            'type' => '4',
            'firstAnswer' => '',
            'secondAnswer' => '',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '25',
            'image' => 'img/primary2/dulces.png'
        ]);
        //10
        DB::table('primarySecond')->insert([
            'question' => '¿Cuántos mosaicos hay en cada piso? Cuenta también los hay debajo de la mancha de pintura',
            'type' => '2',
            'firstAnswer' => '8',
            'secondAnswer' => '17',
            'thirdAnswer' => '21',
            'quarterAnswer' => '12',
            'correctAnswer' => '3',
            'image' => 'img/primary2/piso1.png'
        ]);
        //11
        DB::table('primarySecond')->insert([
            'question' => '¿Cuántos mosaicos hay en cada piso? Cuenta también los hay debajo de la mancha de pintura',
            'type' => '2',
            'firstAnswer' => '23',
            'secondAnswer' => '32',
            'thirdAnswer' => '40',
            'quarterAnswer' => '28',
            'correctAnswer' => '2',
            'image' => 'img/primary2/piso2.png'
        ]);
        //12
        DB::table('primarySecond')->insert([
            'question' => 'Selecciona la figura que sea la respuesta de la adivinanza. Tengo tres lados, todos iguales. ¿Quién soy?',
            'type' => '5',
            'firstAnswer' => 'img/primary2/Rectangulo.png',
            'secondAnswer' => 'img/primary2/Hexagono.png',
            'thirdAnswer' => 'img/primary1/cuadrado.png',
            'quarterAnswer' => 'img/primary1/triangulo.png',
            'correctAnswer' => '4',
            'image' => ''
        ]);
        //13
        DB::table('primarySecond')->insert([
            'question' => 'Selecciona la figura que sea la respuesta de la adivinanza. Tengo 4 lados, todos iguales. ¿Quién soy?',
            'type' => '5',
            'firstAnswer' => 'img/primary2/Rectangulo.png',
            'secondAnswer' => 'img/primary2/Hexagono.png',
            'thirdAnswer' => 'img/primary1/cuadrado.png',
            'quarterAnswer' => 'img/primary1/triangulo.png',
            'correctAnswer' => '3',
            'image' => ''
        ]);
        //14
        DB::table('primarySecond')->insert([
            'question' => 'Selecciona la figura que sea la respuesta de la adivinanza.Tengo 2 lados iguales que son más grandes que mis otros 2 lados los cuales son iguales entre ellos. ¿Quién soy?',
            'type' => '5',
            'firstAnswer' => 'img/primary2/Rectangulo.png',
            'secondAnswer' => 'img/primary2/Hexagono.png',
            'thirdAnswer' => 'img/primary1/cuadrado.png',
            'quarterAnswer' => 'img/primary1/triangulo.png',
            'correctAnswer' => '1',
            'image' => ''
        ]);
        //15
        DB::table('primarySecond')->insert([
            'question' => 'Selecciona la figura que sea la respuesta de la adivinanza. Tengo seis lados, todos iguales. ¿Quién soy?',
            'type' => '5',
            'firstAnswer' => 'img/primary2/Rectangulo.png',
            'secondAnswer' => 'img/primary2/Hexagono.png',
            'thirdAnswer' => 'img/primary1/cuadrado.png',
            'quarterAnswer' => 'img/primary1/triangulo.png',
            'correctAnswer' => '2',
            'image' => ''
        ]);
        //16
        DB::table('primarySecond')->insert([
            'question' => 'Teniendo en cuenta la imagen, que número se forma con 3 fichas azules, 4 rojas y 6 amarillas',
            'type' => '2',
            'firstAnswer' => '413',
            'secondAnswer' => '346',
            'thirdAnswer' => '364',
            'quarterAnswer' => '320',
            'correctAnswer' => '2',
            'image' => 'img/primary2/fichas.png'
        ]);
        //17
        DB::table('primarySecond')->insert([
            'question' => '¿Cuánto es 9 x 6?',
            'type' => '2',
            'firstAnswer' => '45',
            'secondAnswer' => '54',
            'thirdAnswer' => '15',
            'quarterAnswer' => '51',
            'correctAnswer' => '2',
            'image' => ''
        ]);
        //18
        DB::table('primarySecond')->insert([
            'question' => 'Van 5 filas de niñas con 7 niñas en cada fila. ¿Cuántas niñas van en total?',
            'type' => '2',
            'firstAnswer' => '12',
            'secondAnswer' => '53',
            'thirdAnswer' => '35',
            'quarterAnswer' => '21',
            'correctAnswer' => '3',
            'image' => ''
        ]);
        //18.1
        DB::table('primarySecond')->insert([
            'question' => 'Van 7 filas de niñas con 5 niñas en cada fila. ¿Cuántas niñas van en total?',
            'type' => '2',
            'firstAnswer' => '12',
            'secondAnswer' => '53',
            'thirdAnswer' => '35',
            'quarterAnswer' => '21',
            'correctAnswer' => '3',
            'image' => ''
        ]);
        //19
        DB::table('primarySecond')->insert([
            'question' => '¿Cuánto es 8 x 3?',
            'type' => '4',
            'firstAnswer' => '',
            'secondAnswer' => '',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '24',
            'image' => ''
        ]);
        //20
        DB::table('primarySecond')->insert([
            'question' => '¿Cuánto es 3 x 8?',
            'type' => '4',
            'firstAnswer' => '',
            'secondAnswer' => '',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '24',
            'image' => ''
        ]);
        //21
        DB::table('primarySecond')->insert([
            'question' => 'Teniendo en cuenta la imagen. ¿Qué numero se forma con 5 fichas azules, 2 rojas y 9 amarillas?',
            'type' => '4',
            'firstAnswer' => '',
            'secondAnswer' => '',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '529',
            'image' => 'img/primary2/fichas.png'
        ]);
    }
}
