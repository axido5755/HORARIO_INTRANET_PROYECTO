<?php

namespace Database\Seeders;

use App\Models\Ramos;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $now = now();
        $ramos = [
        ['210020','1','35','0','QUÍMICA GENERAL.- ACUÑA ELGUETA ,JOSÉ FRANCISCO','TEO: LU 11:10,12:30 A203AC','TEO: JU 08:10,11:00 A308AC'],

        ['210020','2','30','0','QUÍMICA GENERAL.- RUF ACEVEDO ,BEATRIZ ORIANA'	,'TEO: LU 11:10,12:30 A204AC'	,'TEO: MI 11:10,14:00 A205AC'],

        ['210020',	'3'	,'30','0','QUÍMICA GENERAL.  - AHUMADA RUDOLPH ,RAMON ESTEBAN','TEO: LU 11:10,12:30 A205AC','TEO: MI 11:10,14:00 A206AC'],

        ['210020',	'4','30','0','QUÍMICA GENERAL.-ALVARADO CARRIPAN ,OMAR BLAS','TEO: LU 11:10,12:30 A206AC','TEO: MI 11:10,14:00 A207AC'],
];


$ramos = array_map(function ($ramos) use ($now){
    return[
        'Asignatura' => $ramos[0],
        'Seccion' => $ramos[1],
        'Cupos' => $ramos[2],
        'Inscritos' => $ramos[3],
        'Nombreasignatura' => $ramos[4],
        'Horario1' => $ramos[5],
        'Horario2' => $ramos[6],
    ];

},$ramos);
\DB::table('ramos')->insert($ramos);



 $ramos =[
 [' 220144',	'1',	'25',	'0'	,'CÁLCULO DIFERENCIAL.- NOVA HERNÁNDEZ ,EFRAÍN GABRIEL'	,'TEO: LU 09:40,11:00 A108AC'	,'TEO: MI 09:40,11:00 A203AC'	,'TEO: JU 14:10,15:30 A108AC'],

 ['220144',	'2',	'25',	'0',	'CÁLCULO DIFERENCIAL.- CARRASCO JOFRÉ ,RODRIGO EDUARDO	','TEO: LU 09:40,11:00 A201AC'	,'TEO: MI 09:40,11:00 A204AC',	'TEO: JU 14:10,15:30 A201AC'],

 ['220144'	,'3'	,'25',	'0',	'CÁLCULO DIFERENCIAL.- D AMICO DAVAGNINO ,PATRICIA XIMENA',	'TEO: LU 09:40,11:00 A202AC'	,'TEO: MI 09:40,11:00 A205AC'	,'TEO: JU 14:10,15:30 A202AC'],

 ['220145',	'1',	'15',	'0','ÁLGEBRA LINEAL.- TAPIA GUERRERO ,VICTOR MANUEL','TEO: LU 08:10,09:30 A107AC','	TEO: MA 15:40,17:00 A105AC'	,'TEO: MI 08:10,09:30 A106AC'],
         ];

         $ramos = array_map(function ($ramos) use ($now){
             return[
                 'Asignatura' => $ramos[0],
                 'Seccion' => $ramos[1],
                 'Cupos' => $ramos[2],
                 'Inscritos' => $ramos[3],
                 'Nombreasignatura' => $ramos[4],
                 'Horario1' => $ramos[5],
                 'Horario2' => $ramos[6],
                 'Horario3' => $ramos[7],
             ];
        
     },$ramos);
     \DB::table('ramos')->insert($ramos);
}
}
