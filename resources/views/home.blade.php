
@include('components/include.header')
 
<main class="aurora-main"> 
    
<div class="container-home">
    <div class="fundo-home">
    <h1 class="titulo-home">Study and Learn for Free With Our Courses</h1>
    <a href="{{ asset('../courses') }}" class="btn-home"><button class="botao" ID="btn-home">Enroll</button></a>
    </div>
 <img class="img-home"src="{{ asset('images/React Native Code Image.png') }}">
</div>
 
 
<div class="corpo-home">
    <H6 class="titulo-corpo">Our Courses</H6>
    <div>
        <div class="caixa-texto">
            <p class="titulo-cursos">Database</p>
        </div>
        <div class="caixa-img">
         <img class="img-cursos" src="{{ asset('images/Wallpaper – Back-End I.png') }}">
        </div>
 
        <div>
        <div class="caixa-texto">
            <p class="titulo-cursos">Front-End</p>
        </div>
        <div class="caixa-img">
         <img class="img-cursos" src="{{ asset('images/Wallpaper – Front-End.png') }}">
        </div>
    </div>
</div>
</div>

</main>

 
 
 @include('components/include.footer')
   
 
 
   
 
 