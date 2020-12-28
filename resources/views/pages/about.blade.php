@extends('layouts.app')

@section('content')
    
    <div class="jumbotron">
        <img src="images/{{ $image }}" width="100%" height="200px" alt="DLcleaners logo">
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
    <hr>
    <div class="row">
        
        <div class="col-md-4">
            <img src="images/IMG_6960.jpeg" width="100%" height="200px" alt="Hospital Cleaner with dlcleaners">
        </div>
        
        <div class="col-md-4">
            <img src="images/IMG_6821.jpeg" width="100%" height="200px" alt="cleaning surgeries with dlcleaners">
        </div>
        
        <div class="col-md-4">
            <img src="images/IMG_6844.jpeg" width="100%" height="200px" alt="Clean sink from dlcleaners">
        </div>

    </div>
    <hr>
    <h1 style="font-family: Times New Roman;font-size: 60px;text-align:center;">Why Choose DLcleaners</h1>

    <p style="font-size:20px;">{{ $whyChooseDLcleaners }}</p>
@endsection