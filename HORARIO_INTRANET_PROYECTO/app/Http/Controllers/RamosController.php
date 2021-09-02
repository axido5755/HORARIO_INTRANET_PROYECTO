<?php

namespace App\Http\Controllers;

use App\Models\Ramos;
use Illuminate\Http\Request;

class RamosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        for ($i=0; $i < 5; $i++) { 
          for ($j=0; $j < 18; $j++) { 
              $HorarioMatrix[$i][$j] = "-";
          }
        }

        for ($p=0; $p < count($request->check); $p++) { 
            
        $aux = $request->check[$p];
        $name = explode("/", $aux);

        $Asignatura         = $name[0];
        $Seccion            = $name[1];
        $Nombreasignatura   = explode(".",$name[2])[0];

        $Horario1x = explode(":",$name[3],2);
        if($Horario1x[0] != ""){
            $Horario1d          = substr(explode(" ",explode(",",$Horario1x[1])[0])[1],0,3);
            $Horario1e          = substr(explode(",",$Horario1x[1])[0],-5);
            $Horario1s          = substr(explode(",",$Horario1x[1])[1],0,5);

            $Horario1d = $this->dia($Horario1d);
            $Horario1e = $this->horaI($Horario1e);
            try {
                $Horario1s = $this->horaf($Horario1s);
            } catch (\Throwable $th) {
                $Horario1s = $this->horaf($Horario1s);
            }

            do {
                if( $HorarioMatrix[$Horario1d-1][$Horario1e-1] == "-"){
                    $HorarioMatrix[$Horario1d-1][$Horario1e-1] = $Asignatura." ".$Seccion." ".$Nombreasignatura;
                    }else{
                    $HorarioMatrix[$Horario1d-1][$Horario1e-1] = $HorarioMatrix[$Horario1d-1][$Horario1e-1].','. $Asignatura." ".$Seccion." ".$Nombreasignatura ;
                    }

            $Horario1e = $Horario1e + 1;
            } while ($Horario1e != $Horario1s+1);
        }

        $Horario2x          = explode(":",$name[4],2);
        if($Horario2x[0] != ""){
            $Horario2d          = substr(explode(" ",explode(",",$Horario2x[1])[0])[1],0,3);
            $Horario2e          = substr(explode(",",$Horario2x[1])[0],-5);
            $Horario2s          = substr(explode(",",$Horario2x[1])[1],0,5);
            
            $Horario2d = $this->dia($Horario2d);
            $Horario2e = $this->horaI($Horario2e);
            try {
                $Horario2s = $this->horaf($Horario2s);
            } catch (\Throwable $th) {
                $Horario2s = $this->horaf($Horario2s);
            }

            do {
            if( $HorarioMatrix[$Horario2d-1][$Horario2e-1] == "-"){
                $HorarioMatrix[$Horario2d-1][$Horario2e-1] = $Asignatura." ".$Seccion." ".$Nombreasignatura ;
                }else{
                $HorarioMatrix[$Horario2d-1][$Horario2e-1] = $HorarioMatrix[$Horario2d-1][$Horario2e-1].','. $Asignatura." ".$Seccion." ".$Nombreasignatura ;
                }
            $Horario2e = $Horario2e + 1;
            } while ($Horario2e != $Horario2s+1);
        }

        $Horario3x          = explode(":",$name[5],2);
        if($Horario3x[0] != null){
            $Horario3d          = substr(explode(" ",explode(",",$Horario3x[1])[0])[1],0,3);
            $Horario3e          = substr(explode(",",$Horario3x[1])[0],-5);
            $Horario3s          = substr(explode(",",$Horario3x[1])[1],0,5);

            $Horario3d = $this->dia($Horario3d);
            $Horario3e = $this->horaI($Horario3e);
            try {
                $Horario3s = $this->horaf($Horario3s);
            } catch (\Throwable $th) {
                $Horario3s = $this->horaf($Horario3s);
            }

            do {
            if( $HorarioMatrix[$Horario3d-1][$Horario3e-1] == "-"){
                $HorarioMatrix[$Horario3d-1][$Horario3e-1] = $Asignatura." ".$Seccion." ".$Nombreasignatura ;
            }else{
                $HorarioMatrix[$Horario3d-1][$Horario3e-1] = $HorarioMatrix[$Horario3d-1][$Horario3e-1].','. $Asignatura." ".$Seccion." ".$Nombreasignatura ;
            }
            $Horario3e = $Horario3e + 1;
            } while ($Horario3e != $Horario3s+1);
        }
        }

        return view('Horario',Compact('HorarioMatrix'));
    }

    public function dia($dia){
    $dia = strtoupper($dia);
    $horizontal = 0;
        switch ($dia) {
            case 'LU':
                $horizontal = 1;
                break;

            case 'MA':
                $horizontal = 2;
                break;

            case 'MI':
                $horizontal = 3;
                break;

            case 'JU':
                $horizontal = 4;
                break;

            case 'VI':
                $horizontal = 5;
                break;

            default:
                # code...
                break;
        }
        return $horizontal;
    }

    public function horaI($dia){
        $horizontal = 0;
            switch ($dia) {
                case '08:10':
                    $horizontal = 1;
                    break;
    
                case '08:50':
                    $horizontal = 2;
                    break;
    
                case '09:40':
                    $horizontal = 3;
                    break;
    
                case '10:20':
                    $horizontal = 4;
                    break;
    
                case '11:10':
                    $horizontal = 5;
                    break;

                case '11:50':
                    $horizontal = 6;
                    break;  

                case '12:40':
                    $horizontal = 7;
                    break;  
                    
                case '13:20':
                    $horizontal = 8;
                    break;   

                case '14:10':
                    $horizontal = 9;
                    break; 

                case '14:50':
                    $horizontal = 10;
                    break; 

                case '15:40':
                    $horizontal = 11;
                    break; 

                case '16:20':
                    $horizontal = 12;
                    break; 

                case '17:10':
                    $horizontal = 13;
                    break;
                
                case '17:50':
                    $horizontal = 14;
                    break; 
                        
                case '18:40':
                    $horizontal = 15;
                    break; 
                    
                case '19:20':
                    $horizontal = 16;
                    break; 

                case '20:10':
                    $horizontal = 17;
                    break; 
                    
                case '20:50':
                    $horizontal = 18;
                    break; 
    
                default:
                    # code...
                    break;
            }
            return $horizontal;
        }

        public function horaF($dia){
            $horizontal = 0;
                switch ($dia) {
                    case '09:30':
                        $horizontal = 2;
                        break;
        
                    case '11:00':
                        $horizontal = 4;
                        break;
        
                    case '12:30':
                        $horizontal = 6;
                        break;
        
                    case '14:00':
                        $horizontal = 8;
                        break;
        
                    case '15:30':
                        $horizontal = 10;
                        break;
    
                    case '17:00':
                        $horizontal = 12;
                        break;  
    
                    case '18:30':
                        $horizontal = 14;
                        break;  
                        
                    case '20:00':
                        $horizontal = 16;
                        break;   
    
                    case '21:30':
                        $horizontal = 18;
                        break; 
        
                    default:
                        # code...
                        break;
                }
                return $horizontal;
            }
    

    public function horario(){
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ramos  $ramos
     * @return \Illuminate\Http\Response
     */
    public function show(Ramos $ramos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ramos  $ramos
     * @return \Illuminate\Http\Response
     */
    public function edit(Ramos $ramos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ramos  $ramos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ramos $ramos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ramos  $ramos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ramos $ramos)
    {
        //
    }

    public function getramos()
    {
        
        $datos['Ramos'] = Ramos::all();
        return view('welcome', $datos);
    }
}
