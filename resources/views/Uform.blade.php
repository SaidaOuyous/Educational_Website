



<!-- static.blade.php -->

@extends('layouts.main')
@section('title', 'lesson')
@section('content')
<div class="container">
    <div class="row">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

        <div class="col-md-12">
            <div id="app" >
             <User-form></User-form>
              
        </div>
    </div>
</div>

<script src="{{ mix('js/app.js') }}"></script>

@endsection
