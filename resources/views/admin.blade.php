@extends('layouts.app')

@section('title', 'Admin')

@section('content')
<style>
  table,tr,td{
    border: 1px solid black;
  }
</style>
  <h2>Users</h2>

  <table>
    <tr>
      <th>Name</th>
      <th>Lastname</th>
      <th>Email</th>
      <th>NIF</th>
      <th>Phone</th>
      <th>Date of birth</th>
      <th>Gender</th>
    </tr>
    @foreach($users as $user)
    <tr>
      <th>{{$user->name}}</th>
      <th>{{$user->lastname}}</th>
      <th>{{$user->email}}</th>
      <th>{{$user->nif}}</th>
      <th>{{$user->phone}}</th>
      <th>{{$user->date_of_birth}}</th>
      <th>{{$user->gender}}</th>
    </tr>
    @endforeach


  </table>



@endsection
