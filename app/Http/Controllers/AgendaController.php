<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ExameFormRequest;
use App\Http\Requests\PacienteFormRequest;
use App\Models\Agenda;
use App\Models\Paciente;
use App\Models\Municipio;


class AgendaController extends Controller
{
    private $agenda;
    private $paciente;
    private $municipio;
    private $totalPage = 10;

    public function __construct(Agenda $agenda, Paciente $paciente, Municipio $municipio) {
        $this->agenda = $agenda;
        $this->paciente = $paciente;
        $this->municipio = $municipio;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Agendas';
        $agendas = $this->agenda->paginate($this->totalPage);
        
        return view('agendas.agendaview', compact('agendas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Agendar Paciente';
        
        $cidades = $this->municipio->all('nome');
        
        return view('agendas.create-edit', compact('title', 'cidades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
