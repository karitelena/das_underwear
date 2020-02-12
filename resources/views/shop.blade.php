@extends ('template')

@section ('content')
<div>
  <main>
    <div class="shopList">
        <ul>
            <li class="productItem">
                <div>
                    <a href="#"> 
                        <img src="{{ asset('/img/20201/IMG_5675.jpg') }}" width="200px" alt="">
                        <span><img src="{{ asset('/img/20201/IMG_5682.jpg') }}" alt=""></span>
                    </a>
                </div>
            </li>
        </ul>
    </div>
  </main>
</div>
@endsection 