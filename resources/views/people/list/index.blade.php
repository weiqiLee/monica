@extends('layouts.skeleton')

@section('content')
<p><a href="">View all your contacts</a></p>
<p><a href="">Contacts you've added recently</a></p>
<p><a href="">Contacts you have the most activity with</a></p>

@foreach (auth()->user()->account->tags as $tag)
<p><a href="">{{ $tag->name }}</a></p>
@endforeach
@endsection
