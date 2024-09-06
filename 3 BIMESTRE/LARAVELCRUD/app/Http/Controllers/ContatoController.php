<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index(Request $req){ //criando função index fznd a mesma coisa que um select(lista)
        $contato = Contato::all(); // pega todos os campos do bd 
        return view('welcome')->with("contato", $contato);// redireciona pro welcome.blade.php enviando os dados do contato
    }

    public function adicionar(Request $req){// criando uma função que faz a mema coisa que um insert de um bd 
        $contato = new Contato; //instanciando contato
        $contato->nome = $req->nome;// req puxa os dados que a pessoa digita no campo 
        $contato->telefone = $req->telefone;
        $contato->email = $req->email;
        $contato->save();// executa
        return redirect()->back();
    }

    public function editar(Request $req){// função de editar  so pra abrir uma tela diferente
        $contato = Contato::find($req->id);// procurar o id requirido
        return view('editar')->with("contato", $contato);
    }

    public function atualizar(Request $req){// função de atualizar mesma coisa que um update no bd
        $contato = Contato::find($req->id);// procurar o id requirido
        $contato->update(
            [
                "nome" => $req->nome,
                "telefone" => $req->telefone,
                "email" => $req->email
            ]
        );
        $contato = Contato::all();
        return redirect('/')->with("contato", $contato);
        
    }

    public function excluir(Request $req){
        $contato = Contato::find($req->id);
        $contato->delete(); // deleta baseado no id requirido
        return redirect()->back();
    }
}
