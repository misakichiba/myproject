@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <div class="container">
        <div class="row">
            <h1>お店一覧</h1>  
        </div>
	<div class="row">
		<div class="col-md-12">
			<form action="{{ action('Admin\RestaurantController@index') }}" method="get">
				<div class="form-group row">
					<label class="col-md-1">店名</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="cond_restaurant_name" value={{ $cond_restaurant_name }}>
					</div>
					<div class="col-md-1">
						{{ csrf_field() }}
						<input type="submit" class="btn btn-primary" value="検索">
					</div>
				</div>
			</form>
		</div>
	</div>
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th width="10%">場所</th>
                                <th width="10%">店名</th>
                                <th width="30%">コメント</th>
				<th width="10%"></th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach($restaurants as $restaurant)
                                <tr>
                                    <td>{{ ($restaurant->prefecture) }}</td>
                                    <td>{{ str_limit($restaurant->restaurant_name, 20) }}</td>
                                    <td>{{ str_limit($restaurant->review, 175) }}</td>
				    <td align="center">
 					<a class="btn btn-primary" href="{{ action('Admin\RestaurantController@diner', ['id' => $restaurant->id]) }}">詳細</a>
                                        
                                    </td>
                                </tr>
                             @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection