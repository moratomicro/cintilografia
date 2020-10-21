<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipio;
use App\Http\Requests\MunicipioFormRequest;

class MunicipioController extends Controller
{
    private $municipio;
    private $totalPage = 15;
    
    public function __construct(Municipio $municipio) {
        $this->municipio = $municipio;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Lista de Municípios';
        $municipios = $this->municipio->paginate($this->totalPage);
        
        return view('municipios.municipioview', compact('municipios', 'title'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Cadastrar Município';
        
        return view('municipios.create-edit', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MunicipioFormRequest $request)
    {
        //Pega todos os dados que vem do formulário de cadastro de municipios.
        $title = 'Cadastro de Municípios';
        $dataForm = $request->except('_token');

        $dataForm['active'] = (!isset($dataForm['active'])) ? 0 : 1;
        
        //Faz o cadastro do paciente
        $insert = $this->municipio->create($dataForm);

        if ($insert)
            return redirect()->route('municipio.index')->with('success', 'Registro inserido com sucessso!');
        else
            return redirect()->route('municipio.create-edit')->with('error', 'Falha ao tentar inserir o registro.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $municipio = $this->municipio->find($id);

        $title = "Municipio: {$municipio->nome}";

        return view('municipios.show-municipio', compact('municipio', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $municipio = $this->municipio->find($id);
        $title = "Atualizar Município: {$municipio->nome}";
        //Recupera o paciente pelo seu id
        $municipio = $this->municipio->find($id);
                

        return view('municipios.create-edit', compact('title', 'municipio'));
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
        //Recupera todos os dados do formulário
        $dataForm = $request->all();
        
        //Recupera o item para editar
        //Recupera todos os dados do formulário
        $dataForm = $request->all();
        
        //Recupera o item para editar
        $municipio= $this->municipio->find($id);
        
        //Altera os itens
        $update = $municipio->update($dataForm);
        
        //Verifica se realmente editou
        if($update)
            return redirect()->route('municipio.index');
        else 
            return redirect()->route('municipio.edit', $id)->with(['errors' => 'Falha ao editar']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $municipio = $this->municipio->find($id);

        $delete = $municipio->delete();

        if($delete)
            return redirect()->route('municipio.index');
        else
            return redirect()->route('municipio.show', $id)->with(['errors' => 'Falha ao deletar.']);
    }
}
