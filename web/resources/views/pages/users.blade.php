@extends('layouts.app')

@section('content')
<h1>{{ $title }}</h1>
<p>{{ $comment }}</p>
<p>
  <ul>
@foreach ($users as $user)
    <li>{{ $user['id'] }} - {{ $user['name'] }}</li>
@endforeach
  </ul>
</p>
@endsection