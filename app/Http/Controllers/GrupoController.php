<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grupo;
use App\Http\Requests\GrupoFormRequest;

class GrupoController extends Controller
{
    private $grupo;
    private $totalPage = 10;
    
    public function __construct(Grupo $grupo) {
        $this->grupo = $grupo;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Grupos Disponíveis';
        $grupos = $this->grupo->paginate($this->totalPage);
        
        return view('grupos.grupoview', compact('grupos', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Cadastrar Grupo';
        
        return view('grupos.create-edit', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GrupoFormRequest $request)
    {
        //Pega todos os dados que vem do formulário de cadastro de grupo.
        $title = 'Cadastro de Grupo';
        $dataForm = $request->except('_token');
        
        //Faz o cadastro do grupo
        $insert = $this->grupo->create($dataForm);

        if ($insert)
            return redirect()->route('grupo.index')->with('success', 'Registro inserido com sucessso!');
        else
            return redirect()->route('grupo.create-edit')->with('error', 'Falha ao tentar inserir o registro.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grupo = $this->grupo->find($id);

        $title = "Grupo: {$grupo->nome}";

        return view('grupos.show-grupo', compact('grupo', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grupo = $this->grupo->find($id);
        $title = "Atualizar Grupo: {$grupo->nome}";

        return view('grupos.create-edit', compact('title', 'grupo'));
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
        $grupo= $this->grupo->find($id);
        
        //Altera os itens
        $update = $grupo->update($dataForm);
        
        //Verifica se realmente editou
        if($update)
            return redirect()->route('grupo.index');
        else 
            return redirect()->route('grupo.edit', $id)->with(['errors' => 'Falha ao editar']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grupo = $this->grupo->find($id);

        $delete = $grupo->delete();

        if($delete)
            return redirect()->route('grupo.index');
        else
            return redirect()->route('grupo.show', $id)->with(['errors' => 'Falha ao deletar.']);
    }
}
