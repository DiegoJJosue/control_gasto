<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipo;
use App\Movimientos;
use App\User;
use App\Categorias;
use DB;
use Auth;
use PDF;

class MovimientosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {

    // $pdf = App('dompdf.wrapper');
    // $pdf->loadHTML('<h1>Hola mundo PDF</h1>');
    // return $pdf->stream();
      

        $data=$request->all();
        $desde=date('Y-m-d');
        $hasta=date('y-m-d');
        if (isset($data['desde'])) {
        $desde=$data['desde'];
        $hasta=$data['hasta'];
        }

        $movimientos=DB::select("
        SELECT * FROM movimientos m 
        JOIN users u ON m.usu_id=u.usu_id
        JOIN tipo t ON m.tip_id=t.tip_id
        WHERE m.mov_fecha BETWEEN '$desde' AND '$hasta'
            ");

//boton del pdf
            if(isset($data['btn_pdf'])){
            $data=['movimientos'=>$movimientos];
            $pdf = PDF::loadView('movimientos.reporte', $data);
            return $pdf->stream('reporte.pdf');
     }

        return view('movimientos.index')
         ->with('movimientos',$movimientos)
         ->with('desde',$desde)
         ->with('hasta',$hasta)
         ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $movimientos=movimientos::all();
        $tipos=tipo::all();
        return view('movimientos.create')->with('movimientos',$movimientos)->with('tipos',$tipos)
        ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
       $data['usu_id']=Auth::user()->usu_id;
        
       $data['cat_id']=Auth::user()->usu_id;
        movimientos::create($data);
        return redirect(route('movimientos'));

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
        $movimientos=movimientos::find($id);
        $tipo=Tipo::all();
        return view('movimientos.edit')
        ->with('movimientos',$movimientos)->with('tipo',$tipo)
        ;
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
        $Mov=Movimientos::find($id);
        $Mov->update($request->all());
        return redirect(route('movimientos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Movimientos::destroy($id);
        return redirect(route('movimientos'));    
    }
}
