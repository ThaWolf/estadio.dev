<?php

namespace App\Http\Controllers;


use App\Torneo;
use App\User;
use App\Pool;
use App\Round;
use App\Match;
use App\Game;
use Illuminate\Http\Request;
use App\Http\Requests;


class ControllerBrackets extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('torneo.brackets');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $torneo = Torneo::find($id);
        $inscriptos = Torneo::find($id)->user;
        $cantins = $inscriptos->count();
        if ($cantins > 7 ) {
        
        for ($i=0; $i < ($cantins/2) ; $i++) { 
            $round = new Round(['name' => $i]);
            $round = $torneo->rounds()->save($round);
        }
    }
        //foreach ($inscriptos as  $inscripto) {
        //$inscripto->pools()->attach($pool);
        //}

         /*
         - Lee cant de inscriptos genera rounds y matches x round segun cantidad de inscriptos(por ahora perfectos)
         - Copia lista de inscriptos a la pool del primer round
         - Randomiza la pool y la distribuye en los matches
         


         */
         return Response ($rounds = Torneo::find($id)->rounds);
         //return redirect('brackets');  
        
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
