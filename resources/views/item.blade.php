@extends ('template.template')

@section ('content')
<div>
    <main class="container">
        <div class="container d-flex bd-highlight">
            <div class="row item w-100">
                <div class="col-6 flex-fill bd-highlight itemImages">
                    <div class="p-5 still">
                        <img src="{{ asset('/img/20201/'.$produto->image) }}" alt="" class="img-responsive"><br>
                        <img src="{{ asset('/img/20201/'.$produto->image_1) }}" alt="" class="img-responsive"><br>
                    </div>
                    <div class="p-5 lookbook">
                        <img src="{{ asset('/img/lookbook/'.$produto->image_2) }}" alt="" class="p-0"><br>
                        <img src="{{ asset('/img/lookbook/'.$produto->image_3) }}" alt="" class="p-0"><br>
                    </div>
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