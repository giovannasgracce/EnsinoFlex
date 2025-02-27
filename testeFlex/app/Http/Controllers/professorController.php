<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testeFlex;
use App\Models\professormodel;

class professorController extends Controller
{
    public function index(){
        $dados = professormodel::all();//trazendo todos os dados da tabela
        return view('paginas.cadastrarProfessor')->With('dados',$dados);
    }  //fim do método

    public function store(Request $request){
        $nome = $request->input('nome');
        $telefone = $request->input('telefone');
        $cpf = $request->input('cpf');
        $email = $request->input('email');
        $senha = $request->input('senha');
        //Inserindo os dados da tabela 
        $model = new professormodel();
        $model->nome = $nome;
        $model->telefone = $telefone;
        $model->cpf = $cpf;
        $model->email = $email;
        $model->senha = $senha;

        $model->save();//Armazenar no banco
        return redirect('/cadastrarProfessor');
    }//fim do metodo cadastrar

    public function consultar()
    {
        $ids = professormodel::all();// traz tudo
        return view('paginas.consultarProfessor',compact('ids'));
    }//fim do metodo consultar

    public function editarProfessor($id)// traz só o reusultado id
    {
        $dado = professormodel::findOrFail($id);// guarda só o reusultado id
        return view('paginas.editarProfessor',compact('dado'));
    }//fim do metodo editar

    public function atualizarProfessor(Request $request,$id)
    {
        professormodel::where('id',$id)->update($request->all());
        return redirect('/consultarProfessor');
    }//fim do metodo atualizar

    public function excluirProfessor(Request $request,$id)
    {
        professormodel::where('id',$id)->delete($request->all());
        return redirect('/consultarProfessor');
    }//fim do metodo excluir

}//Todas as operações do banco de dados
