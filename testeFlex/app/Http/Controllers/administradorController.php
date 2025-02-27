<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testeFlex;
use App\Models\administradorModal;

class administradorController extends Controller
{
    public function index(){
        $dados = administradorModal::all();//trazendo todos os dados da tabela
        return view('paginas.cadastrarAdministrador')->With('dados',$dados);
    }  //fim do método

    public function store(Request $request){
        $nome = $request->input('nome');
        $telefone = $request->input('telefone');
        $cpf = $request->input('cpf');
        $email = $request->input('email');
        $senha = $request->input('senha');
    
        //Inserindo os dados na tabela 
        $model = new administradorModal();
        $model->nome = $nome;
        $model->telefone = $telefone;
        $model->cpf = $cpf;
        $model->email = $email;
        $model->senha = ($senha); 
    
        $model->save(); // Armazena no banco
        return redirect('/cadastrarAdministrador');
    
    }//fim do metodo cadastrar

    public function consultarAdministrador()
    {
        $ids = administradorModal::all();// traz tudo
        return view('paginas.consultarAdministrador',compact('ids'));
    }//fim do metodo consultar

    public function editarAdministrador($id)// traz só o reusultado id
    {
        $dado = administradorModal::findOrFail($id);// guarda só o reusultado id
        return view('paginas.editarAdministrador',compact('dado'));
    }//fim do metodo editar

    public function atualizarAdministrador(Request $request,$id)
    {
        administradorModal::where('id',$id)->update($request->all());
        return redirect('/consultarAdministrador');
    }//fim do metodo atualizar

    public function excluirAdministrador(Request $request,$id)
    {
        administradorModal::where('id',$id)->delete($request->all());
        return redirect('/consultarAdministrador');
    }//fim do metodo excluir

}//Todas as operações do banco de dados
