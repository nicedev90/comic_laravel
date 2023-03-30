@props(['tagsCsv'])

@php
	$tags = explode(',', $tagsCsv);

@endphp

<div class="flex justify-between px-2 md:px-5 items-center">
	@foreach ($tags as $tag)
		<a href="/?tag={{ $tag }}" class="text-xl bg-ctaLight tracking-wider font-bold rounded-full text-dark p-2">{{$tag}}<a>
	@endforeach
</div>