@extends ('template.template')

@section ('content')
<div>
    <main class="container">
        <div class="container  d-flex bd-highlight">
            <div class="row item w-100">
                <div class="col-6 flex-fill bd-highlight p-5 itemImages">
                <img src="{{ asset('/img/20201/'.$produto->image) }}" alt="" class="img-responsive">
                </div>
                <div class="col-6 flex-fill bd-highlight itemDescription">
                    <div class="p-5">
                        <strong> {{ $produto->name}} </strong> <br>
                        {{ $produto->price}} <br>
                        <p> composição {{ $produto->description}} <br> </p>
                    </div>
                <button type="submit" class="btn btn-block addCart w-100"> ADD TO CART</button>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection 