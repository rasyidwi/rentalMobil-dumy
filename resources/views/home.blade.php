@extends('layouts.layouts')
@section('title')
    HOME
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
        <h1> Welcome !</h1>
        </div>
        <div class="card-body">
            <p>
                Alright, Bro bro. Now ! you can do anyting 
                @can('isAdmin')
                Selamat datang Admin
                @elsecan('isCustomer')
                Selamat datang Customer
                @endcan
            </p>
        </div>
    </div>
@endsection