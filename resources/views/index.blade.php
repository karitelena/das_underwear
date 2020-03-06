@extends ('template.template')

@section ('content')
<div>
    <main class="collectionTitle">
        <div class="container">
            <h1>20201</h1>    
        </div>
    </main>
    <main class="index">
        <div class="row">
            <div class="col embed-responsive-item embed-responsive-16by9 d-flex bd-highlight">
                <a href="/collection">
                    <img src="{{ asset('/img/archives/background2.png') }}" alt="" class="img-fluid embed-responsive-item flex-fill bd-highlight">
                </a> 
            </div>
        </div>
    </main>
</div>
@endsection 