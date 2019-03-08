@extends('layouts.app')
@section('content')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>お店を教える(投稿)</h1>
                <form action="{{ action('Admin\RestaurantController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="row justify-content-center">
                    <div class="col-lg-8">
                    <div class="card">
                    <div class="card-body">
                      <div class="form-group row">
                          <label class="col-md-2" for="restaurant_name">店名</label>
                              <div class="col-md-6">
                              <input type="text" class="form-control" name="restaurant_name" value="{{ old('restaurant_name') }}">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-md-2" for="prefecture">都道府県</label>
                          <div class="col-md-4">
                          <select name="prefecture">
                          <option value="">選択して下さい</option>
 <option value="北海道" >北海道</option>
 <option value="青森県" >青森県</option>
 <option value="岩手県" >岩手県</option>
 <option value="宮城県" >宮城県</option>
 <option value="秋田県" >秋田県</option>
 <option value="山形県" >山形県</option>
 <option value="福島県" >福島県</option>
 <option value="茨城県" >茨城県</option>
 <option value="栃木県" >栃木県</option>
 <option value="群馬県" >群馬県</option>
 <option value="埼玉県" >埼玉県</option>
 <option value="千葉県" >千葉県</option>
 <option value="東京都" >東京都</option>
 <option value="神奈川県" >神奈川県</option>
 <option value="新潟県" >新潟県</option>
 <option value="富山県" >富山県</option>
 <option value="石川県" >石川県</option>
 <option value="福井県" >福井県</option>
 <option value="山梨県" >山梨県</option>
 <option value="長野県" >長野県</option>
 <option value="岐阜県" >岐阜県</option>
 <option value="静岡県" >静岡県</option>
 <option value="愛知県" >愛知県</option>
 <option value="三重県" >三重県</option>
 <option value="滋賀県" >滋賀県</option>
 <option value="京都府" >京都府</option>
 <option value="大阪府" >大阪府</option>
 <option value="兵庫県" >兵庫県</option>
 <option value="奈良県" >奈良県</option>
 <option value="和歌山県" >和歌山県</option>
 <option value="鳥取県" >鳥取県</option>
 <option value="島根県" >島根県</option>
 <option value="岡山県" >岡山県</option>
 <option value="広島県" >広島県</option>
 <option value="山口県" >山口県</option>
 <option value="徳島県" >徳島県</option>
 <option value="香川県" >香川県</option>
 <option value="愛媛県" >愛媛県</option>
 <option value="高知県" >高知県</option>
 <option value="福岡県" >福岡県</option>
 <option value="佐賀県" >佐賀県</option>
 <option value="長崎県" >長崎県</option>
 <option value="熊本県" >熊本県</option>
 <option value="大分県" >大分県</option>
 <option value="宮崎県" >宮崎県</option>
 <option value="鹿児島県" >鹿児島県</option>
 <option value="沖縄県" >沖縄県</option>
</select>
                           
                          </div>
                      </div>
                      <div>
                          <div class="form-group row">
                              <label class="col-md-2" for="place">住所(市町村以下)</label>
                              <div class="col-md-9">
                              <input type="text" class="form-control" name="place" value="{{ old('place') }}">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-md-2" for="number">電話番号</label>
                              <div class="col-md-5">
                              <input type="text" class="form-control" name="number" value="{{ old('number') }}">
                              </div>
                         </div>
                         <div class="form-group row">
                          <label class="col-md-2" for="cuisines">ジャンル</label>
                          <div class="col-md-6">
                          <input type="radio"  name="cuisines" value="和食">和食</input>
                          &nbsp;
                          <input type="radio"  name="cuisines" value="洋食">洋食</input>
                          &nbsp;
                          <input type="radio"  name="cuisines" value="中華">中華</input>
                          &nbsp;
                          <input type="radio"  name="cuisines" value="イタリアン">イタリアン</input>
                          &nbsp;
                          <input type="radio"  name="cuisines" value="その他">その他</input>
                          </div>
                      </div>
                         <div class="form-group row">
                              <label class="col-md-2" for="review">コメント</label>
                              <div class="col-md-9">
                                  <textarea class="form-control" name="review" rows="4">{{ old('review') }}</textarea>
                              </div>
                         </div>
                         <div class="form-group row">
                             <label class="col-md-2" for="image">画像</label>
                             <div class="col-md-8">
                                 <input type="file" class="form-control-file" name="image">
                             </div>
                         </div>
                         {{ csrf_field() }}
                         <div class="row justify-content-center">
                         <input type="submit" class="btn btn-primary" value="投稿">
                         </div>
                    </div>
                    </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
