<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DocumentosModel;
use App\Models\tipoDocumentosModel;


class DocumentosController extends Controller
{
    public function index (){
        $documentos = DocumentosModel::all();
        $tipos = tipoDocumentosModel::all();
        return view('documentos.index', [
            'documentos' => $documentos,
            'tipos' => $tipos,
        ]);
    }

    public function create () {
        $tipos = tipoDocumentosModel::all();
        return view('documentos.create', [
            'tipos' => $tipos,
        ]);
    }
    public function store (Request $request) {
         $titulo = $request->titulo;
         $nome_arquivo = $request->nome_arquivo;
         $id_tipo = $request->tipo;
         $documento = DocumentosModel::create([
            'titulo'=> $titulo,
            'nome_arquivo'=> $nome_arquivo,
            'id_tipo'=> $id_tipo,
        ]);

         echo "Documento de id: {$documento->id}, nome: {$documento->titulo}, de arquivo: {$documento->nome_arquivo} criado com sucesso";
        return redirect('/documentos');
    }

    public function destroy (Request $request){
        DocumentosModel::destroy($request->id);
        return redirect('/documentos');
    }

    public function edit($id) {      
        $documentos = DocumentosModel::find($id);
        $tipos = tipoDocumentosModel::all();
        return view('documentos.create', [
            'documentos' => $documentos,
            'tipos' => $tipos,
            'id' => $id,
        ]);
    }
 //a terminar..
    public function update (Request $request, $id) {
        DocumentosModel::where(['id'=> $id])->update([
            'titulo'=> $request->titulo,
            'nome_arquivo'=> $request->nome_arquivo,
            'id_tipo'=> $request->tipo,
        ]);
        return redirect('/documentos');
    }
}
