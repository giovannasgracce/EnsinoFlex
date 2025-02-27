<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testeFlex;
use App\Models\conversa;

class clienteController extends Controller
{
    public function index(){
        $dados = conversa::all();//trazendo todos os dados da tabela
        return view('paginas.cadastrar')->With('dados',$dados);
    }  //fim do método

    public function store(Request $request){
        $id = $request->input('id');
        $nome = $request->input('nome');
        $telefone = $request->input('telefone');
        $cpf = $request->input('cpf');
        $email = $request->input('email');
        $senha = $request->input('senha');
        //Inserindo os dados da tabela 
        $model = new conversa();
        $model->id = $id;
        $model->nome = $nome;
        $model->telefone = $telefone;
        $model->cpf = $cpf;
        $model->email = $email;
        $model->senha = $senha;
        $model->save();//Armazenar no banco
        return redirect('/cadastrar');
    }//fim do metodo cadastrar

    public function consultar()
    {
        $ids = conversa::all();// traz tudo
        return view('paginas.consultar',compact('ids'));
    }//fim do metodo consultar

    public function editar($id)// traz só o reusultado id
    {
        $dado = conversa::findOrFail($id);// guarda só o reusultado id
        return view('paginas.editar',compact('dado'));
    }//fim do metodo editar

    public function atualizar(Request $request,$id)
    {
        conversa::where('id',$id)->update($request->all());
        return redirect('/consultar');
    }//fim do metodo atualizar

    public function excluir(Request $request,$id)
    {
        conversa::where('id',$id)->delete($request->all());
        return redirect('/consultar');
    }//fim do metodo excluir

}//Todas as operações do banco de dados
