@extends('layouts.app')

@section('content')
<!-- 
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

            <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                User
            </header>

            <div class="w-full p-6">
                <p class="text-gray-700">
                    You are logged in!
                </p>
            </div>
        </section>
    </div>
</main>
-->

<div class="background-image grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                  <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                  Movie Ticket Booking!
                 </h1>
                 <a href="/booking/index" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Book Now
                 </a>
        </div>
    </div>
</div>


<div class="row row-cols-1 row-cols-md-3 g-4" style="margin: 20px">
  <div class="col">
    <div class="card h-100">
      <img src="{{ URL('images/1512324.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Avatar</h5>
        <p class="card-text"> Avatar is a 2009 American epic science fiction film directed, written, produced, and co-edited by
      James Cameron and starring Sam Worthington</p>
      </div>
      <div class="card-footer">
      <small class="text-muted"><span class="text-gray-500">jon</span></small> ||
      <small class="text-muted">Release date: 20-Dec-2021</small> ||
     <small class="text-muted"><span class="text-gray-500">jamnagar</span></small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="{{ URL('images/1512287.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Black Panther-2</h5>
        <p class="card-text">Black Panther is a 2018 American superhero film based on the Marvel Comics character of the same name.
         Produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures</p>
      </div>
      <div class="card-footer">
      <small class="text-muted"><span class="text-gray-500">Chadwick</span></small> ||
      <small class="text-muted">Release date: 3-mar-2022</small> ||
     <small class="text-muted"><span class="text-gray-500">Rajkot</span></small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="{{ URL('images/1512297.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">The Thing</h5>
        <p class="card-text">The Thing is a 2011 science fiction horror film directed by Matthijs van Heijningen Jr., written by Eric Heisserer, and starring 
        Mary Elizabeth Winstead, Joel Edgerton, Ulrich Thomsen, Adewale Akinnuoye-Agbaje, and Eric Christian Olsen.</p>
      </div>
      <div class="card-footer">
      <small class="text-muted"><span class="text-gray-500">Mary</span></small> ||
      <small class="text-muted">Release date: 10-may-2020</small> ||
     <small class="text-muted"><span class="text-gray-500">Rajkot</span></small>
      </div>
    </div>
  </div>
</div>


    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="{{ URL('images/1512287.jpg')}}" width="500"  alt="">
        </div>
         <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrablod text-gray-600">
            All New Trending movies
            </h2>
            <p class="py-8 text-gray-500 text-xl">
                    This all movies are new released.  
            </p>
            <p class="font-extrablod text-gray-600 text-s pb-9">
            There is all type of movies.
            </p>
            <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
         </div>
    </div>
@endsection
