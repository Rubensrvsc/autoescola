<?php

namespace App\Http\Controllers;

use App\Models\instrutor;
use App\Models\usuario;
use Illuminate\Http\Request;

class CadInstrutoresController extends Controller
{
    //
    public function index(){
        $tabela = instrutor::all();
        return view('painel-admin.instrutores.index',['itens' => $tabela]);
    }

    public function create(){
        return view('painel-admin.instrutores.create');
    }

    public function insert(Request $request){

        $tabela = new instrutor();

        $tabela->nome = $request->nome;
        $tabela->cpf = $request->cpf;
        $tabela->email = $request->email;
        $tabela->telefone = $request->telefone;
        $tabela->endereço = $request->endereco;
        $tabela->credencial = $request->credencial;
        $tabela->data_venc = $request->data;

        $tabela2 = new usuario();

        $tabela2->nome = $request->nome;
        $tabela2->usuario = $request->email;
        $tabela2->cpf = $request->cpf;
        $tabela2->senha = '123';
        $tabela2->nivel = 'instrutor';
        

        $itens = instrutor::where('cpf','=',$request->cpf)->orwhere('credencial','=',$request->credencial)->orwhere('email','=',$request->email)->count(); 
        
        if($itens > 0){
            echo "<script language='javascript'>window.alert('Dados Invalidos')</script>";
            return view('painel-admin.instrutores.create');

        }

        $tabela->save();
        $tabela2->save();

        return redirect()->route('instrutores.index');
    }

    public function edit(instrutor $item){
        return view('painel-admin.instrutores.edit',['item'=>$item]);
    }

    public function editar(Request $request, instrutor $item){
        
        $item->nome = $request->nome;
        $item->cpf = $request->cpf;
        $item->email = $request->email;
        $item->telefone = $request->telefone;
        $item->endereço = $request->endereco;
        $item->credencial = $request->credencial;
        $item->data_venc = $request->data;

        $oldcpf = $request->oldcpf;
        $oldcredencial = $request->oldcredencial;
        $oldemail = $request->oldemail;


        if($oldcpf != $request->cpf){
            $itens = instrutor::where('cpf','=',$request->cpf)->count(); 
            if($itens > 0){
                echo "<script language='javascript'>window.alert('CPF já cadastrado')</script>";
                return view('painel-admin.instrutores.edit',['item'=>$item]);
    
            }
        }

        if($oldcredencial != $request->credencial){
            $itens = instrutor::where('credencial','=',$request->credencial)->count(); 
            if($itens > 0){
                echo "<script language='javascript'>window.alert('Credencial já cadastrada')</script>";
                return view('painel-admin.instrutores.edit',['item'=>$item]);
    
            }
        }

        if($oldemail != $request->email){
            $itens = instrutor::where('email','=',$request->email)->count(); 
            if($itens > 0){
                echo "<script language='javascript'>window.alert('Email já cadastrado')</script>";
                return view('painel-admin.instrutores.edit',['item'=>$item]);
    
            }
        }
        

        $item->save();
        return redirect()->route('instrutores.index');
        
    }

    public function delete(instrutor $item){
        $item->delete();
        return redirect()->route('instrutores.index');
    }

    public function modal($id){
        $item = instrutor::orderby('id', 'desc')->paginate();
        return view('painel-admin.instrutores.index', ['itens' => $item, 'id' => $id]);
    }

}
