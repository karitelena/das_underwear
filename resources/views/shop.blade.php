@extends ('template.template')

@section ('content')
<div>
    <main class="shopList">
        <div class="card-group container-fluid row">
            <div class="productItem col bg-success">
                <a href="#">
                    <div class="p-0 m-0">
                        <div class="card" style="width: 20rem;">
                            <img src="{{ asset('/img/20201/TSHIRT_SPANDEX_WHITE_FRENTE.png') }}" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <p class="card-title">TSHIRT_SPANDEX_WHITE</p>
                                    <strong class="card-text">R$ 59</strong>    
                        </div>
                    </div>
                </a>
            </div>
            <div class="productItem col bg-primary">
                <a href="#">
                    <div class="p-0 m-0">
                        <div class="card" style="width: 20rem;">
                            <img src="{{ asset('/img/20201/BODY_LIGHT_ORCHID_FRENTE.png') }}" class="card-img-top img-fluid embed-responsive-item" alt="...">
                                <div class="card-body text-center">
                                    <p class="card-title">BODY_LIGHT_ORCHID</p>
                                    <strong class="card-text">R$ 59</strong>    
                        </div>
                    </div>
                </a>
            </div>
            <div class="productItem col bg-danger">
                <a href="#">
                    <div class="p-0 m-0">
                        <div class="card" style="width: 20rem;">
                            <img src="{{ asset('/img/20201/SQUARE_TOP_CHINA_PINK_FRENTE.png') }}" class="card-img-top img-fluid embed-responsive-item" alt="...">
                                <div class="card-body text-center">
                                    <p class="card-title">SQUARE_TOP_CHINA_PINK</p>
                                    <strong class="card-text">R$ 59</strong>    
                        </div>
                    </div>
                </a>
            </div>
            <div class="productItem col bg-warning">
                <a href="#">
                    <div class="p-0 m-0">
                        <div class="card" style="width: 20rem;">
                            <img src="{{ asset('/img/20201/SWIMMER_TOP_OCEAN_BLUE_FRENTE.png') }}" class="card-img-top img-fluid embed-responsive-item" alt="...">
                                <div class="card-body text-center">
                                    <p class="card-title">SWIMMER_TOP_OCEAN_BLUE</p>
                                    <strong class="card-text">R$ 59</strong>    
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="card-group container-fluid row">
            <div class="productItem col bg-info">
                <a href="#">
                    <div class="p-0 m-0">
                        <div class="card" style="width: 20rem;">
                            <img src="{{ asset('/img/20201/SWIMMER_TOP_BLACK_FRENTE.png') }}" class="card-img-top img-fluid embed-responsive-item" alt="...">
                                <div class="card-body text-center">
                                    <p class="card-title">SWIMMER_TOP_BLACK</p>
                                    <strong class="card-text">R$ 59</strong>    
                        </div>
                    </div>
                </a>
            </div>
            <div class="productItem col bg-secondary">
                <a href="#">
                    <div class="p-0 m-0">
                        <div class="card" style="width: 20rem;">
                            <img src="{{ asset('/img/20201/SWIMMER_TOP_BLACK_FRENTE.png') }}" class="card-img-top img-fluid embed-responsive-item" alt="...">
                                <div class="card-body text-center">
                                    <p class="card-title">SWIMMER_TOP_BLACK</p>
                                    <strong class="card-text">R$ 59</strong>    
                        </div>
                    </div>
                </a>
            </div>
        </div>        
    </main>
</div>
@endsection 