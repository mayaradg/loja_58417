@extends('layout.base', ["current"=>"produtos"])

@section('body')
    <form action = "{{route('produtos.update', $cat)}}" method = "POST" enctype="multipart/form-data">
        @csrf
        <div class = "form-group">
            <h1>Cadastro de Produtos</h1>
            <label for="nome">Nome: </label>
            <input type = "text" class = "form-control" id="nome" name="nome" {{$p->nome}}>
            <label for="descricao">Descrição: </label>
            <input type = "text" class = "form-control" id="descricao" name="descricao" {{$p->descricao}}>
            <label for="preco">Preço: </label>
            <input type = "number" class = "form-control" id="preco" name="preco" {{$p->preco}}>
            <label for="foto">Foto: </label>
            <input type = "file" class = "form-control-file" id="foto" name="foto">
            <label for="categoria">Categoria: </label>
            <select class = "form-control" name = "categoria" id="categoria">
            <select  id="categoria" name = "categoria" class="form-control">
                @foreach($cats as $c)
                    @if($c->id == $p->categoria_id) 
                        <option selected value = {{$c->id}}> {{$c->nome}} </option>
                    @else
                        <option value = {{$c->id}}> {{$c->nome}} </option>
                    @endif
                @endforeach                
            </select>
            </select>
            <br>
            <button class = "btn btn-primary" type = "submit">Cadastrar!</button>
        </div>
    </form>
@endsection