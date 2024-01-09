@extends('layout')

@section('content')
    <p>This is a place where you can add a store</p>
    <form method="POST" action="/add-store">
        @csrf
        <label for="store_name">Store name:</label>
        <input type="text" name="store_name" id="store_name">

        <label for="location">Location:</label>
        <input type="text" name="location" id="location">

        <button type="submit">Add</button>
    </form>
@endsection
