<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquiposVisitantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('equipos_visitantes')->truncate();

        DB::table('equipos_visitantes')->insert([

    ['nombre'=>'UPB Gandia','categoria'=>'Junior','genero'=>'M','entrenador'=>'Entrenador Junior M','foto'=>'gandia.jpg'],
    ['nombre'=>'UPB Gandia','categoria'=>'Junior','genero'=>'F','entrenador'=>'Entrenador Junior F','foto'=>'gandia.jpg'],
    ['nombre'=>'UPB Gandia','categoria'=>'Senior','genero'=>'M','entrenador'=>'Entrenador Senior M','foto'=>'gandia.jpg'],
    ['nombre'=>'UPB Gandia','categoria'=>'Senior','genero'=>'F','entrenador'=>'Entrenador Senior F','foto'=>'gandia.jpg'],
    ['nombre'=>'UPB Gandia','categoria'=>'Cadete','genero'=>'M','entrenador'=>'Entrenador Cadete M','foto'=>'gandia.jpg'],
    ['nombre'=>'UPB Gandia','categoria'=>'Cadete','genero'=>'F','entrenador'=>'Entrenador Cadete F','foto'=>'gandia.jpg'],
    ['nombre'=>'UPB Gandia','categoria'=>'Infantil','genero'=>'M','entrenador'=>'Entrenador Infantil M','foto'=>'gandia.jpg'],
    ['nombre'=>'UPB Gandia','categoria'=>'Infantil','genero'=>'F','entrenador'=>'Entrenador Infantil F','foto'=>'gandia.jpg'],
    ['nombre'=>'UPB Gandia','categoria'=>'Alevín','genero'=>'M','entrenador'=>'Entrenador Alevín M','foto'=>'gandia.jpg'],
    ['nombre'=>'UPB Gandia','categoria'=>'Alevín','genero'=>'F','entrenador'=>'Entrenador Alevín F','foto'=>'gandia.jpg'],
    ['nombre'=>'UPB Gandia','categoria'=>'Benjamín','genero'=>'M','entrenador'=>'Entrenador Benjamín M','foto'=>'gandia.jpg'],
    ['nombre'=>'UPB Gandia','categoria'=>'Benjamín','genero'=>'F','entrenador'=>'Entrenador Benjamín F','foto'=>'gandia.jpg'],
    ['nombre'=>'UPB Gandia','categoria'=>'Juvenil','genero'=>'M','entrenador'=>'Entrenador Juvenil M','foto'=>'gandia.jpg'],
    ['nombre'=>'UPB Gandia','categoria'=>'Juvenil','genero'=>'F','entrenador'=>'Entrenador Juvenil F','foto'=>'gandia.jpg'],
    ['nombre'=>'UPB Gandia','categoria'=>'Prebenjamín','genero'=>'M','entrenador'=>'Entrenador Prebenjamín M','foto'=>'gandia.jpg'],
    ['nombre'=>'UPB Gandia','categoria'=>'Prebenjamín','genero'=>'F','entrenador'=>'Entrenador Prebenjamín F','foto'=>'gandia.jpg'],

    ['nombre'=>'Valencia Basket','categoria'=>'Junior','genero'=>'M','entrenador'=>'Entrenador Junior M','foto'=>'LogoValenciaBasket.png'],
    ['nombre'=>'Valencia Basket','categoria'=>'Junior','genero'=>'F','entrenador'=>'Entrenador Junior F','foto'=>'LogoValenciaBasket.png'],
    ['nombre'=>'Valencia Basket','categoria'=>'Senior','genero'=>'M','entrenador'=>'Entrenador Senior M','foto'=>'LogoValenciaBasket.png'],
    ['nombre'=>'Valencia Basket','categoria'=>'Senior','genero'=>'F','entrenador'=>'Entrenador Senior F','foto'=>'LogoValenciaBasket.png'],
    ['nombre'=>'Valencia Basket','categoria'=>'Cadete','genero'=>'M','entrenador'=>'Entrenador Cadete M','foto'=>'LogoValenciaBasket.png'],
    ['nombre'=>'Valencia Basket','categoria'=>'Cadete','genero'=>'F','entrenador'=>'Entrenador Cadete F','foto'=>'LogoValenciaBasket.png'],
    ['nombre'=>'Valencia Basket','categoria'=>'Infantil','genero'=>'M','entrenador'=>'Entrenador Infantil M','foto'=>'LogoValenciaBasket.png'],
    ['nombre'=>'Valencia Basket','categoria'=>'Infantil','genero'=>'F','entrenador'=>'Entrenador Infantil F','foto'=>'LogoValenciaBasket.png'],
    ['nombre'=>'Valencia Basket','categoria'=>'Alevín','genero'=>'M','entrenador'=>'Entrenador Alevín M','foto'=>'LogoValenciaBasket.png'],
    ['nombre'=>'Valencia Basket','categoria'=>'Alevín','genero'=>'F','entrenador'=>'Entrenador Alevín F','foto'=>'LogoValenciaBasket.png'],
    ['nombre'=>'Valencia Basket','categoria'=>'Benjamín','genero'=>'M','entrenador'=>'Entrenador Benjamín M','foto'=>'LogoValenciaBasket.png'],
    ['nombre'=>'Valencia Basket','categoria'=>'Benjamín','genero'=>'F','entrenador'=>'Entrenador Benjamín F','foto'=>'LogoValenciaBasket.png'],
    ['nombre'=>'Valencia Basket','categoria'=>'Juvenil','genero'=>'M','entrenador'=>'Entrenador Juvenil M','foto'=>'LogoValenciaBasket.png'],
    ['nombre'=>'Valencia Basket','categoria'=>'Juvenil','genero'=>'F','entrenador'=>'Entrenador Juvenil F','foto'=>'LogoValenciaBasket.png'],
    ['nombre'=>'Valencia Basket','categoria'=>'Prebenjamín','genero'=>'M','entrenador'=>'Entrenador Prebenjamín M','foto'=>'LogoValenciaBasket.png'],
    ['nombre'=>'Valencia Basket','categoria'=>'Prebenjamín','genero'=>'F','entrenador'=>'Entrenador Prebenjamín F','foto'=>'LogoValenciaBasket.png'],

    ['nombre'=>'CB Murcia','categoria'=>'Senior','genero'=>'M','entrenador'=>'Entrenador Senior M','foto'=>'murcia.jpeg'],
    ['nombre'=>'CB Murcia','categoria'=>'Senior','genero'=>'F','entrenador'=>'Entrenador Senior F','foto'=>'murcia.jpeg'],

    ['nombre'=>'Joventut Badalona','categoria'=>'Senior','genero'=>'M','entrenador'=>'Entrenador Senior M','foto'=>'badalona.png'],
    ['nombre'=>'Joventut Badalona','categoria'=>'Senior','genero'=>'F','entrenador'=>'Entrenador Senior F','foto'=>'badalona.png'],

    ['nombre'=>'CB Gran Canaria','categoria'=>'Senior','genero'=>'M','entrenador'=>'Entrenador Senior M','foto'=>'grancanaria.svg'],
    ['nombre'=>'CB Gran Canaria','categoria'=>'Senior','genero'=>'F','entrenador'=>'Entrenador Senior F','foto'=>'grancanaria.svg'],

    ['nombre'=>'CB Zaragoza','categoria'=>'Senior','genero'=>'M','entrenador'=>'Entrenador Senior M','foto'=>'zaragoza.png'],
    ['nombre'=>'CB Zaragoza','categoria'=>'Senior','genero'=>'F','entrenador'=>'Entrenador Senior F','foto'=>'zaragoza.png'],

    ['nombre'=>'CB Andorra','categoria'=>'Senior','genero'=>'M','entrenador'=>'Entrenador Senior M','foto'=>'andorra.jpg'],
    ['nombre'=>'CB Andorra','categoria'=>'Senior','genero'=>'F','entrenador'=>'Entrenador Senior F','foto'=>'andorra.jpg'],

]);
    DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
