@extends('layouts.app')

@section('content')
<div class="background-image grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                  <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                  Movie Ticket Booking!
                 </h1>
                 <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                 </a>
        </div>
    </div>
</div>


<div class="card-group" style="padding:20px">
 <div class="card" style="margin:10px">
     <img src="{{ URL('images/1512287.jpg')}}" class="card-img-top" alt="...">
     <div class="card-body">
     <b> <h5 class="card-title">AVatar</h5></b>
     <p class="text-xl text-gray-700 pt-8 leading-8 font-light pb-9">
     Avatar is a 2009 American epic science fiction film directed, written, produced, and co-edited by
      James Cameron and starring Sam Worthington
        </p>
     </div>
     <div class="card-footer">
      <small class="text-muted"><span class="text-gray-500">tom</span></small> ||
      <small class="text-muted">Release date: 16-Dec-2009</small> ||
     <small class="text-muted"><span class="text-gray-500">jamnagar</span></small>
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

    <!--<div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
            I'm an expert in...
        </h2>
        <span class="font-extrablod block text-4xl py-1">
            Ux Design
        </span>
        <span class="font-extrablod block text-4xl py-1">
            Project Management
        </span>
        <span class="font-extrablod block text-4xl py-1">
            Digital Strategy
        </span>
        <span class="font-extrablod block text-4xl py-1">
            Backend Development
        </span>
    </div>-->
<!--
    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>
        <h2 class="text-4xl font-blod py-10">
            Recent Posts
        </h2>
        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet tempore nemo nulla. Eum, illo autem quasi sint quis dicta numquam?
        </p>
    </div>
    -->

<!--
    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    PHP
                </span>
                <h3 class="text-xl font-bold py-10">
                    PHP is a general-purpose scripting language especially suited to web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994. The PHP reference implementation is now produced by The PHP Group.

                </h3>
                <a href="/blog"
                class="uppercase bg-transparent border-2 border-gray-100 text-white hover:text-red-500 text-xs font-extrabold py-3 px-5 rounded-3xl">
                Find Out More
            </a>
            </div>
            

        </div>
        <div>
            <img src="https://source.unsplash.com/500x310/?laptop,technology" width="600"  alt="">
        </div>
    </div>

    -->
@endsection