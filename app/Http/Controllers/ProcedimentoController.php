<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Procedimento;
use App\Http\Requests\ProcedimentoFormRequest;
use App\Models\Grupo;


class ProcedimentoController extends Controller
{
    private $procedimento;
    private $grupo;
    private $totalPage = 10;

    public function __construct(Procedimento $procedimento, Grupo $grupo) {
        $this->procedimento = $procedimento;
        $this->grupo = $grupo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Lista de Procedimentos';
        $procedimentos = $this->procedimento->paginate($this->totalPage);
        
        return view('procedimentos.procedimentoview', compact('procedimentos', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Cadastrar Novo Procedimento';       

        $grupos = grupo::pluck('codigo');

        return view('procedimentos.create-edit', compact('title', 'grupos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProcedimentoFormRequest $request)
    {
        $title = 'Cadastro de Procedimentos';
        $dataForm = $request->except('_token');

        $dataForm['active'] = (!isset($dataForm['active'])) ? 0 : 1;
        
        //Faz o cadastro do paciente
        $insert = $this->procedimento->create($dataForm);

        if ($insert)
            return redirect()->route('procedimento.index')->with('success', 'Registro inserido com sucessso!');
        else
            return redirect()->route('procedimento.create-edit')->with('error', 'Falha ao tentar inserir o registro.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $procedimento = $this->procedimento->find($id);

        $title = "Procedimento: {$procedimento->nome}";

        return view('procedimentos.show-procedimento', compact('procedimento', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Recupera o procedimento pelo seu id
        $procedimento = $this->procedimento->find($id);

        $title = "Editar Procedimento: {$procedimento->nome}";

        $grupos = grupo::pluck('codigo');

        return view('procedimentos.create-edit', compact('title', 'grupos', 'procedimento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProcedimentoFormRequest $request, $id)
    {
        //Recupera todos os dados do formulário
        $dataForm = $request->all();
        
        //Recupera o item para editar
        $procedimento = $this->procedimento->find($id);
        
        //Altera os itens
        $update = $procedimento->update($dataForm);
        
        //Verifica se realmente editou
        if($update)
            return redirect()->route('procedimento.index');
        else 
            return redirect()->route('procedimento.edit', $id)->with(['errors' => 'Falha ao editar']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $procedimento = $this->procedimento->find($id);

        $delete = $procedimento->delete();

        if($delete)
            return redirect()->route('procedimento.index');
        else
            return redirect()->route('procedimento.show', $id)->with(['errors' => 'Falha ao deletar.']);
    }
}
