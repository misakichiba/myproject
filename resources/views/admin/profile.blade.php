@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>プロフィール編集</h1>
                <form action="{{ action('Admin\ProfileController@edit') }}" method="post" enctype="multipart/form-data">

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
			@if($profiles)
                      <div class="form-group row">
                          <label class="col-md-2" for="name">ニックネーム</label>
                              <div class="col-md-6">
                              <input type="text" class="form-control" name="name" value="{{ $profiles->name }}">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-md-2" for="gender">性別</label>
                          <div class="col-md-4">
                          <input type="radio"  name="gender" value="男">男性</input>
                          &nbsp;
                          <input type="radio"  name="gender" value="女">女性</input>
                          </div>
                      </div>
                      <div>
                          <div class="form-group row">
                              <label class="col-md-2" for="age">年齢</label>
                              <div class="col-md-4">
                              <select name="age">
                              <option value="">選択してください</option>
                              <option value="19歳以下">19歳以下</option>
                              <option value="20代">20代</option>
                              <option value="30代">30代</option>
                              <option value="40代">40代</option>
                              <option value="50代">50代</option>
                              <option value="60代">60代</option>
                              <option value="70歳以上">70歳以上</option>
                              </select>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-md-2" for="introduction">自己紹介欄</label>
                              <div class="col-md-9">
                                  <textarea class="form-control" name="introduction" rows="8">{{ $profiles->introduction }}</textarea>
                              </div>
                         </div>
                         <div class="form-group row">
                             <label class="col-md-2" for="image">画像</label>
                             <div class="col-md-8">
                                 <input type="file" class="form-control-file" name="image">
                             </div>
                         </div>
			<input type="hidden" name="user_id" value="{{ $profiles->user_id }}">
			@else
			  <div class="form-group row">
                          <label class="col-md-2" for="name">ニックネーム</label>
                              <div class="col-md-6">
                              <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-md-2" for="gender">性別</label>
                          <div class="col-md-4">
                          <input type="radio"  name="gender" value="男">男性</input>
                          &nbsp;
                          <input type="radio"  name="gender" value="女">女性</input>
                          </div>
                      </div>
                      <div>
                          <div class="form-group row">
                              <label class="col-md-2" for="age">年齢</label>
                              <div class="col-md-4">
                              <select name="age">
                              <option value="">選択してください</option>
                              <option value="19歳以下">19歳以下</option>
                              <option value="20代">20代</option>
                              <option value="30代">30代</option>
                              <option value="40代">40代</option>
                              <option value="50代">50代</option>
                              <option value="60代">60代</option>
                              <option value="70歳以上">70歳以上</option>
                              </select>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-md-2" for="introduction">自己紹介欄</label>
                              <div class="col-md-9">
                                  <textarea class="form-control" name="introduction" rows="8">{{ old('introduction') }}</textarea>
                              </div>
                         </div>
                         <div class="form-group row">
                             <label class="col-md-2" for="image">画像</label>
                             <div class="col-md-8">
                                 <input type="file" class="form-control-file" name="image">
                             </div>
                         </div>
			<input type="hidden" name="user_id" value="{{ $id }}">
			@endif
                         {{ csrf_field() }}
                         <div class="row justify-content-center">
                         <input type="submit" class="btn btn-primary" value="更新">
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