<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class primarySixthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Fracciones
        DB::table('primarySixth')->insert([
            'question' => 'En un grupo de 36 alumnos, 1/3 del total son menores a 10 años. ¿Cuántos tienen 10 o mas años?',
            'type' => '2',
            'firstAnswer' => '30',
            'secondAnswer' => '10',
            'thirdAnswer' => '24',
            'quarterAnswer' => '15',
            'correctAnswer' => '3',
            'image' => ''
        ]);
        DB::table('primarySixth')->insert([
            'question' => 'En un grupo de 36 alumnos, 1/3 del total son menores a 10 años. ¿Qué fracción representa los alumnos con 10 o mas años?',
            'type' => '2',
            'firstAnswer' => '5/6',
            'secondAnswer' => '2/3',
            'thirdAnswer' => '2/4',
            'quarterAnswer' => '13/16',
            'correctAnswer' => '2',
            'image' => ''
        ]);
        DB::table('primarySixth')->insert([
            'question' => 'En toda la escuela hay 230 estudiantes en total, de los cuales 3/5 son mujeres. ¿Cuántos son hombres?',
            'type' => '2',
            'firstAnswer' => '54',
            'secondAnswer' => '92',
            'thirdAnswer' => '68',
            'quarterAnswer' => '138',
            'correctAnswer' => '2',
            'image' => ''
        ]);
        DB::table('primarySixth')->insert([
            'question' => 'En toda la escuela hay 230 estudiantes en total, de los cuales 2/5 son hombres. ¿Cuántas son mujeres?',
            'type' => '2',
            'firstAnswer' => '54',
            'secondAnswer' => '92',
            'thirdAnswer' => '68',
            'quarterAnswer' => '138',
            'correctAnswer' => '4',
            'image' => ''
        ]);
        DB::table('primarySixth')->insert([
            'question' => '¿En cuánto excede 7/9 a 2/5?',
            'type' => '2',
            'firstAnswer' => '3/18',
            'secondAnswer' => '17/45',
            'thirdAnswer' => '6/5',
            'quarterAnswer' => '7/4',
            'correctAnswer' => '2',
            'image' => ''
        ]);
        DB::table('primarySixth')->insert([
            'question' => '¿Cuánto hay que agregar a 3/4 para obtener 6/7?',
            'type' => '2',
            'firstAnswer' => '3/28',
            'secondAnswer' => '1/4',
            'thirdAnswer' => '12/40',
            'quarterAnswer' => '1/6',
            'correctAnswer' => '1',
            'image' => ''
        ]);
        DB::table('primarySixth')->insert([
            'question' => 'Si don juan compro 83 pies de manguera ¿Cuántos metros de longitud tiene la manguera que compro don juan?',
            'type' => '2',
            'firstAnswer' => '15.85',
            'secondAnswer' => '45.62',
            'thirdAnswer' => '25.29',
            'quarterAnswer' => '90.80',
            'correctAnswer' => '3',
            'image' => ''
        ]);
        //Falta Imagen
        DB::table('primarySixth')->insert([
            'question' => 'Donde vive Juan se instaló una feria, en uno de los puestos se ofrece ganar 2 regalos si se acumulan 10 puntos. En otro dan 3 regalos por cada 12 puntos. ¿Cuál puesto tiene la mejor promoción?',
            'type' => '3',
            'firstAnswer' => 'Primer puesto',
            'secondAnswer' => 'Segundo puesto',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '2',
            'image' => ''
        ]);
        //Figuras tridimensionales Faltan Imagenes
        DB::table('primarySixth')->insert([
            'question' => 'Seleccione el nombre de la siguiente figura',
            'type' => '2',
            'firstAnswer' => 'Piramide Triangular',
            'secondAnswer' => 'Prisma Pentagonal',
            'thirdAnswer' => 'Prisma Hexagonal',
            'quarterAnswer' => 'Cubo',
            'correctAnswer' => '3',
            'image' => "{{ asset('img/primarySixth/prismaHexagonal.png') }}"
        ]);
        DB::table('primarySixth')->insert([
            'question' => 'Seleccione el nombre de la siguiente figura',
            'type' => '2',
            'firstAnswer' => 'Piramide Triangular',
            'secondAnswer' => 'Prisma Pentagonal',
            'thirdAnswer' => 'Prisma Hexagonal',
            'quarterAnswer' => 'Cubo',
            'correctAnswer' => '3',
            'image' => "{{ asset('img/primarySixth/prismaHexagonal.png') }}"
        ]);
        DB::table('primarySixth')->insert([
            'question' => 'Seleccione el nombre de la siguiente figura',
            'type' => '2',
            'firstAnswer' => 'Piramide Triangular',
            'secondAnswer' => 'Prisma Pentagonal',
            'thirdAnswer' => 'Prisma Hexagonal',
            'quarterAnswer' => 'Cubo',
            'correctAnswer' => '3',
            'image' => "{{ asset('img/primarySixth/prismaHexagonal.png') }}"
        ]);
        DB::table('primarySixth')->insert([
            'question' => 'Seleccione el nombre de la siguiente figura',
            'type' => '2',
            'firstAnswer' => 'Piramide Triangular',
            'secondAnswer' => 'Prisma Pentagonal',
            'thirdAnswer' => 'Prisma Hexagonal',
            'quarterAnswer' => 'Cubo',
            'correctAnswer' => '3',
            'image' => "{{ asset('img/primarySixth/prismaHexagonal.png') }}"
        ]);
        //Figuras tridimensionales con seleccion de imagenes Faltan Imagenes
        DB::table('primarySixth')->insert([
            'question' => '¿Cuál de las siguientes figuras es una pirámide hexagonal?',
            'type' => '5',
            'firstAnswer' => '',
            'secondAnswer' => '',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '4',
            'image' => ''
        ]);
        DB::table('primarySixth')->insert([
            'question' => '¿Cuál de las siguientes figuras es un cubo?',
            'type' => '5',
            'firstAnswer' => '',
            'secondAnswer' => '',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '4',
            'image' => '1'
        ]);
        DB::table('primarySixth')->insert([
            'question' => '¿Cuál de las siguientes figuras es una esfera?',
            'type' => '5',
            'firstAnswer' => '',
            'secondAnswer' => '',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '4',
            'image' => '2'
        ]);
        DB::table('primarySixth')->insert([
            'question' => '¿Cuál de las siguientes figuras es una prisma triangular?',
            'type' => '5',
            'firstAnswer' => '',
            'secondAnswer' => '',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '3',
            'image' => ''
        ]);
        //Ejes de simetria con imagenes Faltan Imagenes
        DB::table('primarySixth')->insert([
            'question' => '¿Cuál de las siguientes figuras tiene un eje de simetría?',
            'type' => '5',
            'firstAnswer' => '',
            'secondAnswer' => '',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '1',
            'image' => ''
        ]);
        DB::table('primarySixth')->insert([
            'question' => '¿Cuál de las siguientes figuras no tiene un eje de simetría?',
            'type' => '5',
            'firstAnswer' => '',
            'secondAnswer' => '',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '4',
            'image' => ''
        ]);
        //Rectas numericas Faltan Imagenes
        DB::table('primarySixth')->insert([
            'question' => '¿Qué fracción se representa en la recta?',
            'type' => '2',
            'firstAnswer' => '2/3',
            'secondAnswer' => '4/7',
            'thirdAnswer' => '2 2/4',
            'quarterAnswer' => '3/5',
            'correctAnswer' => '1',
            'image' => ''
        ]);
        DB::table('primarySixth')->insert([
            'question' => '¿Qué fracción se representa en la recta?',
            'type' => '2',
            'firstAnswer' => '4/6',
            'secondAnswer' => '5/7',
            'thirdAnswer' => '3 2/4',
            'quarterAnswer' => '4/5',
            'correctAnswer' => '1',
            'image' => ''
        ]);
        DB::table('primarySixth')->insert([
            'question' => '¿Qué fracción se representa en la recta?',
            'type' => '2',
            'firstAnswer' => '6/9',
            'secondAnswer' => '6/7',
            'thirdAnswer' => '4 2/4',
            'quarterAnswer' => '9/6',
            'correctAnswer' => '1',
            'image' => ''
        ]);
    }
}
