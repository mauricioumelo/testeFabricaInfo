@extends('layout')

@section('conteudo')
    <div class="container mt-5">

        <h3>Lista de documentos cadastrados</h3>

        @if (!empty($mensagem))
            <div class="alert alert-success">
                <p>{{$mensagem}}</p>
            </div>
        @endif
    </div>

    <div class="container mt-5">

        @if (!empty($mensagem))
            <div class="alert alert-success">
                <p>{{$mensagem}}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <thead class="bg-dark">
              <tr class="text-white">
                <th scope="col">#</th>
                <th scope="col">Titulo</th>
                <th scope="col">Descrição</th>
                <th scope="col">Tipo</th>
                <th scope="col">ações</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($documentos as $documento)    
                    <tr>
                        <th scope="row">{{$documento->id}}</th>
                        <td>{{$documento->titulo}}</td>
                        <td>{{$documento->nome_arquivo}}</td>
                        <td>
                            @foreach ($tipos as $tipo)
                                @if ($documento->id_tipo == $tipo->id)
                                    {{$tipo->nome_tipo}}
                                @endif
                            @endforeach
                            
                        </td>
                        <td>

                            <div class="btn-group mr-2">                                                               
                                <a href="/documentos/{{$documento->id}}/editar" class="mr-2">
                                    <button class="btn btn-primary mr-2">Editar</button>
                                </a>
                            </div>
                            <div class="btn-group"> 
                                <form action="/documentos/{{$documento->id}}" method="post" onsubmit="return confirm('Tem certeza que deseja excluir ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Excluir</button>
                                </form>
                            </div>               
                        </td>                       
                    </tr>
                @endforeach    
            </tbody>
        </table>

    </div>
    <div class="container">
        <a href="/documentos/cadastrar" class="btn btn-primary mt-2">Cadastrar novo documento</a> 
    </div>   
@endsection

