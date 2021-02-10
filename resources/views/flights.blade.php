@extends('layouts.app')

@section('title', 'Flights')

@section('content')
<style>
  table,tr,td{
    border: 1px solid black;
  }
</style>
  <h2>Coming flights:</h2>

  <table>
    <tr>
      <th>Name</th>
      <th>Date</th>
      <th>Origin</th>
      <th>Destiny</th>
      <th>Available Seats</th>
      <th>Buy tickets</th>
    </tr>
    @foreach($flights as $flight)
    <tr>
      <td>{{$flight->name}}</td>
      <td>{{$flight->date}}</td>
      <td>{{$flight->origin}}</td>
      <td>{{$flight->destiny}}</td>
      <td>{{$flight->available_seats}}</td>
      <td>
        <form action="/reserve/{{$flight->id}}" method="POST">
        @csrf
        <input type="number" name="seats">
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
        <input type="submit" value="Book flight">
        </form>
      </td>
    </tr>
    @endforeach
  </table>

@endsection
