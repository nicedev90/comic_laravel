@extends('layout')

@section('content')

@include('partials._navbar')


@unless(count($listings) == 0)

@foreach($listings as $listing)
	{{-- x-nombre-del-props --}}
	<x-listing-card :listing="$listing" />

@endforeach


@else
<p>no listings found</p>
@endunless



@include('partials._footer')

@endsection
