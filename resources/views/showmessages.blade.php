@extends('layout.app')

@section('content')
<div class="container">
    <h1>Messages</h1>
    @if(count($messages) > 0)
        @foreach($messages as $message)
        <ul class='list-group mb-8'>
            <li class="list-group-item">Nome: {{$message->name}}</li>
            <li class="list-group-item">Email: {{$message->email}}</li>
            <li class="list-group-item">Messaggio: {{$message->message}}</li>
        </ul>
        @endforeach
    @endif
</div>
@endsection