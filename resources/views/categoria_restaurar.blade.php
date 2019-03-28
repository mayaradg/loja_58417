@extends('layout.base', ["current"=>"categorias"])

@section('body')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categorias as $cat)
        <tr>       
            <td>{{$cat->id}}</td>
            <td>{{$cat->nome}}</td>
            <td>
                <a href="{{route('categorias.restore', $cat->id)}}" class="btn btn-success"> Restaurar </a> 
                <a href="{{route('categorias.delete', $cat->id)}}" class="btn btn-danger">Apagar meixmo</a>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection