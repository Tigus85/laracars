@extends('layouts.app')

@section('content')
  <h1>Homepage</h1>
  <h2>{{ $data["firstName"] }} {{ $data["lastName"] }} {{ $data["age"] }} ans</h2>
@endsection
