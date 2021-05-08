@extends('layout')

@section('conteudo')
    <div class="container mt-5">

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
                            <div class="btn-group me-2">
                                
                                <div>
                                    <a href="/documentos/{{$documento->id}}/editar" class="mr-2">
                                        <button class="btn btn-primary">Editar</button>
                                    </a>
                                </div> 

                                <div>
                                    <form action="/documentos/{{$documento->id}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Excluir</button>
                                    </form>
                                </div>

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

