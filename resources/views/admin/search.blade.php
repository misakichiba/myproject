@extends('layouts.app')

@section('content')

<div class="container">
    <h1>お店を探す</h1>
        <div class="row justify-content-center">
            <form action="{{ action('Admin\SearchController@research') }}" method="get">

@endsection
