@extends('layout')

@section('content')
	<x-card class="bg-cta">
		<div id="col-izq" class="bg-neutral px-2 py-4 md:my-4 md:p-4 md:rounded-none rounded-lg space-y-4 md:space-y-8 md:w-1/2">

			<div class="flex justify-between px-2 md:px-5 items-center">
				<div class="text-4xl md:text-6xl font-bold  text-white">{{$listing->title}}</div>

				<div class="w-1/4 text-center font-bold tracking-wider rounded text-ctaLight bg-dark p-2">{{$listing->title}}</div>
			</div>

			<x-listing-tags :tagsCsv="$listing->tags" />

			<div class="flex md:hidden justify-between px-2 md:px-5 items-center">
				<img src="{{ asset('/images/caratula1.jpg') }}" alt="imagen logo" class="object-cover w-screen">
			</div>

			<div class="flex justify-between px-2 md:px-5 items-center">
				<p class="text-white">{{ $listing->description }}</p>
			</div>

			<div class="flex justify-between px-2 md:px-5 items-center">
				<a class="w-full text-center text-2xl bg-ctaDark text-white font-bold rounded-xl hover:bg-cta hover:text-neutralDark hover:border-dark hover:border-b-4 hover:border-l-4 p-4" href="/listings/{{$listing['id']}}"> 
					Ver los capitulos <i class="fas fa-chevron-right ml-4"></i>
				</a>
			</div>


			
		</div>

	</x-card>

@endsection