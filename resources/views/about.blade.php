@extends('layouts.app')



@section('content')
    <div class="container my-3">
        <h1>About {!! \Illuminate\Support\Facades\Cache::get('version') !!} this blog and create new About page with new Controller</h1>
    </div>
@endsection
