@extends('layout.base', ["current"=>"categorias"])

@section('body')
    <form action = "{{route('categorias.update', $categoria)}}" method = "POST">
        @csrf
        @method('PUT')
        <div class = "form-group">
            <h1>Edição de Categoria</h1>
            <label for="nome">Nome: </label>
            <input type = "text" class = "form-control" id="nome" name="nome" value="{{$categoria->nome}}">
            <br>
            <button class = "btn btn-primary" type = "submit">Salvar</button>
        </div>
    </form>
@endsection