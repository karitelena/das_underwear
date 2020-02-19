@extends ('template')

@section ('content')
<div>
  <main>
    <div class="shopList">
        <div class="card-group">
            <ul class="d-flex justify-content-center" style="list-style-type: none;">
                <li class="productItem flex-fill bd-highlight">
                    <a href="#">
                        <div class="p-0 m-0">
                            <div class="card" style="max-width: 20rem;">
                                <img src="{{ asset('/img/20201/IMG_5675.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body text-center">
                                        <p class="card-title">SQUARE BLACK</p>
                                        <strong class="card-text">R$ 125</strong>    
                            </div>
                        </div>
                    </a>
                </li>
                <li class="productItem">
                    <a href="#">
                        <div class="p-0 m-0">
                            <div class="card" style="max-width: 20rem;">
                                <img src="{{ asset('/img/20201/IMG_5723.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body text-center">
                                        <p class="card-title">SLIP BLACK</p>
                                        <strong class="card-text">R$ 59</strong>    
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
  </main>
</div>
@endsection 