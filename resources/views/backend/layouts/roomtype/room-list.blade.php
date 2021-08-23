@extends('backend.master')
@section('content')

    <h1>Room under Roomtype</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Room Number</th>
            <th scope="col">Amount</th>
        </tr>
        </thead>
        <tbody>
        @foreach($rooms as $key=>$data)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$data->room_number}}</td>
                <td>{{$data->amount}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
    @endsection