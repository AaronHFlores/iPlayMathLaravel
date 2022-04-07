<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class Elementary1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Angulos
        DB::table('elementaryFirst')->insert([
            'question' => '¿Cuánto es el valor del ángulo ∡ m?',
            'type' => '2',
            'firstAnswer' => '62.5°',
            'secondAnswer' =>'37.5°',
            'thirdAnswer' => '117.5°',
            'quarterAnswer' => '180°',
            'correctAnswer' => '3',
            'image' => 'img/Elementary1/grafica.png'
        ]);
        DB::table('elementaryFirst')->insert([
            'question' => '¿Cuánto es el valor del ángulo ∡ n?',
            'type' => '2',
            'firstAnswer' => '62.5°',
            'secondAnswer' =>'37.5°',
            'thirdAnswer' => '117.5°',
            'quarterAnswer' => '180°',
            'correctAnswer' => '1',
            'image' => 'img/Elementary1/grafica.png'
        ]);
        DB::table('elementaryFirst')->insert([
            'question' => '¿Cuánto es el valor del ángulo ∡ o?',
            'type' => '2',
            'firstAnswer' => '62.5°',
            'secondAnswer' =>'37.5°',
            'thirdAnswer' => '117.5°',
            'quarterAnswer' => '180°',
            'correctAnswer' => '3',
            'image' => 'img/Elementary1/grafica.png'
        ]);
        //Media y Mediana
        DB::table('elementaryFirst')->insert([
            'question' => 'Mariana obtuvo las siguientes calificaciones, ¿calcule la mediana de las calificaciones?',
            'type' => '2',
            'firstAnswer' => '8',
            'secondAnswer' =>'5',
            'thirdAnswer' => '9',
            'quarterAnswer' => '10',
            'correctAnswer' => '3',
            'image' => 'img/Elementary1/tabla.png'
        ]);
        DB::table('elementaryFirst')->insert([
            'question' => 'Mariana obtuvo las siguientes calificaciones, ¿calcule la media de calificaciones?',
            'type' => '2',
            'firstAnswer' => '9',
            'secondAnswer' =>'8.2',
            'thirdAnswer' => '7.5',
            'quarterAnswer' => '8',
            'correctAnswer' => '2',
            'image' => 'img/Elementary1/tabla.png'
        ]);
        //Probabilidad
        DB::table('elementaryFirst')->insert([
            'question' => '¿Si se lanza una moneda 2 veces cual es el porcentaje que salga 2 veces sol?',
            'type' => '2',
            'firstAnswer' => '75%',
            'secondAnswer' =>'100%',
            'thirdAnswer' => '25%',
            'quarterAnswer' => '50%',
            'correctAnswer' => '3',
            'image' => ''
        ]);
        DB::table('elementaryFirst')->insert([
            'question' => '¿Si se lanza una moneda 2 veces cual es el porcentaje que salga sol y águila?',
            'type' => '2',
            'firstAnswer' => '75%',
            'secondAnswer' =>'100%',
            'thirdAnswer' => '25%',
            'quarterAnswer' => '50%',
            'correctAnswer' => '4',
            'image' => ''
        ]);
        //Division con decimales agua de horchata
        DB::table('elementaryFirst')->insert([
            'question' => 'Jorge vende aguas frescas y las despacha en vasos de 0.25 litros. ¿Cuántos vasos completos puede vender si cuenta con 8 litros de agua de horchata?',
            'type' => '2',
            'firstAnswer' => '15',
            'secondAnswer' =>'8',
            'thirdAnswer' => '32',
            'quarterAnswer' => '56',
            'correctAnswer' => '3',
            'image' => ''
        ]);
        DB::table('elementaryFirst')->insert([
            'question' => 'Jorge vende aguas frescas y las despacha en vasos de 0.5 litros. ¿Cuántos vasos completos puede vender si cuenta con 8 litros de agua de horchata?',
            'type' => '2',
            'firstAnswer' => '20',
            'secondAnswer' =>'16',
            'thirdAnswer' => '24',
            'quarterAnswer' => '10',
            'correctAnswer' => '2',
            'image' => ''
        ]);
        DB::table('elementaryFirst')->insert([
            'question' => 'Jorge vende aguas frescas y las despacha en vasos de 0.8 litros. ¿Cuántos vasos completos puede vender si cuenta con 8 litros de agua de horchata?',
            'type' => '2',
            'firstAnswer' => '8',
            'secondAnswer' =>'5',
            'thirdAnswer' => '10',
            'quarterAnswer' => '15',
            'correctAnswer' => '3',
            'image' => ''
        ]);
        DB::table('elementaryFirst')->insert([
            'question' => 'Jorge vende aguas frescas y las despacha en vasos de 1 litro. ¿Cuántos vasos completos puede vender si cuenta con 8 litros de agua de horchata?',
            'type' => '2',
            'firstAnswer' => '9',
            'secondAnswer' =>'6',
            'thirdAnswer' => '8',
            'quarterAnswer' => '5',
            'correctAnswer' => '3',
            'image' => ''
        ]);
        DB::table('elementaryFirst')->insert([
            'question' => 'Jorge vende aguas frescas y las despacha en vasos de 1.5 litros. ¿Cuántos vasos completos puede vender si cuenta con 8 litros de agua de horchata?',
            'type' => '2',
            'firstAnswer' => '4',
            'secondAnswer' =>'3',
            'thirdAnswer' => '5',
            'quarterAnswer' => '6',
            'correctAnswer' => '3',
            'image' => ''
        ]);
        //Division con decimales agua de tamarindo
        DB::table('elementaryFirst')->insert([
            'question' => 'Jose vende aguas frescas y las despacha en vasos de 0.25 litros. ¿Cuántos vasos completos puede vender si cuenta con 19.25 litros de agua de tamarindo?',
            'type' => '2',
            'firstAnswer' => '30',
            'secondAnswer' =>'60',
            'thirdAnswer' => '77',
            'quarterAnswer' => '80',
            'correctAnswer' => '3',
            'image' => ''
        ]);
        DB::table('elementaryFirst')->insert([
            'question' => 'Jose vende aguas frescas y las despacha en vasos de 0.5 litros. ¿Cuántos vasos completos puede vender si cuenta con 19.25 litros de agua de tamarindo?',
            'type' => '2',
            'firstAnswer' => '40',
            'secondAnswer' =>'30',
            'thirdAnswer' => '36',
            'quarterAnswer' => '38',
            'correctAnswer' => '4',
            'image' => ''
        ]);
        DB::table('elementaryFirst')->insert([
            'question' => 'Jose vende aguas frescas y las despacha en vasos de 0.8 litros. ¿Cuántos vasos completos puede vender si cuenta con 19.25 litros de agua de tamarindo?',
            'type' => '2',
            'firstAnswer' => '63',
            'secondAnswer' =>'19',
            'thirdAnswer' => '24',
            'quarterAnswer' => '26',
            'correctAnswer' => '3',
            'image' => ''
        ]);
        DB::table('elementaryFirst')->insert([
            'question' => 'Jose vende aguas frescas y las despacha en vasos de 1 litro. ¿Cuántos vasos completos puede vender si cuenta con 19.25 litros de agua de tamarindo?',
            'type' => '2',
            'firstAnswer' => '15',
            'secondAnswer' =>'20',
            'thirdAnswer' => '23',
            'quarterAnswer' => '19',
            'correctAnswer' => '4',
            'image' => ''
        ]);
        DB::table('elementaryFirst')->insert([
            'question' => 'Jose vende aguas frescas y las despacha en vasos de 1.5 litros. ¿Cuántos vasos completos puede vender si cuenta con 19.25 litros de agua de tamarindo?',
            'type' => '2',
            'firstAnswer' => '12',
            'secondAnswer' =>'8',
            'thirdAnswer' => '3',
            'quarterAnswer' => '7',
            'correctAnswer' => '1',
            'image' => ''
        ]);
        //Division con decimales agua de limon
        DB::table('elementaryFirst')->insert([
            'question' => 'Mariana vende aguas frescas y las despacha en vasos de 0.25 litros. ¿Cuántos vasos completos puede vender si cuenta con 10 litros de agua de limon? ',
            'type' => '2',
            'firstAnswer' => '35',
            'secondAnswer' =>'50',
            'thirdAnswer' => '40',
            'quarterAnswer' => '10',
            'correctAnswer' => '3',
            'image' => ''
        ]);
        DB::table('elementaryFirst')->insert([
            'question' => 'Mariana vende aguas frescas y las despacha en vasos de 0.5 litros. ¿Cuántos vasos completos puede vender si cuenta con 10 litros de agua de limon? ',
            'type' => '2',
            'firstAnswer' => '32',
            'secondAnswer' =>'20',
            'thirdAnswer' => '12',
            'quarterAnswer' => '25',
            'correctAnswer' => '2',
            'image' => ''
        ]);
        DB::table('elementaryFirst')->insert([
            'question' => 'Mariana vende aguas frescas y las despacha en vasos de 0.8 litros. ¿Cuántos vasos completos puede vender si cuenta con 10 litros de agua de limon? ',
            'type' => '2',
            'firstAnswer' => '8',
            'secondAnswer' =>'6',
            'thirdAnswer' => '12',
            'quarterAnswer' => '15',
            'correctAnswer' => '3',
            'image' => ''
        ]);
        DB::table('elementaryFirst')->insert([
            'question' => 'Mariana vende aguas frescas y las despacha en vasos de 1 litro. ¿Cuántos vasos completos puede vender si cuenta con 10 litros de agua de limon? ',
            'type' => '2',
            'firstAnswer' => '10',
            'secondAnswer' =>'5',
            'thirdAnswer' => '8',
            'quarterAnswer' => '12',
            'correctAnswer' => '1',
            'image' => ''
        ]);
        DB::table('elementaryFirst')->insert([
            'question' => 'Mariana vende aguas frescas y las despacha en vasos de 1.5 litros. ¿Cuántos vasos completos puede vender si cuenta con 10 litros de agua de limon? ',
            'type' => '2',
            'firstAnswer' => '4',
            'secondAnswer' =>'5',
            'thirdAnswer' => '7',
            'quarterAnswer' => '6',
            'correctAnswer' => '4',
            'image' => ''
        ]);
        //Division con decimales agua de limon
        DB::table('elementaryFirst')->insert([
            'question' => 'María vende aguas frescas y las despacha en vasos de 0.25 litros. ¿Cuántos vasos completos puede vender si cuenta con 5.5 litros de agua de jamaica?',
            'type' => '2',
            'firstAnswer' => '18',
            'secondAnswer' =>'25',
            'thirdAnswer' => '20',
            'quarterAnswer' => '22',
            'correctAnswer' => '4',
            'image' => ''
        ]);
        DB::table('elementaryFirst')->insert([
            'question' => 'María vende aguas frescas y las despacha en vasos de 0.5 litros. ¿Cuántos vasos completos puede vender si cuenta con 5.5 litros de agua de jamaica?',
            'type' => '2',
            'firstAnswer' => '10',
            'secondAnswer' =>'11',
            'thirdAnswer' => '15',
            'quarterAnswer' => '20',
            'correctAnswer' => '2',
            'image' => ''
        ]);
        DB::table('elementaryFirst')->insert([
            'question' => 'María vende aguas frescas y las despacha en vasos de 0.8 litros. ¿Cuántos vasos completos puede vender si cuenta con 5.5 litros de agua de jamaica?',
            'type' => '2',
            'firstAnswer' => '5',
            'secondAnswer' =>'4',
            'thirdAnswer' => '6',
            'quarterAnswer' => '8',
            'correctAnswer' => '3',
            'image' => ''
        ]);
        DB::table('elementaryFirst')->insert([
            'question' => 'María vende aguas frescas y las despacha en vasos de 1 litro. ¿Cuántos vasos completos puede vender si cuenta con 5.5 litros de agua de jamaica?',
            'type' => '2',
            'firstAnswer' => '4',
            'secondAnswer' =>'6',
            'thirdAnswer' => '9',
            'quarterAnswer' => '5',
            'correctAnswer' => '4',
            'image' => ''
        ]);
        DB::table('elementaryFirst')->insert([
            'question' => 'María vende aguas frescas y las despacha en vasos de 1.5 litros. ¿Cuántos vasos completos puede vender si cuenta con 5.5 litros de agua de jamaica?',
            'type' => '2',
            'firstAnswer' => '3',
            'secondAnswer' =>'2',
            'thirdAnswer' => '1',
            'quarterAnswer' => '5',
            'correctAnswer' => '1',
            'image' => ''
        ]);
    }
}
