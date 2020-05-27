@extends('app')

@section('content')
	<a class="btn btn-success pull-right" href="{{ url('/pasteles/create') }}" role="button">Nuevo Pastel</a>
	@include('pasteles.partials.table')
@endsection