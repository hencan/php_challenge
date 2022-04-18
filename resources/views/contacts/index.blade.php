@extends('layouts.app')
 
@section('title', 'Contacts')
  
@section('content')
    <p>Contact page</p>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">first name</th>
                <th scope="col">last name</th>
                <th scope="col">email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
            <tr>
                <td scope="row">{{$contact->id}}</td>
                <td>{{$contact->first_name}}</td>
                <td>{{$contact->last_name}}</td>
                <td>{{$contact->email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection