<?php

namespace consejo_com\Http\Controllers;


use Illuminate\Http\Request;
use consejo_com\Http\Requests\CuotaCreateRequest;
use consejo_com\Models\Cuota;
use Session;
use Redirect;
use DB;
use PDF;
use View;
use App;

class PaymentsController extends Controller
{   
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pagos.payment');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pagos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CuotaCreateRequest $request)
    {   
        $fecha = new \DateTime();

        Cuota::create([
            'f_cuota' => $fecha->format('d-m-Y').$fecha->format(':H:i:s'),
            'n_finca' => $request['n_finca'],
            'monto' => $request['monto'],
            'ci_tesorero' => $request['nac_tesorero'].$request['ci_tesorero'],
            'nombre_tesorero' => $request['nombre_tesorero'],
            'ci_contribuyente' => $request['nac_contribuyente'].$request['ci_contribuyente'],
            'nombre_contribuyente' => $request['nombre_contribuyente'],
            'mes_cancelado' => $request['mes_cancelado'],
            ]);
        
        Session::flash('message-success','Pago registrado correctamente');
        return redirect('/pagos');
        
    }

    public function listarPagos(){

        $pagos = DB::table('cuota')->orderBy('f_cuota','n_finca')->paginate(10);
        $var = false;
        return view('pagos.showPagos',compact('pagos','var'));
    }

    public function listarPagosFinca(){

        $pagos = Cuota::paginate(10);
        return view('pagos.showPagosFinca',compact('pagos'));
    }

    public function showPagosFinca(){
        $n_finca = $_GET['n_finca'];
        $pagos = DB::table('cuota')->where('n_finca',$n_finca)->paginate(10);
        $var = true;
        return view('pagos.showPagos',compact('pagos','var'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $pago = Cuota::find($id);
        return view('pagos.edit',compact('pago'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CuotaCreateRequest $request, $id)
    {   

        $pago = Cuota::find($id);
        $pago->fill($request->all());
        $pago->save();
        Session::flash('message-success','Pago editado correctamente');
        return redirect('/listarPago');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cuota::destroy($id);
        Session::flash('message-success','Pago eliminado correctamente');
        return redirect('/listarPago');
    }

    public function generarPDF(){

        $var = $_GET['var'];
        $nombre = $_GET['nombre'];

        if($var==true){
            $pagos = DB::table('cuota')->where('n_finca',$nombre)->get();
            $nombre_archivo = 'listaDePagos_('.$nombre.').pdf';
        }

        else{
            $pagos = Cuota::all();
            $nombre_archivo = 'listaDePagos_All.pdf';
        }

        $pdf = PDF::loadView('pdf.pagos',compact('pagos'));
        return $pdf->download($nombre_archivo);
    }
}
