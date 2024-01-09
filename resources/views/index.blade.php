



<!-- static.blade.php -->

@extends('layouts.web3')

@section('content')
 
<div class="container">
<meta name="viewport" content="width=device-width, initial-scale=1">

    <div class="row">
        <div class="col-md-12">

            <div id="app" >
             <User-list></User-list>
              
        </div>
    </div>
</div>

<script src="{{ mix('js/app.js') }}"></script>

@endsection
