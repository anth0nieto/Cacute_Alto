<?php

namespace consejo_com\Http\Controllers;
use Illuminate\Support\Facades\DB;
use consejo_com\Http\Controllers\Controller;
use Illuminate\Http\Request;
use consejo_com\Http\Requests;
use consejo_com\Models\Productor;
use consejo_com\Models\ProduceEn;
use consejo_com\Models\Adulto;
use consejo_com\Models\Menor;
use consejo_com\Models\Vivienda;
use consejo_com\Models\Finca;
use consejo_com\Models\Constancia;
use consejo_com\Models\Reunion;
use consejo_com\Models\Asistencia;
use consejo_com\Models\Cuota;
use consejo_com\Models\ViveEn;
use Illuminate\Routing\Redirector;



class RegistryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('registry');
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

        $registry_type = $request->input('registry_type');
        if($registry_type == "Persona")
        {
            $age_opt = $request->input('age_opt');
            if($age_opt == "Adult")
            {
                $prod_opt = $request->input('prod_opt');
                if($prod_opt == "Prod_true")
                { 
                    $Productor = new Productor;
                    $Productor->id = $request -> input('ad_fullid');
                    $Productor->p_nombre = $request -> input('ad_first_name');
                    $Productor->s_nombre = $request -> input('ad_middle_name');
                    $Productor->p_apellido = $request -> input('ad_surname');
                    $Productor->s_apellido = $request -> input('ad_second_surname');
                    $Productor->f_nac = $request -> input('ad_datepicker');
                    $Productor->pais_nac = $request -> input('ad_country');
                    $Productor->sexo = $request->input('ad_gender_type'); 
                    if($request->input('ad_medcond_opt') == 'true')
                    {
                        $Productor->cond_medica = true;
                    }
                    else
                    {
                        $Productor->cond_medica = false;
                    }
                    $Productor->telefono = $request -> input('phone');
                    $Productor->ocupacion = $request -> input('occupation');
                    if($request->input('alpha') == 'true')
                    {
                        $Productor->alfabetizado = true;
                    }
                    else
                    {
                        $Productor->alfabetizado = false;
                    }
                    $Productor->codigo = $request->input('prod_code');
                    $Productor->hectareas = $request->input('prod_area');
                    $Productor->tenencia = $request->input('prod_property');
                    $Productor->save();
                }

                else
                {
                    $Adulto = new Adulto;
                    $Adulto->id = $request -> input('ad_fullid');
                    $Adulto->p_nombre = $request -> input('ad_first_name');
                    $Adulto->s_nombre = $request -> input('ad_middle_name');
                    $Adulto->p_apellido = $request -> input('ad_surname');
                    $Adulto->s_apellido = $request -> input('ad_second_surname');
                    $Adulto->f_nac = $request -> input('ad_datepicker');
                    $Adulto->pais_nac = $request -> input('ad_country');
                    $Adulto->sexo = $request->input('ad_gender_type'); 
                    if($request->input('ad_medcond_opt') == 'true')
                    {
                        $Adulto->cond_medica = true;
                    }
                    else
                    {
                        $Adulto->cond_medica = false;
                    }
                    $Adulto->telefono = $request -> input('phone');
                    $Adulto->ocupacion = $request -> input('occupation');
                    if($request->input('alpha') == 'true')
                    {
                        $Adulto->alfabetizado = true;
                    }
                    else
                    {
                        $Adulto->alfabetizado = false;
                    }
                    $Adulto->save();
                }
            }

            else
            {
                $Menor = new Menor;
                $idrep_type = $request -> input('idrep_type');
                $idrep = $request -> input('idrep');
                /*$child_count = DB::table('menor')
                    ->where('repmenor','=', '". $idrep. "')
                    ->count('menor');    
                $child_count = $child_count + 1; */
                $Hijo = rand(1,9);   
                $Menor->id = "$idrep_type-$idrep-$Hijo";
                $Menor->p_nombre = $request -> input('u_first_name');
                $Menor->s_nombre = $request -> input('u_middle_name');
                $Menor->p_apellido = $request -> input('u_surname');
                $Menor->s_apellido = $request -> input('u_second_surname');
                $Menor->f_nac = $request -> input('u_datepicker');
                $Menor->pais_nac = $request -> input('u_country');
                $Menor->sexo = $request->input('u_gender_type'); 
                if($request->input('u_med_cond') == 'true')
                {
                    $Menor->cond_medica = true;
                }
                else
                {
                    $Menor->cond_medica = false;
                }
                $Menor->repmenor = "$idrep_type-$idrep-0";
                if($request->input('school') == 'true')
                {
                    $Menor->escolarizado = true;
                }
                else
                {
                    $Menor->escolarizado = false;
                }
                $Menor->relacion_rep = $request->input('reprel'); 
                $Menor->save();
            }   



        }

        elseif ($registry_type == "Vivienda") 
        {
            $home_opt = $request->input('home_opt');
            if($home_opt == "Address")
            {
                /*$home_count = DB::table('vivienda')->count();    
                $home_count = $home_count + 1;*/
                $Vivienda = new Vivienda;
                $Vivienda->direccion = $request->input('home_address');
                if($request->input('home_prop') == 'true')
                {
                    $Vivienda->propia = true;
                }
                else
                {
                    $Vivienda->propia = false;
                }
                $Vivienda->save();

            }   
            else 
            {
                $ViveEn = new ViveEn;
                $idhab_type = $request->input('idhab_type');
                $hab_id = $request->input('hab_id');
                $ViveEn->idpersona = "$idhab_type-$hab_id";
                $ViveEn->codigovivienda = $request->input('home_cod'); 
                $ViveEn->save();
            }         
        }

        elseif ($registry_type == "Finca") 
        {
            $land_opt = $request->input('land_opt');
            if($land_opt == "Land")
            {
                $Finca = new Finca;
                $Finca->nombre = $request->input('farm_name1');
                $Finca->turno_riego = $request->input('water_turn');
                $Finca->save();

            }   
            else 
            {
                $ProduceEn = new ProduceEn;
                $ProduceEn->codigoprod = $request->input('code_prod');
                $ProduceEn->nombrefinca = $request->input('farm_name2'); 
                $ProduceEn->save();
            }         
        }

        elseif ($registry_type == "Constancia") 
        {
            $Constancia = new Constancia;
            $Constancia->f_const = $request->input('const_datepicker');
            $idconst_type = $request -> input('idconst_type');
            $const_id = $request -> input('const_id');
            $Constancia->solicitante = "$idconst_type-$const_id-0";
            $Constancia->tipo = $request->input('const_type');
            $Constancia->save();
        }


        elseif ($registry_type == "Reunión") 
        {
            $meet_opt = $request->input('meet_opt');
            if($meet_opt == "act")
            {
                $Reunion = new Reunion;
                $Reunion->f_reunion = $request->input('meet_datepicker1');
                $Reunion->acta = $request->input('meet_act');
                $Reunion->save();

            }   
            else 
            {
                $Asistencia = new Asistencia;
                $Asistencia->reunion_asist = $request->input('meet_datepicker2');
                $idmeet_type = $request -> input('idmeet_type');
                $meet_id = $request -> input('meet_id');
                $Asistencia->asistente = "$idmeet_type-$meet_id-0";
                $Asistencia->save();
            }         
        }

        elseif ($registry_type == "Cuota") 
        {
            $Cuota = new Cuota;
            $Cuota->f_cuota = $request->input('fee_datepicker');
            $Cuota->n_finca = $request->input('land_name');
            $Cuota->monto = $request->input('amount');
            $Cuota->save();
        }

        return view ('registry');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
