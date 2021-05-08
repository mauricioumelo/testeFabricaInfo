@extends('layout')

@section('conteudo')
<div class="container mt-5">

    <h1> @if (isset ($documentos)) Editar @else Cadastrar @endif</h1>
    
       @if (isset ($documentos))
            <form method="POST" class="mt-4" action="/documentos/{{$id}}">
                @method('PUT') 
            @else
            <form method="POST" class="mt-4">  
        @endif</h1>
        
        @csrf
        <div class="form-group">

        <label for="titulo">Titulo Documento</label>
        <input type="text" class="form-control" value="{{$documentos->titulo ?? ''}}" name="titulo" id="titulo" placeholder="Titulo do Documento">

        <label for="nome_arquivo">Nome do Arquivo</label>
        <input type="text" class="form-control" value="{{$documentos->nome_arquivo ?? ''}}" 
        name="nome_arquivo" id="nome_arquivo" placeholder="Nome do Arquivo">

        </div>

        <div class="form-group">
            <label for="tipo">Tipo de Documento</label>
            <select class="form-control" id="tipo" name="tipo">
               <option value="{{$documentos->tipo->id ?? ''}}">{{$documentos->tipo->nome_tipo ?? 'TIPO'}}</option>
                @foreach ($tipos as $tipo)
                    <option value="{{$tipo->id}}">
                        {{$tipo->nome_tipo}}
                    </option>
                @endforeach
            </select>
        </div>
        <a href="#" class="btn btn-secondary mr-2 mt-2">voltar</a>
        <button type="submit" class="btn btn-success mt-2">Salvar</button>
    </form>
</div>   
@endsection