@extends('layouts.app')

@section('content')
<style>
.centered-greeting {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 80vh; /* Adjust as needed */
    text-align: center;
}
</style>

<div class="container-fluid centered-greeting">
    <h1>👋 Halo, {{ Auth::user()->name }}</h1>
</div>
@endsection
