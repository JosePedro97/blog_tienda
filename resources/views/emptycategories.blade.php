@extends('layouts.layaout')
@section('title','POSTS')
@section('content')
<section class="container-fluid content">

    <div class="row">
        <div class="col">
        <h1>Hola Bienvenido a BLOG <i class="fas fa-cubes"></i></h1>
            <br>
            <P style="text-align: justify;">
                Posiblemente, si estás viendo este mensaje es porque aún no tenemos
                Post disponibles, pero no te preocupes próximamente tendremos contenido sobre tus 
                temas favoritos, esperamos este al pendiente de nuevo contenido, agradecemos mucho tu interés en
                este BLOG vuelve pronto, Saludos.
            </P>
            <p class="text-left mt-3 post-txt">Equipo de BLOG.</p>
            <br>
        </div>
        
        <div class="col md-auto">
       <img src="images/message.jpg" alt="title">
        </div>
    </div>

</section>
@endsection