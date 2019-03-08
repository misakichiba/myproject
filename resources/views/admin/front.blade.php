@extends('layouts.app')

@section('content')
<style>
.btn btn-primary {text-decoration: none;}
</style>
<div class="container">
  <h1>Myページ</h1>
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
              <div class="card-header">
                  <h3>Myプロフィール</h3>
              </div>
                <div class="card-body">
		<div align="center">
			@if ($profiles)
			@if ($profiles->image_path)
				<img src="{{ asset('storage/image/' . $profiles->image_path) }}">
			@endif
                  <h2>{{ ($profiles->name) }}</h2>
                  <p>{{ ("性別：" . $profiles->gender) }}</p>
                  <p>{{ ("年齢：" . $profiles->age) }}</p>
		  <p>{{ ($profiles->introduction) }}</p>
			@else 
		  <h2>ニックネーム：</h2>
                  <p>性別：</p>
                  <p>年齢：</p>
		  <p></p>
		@endif
		</div>
	          <div class="row justify-content-center">
                  <a class="btn btn-primary" href="{{ route('profile') }}">編集する
                  </a>
                  </div>      
            </div>
        </div>
    </div>
</div>
@endsection

