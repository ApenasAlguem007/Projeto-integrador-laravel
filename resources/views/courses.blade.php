@include('components/include.header')

<div class="titulo-courses">
 <h1>HARDWARE</h1>
</div>
    <div class="hard">
 
    <div class="modelo">
    <h2>Front-End</h2>
    </div>
 
 <div id="carouselExampleControls" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/conceito-de-engenharia-de-computador-plana.png') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/Wallpaper – Back-End II 1.png') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/Wallpaper – Back-End I 1.png') }}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
 
<br>
 
<div class="detalhes">
<a class="detalhes-botao"href="{{ asset('../desc') }}"><button class="detalhes-btn">Detalhe</button></a>
</div>
</div>
 
 
 
<br><br>
<br><br>
<br><br>
<div class="titulo-courses">
 
<h1>NETWORK</h1>
</div>
<div class="network">
<br>
    <div class="modelo">
        <h2>Redes</h2>
    </div>
       
        <div id="carouselExampleControls" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/Wallpaper – Back-End I 1.png') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/Wallpaper – Back-End II 1.png') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/Wallpaper – Back-End I 1.png') }}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
 
<br>
<div class="detalhes">
<a class="detalhes-botao"href="{{ asset('../desc') }}"><button class="detalhes-btn">Detalhe</button></a>
</div>
</div>
 
<br><br>
<br><br>
<br><br>
<div class="titulo-courses">
<h1>SOFTWARE</h1>
</div>
 <div class="soft">
<br>
 <div class="modelo">
    <h2>Back-End</h2>
 </div>
   
   
 <div id="carouselExampleControls" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/Wallpaper – Back-End I 1.png') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/Wallpaper – Back-End I 1.png') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/Wallpaper – Back-End II 1.png') }}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
 
<br>
<div class="detalhes">
<a class="detalhes-botao" href="{{ asset('../desc') }}"><button class="detalhes-btn">Detalhe</button></a>
</div>
 
</div>
 
 
 <br><br>
<br><br>
 
 
   
 @include('components/include.footer')