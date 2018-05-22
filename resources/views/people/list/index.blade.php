@extends('layouts.skeleton')

@section('content')

<p><a href="">View all your contacts</a></p>
<p><a href="">Contacts you've added recently</a></p>

activity
<p><a href="">Contacts you have the most activity with</a></p>
<p><a href="">Contacts you haven't seen in a while</a></p>

<p><a href="">Contacts with no tags</a></p>
<p><a href="">Contacts you want to stay in touch with</a></p>

<p><a href="">Contacts you haven't communicated with in a while</a></p>
<p><a href="">Calendar view</a></p>

<h2>Contacts based on your tags</h2>
@foreach (auth()->user()->account->tags as $tag)
<p><a href="">{{ $tag->name }}</a></p>
@endforeach


@endsection
