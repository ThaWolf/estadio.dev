<?php

namespace App\Http\Controllers;
use App\Torneo;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;


class ControladorTorneo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $torneos = Torneo::all();
        
        return view('torneo.lista',['torneos' => $torneos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view ('torneo.nuevo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        $torneo = new torneo();
        $torneo->nombre = $request['nombre'];
        $torneo->descripcion = $request['descripcion'];
        $torneo->formato = $request['formato'];
        $torneo->save();
        return "Torneo creado!";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            
                $inscriptos = User::whereHas('torneos',function($query) use ($id)
            {
                $query->where('id','=',$id);
            }
            )->get();

        return view('torneo.principal', ['inscriptos' => $inscriptos] ) // Corregir, $inscriptos tiene que reflejar directamente el Nombre del user segun el ID.
        -> with ('torneo', Torneo::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
                  $inscripto = $request->user();
                  $torneo = Torneo::findOrFail($id);
                  $inscripto->torneos()->attach($torneo);
                  return ["Felicitaciones", $inscripto->name,"estas inscripto a ",$torneo->nombre];
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
