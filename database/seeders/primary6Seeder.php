<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Primary6Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Fracciones
        //1
        DB::table('primarySixth')->insert([
            'question' => 'En un grupo de 36 alumnos, 1/3 del total son menores de 10 años. ¿Cuántos tienen 10 años o mas?',
            'type' => '2',
            'firstAnswer' => '30',
            'secondAnswer' => '10',
            'thirdAnswer' => '24',
            'quarterAnswer' => '15',
            'correctAnswer' => '3',
            'image' => ''
        ]);
        //2
        DB::table('primarySixth')->insert([
            'question' => 'En un grupo de 36 alumnos, 1/3 del total son menores a 10 años. ¿Qué fracción representa los alumnos con 10 años o mas?',
            'type' => '2',
            'firstAnswer' => '5/6',
            'secondAnswer' => '2/3',
            'thirdAnswer' => '2/4',
            'quarterAnswer' => '13/16',
            'correctAnswer' => '2',
            'image' => ''
        ]);
        DB::table('primarySixth')->insert([
            'question' => 'En una escuela hay 230 estudiantes en total, de los cuales 3/5 son mujeres. ¿Cuántos son hombres?',
            'type' => '2',
            'firstAnswer' => '54',
            'secondAnswer' => '92',
            'thirdAnswer' => '68',
            'quarterAnswer' => '138',
            'correctAnswer' => '2',
            'image' => ''
        ]);
        DB::table('primarySixth')->insert([
            'question' => 'En una escuela hay 230 estudiantes en total, de los cuales 2/5 son hombres. ¿Cuántas son mujeres?',
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
            'question' => 'Si Don Juan compró 83 pies de manguera ¿Cuántos metros de longitud tiene la manguera que compró Don Juan?',
            'type' => '2',
            'firstAnswer' => '15.85',
            'secondAnswer' => '45.62',
            'thirdAnswer' => '25.29',
            'quarterAnswer' => '90.80',
            'correctAnswer' => '3',
            'image' => ''
        ]);
        //Imagen
        DB::table('primarySixth')->insert([
            'question' => 'Donde vive Juan se instaló una feria, en uno de los puestos se ofrece ganar 2 regalos si se acumulan 10 puntos. En otro dan 3 regalos por cada 12 puntos. ¿Cuál puesto tiene la mejor promoción?',
            'type' => '3',
            'firstAnswer' => 'Primer puesto',
            'secondAnswer' => 'Segundo puesto',
            'thirdAnswer' => '',
            'quarterAnswer' => '',
            'correctAnswer' => '2',
            'image' => "img/primarySixth/feria.png"
        ]);
        //Figuras tridimensionale Imagenes
        DB::table('primarySixth')->insert([
            'question' => 'Seleccione el nombre de la siguiente figura',
            'type' => '2',
            'firstAnswer' => 'Pirámide Triangular',
            'secondAnswer' => 'Prisma Pentagonal',
            'thirdAnswer' => 'Prisma Hexagonal',
            'quarterAnswer' => 'Cubo',
            'correctAnswer' => '3',
            'image' => "img/primarySixth/prismaHexagonal.png"
        ]);
        DB::table('primarySixth')->insert([
            'question' => 'Seleccione el nombre de la siguiente figura',
            'type' => '2',
            'firstAnswer' => 'Pirámide Triangular',
            'secondAnswer' => 'Prisma Pentagonal',
            'thirdAnswer' => 'Prisma Hexagonal',
            'quarterAnswer' => 'Cubo',
            'correctAnswer' => '1',
            'image' => "img/primarySixth/piramideTriangular.png"
        ]);
        DB::table('primarySixth')->insert([
            'question' => 'Seleccione el nombre de la siguiente figura',
            'type' => '2',
            'firstAnswer' => 'Pirámide Triangular',
            'secondAnswer' => 'Prisma Pentagonal',
            'thirdAnswer' => 'Prisma Hexagonal',
            'quarterAnswer' => 'Cubo',
            'correctAnswer' => '2',
            'image' => "img/primarySixth/prismaPentagonal.png"
        ]);
        DB::table('primarySixth')->insert([
            'question' => 'Seleccione el nombre de la siguiente figura',
            'type' => '2',
            'firstAnswer' => 'Pirámide Triangular',
            'secondAnswer' => 'Prisma Pentagonal',
            'thirdAnswer' => 'Prisma Hexagonal',
            'quarterAnswer' => 'Cubo',
            'correctAnswer' => '4',
            'image' => "img/primarySixth/cubo.png"
        ]);
        //Figuras tridimensionales con seleccion de imagenes 
        DB::table('primarySixth')->insert([
            'question' => '¿Cuál de las siguientes figuras es una pirámide hexagonal?',
            'type' => '5',
            'firstAnswer' => "img/primarySixth/cubo.png",
            'secondAnswer' => "img/primarySixth/esfera.png",
            'thirdAnswer' => "img/primarySixth/prismaTriangular.png",
            'quarterAnswer' => "img/primarySixth/piramideHexagonal.png",
            'correctAnswer' => '4',
            'image' => ''
        ]);
        DB::table('primarySixth')->insert([
            'question' => '¿Cuál de las siguientes figuras es un cubo?',
            'type' => '5',
            'firstAnswer' => "img/primarySixth/cubo.png",
            'secondAnswer' => "img/primarySixth/esfera.png",
            'thirdAnswer' => "img/primarySixth/prismaTriangular.png",
            'quarterAnswer' => "img/primarySixth/piramideHexagonal.png",
            'correctAnswer' => '1',
            'image' => '1'
        ]);
        DB::table('primarySixth')->insert([
            'question' => '¿Cuál de las siguientes figuras es una esfera?',
            'type' => '5',
            'firstAnswer' => "img/primarySixth/cubo.png",
            'secondAnswer' => "img/primarySixth/esfera.png",
            'thirdAnswer' => "img/primarySixth/prismaTriangular.png",
            'quarterAnswer' => "img/primarySixth/piramideHexagonal.png",
            'correctAnswer' => '2',
            'image' => '2'
        ]);
        DB::table('primarySixth')->insert([
            'question' => '¿Cuál de las siguientes figuras es un prisma triangular?',
            'type' => '5',
            'firstAnswer' => "img/primarySixth/cubo.png",
            'secondAnswer' => "img/primarySixth/esfera.png",
            'thirdAnswer' => "img/primarySixth/prismaTriangular.png",
            'quarterAnswer' => "img/primarySixth/piramideHexagonal.png",
            'correctAnswer' => '3',
            'image' => ''
        ]);
        //Ejes de simetria con imagenes Faltan Imagenes
        DB::table('primarySixth')->insert([
            'question' => '¿Cuál de las siguientes figuras tiene un eje de simetría?',
            'type' => '5',            
            'firstAnswer' => "img/primarySixth/piñata.png",
            'secondAnswer' => "img/primarySixth/arbol.png",
            'thirdAnswer' => "img/primarySixth/mano.png",
            'quarterAnswer' => "img/primarySixth/asimetrico.png",
            'correctAnswer' => '1',
            'image' => ''
        ]);
        DB::table('primarySixth')->insert([
            'question' => '¿Cuál de las siguientes figuras no tiene un eje de simetría?',
            'type' => '5',
            'firstAnswer' => "img/primarySixth/piñata.png",
            'secondAnswer' => "img/primarySixth/hoja.png",
            'thirdAnswer' => "img/primarySixth/mariquita.png",
            'quarterAnswer' => "img/primarySixth/asimetrico.png",
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
            'image' => "img/primarySixth/2_3.png"
        ]);
        DB::table('primarySixth')->insert([
            'question' => '¿Qué fracción se representa en la recta?',
            'type' => '2',
            'firstAnswer' => '4/6',
            'secondAnswer' => '5/7',
            'thirdAnswer' => '3 2/4',
            'quarterAnswer' => '4/5',
            'correctAnswer' => '1',
            'image' => "img/primarySixth/4_6.png"
        ]);
        DB::table('primarySixth')->insert([
            'question' => '¿Qué fracción se representa en la recta?',
            'type' => '2',
            'firstAnswer' => '6/9',
            'secondAnswer' => '6/7',
            'thirdAnswer' => '4 2/4',
            'quarterAnswer' => '9/6',
            'correctAnswer' => '1',
            'image' => "img/primarySixth/6_9.png"
        ]);
    }
}
