<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Http\Requests\PacienteFormRequest;
use App\Models\Municipio;

class PacienteController extends Controller
{
    
    private $paciente;
    private $municipio;
    private $totalPage = 10;
    
    public function __construct(Paciente $paciente, Municipio $municipio) {
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
        $title = 'Lista de Paciente';
        $pacientes = $this->paciente->paginate($this->totalPage);
        
        return view('pacientes.pacienteview', compact('pacientes', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Cadastrar Novo Paciente';       

        $cidades = municipio::pluck('nome');        

        return view('pacientes.create-edit', compact('title', 'cidades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PacienteFormRequest $request)
    {
        //captura todos os dados do formulário de cadastro
        //dd($request->all());

        //captura somente os dados passados na array dentro de only.
        //dd($request->only(['nome','datanasc', 'municipio']));

        //captura todos os campos exceto campo passado na array dentro de except
        //dd($request->except(['_token']));

        //capturar somente um campo especifico
        //dd($request->input('nome'));

        //Pega todos os dados que vem do formulário de cadastro de pacientes.
        $title = 'Cadastro de Pacientes';
        $dataForm = $request->except('_token');

        $dataForm['active'] = (!isset($dataForm['active'])) ? 0 : 1;
        
        //Faz o cadastro do paciente
        $insert = $this->paciente->create($dataForm);

        if ($insert)
            return redirect()->route('paciente.index')->with('success', 'Registro inserido com sucessso!');
        else
            return redirect()->route('paciente.create-edit')->with('error', 'Falha ao tentar inserir o registro.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paciente = $this->paciente->find($id);

        $title = "Paciente: {$paciente->nome}";

        return view('pacientes.show-paciente', compact('paciente', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
                
        //Recupera o paciente pelo seu id
        $paciente = $this->paciente->find($id);

        $title = "Editar Paciente: {$paciente->nome}";

        $cidades = municipio::pluck('nome');

        return view('pacientes.create-edit', compact('title', 'cidades', 'paciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PacienteFormRequest $request, $id)
    {
        //Recupera todos os dados do formulário
        $dataForm = $request->all();
        
        //Recupera o item para editar
        $paciente = $this->paciente->find($id);
        
        //Altera os itens
        $update = $paciente->update($dataForm);
        
        //Verifica se realmente editou
        if($update)
            return redirect()->route('paciente.index');
        else 
            return redirect()->route('paciente.edit', $id)->with(['errors' => 'Falha ao editar']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paciente = $this->paciente->find($id);

        $delete = $paciente->delete();

        if($delete)
            return redirect()->route('paciente.index');
        else
            return redirect()->route('paciente.show', $id)->with(['errors' => 'Falha ao deletar.']);
    }
}
