
@extends('layouts.web3')
@section('content')
  
<div class="container">

    <div class="row">
        <div class="col-md-12">

            <div id="app" >
            <questions-page></questions-page>
            <answers-page></answers-page>

        </div>
    </div>
</div>
<script src="{{ mix('js/app.js') }}"></script>

@endsection