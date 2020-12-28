@extends('layouts.app')

@section('content')
    
    <div class="jumbotron">
        <img src="images/{{ $image }}" width="100%" height="200px" alt="">
    </div>
    
    <h1 style="font-family: Times New Roman;font-size: 60px;text-align:center;">History</h1>

    <div class="row">
        <div class="col-md-6">
            <p style="font-size:20px;">{{ $history }}</p>
        </div>
        <div class="col-md-6">
            <p style="font-size:20px;">{{ $historyP2 }}</p>
        </div>
    </div>
@endsection