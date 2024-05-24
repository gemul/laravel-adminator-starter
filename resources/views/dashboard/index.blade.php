{{-- Extends main layout --}}
@extends('layout.adminator')

{{-- Page Title --}}
@section('title')
Settings
@endsection

{{-- Optionally add something here to be added to the <head> like css or meta tag --}}
@section('header')
@endsection

{{-- Content Section --}}
@section('content')
<div class="row">
    <div class="col-12">
        <h3>Dashboard</h3>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Your dashboard here</h5>
                
            </div>
        </div>
    </div>
</div>
@endsection

{{-- Scripts here to be added at the bottom of page after </body> --}}
@section('scripts')

@endsection