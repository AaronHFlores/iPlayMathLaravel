<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Primary5Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primaryFifth')->insert([
            'question' => 'De una cinta de adhesiva de 2 1/3 m, gaste 3/6 ¿Qué cantidad de cinta me quedó?',
            'type' => '2',
            'firstAnswer' => '1/6',
            'secondAnswer' => '4/5',
            'thirdAnswer' => '3/4',
            'quarterAnswer' => '1/3',
            'correctAnswer' => '1',
            'image' => ''
        ]);

        DB::table('primaryFifth')->insert([
            'question' => 'En el grupo de quinto grado, los alumnos practican tres deportes: 1/3 de grupo juego beisbol, 2/6 juegan basquetbol y el resto futbol. ¿Qué parte del grupo practica futbol?',
            'type' => '2',
            'firstAnswer' => '5/10',
            'secondAnswer' => '1/3',
            'thirdAnswer' => '4/6',
            'quarterAnswer' => '2/7',
            'correctAnswer' => '2',
            'image' => ''
        ]);

        DB::table('primaryFifth')->insert([
            'question' => 'La mitad del grupo votó por Amelia y la tercera parte votó por Raúl. ¿Qué parte del grupo no votó?',
            'type' => '2',
            'firstAnswer' => '1/8',
            'secondAnswer' => '1/3',
            'thirdAnswer' => '1/6',
            'quarterAnswer' => '1/7',
            'correctAnswer' => '3',
            'image' => ''
        ]);

        DB::table('primaryFifth')->insert([
            'question' => 'Si el profesor Víctor asiste todos los días a la escuela con el mismo horario de trabajo. ¿Cuánto tiempo permanece en la escuela durante la semana?',
            'type' => '2',
            'firstAnswer' => '19:10',
            'secondAnswer' => '15:20',
            'thirdAnswer' => '17:10',
            'quarterAnswer' => '16:20',
            'correctAnswer' => '1',
            'image' => 'img/primary5/tablaMaestro.png'
        ]);

        DB::table('primaryFifth')->insert([
            'question' => 'El profesor José Luis tiene libres los miércoles; los demás días llega a la escuela una hora antes para preparar sus materiales de Biología . ¿Cuánto tiempo permanece diariamente en la escuela?',
            'type' => '2',
            'firstAnswer' => '4:50',
            'secondAnswer' => '3:50',
            'thirdAnswer' => '2:50',
            'quarterAnswer' => '1:50',
            'correctAnswer' => '2',
            'image' => 'img/primary5/tablaMaestro.png'
        ]);

        DB::table('primaryFifth')->insert([
            'question' => 'El profesor Santos toma 2 descansos de 15min todos los días. La tabla únicamente refleja su horario de trabajo. ¿A que hora sale cada día?',
            'type' => '2',
            'firstAnswer' => '12:30',
            'secondAnswer' => '14:30',
            'thirdAnswer' => '13:50',
            'quarterAnswer' => '14:50',
            'correctAnswer' => '4',
            'image' => 'img/primary5/tablaMaestro.png'
        ]);

        DB::table('primaryFifth')->insert([
            'question' => 'Raúl, Manuel, Andrés y Mario quieren comprar un balo con valor de $150 ¿Cuánto le tocara poner a cada uno si se dividen en partes iguales?',
            'type' => '2',
            'firstAnswer' => '38.2',
            'secondAnswer' => '37.5',
            'thirdAnswer' => '27.9',
            'quarterAnswer' => '35.9',
            'correctAnswer' => '2',
            'image' => ''
        ]);

        DB::table('primaryFifth')->insert([
            'question' => 'Don Fernando les dio $161 a sus cinco nietos para que se los repartieran en partes iguales, sin que sobrara nada. ¿Cuánto le tocara a cada uno? ',
            'type' => '2',
            'firstAnswer' => '30',
            'secondAnswer' => '25',
            'thirdAnswer' => '32.2',
            'quarterAnswer' => '31.5',
            'correctAnswer' => '3',
            'image' => ''
        ]);

        DB::table('primaryFifth')->insert([
            'question' => 'Si se pagaron $710 por 200 plumas iguales, ¿Cuánto costó cada pluma?',
            'type' => '2',
            'firstAnswer' => '3.55',
            'secondAnswer' => '3.45',
            'thirdAnswer' => '3',
            'quarterAnswer' => '2.55',
            'correctAnswer' => '1',
            'image' => ''
        ]);

        DB::table('primaryFifth')->insert([
            'question' => 'María tiene 32 metros de listón para hacer moños. Si quiere elaborar 40 moños del mismo tamaño y usar todo el listón, ¿Con qué cantidad de listón hará cada moño?',
            'type' => '2',
            'firstAnswer' => '2m',
            'secondAnswer' => '1m',
            'thirdAnswer' => '0.5m',
            'quarterAnswer' => '0.8m',
            'correctAnswer' => '4',
            'image' => ''
        ]);

        DB::table('primaryFifth')->insert([
            'question' => 'Tienes las siguiente fracciones: 7/9, 17/12 y 5/18. Si las ordenas de menor a mayor ¿cómo quedarian?',
            'type' => '2',
            'firstAnswer' => '5/18,  7/9,  17/12',
            'secondAnswer' => '7/9,  17/12, 5/18',
            'thirdAnswer' => '17/12, 7/9, 5/18',
            'quarterAnswer' => '5/18, 17/12, 7/9',
            'correctAnswer' => '1',
            'image' => ''
        ]);

        DB::table('primaryFifth')->insert([
            'question' => 'Si tuvieras que elegir el triángulo equilátero ¿Cuál escogerías?',
            'type' => '2',
            'firstAnswer' => '1',
            'secondAnswer' => '2',
            'thirdAnswer' => '3',
            'quarterAnswer' => '4',
            'correctAnswer' => '3',
            'image' => 'img/primary5/triangulos.png'
        ]);

        DB::table('primaryFifth')->insert([
            'question' => 'Omar trabaja en una tienda de lunes a viernes, gana $110 por día. Los sábados trabaja en otro lugar y le pagan $120. Si trabaja durante 14 semanas, ¿con cuál operación obtiene correctamente la cantidad que reunirá al final del tiempo?',
            'type' => '2',
            'firstAnswer' => '(110 x 5 x 11) + 120 x 11',
            'secondAnswer' => '(110 + 120) x 14',
            'thirdAnswer' => '(110 x 120) x 14',
            'quarterAnswer' => '110 x 5 x (14 + 120)',
            'correctAnswer' => '1',
            'image' => ''
        ]);

        DB::table('primaryFifth')->insert([
            'question' => '¿Qué números faltan en el cociente y en el desarrollo de la división?',
            'type' => '2',
            'firstAnswer' => '1 y 37',
            'secondAnswer' => '0 y 87',
            'thirdAnswer' => '1 y 27',
            'quarterAnswer' => '1 y 47',
            'correctAnswer' => '4',
            'image' => 'img/primary5/division.png'
        ]);

        DB::table('primaryFifth')->insert([
            'question' => 'Si por 4 lápices se pagaron $12, ¿Cuánto habría de pagar por 6 lápices?',
            'type' => '2',
            'firstAnswer' => '65',
            'secondAnswer' => '6',
            'thirdAnswer' => '18',
            'quarterAnswer' => '20',
            'correctAnswer' => '3',
            'image' => ''
        ]);

        DB::table('primaryFifth')->insert([
            'question' => 'Ángel compró 36 botellas con 3/4 de litro de agua cada una para darlas después de un partido de futbol. ¿Cuántos litros de agua compró en total?',
            'type' => '2',
            'firstAnswer' => '108/144 litros',
            'secondAnswer' => '108/4 litros',
            'thirdAnswer' => '144/4 litros',
            'quarterAnswer' => '98/4 litros',
            'correctAnswer' => '2',
            'image' => ''
        ]);

        DB::table('primaryFifth')->insert([
            'question' => 'El papá de Karen vende un terreno en $478 450. En el precio, ¿qué posición ocupa el número 8?',
            'type' => '2',
            'firstAnswer' => 'Unidades',
            'secondAnswer' => 'Centenas',
            'thirdAnswer' => 'Unidades de millar',
            'quarterAnswer' => 'Decenas de millar',
            'correctAnswer' => '3',
            'image' => ''
        ]);

        DB::table('primaryFifth')->insert([
            'question' => 'Al tramo de una carretera se le colocarán 39.5 km de malla. ¿Cuántos metros de este material se utilizarán?',
            'type' => '2',
            'firstAnswer' => '395.0 m',
            'secondAnswer' => '3 950.0 m',
            'thirdAnswer' => '395 000.0 m',
            'quarterAnswer' => '39 500.0 m',
            'correctAnswer' => '3',
            'image' => ''
        ]);

        DB::table('primaryFifth')->insert([
            'question' => 'Si 7 centímetros equivalen a 0.07 metros, ¿cuál de las siguientes opciones muestra la fracción equivalente a este número en metros?',
            'type' => '2',
            'firstAnswer' => '7/100',
            'secondAnswer' => '7/10',
            'thirdAnswer' => '7/1000',
            'quarterAnswer' => '7/1',
            'correctAnswer' => '1',
            'image' => ''
        ]);

        DB::table('primaryFifth')->insert([
            'question' => 'Un coche de carreras tardó 3 minutos con 16 segundos en dar una vuelta. Si necesitan presentar este tiempo en segundos, ¿cuántos segundos tardó en recorrer el circuito?',
            'type' => '2',
            'firstAnswer' => '186 segundos',
            'secondAnswer' => '180 segundos',
            'thirdAnswer' => '316 segundos',
            'quarterAnswer' => '196 segundos',
            'correctAnswer' => '4',
            'image' => ''
        ]);

        DB::table('primaryFifth')->insert([
            'question' => '¿Cuántas aristas tiene el prisma que se forma con esta figura?',
            'type' => '2',
            'firstAnswer' => '6',
            'secondAnswer' => '18',
            'thirdAnswer' => '12',
            'quarterAnswer' => '8',
            'correctAnswer' => '2',
            'image' => 'img/primary5/primasHexagonal.PNG'
        ]);

    }
}
