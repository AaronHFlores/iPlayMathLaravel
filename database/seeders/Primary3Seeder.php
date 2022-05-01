<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Primary3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primaryThird')->insert([
            'question' => '¿Qué parte de la siguiente figura está coloreada?',
            'type' => '2',
            'firstAnswer' => '1/2',
            'secondAnswer' => '1/4',
            'thirdAnswer' => '1/8',
            'quarterAnswer' => '1/6',
            'correctAnswer' => '3',
            'image' => 'img/primary3/grafica1.png'
        ]);

        DB::table('primaryThird')->insert([
            'question' => '¿Qué número falta en la siguiente sucesión de números?',
            'type' => '2',
            'firstAnswer' => '3894',
            'secondAnswer' => '3794',
            'thirdAnswer' => '3795',
            'quarterAnswer' => '3895',
            'correctAnswer' => '2',
            'image' => 'img/primary3/secuencia.png'
        ]);

        DB::table('primaryThird')->insert([
            'question' => 'Elije el signo que representa correctamente la siguiente expresión: 20 + 15 - 3 |   | 18 + 9 -3',
            'type' => '2',
            'firstAnswer' => '>',
            'secondAnswer' => '<',
            'thirdAnswer' => '=',
            'quarterAnswer' => '/',
            'correctAnswer' => '1',
            'image' => ''
        ]);

        DB::table('primaryThird')->insert([
            'question' => 'Luis tiene $490 pesos. ¿Cuánto le falta para tener $1000 pesos?',
            'type' => '2',
            'firstAnswer' => '610',
            'secondAnswer' => '410',
            'thirdAnswer' => '510',
            'quarterAnswer' => '310',
            'correctAnswer' => '3',
            'image' => ''
        ]);

        DB::table('primaryThird')->insert([
            'question' => '¿Cuánto es 126 + 884?',
            'type' => '2',
            'firstAnswer' => '1110',
            'secondAnswer' => '910',
            'thirdAnswer' => '1000',
            'quarterAnswer' => '1010',
            'correctAnswer' => '4',
            'image' => ''
        ]);

        DB::table('primaryThird')->insert([
            'question' => '¿Cuántas piezas tiene el siguiente rompecabezas?',
            'type' => '2',
            'firstAnswer' => '49',
            'secondAnswer' => '40',
            'thirdAnswer' => '64',
            'quarterAnswer' => '56',
            'correctAnswer' => '4',
            'image' => 'img/primary3/rompecabezas.jpg'
        ]);

        DB::table('primaryThird')->insert([
            'question' => 'Con un 1 litro y 1/2 de agua se llenan 5 vasos. ¿Cuántos litros necesitas para llenar 25 vasos?',
            'type' => '2',
            'firstAnswer' => '7 litros',
            'secondAnswer' => '8 litros y 1/2',
            'thirdAnswer' => '7 litros y 1/2',
            'quarterAnswer' => '7 litros y 1/4',
            'correctAnswer' => '3',
            'image' => 'img/primary3/agua.png'
        ]);

        DB::table('primaryThird')->insert([
            'question' => 'César y Maritza son hermanos. Él tiene 12 años. Si Maritza es 14 años mayor que él. ¿Cuántos años tiene ella?',
            'type' => '2',
            'firstAnswer' => '26',
            'secondAnswer' => '24',
            'thirdAnswer' => '36',
            'quarterAnswer' => '16',
            'correctAnswer' => '1',
            'image' => ''
        ]);

        DB::table('primaryThird')->insert([
            'question' => 'Elije la opción que use los signos < (menor que), > (mayor que) o = (igual) correctamente',
            'type' => '2',
            'firstAnswer' => '49 < 39',
            'secondAnswer' => '5 + 8 = 11 + 2',
            'thirdAnswer' => '22 > 18 + 19',
            'quarterAnswer' => '55 = 5 x 12',
            'correctAnswer' => '2',
            'image' => ''
        ]);

        DB::table('primaryThird')->insert([
            'question' => 'Si sumamos 2/8 + 7/8. ¿Cual sería el resultado?',
            'type' => '2',
            'firstAnswer' => '8/8',
            'secondAnswer' => '5/8',
            'thirdAnswer' => '9/8',
            'quarterAnswer' => '11/8',
            'correctAnswer' => '3',
            'image' => ''
        ]);

        DB::table('primaryThird')->insert([
            'question' => '¿Qué números faltan en el tablero de la sucesión de números?',
            'type' => '2',
            'firstAnswer' => '336,1036 y 1136',
            'secondAnswer' => '336,1136 y 1236',
            'thirdAnswer' => '336, 1036 y 1236',
            'quarterAnswer' => '336, 1036 y 1163',
            'correctAnswer' => '1',
            'image' => 'img/primary3/secuencia2.png'
        ]);

        DB::table('primaryThird')->insert([
            'question' => 'Jazmín compró 112 paletas y quiere guardarlas en bolsas de 5 paletas cada una. ¿Cuántas bolsas juntará y cuántas paletas le sobran?',
            'type' => '2',
            'firstAnswer' => '20 bolsas y le sobran 2',
            'secondAnswer' => '25 bolsas y le sobran 3',
            'thirdAnswer' => '22 bolsas y le sobran 2',
            'quarterAnswer' => '24 bolsas y le sobra 1',
            'correctAnswer' => '3',
            'image' => ''
        ]);

        DB::table('primaryThird')->insert([
            'question' => 'En una primaria hay 592 alumnos y los quieren formar en filas de 8 alumnos. ¿Cuántas filas deberán formar?',
            'type' => '2',
            'firstAnswer' => '76',
            'secondAnswer' => '84',
            'thirdAnswer' => '72',
            'quarterAnswer' => '74',
            'correctAnswer' => '4',
            'image' => ''
        ]);

        DB::table('primaryThird')->insert([
            'question' => 'Elige el vaso con 1/2 de agua',
            'type' => '5',
            'firstAnswer' => 'img/primary3/vasoMedio.PNG',
            'secondAnswer' => 'img/primary3/vaso14.PNG',
            'thirdAnswer' => 'img/primary3/vasoVacio.PNG',
            'quarterAnswer' => 'img/primary3/vasoLleno.PNG',
            'correctAnswer' => '1',
            'image' => ''
        ]);

        DB::table('primaryThird')->insert([
            'question' => 'Elige el vaso con 1/4 de agua',
            'type' => '5',
            'firstAnswer' => 'img/primary3/vasoLleno.PNG',
            'secondAnswer' => 'img/primary3/vasoMedio.PNG',
            'thirdAnswer' => 'img/primary3/vasoVacio.PNG',
            'quarterAnswer' => 'img/primary3/vaso14.PNG',
            'correctAnswer' => '4',
            'image' => ''
        ]);

        DB::table('primaryThird')->insert([
            'question' => 'Elige la respuesta correcta',
            'type' => '2',
            'firstAnswer' => 'Todos los lados de los rectángulos son de la misma medida.',
            'secondAnswer' => 'Los rectángulos tienen tres vértices.',
            'thirdAnswer' => 'Los triángulos tienen 3 vértices',
            'quarterAnswer' => 'Los lados de los cuadrados tienen diferente medida.',
            'correctAnswer' => '3',
            'image' => ''
        ]);

        DB::table('primaryThird')->insert([
            'question' => 'Erick termina su clase de inglés a las 11:00 am. El reloj marca la hora actual. ¿Cuánto tiempo le falta para salir de su clase?',
            'type' => '2',
            'firstAnswer' => '1 hora y 10 minutos',
            'secondAnswer' => '50 minutos',
            'thirdAnswer' => '40 minutos',
            'quarterAnswer' => '55 minutos',
            'correctAnswer' => '2',
            'image' => 'img/primary3/reloj1.png'
        ]);

        DB::table('primaryThird')->insert([
            'question' => 'Una pista de atletismo mide 45 m. Moni ya ha dado 9 vueltas. ¿Cuántos metros ya ha corrido Moni?',
            'type' => '2',
            'firstAnswer' => '415 m',
            'secondAnswer' => '360 m',
            'thirdAnswer' => '450 m',
            'quarterAnswer' => '405 m',
            'correctAnswer' => '4',
            'image' => ''
        ]);

        DB::table('primaryThird')->insert([
            'question' => '¿Cuál de las siguientes descomposiciones NO corresponde al número 94?',
            'type' => '2',
            'firstAnswer' => '25 + 65 + 2 + 2',
            'secondAnswer' => '100 - 10 + 4',
            'thirdAnswer' => '80 + 10 + 3 + 1',
            'quarterAnswer' => '100 - 20 + 24',
            'correctAnswer' => '4',
            'image' => ''
        ]);

        DB::table('primaryThird')->insert([
            'question' => 'Juan tiene 168 chocolates para repartirlas entre sus 6 amigos y él. ¿Cuántos chocolates les tocaría a cada uno?',
            'type' => '2',
            'firstAnswer' => '26 chocolates',
            'secondAnswer' => '35 chocolates',
            'thirdAnswer' => '24 chocolates',
            'quarterAnswer' => '28 chocolates',
            'correctAnswer' => '3',
            'image' => ''
        ]);

        DB::table('primaryThird')->insert([
            'question' => '¿Qué hora marca el reloj?',
            'type' => '2',
            'firstAnswer' => '10:10',
            'secondAnswer' => '2:50',
            'thirdAnswer' => '2:10',
            'quarterAnswer' => '2:55',
            'correctAnswer' => '2',
            'image' => 'img/primary3/reloj2.png'
        ]);

    }
}
