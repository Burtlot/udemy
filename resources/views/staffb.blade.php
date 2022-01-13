@extends('template.newtest')
@section('title',$title)

@section('content')
@if($staff)
    <ul>
        @foreach ($staff as $person)
        <li>{{$person['name']}} {{$person['surname']}}</li>
        @endforeach
    </ul>
@else <p>No Staff</p>
@endif
@endsection
@section('footer')
    @parent
    <p style="text-align: center">Daniele Bortolotti</p>
@stop
