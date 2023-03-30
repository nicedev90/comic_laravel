@props(['listing'])

<x-card>

			<div class="flex justify-between px-2 md:px-5 items-center">
				{{-- no es necesario colocar method en Form, es request GET port default --}}
				<form action="/">
					<input type="text" name="search">
					<button type="submit" class="p-3 bg-cta text-dark">Buscar</button>
				</form>
			</div>



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

		<div id="col-der" class="hidden md:block p-2 md:p-4 md:w-1/2">
			<img src="{{ asset('/images/caratula1.jpg') }}" class="object-cover w-screen">
		</div>

	</x-card>
