@extends('layouts.app')

@section('content')

<div class="container">
  <h1>お店詳細</h1>
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card">
          <div class="card-body">
            <div class="col-lg-12">
                <div align='center'>
                  @if ($restaurants->image_path)
                    <img src="{{ asset('storage/image/' . $restaurants->image_path) }}">
                  @endif
                </div>
               <div align='center'>
                <div class="title p-1">
                  <h1>{{  ($restaurants->restaurant_name) }}</h1>
                </div>
                <div class="col-md-6">
                  <p>{{ ("住所：" . $restaurants->prefecture . $restaurants->place) }}</p>
                </div>
                <div class="col-md-6">
                  <p>{{ ("電話番号：" . $restaurants->number) }}</p>
                </div>
                <div class="col-md-6">
                  <p>{{ ("ジャンル：" . $restaurants->cuisines) }}</p>
                </div>
                <div class="col-md-12">
                  <p>{{ ($restaurants->review) }}</p>
                </div>
               </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection