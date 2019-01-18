@extends('layout.app') 
@section('content')


<h1>Contatto</h1>
<form action="contact/submit" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" name="name" class="form-control" placeholder="Inserisci il nome">
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="text" name="email" class="form-control" placeholder="Inserisci il email">
    </div>
    <div class="form-group">
        <label for="message">Messaggio</label>
        <textarea type="message" name="message" class="form-control"  placeholder="Inserisci il messaggio"></textarea>
    </div>
    <input type="submit" value="Submit" class="btn btn-primary">
</form>
@endsection