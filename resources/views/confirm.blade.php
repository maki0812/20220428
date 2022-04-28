@extends('layouts.default')
<style>
.send-button{
    display: block;
    margin: 30px auto 0;
    width: 100px;
    text-align: center;
    padding: 5px 0;
    background: #000;
    color: #fff;
    font-weight: bold;
    cursor: pointer;
} 
.fix-button{
    display: block;
    text-align: center;
}
.form-Item{
    margin-bottom:30px;
}
</style>
@section('title', '内容確認')

@section('content')
<form method="POST" action="/thanks" >
    @csrf
    @method('POST')
    <div class="form-inner">
        <input type="hidden" name="name" value="{{ $inputs['name'] }}">
        <input type="hidden" name="gender" value="{{ $inputs['gender'] }}">
        <input type="hidden" name="email" value="{{ $inputs['email'] }}">
        <input type="hidden" name="postcode" value="{{ $inputs['postcode'] }}">
        <input type="hidden" name="address" value="{{ $inputs['address'] }}">
        <input type="hidden" name="building_name" value=" {{ $inputs['building_name'] }}">
        <input type="hidden" name="opinion" value=" {{ $inputs['opinion'] }}">
        {{ csrf_field() }}
        <div class="form-cont">
            <div class="form-Item">
                <label for="name" class="required-tag">お名前</label>
                {{ $inputs['name'] }}
            </div>
            <div class="form-Item">
                <label for="gender" class="required-tag">性別</label>
                  {{ $inputs['gender'] }}
            </div>
            </div>
            <div class="form-Item">
                <label for="email" class="required-tag">メールアドレス</label>
                {{ $inputs['email'] }}
            </div>
            <div class="form-Item">
                <label for="postcode" class="required-tag">郵便番号</label>
                <span>〒</span>{{ $inputs['postcode'] }}
            </div>
            <div class="form-Item">
                <label for="address" class="required-tag lg-label">住所</label>
                {{ $inputs['address'] }}
            </div>
            <div class="form-Item">
                <label for="building_name" class="lg-label">建物名</label>
                {{ $inputs['building_name'] }}
            </div>
            <div class="form-Item">
                <label for="opinion" class="required-tag">ご意見</label>
                {{ $inputs['opinion'] }}
            </div>
            <button name="action" type="submit" value="submit" class="send-button">送信</button>
            <a href="/" class="fix-button" >修正する</a>
        </div>
    </div>
</form>
@endsection