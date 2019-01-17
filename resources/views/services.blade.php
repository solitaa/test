@extends('layout.app')

@section('content')
    {{$title}}
    <?php var_dump($services); ?>
    @if(count($services) > 0)
    <ul>
        @foreach($services as $service)
            <li>{{$service}}</li>
        @endforeach
    </ul>
    @endif
@endsection