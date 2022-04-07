<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Elementary3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('elementaryThird')->insert([
            'question' => '¿Calcula la medida del siguiente triángulo rectángulo al usar Teorema de Pitágoras?',
            'type' => '2',
            'firstAnswer' => '7',
            'secondAnswer' => '6',
            'thirdAnswer' => '8',
            'quarterAnswer' => '5',
            'correctAnswer' => '4',
            'image' => 'img/Elementary3/trianguloRectangulo.PNG'
        ]);

        DB::table('elementaryThird')->insert([
            'question' => '¿Cual es el valor de X en la siguiente ecuación? 3x-8=-5x-2',
            'type' => '2',
            'firstAnswer' => '3/4',
            'secondAnswer' => '5',
            'thirdAnswer' => '-3',
            'quarterAnswer' => '-5/4',
            'correctAnswer' => '1',
            'image' => ''
        ]);

        DB::table('elementaryThird')->insert([
            'question' => 'Se desea colocar pasto en un jardín circular de 18 m de radio. ¿Qué cantidad de pasto se necesita para cubrir el jardín? Si se considera pi = 3.14',
            'type' => '2',
            'firstAnswer' => '1 193.20 m²',
            'secondAnswer' => '1017.36 m²',
            'thirdAnswer' => '119.32 m²',
            'quarterAnswer' => '101.73 m²',
            'correctAnswer' => '2',
            'image' => ''
        ]);

        DB::table('elementaryThird')->insert([
            'question' => 'Axel tiene 15 6/8 kg de café. Y quiere llenar bolsas de 3/4 kg. ¿Cuántas bolsas completas de café podrá llenar?',
            'type' => '2',
            'firstAnswer' => '20',
            'secondAnswer' => '14',
            'thirdAnswer' => '18',
            'quarterAnswer' => '21',
            'correctAnswer' => '4',
            'image' => ''
        ]);

        DB::table('elementaryThird')->insert([
            'question' => 'La siguiente gráfica muestra a los 350 alumnos de una escuela secundaria, por grado. Un reporte indica que 10% de los alumnos de tercer grado y 25% de los de segundo grado se han enfermado de influenza.¿Cuántos alumnos de segundo grado y cuántos de tercero están enfermos?',
            'type' => '2',
            'firstAnswer' => '8 de 2º y 2 de 3º',
            'secondAnswer' => '25 de 2º y 10 de 3º',
            'thirdAnswer' => '112 de 2º y 70 de 3º',
            'quarterAnswer' => '28 de 2º y 7 de 3º',
            'correctAnswer' => '4',
            'image' => 'img/Elementary3/grafica.PNG'
        ]);

        DB::table('elementaryThird')->insert([
            'question' => '¿Cuál es el resultado correcto de esta expresión aritmética?  8 − 12 + 2 x 5^2 − 12 ÷ (2 + 4) =',
            'type' => '2',
            'firstAnswer' => '-52',
            'secondAnswer' => '44',
            'thirdAnswer' => '-48',
            'quarterAnswer' => '50',
            'correctAnswer' => '2',
            'image' => ''
        ]);

        DB::table('elementaryThird')->insert([
            'question' => '¿Cuál opción incluye las tres expresiones algebraicas que representan correctamente el área total de la siguiente figura?',
            'type' => '2',
            'firstAnswer' => '1,2 y 5',
            'secondAnswer' => '3, 4 y 5',
            'thirdAnswer' => '1, 2 y 4',
            'quarterAnswer' => '2, 3 y 5',
            'correctAnswer' => '3',
            'image' => 'img/Elementary3/ecuacionRectangulo.PNG'
        ]);

        DB::table('elementaryThird')->insert([
            'question' => 'Se lanza al mismo tiempo un dado y una moneda.¿Cuál es la probabilidad de obtener un 5 y sol?',
            'type' => '2',
            'firstAnswer' => '2/12',
            'secondAnswer' => '4/6',
            'thirdAnswer' => '2/8',
            'quarterAnswer' => '1/12',
            'correctAnswer' => '2',
            'image' => ''
        ]);

        DB::table('elementaryThird')->insert([
            'question' => 'Se tiene la siguiente expresió algebraica: (x+3)(?) = x²+8x+15. ¿Cuál es la expresion faltante para que se cumpla el resultado?',
            'type' => '2',
            'firstAnswer' => 'x+3',
            'secondAnswer' => 'x-3',
            'thirdAnswer' => 'x+5',
            'quarterAnswer' => 'x-5',
            'correctAnswer' => '3',
            'image' => ''
        ]);

        DB::table('elementaryThird')->insert([
            'question' => '¿Cuánto mide el ángulo inscrito ACO, si se sabe que el ángulo AOB mide 40° y además abarcan el mismo arco?',
            'type' => '2',
            'firstAnswer' => '20°',
            'secondAnswer' => '40°',
            'thirdAnswer' => '140°',
            'quarterAnswer' => '120°',
            'correctAnswer' => '1',
            'image' => 'img/Elementary3/anguloCirculo.PNG'
        ]);

        DB::table('elementaryThird')->insert([
            'question' => 'Observa la siguiente sucesión de figuras que representan cuerpos geométricos formados por cubos.Si en el primero se ven sólo 3 caras del cubo y en el segundo cuerpo se ven sólo 7, ¿cuál de las siguientes expresiones algebraicas permite calcular el número de caras cuadradas visibles en el cuerpo geométrico formado por cubos ubicado en la enésima posición?',
            'type' => '2',
            'firstAnswer' => '6(n)²',
            'secondAnswer' => 'n²+6',
            'thirdAnswer' => 'n²/2 + 5n/2',
            'quarterAnswer' => 'n²/2 + n/2 + 2',
            'correctAnswer' => '3',
            'image' => 'img/Elementary3/ecuacionCaras.PNG'
        ]);

        DB::table('elementaryThird')->insert([
            'question' => 'Identifica cuál de las siguientes gráficas corresponde a la función y =x² -x-2',
            'type' => '5',
            'firstAnswer' => 'img/Elementary3/g1.PNG',
            'secondAnswer' => 'img/Elementary3/g2.PNG',
            'thirdAnswer' => 'img/Elementary3/g3.PNG',
            'quarterAnswer' => 'img/Elementary3/g4.PNG',
            'correctAnswer' => '4',
            'image' => ''
        ]);

        DB::table('elementaryThird')->insert([
            'question' => '¿Como se puede factorizar el siguinete binomio? 9x²y^4 - x²',
            'type' => '2',
            'firstAnswer' => '(3xy² + x) · (3xy² - x)',
            'secondAnswer' => '(3xy² - x) · (3xy² - x)',
            'thirdAnswer' => '(9xy² + x) · (9xy² - x)',
            'quarterAnswer' => '(3x²y + x) · (9x²y - x)',
            'correctAnswer' => '1',
            'image' => ''
        ]);

        DB::table('elementaryThird')->insert([
            'question' => 'Factoriza la siguiente ecuación: x² - 14x + 45 = 0',
            'type' => '2',
            'firstAnswer' => '(x - 9)(x + 5)',
            'secondAnswer' => '(x - 7)(x + 5)',
            'thirdAnswer' => '(x - 5)(x - 9)',
            'quarterAnswer' => '(x + 45)(x + 1)',
            'correctAnswer' => '3',
            'image' => ''
        ]);

        DB::table('elementaryThird')->insert([
            'question' => 'Alondra pagó $92 por 5 cuadernos y 3 plumas. Dani compró 2 cuadernos y 6 plumas y pagó $56, ¿cuánto cuesta cada uno de los útiles escolares?',
            'type' => '2',
            'firstAnswer' => '$11 por un cuaderno y $5 por una pluma',
            'secondAnswer' => '$16 por un cuaderno y $4 por una pluma',
            'thirdAnswer' => '$4 por un cuaderno y $16 por una pluma.',
            'quarterAnswer' => '$10 por un cuaderno y $6 por una pluma.',
            'correctAnswer' => '2',
            'image' => ''
        ]);

        DB::table('elementaryThird')->insert([
            'question' => 'El precio del kg de croquetas es de $39.5. Sofi compró 3 1/2 kg, ¿cuánto pagó por la croquetas de su perrito?',
            'type' => '2',
            'firstAnswer' => '135.25',
            'secondAnswer' => '$118.50',
            'thirdAnswer' => '138.25',
            'quarterAnswer' => '$255.50',
            'correctAnswer' => '3',
            'image' => ''
        ]);

        DB::table('elementaryThird')->insert([
            'question' => '¿Cuál es la razón trigonométrica que nos da el valor de la función trigonométrica con la que se puede calcular la medida del ángulo B?',
            'type' => '2',
            'firstAnswer' => 'Sen B = 20/10',
            'secondAnswer' => 'Cos B = x/10',
            'thirdAnswer' => 'Cos B = 20/x',
            'quarterAnswer' => 'Sen B = 10/20',
            'correctAnswer' => '4',
            'image' => ''
        ]);

        DB::table('elementaryThird')->insert([
            'question' => '¿Cuál es el valor de la moda en los siguientes datos?',
            'type' => '2',
            'firstAnswer' => '11',
            'secondAnswer' => '12',
            'thirdAnswer' => '13',
            'quarterAnswer' => '14',
            'correctAnswer' => '1',
            'image' => 'img/Elementary3/moda.PNG'
        ]);

        DB::table('elementaryThird')->insert([
            'question' => 'Calcula el volumen de la siguiente figura.',
            'type' => '2',
            'firstAnswer' => '72 cm³',
            'secondAnswer' => '144 cm³',
            'thirdAnswer' => '108 cm³',
            'quarterAnswer' => '75 cm³',
            'correctAnswer' => '1',
            'image' => 'img/Elementary3/volumen.PNG'
        ]);

        DB::table('elementaryThird')->insert([
            'question' => 'Las gráficas representan la distancia recorrida por una moto en función del tiempo. ¿Qué gráfica representa el hecho de que lleve una velocidad constante en todo momento?',
            'type' => '5',
            'firstAnswer' => 'img/Elementary3/gl1.PNG',
            'secondAnswer' => 'img/Elementary3/gl3.PNG',
            'thirdAnswer' => 'img/Elementary3/gl2.PNG',
            'quarterAnswer' => 'img/Elementary3/gl4.PNG',
            'correctAnswer' => '3',
            'image' => ''
        ]);

        DB::table('elementaryThird')->insert([
            'question' => 'Suma las expresiones 2x²+3x+4 y 4x²-2x+3',
            'type' => '2',
            'firstAnswer' => '9x²-2x+7',
            'secondAnswer' => '6x²+x+7',
            'thirdAnswer' => '6x²+3x+5',
            'quarterAnswer' => '9x²-x+7',
            'correctAnswer' => '2',
            'image' => ''
        ]);

    }
}
