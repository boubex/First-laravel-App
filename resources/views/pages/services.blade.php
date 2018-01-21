@extends('layouts.app')

@section('content')

	<h1>{{$title}}</h1>
    @if(count(servivices)>0)
    @foreach($services as $service)
<ul>
    <li>{{$service}}</li>
</ul>
    @endforeach
    @endif

@endsection