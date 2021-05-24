@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            New Movies
        </h1>

    </div>
</div>
     @if (session()->has('message'))
     <div class=" w-4/5 m-auto mt-10 pl-2">
        <p class=" w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
            {{ session()->get('message') }}

        </p>
     </div>
         
     @endif 

    @if (Auth::check())
    <div class="pt-25 w-4/5 m-auto">
        <a class="uppercase bg-blue-500 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl"  
             href="/blog/create">
            Create Post
        </a>

    </div>
          
    @endif

@foreach ($posts as $post)
    

<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="{{ asset('images/'. $post->image_path) }}" alt="">
    </div>
    <div>
        <h2 class="text-gray-700 font-bold text-5xl pb-4">
            {{ $post->title }}
        </h2>
        
        <p><b>Movie Cast: </b><span class="text-gray-500">{{ $post->cast }}</span></p>
        <p><b>Movie City: </b> <span class="text-gray-500">{{ $post->city }}</span></p>
<br />
        <span class="text-gray-500">
            By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on{{ date('jS M Y', strtotime($post->updated_at)) }}
          </span>
        <p class="text-xl text-gray-700 pt-8 leading-8 font-light pb-9">
            {{ $post->description }}
        </p>
        <a href="/blog/{{ $post->slug }}" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
            Book Now
        </a>

        @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)

            <span class=" float-right">
                <a  
                href="/blog/{{ $post->slug }}/edit"
                class=" text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
                Edit
                </a>

            </span>

            <span class=" float-right">
                <form action="/blog/{{ $post->slug }}"
                    method="POST">
                    @csrf
                    @method('delete')
                    
                    <button class=" text-red-500 pr-3 hover: underline hover:text-gray-900" 
                    type="submit">
                    Delete
                    </button>
                </form>

            </span>
            
        @endif

    </div>

</div>
@endforeach
@endsection
