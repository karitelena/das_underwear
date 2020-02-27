@extends ('template.template')

@section ('content')
 
 <div>
 <table>
    <tr>
        <th>Nome</th>
        <th>Cor</th>
        <th>Tamanho</th>
        <th>Preço</th>
        <th>Status</th>
        <th>Categoria</th>
        <th>Id</th>
    </tr>
    @foreach ($produtos as $produto)
    <tr>
        <td>{{$produto->name}}</td>
        <td>{{$produto->color}}</td>
        <td>{{$produto->size}}</td>
        <td>{{$produto->price}}</td>
        <td>{{$produto->active}}</td>
        <td>{{$produto->category}}</td>
        <td>{{$produto->id}}</td>

    </tr>
    @endforeach
 </table>
 </div>
@endsection 
