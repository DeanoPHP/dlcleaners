@extends('layouts.app')

@section('content')
<div class="container">
    <h1 style="font-family:new times roman">DLcleaners Prices</h1>
    <div style="width:100%;border:1px solid white" class="card">
        <div style="position: relative; display: inline-block;" class="dropdown">
              <button style="display:inline-block;width:100%;border-radius:0px;font-family:new times roman;font-size:20px;background-color:white;border:1px solid gray;color:black;border-bottom:0px;" class="btn btn-primary dropdown-toggle" id="menu1" type="button" data-toggle="dropdown">{{$endOfTenancyTitle}}</button>
              <div style="padding:10px;width:100%;margin-top:166px;" class="dropdown-menu" aria-labelledby="menu1">
                  <ul style="list-style:none;">
                      <li><b>Studio Flat</b></li>
                      <li>{{ $Content }}</li>
                      <li style="color:red;">£100</li>
                  </ul>
                  <hr>
                  <ul style="list-style:none;">
                      <li><b>Flat 1 bedroom</b></li>
                      <li>{{ $Content }}</li>
                      <li style="color:red;">£130</li>
                  </ul>
                  <hr>
                  <ul style="list-style:none;">
                      <li><b>Flat/House 2 bedroom</b></li>
                      <li>{{ $Content }}</li>
                      <li style="color:red;">£150</li>
                  </ul>
                  <hr>
                  <ul style="list-style:none;">
                      <li><b>House 3 bedroom</b></li>
                      <li>{{ $Content }}</li>
                      <li style="color:red;">£200</li>
                  </ul>
                  <hr>
                  <ul style="list-style:none;">
                      <li><b>House 4 bedroom</b></li>
                      <li>{{ $Content }}</li>
                      <li style="color:red;">£260</li>
                  </ul>
                  <hr>
                  <ul style="list-style:none;">
                      <li><b>House 5 bedroom</b></li>
                      <li>{{ $Content }}</li>
                      <li style="color:red;">£300</li>
                  </ul>
                  <hr>
                  <ul style="list-style:none;">
                      <li><b>House 6 bedroom</b></li>
                      <li>{{ $Content }}</li>
                      <li style="color:red;">£350</li>
                  </ul>
              </div>
        </div>
      
        <div class="dropdown">
            <button style="width:100%;border-radius:0px;font-family:new times roman;font-size:20px;background-color:white;border:1px solid gray;color:black;border-bottom:0px;" class="btn btn-primary dropdown-toggle" id="menu1" type="button" data-toggle="dropdown">After Build Cleaning</button>
            <div style="padding:10px;width:100%;font-size:20px;font-family:new times roman;" class="dropdown-menu" aria-labelledby="menu1">
                <p>{{ $afterbuild }}</p>
            </div>
        </div>
          
        <div class="dropdown">
            <button style="width:100%;border-radius:0px;font-family:new times roman;font-size:20px;background-color:white;border:1px solid gray;color:black;border-bottom:0px;" class="btn btn-primary dropdown-toggle" id="menu1" type="button" data-toggle="dropdown">Regular Domestic Clean</button>
            <div style="padding:10px;width:100%;margin-top:256px;" class="dropdown-menu" aria-labelledby="menu1">
                <ul style="list-style:none;">
                    <li><b>within 5 miles of Yatton</b></li>
                    <li>{{ $Content }}</li>
                    <li style="color:red;">£15ph</li>
                </ul>
                <hr>
                <ul style="list-style:none;">
                    <li><b>Flat 1 bedroom</b></li>
                    <li>{{ $Content }}</li>
                    <li style="color:red;">£130</li>
                </ul>
                <hr>
                <ul style="list-style:none;">
                    <li><b>Flat/House 2 bedroom</b></li>
                    <li>{{ $Content }}</li>
                    <li style="color:red;">£150</li>
                </ul>
            </div>
        </div>
          
        <div class="dropdown">
            <button style="width:100%;border-radius:0px;font-family:new times roman;font-size:20px;background-color:white;border:1px solid gray;color:black;border-bottom:0px;" class="btn btn-primary dropdown-toggle" id="menu1" type="button" data-toggle="dropdown">One off cleaning</button>
            <div style="padding:10px;width:100%;font-size:20px;font-family:new times roman;" class="dropdown-menu" aria-labelledby="menu1">
                <p>{{$oneOffCleans}}</p>
            </div>
        </div>
          
        <div class="dropdown">
            <button style="width:100%;border-radius:0px;font-family:new times roman;font-size:20px;background-color:white;border:1px solid gray;color:black;" class="btn btn-primary dropdown-toggle" id="menu1" type="button" data-toggle="dropdown">Carpet Cleaning</button>
            <div style="padding:10px;width:100%;font-size:20px;font-family:new times roman;" class="dropdown-menu" aria-labelledby="menu1">
                <p>{{ $carpetCleaning }}</p>
            </div>
        </div>
    </div>
</div>
  
  <script>
  $(document).ready(function(){
    $(".dropdown-toggle").dropdown();
  });
  </script>
@endsection