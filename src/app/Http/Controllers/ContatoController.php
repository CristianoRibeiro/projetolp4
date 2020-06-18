<?php

namespace App\Http\Controllers;

use App\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $contatos = Contato::all();

        return view('contato.index', compact('contatos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contato.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $contato = new Contato([
           'nome' => $request->input('nome'),
           'email' => $request->input('email'),
           'telefone' => $request->input('telefone'),
           'endereco' => $request->input('endereco')
       ]);

       $contato->save();

       $status = '';
       $mensagem ='';
       if($contato) {
           $mensagem = 'Contato salvo com sucesso!';
           $status = 'success';
       }else{
           $mensagem = 'Erro ao salvar contato!';
           $status = 'danger';
       }
       return redirect('/')->with('mensagem', $mensagem)->with('status', $status);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contato = Contato::find($id);

        return view('contato.read', compact('contato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contato = Contato::find($id);

        return view('contato.edit', compact('contato'));
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
        $contato = Contato::find($id);

        $contato->nome = $request->input('nome');
        $contato->email = $request->input('email');
        $contato->telefone = $request->input('telefone');
        $contato->endereco = $request->input('endereco');

        $contato->save();

        $status = '';
        $mensagem ='';
        if($contato) {
            $mensagem = 'Contato alterado com sucesso!';
            $status = 'success';
        }else{
            $mensagem = 'Erro ao alterar contato!';
            $status = 'danger';
        }
        return redirect('/')->with('mensagem', $mensagem)->with('status', $status);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contato = Contato::find($id);

        $contato->delete();

        $status = '';
        $mensagem ='';
        if($contato) {
            $mensagem = 'Contato deletado com sucesso!';
            $status = 'success';
        }else{
            $mensagem = 'Erro ao deleter contato!';
            $status = 'danger';
        }
        return redirect('/')->with('mensagem', $mensagem)->with('status', $status);


    }
}
