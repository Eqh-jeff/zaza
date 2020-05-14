@extends('layouts.layout')

@section('content')
<!-- slide -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('/images/slide1.png') }}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('/images/slide1.png') }}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('/images/slide1.png') }}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- special -->
<section class="container">
    <div class="row">
        <div class="col-sm-12 text-center pt-3">
            <h2><strong>Waarom ZAZA?</strong></h2>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-3">
            <img src="{{ asset('/images/sleep.png') }}" alt="">
            <p class="pt-3">Slaap beter</p>
        </div>
        <div class="col-md-3">
            <img src="{{ asset('/images/sleep.png') }}" alt="">
            <p class="pt-3">Ontspan</p>
        </div>
        <div class="col-md-3">
            <img src="{{ asset('/images/sleep.png') }}" alt="">
            <p class="pt-3">Energie</p>
        </div>
        <div class="col-md-3">
            <img src="{{ asset('/images/sleep.png') }}" alt="">
            <p class="pt-3">Spieren</p>
        </div>
    </div>
</section>

<!-- About -->
<section class="text-center bg-zaza">
    <div class="container py-3">
        <h2><strong>Over ZAZA</strong></h2>
        <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor cumque obcaecati dolores sapiente ratione doloribus, maxime suscipit perspiciatis, optio rem laudantium blanditiis incidunt ad velit? Explicabo nostrum quas illo aliquid? Ab iste hic aliquam deleniti, praesentium obcaecati. Culpa unde obcaecati provident porro, sequi quisquam debitis. Nihil necessitatibus eius fugiat nam!</p>
    </div>
</section>

<!-- pillows -->
<section class="container py-5 lotus">
    <div class="row">
        <img class="col-md-4 w-100" src="{{ asset('/images/massage.png') }}" alt="">
        <div class="col-md-8">
            <h2>Massagekussen</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor cumque obcaecati dolores sapiente ratione doloribus, maxime suscipit perspiciatis, optio rem laudantium blanditiis incidunt ad velit? Explicabo nostrum quas illo aliquid? Ab iste hic aliquam deleniti, praesentium obcaecati. Culpa unde obcaecati provident porro, sequi quisquam debitis. Nihil necessitatibus eius fugiat nam!</p>
        </div>
    </div>
    <div class="row mt-5">
    <div class="col-md-8">
            <h2>Bambookussen</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor cumque obcaecati dolores sapiente ratione doloribus, maxime suscipit perspiciatis, optio rem laudantium blanditiis incidunt ad velit? Explicabo nostrum quas illo aliquid? Ab iste hic aliquam deleniti, praesentium obcaecati. Culpa unde obcaecati provident porro, sequi quisquam debitis. Nihil necessitatibus eius fugiat nam!</p>
        </div>
        <img class="col-md-4 w-100" src="{{ asset('/images/bambo.png') }}" alt="">
    </div>
</section>

<!-- buy -->
<section class="bg-zaza">
    <div class="text-center container bg-zaza py-3">
        <h2 class="pb-5"><strong>Bestel</strong></h2>
    </div>
    <div class="container bg-white">
        <div class="row">
            <div class="col-md-4 offset-md-2">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('/images/Massage.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Massage</h5>
                        <p class="card-text">katoen</p>
                        <p class="card-text">7 standen</p>
                        <p class="card-text">3 uur batterij</p>
                        <a href="#" class="btn btn-primary">Bestel</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top w-90" src="{{ asset('/images/bambo.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Bamboo</h5>
                        <p class="card-text">katoen</p>
                        <p class="card-text">7 standen</p>
                        <p class="card-text">3 uur batterij</p>
                        <a href="#" class="btn btn-primary">Bestel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- B2B -->
<section class="text-center">
    <div class="container py-3">
        <h2><strong>Over ZAZA</strong></h2>
        <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor cumque obcaecati dolores sapiente ratione doloribus, maxime suscipit perspiciatis, optio rem laudantium blanditiis incidunt ad velit? Explicabo nostrum quas illo aliquid? Ab iste hic aliquam deleniti, praesentium obcaecati. Culpa unde obcaecati provident porro, sequi quisquam debitis. Nihil necessitatibus eius fugiat nam!</p>
    </div>
</section>
@endsection