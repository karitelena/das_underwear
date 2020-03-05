@extends ('template.template')

@section ('content')
<div>
    <main class="container">
        <div class="container d-flex bd-highlight justify-content-center">
            <div class="row shopList">
                @foreach($produtos as $produto)
                <div class="col-sm-6 col-md-4 flex-fill bd-highlight">
                    <div class="productItem thumbnail">
                        <a href="/shop/item/{{$produto->id}}">
                            <img src="{{ asset('/img/20201/'.$produto->image) }}" alt="" class="img-responsive">
                            <div class="description p-2">
                                <p> {{ $produto->name }} </p>
                                <p> <strong> {{ $produto->price }} </strong></p>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>
</div>

@endsection 