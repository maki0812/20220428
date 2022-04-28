@extends('layouts.default')
<style>
  .family-name{
    margin-right:10px;
  }
  .family-name-exp{
    margin-right:130px;
  }
  .check-botton{
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
  .example{
    color: #dcdcdc;
    margin-left:160px;
  }
  input{
    padding: 5px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 14px;
    outline: none;
    }
    textarea{
    width: 65%;
    padding: 5px;
    border-radius: 5px;
    border: 1px solid #ccc;
    appearance: none;
    font-size: 14px;
    outline: none;
    vertical-align:top;
   }
</style>
@section('title', 'お問い合わせ')

@section('content')
 <form method="POST" action="/confirm" >
    @csrf
    @method('POST')
    <div class="form-inner">
        <div class="form-cont">
            <div class="form-Item">
                <label for="name" class="required-tag">お名前<span class="Form-Item-Label-Required">※</span></label>
                <input type="text" name="name" autocomplete="family-name" class="family-name" value="{{ old('name') }}"><input type="text" name="name" autocomplete="given-name" class="given-name" value="{{ old('name') }}">
                <div class="example"><span class="family-name-exp">例）山田</span><span class="given-name-exp">例）太郎</span></div>
                @if($errors->has('name'))
                  <p class="required">{{ $errors->first('name') }}</p>
                @endif
            </div>
            <div class="form-Item">
                <label for="gender" class="required-tag">性別<span class="Form-Item-Label-Required">※</span></label>
                <input type="radio" name="gender" class="form-check-input" id="gender1" value="男性" checked>男性
                <input type="radio" name="gender" class="form-check-input" id="gender2 " value="女性">女性
                @if($errors->has('gender'))
                  <p class="required">{{ $errors->first('gender') }}</p>
                @endif
            </div>
            </div>
            <div class="form-Item">
                <label for="email" autocomplete="email" class="required-tag">メールアドレス<span class="Form-Item-Label-Required">※</span></label>
                <input type="text"  id="email" name="email" value="{{ old('email') }}">
                <div class="example">例）test@example.com</div>
                @if($errors->has('email'))
                  <p class="required">{{ $errors->first('email') }}</p>
                @endif
            </div>
            <div class="form-Item">
                <label for="postcode"  autocomplete="postcode" class="required-tag">郵便番号<span class="Form-Item-Label-Required">※</span></label>
                <span>〒</span><input type="postcode"  id="postcode" name="postcode" maxlength="8"onKeyUp="AjaxZip3.zip2addr(this,'','address','address');" value="{{ old('postcode') }}">
                <div class="example">　例）123-4567</div>
                @if($errors->has('postcode'))
                  <p class="required">{{ $errors->first('postcode') }}</p>
                @endif
            </div>
            <div class="form-Item">
                <label for="address" class="required-tag lg-label">住所<span class="Form-Item-Label-Required">※</span></label>
                <input type="address"  id="address" name="address" value="{{ old('address') }}" >
                <div class="example">例）東京都渋谷区千駄ヶ谷1-2-3</div>
                @if($errors->has('address'))
                  <p class="required">{{ $errors->first('address') }}</p>
                @endif
            </div>
            <div class="form-Item">
                <label for="building_name" class="lg-label">建物名</label>
                <input type="building_name"  id="building_name" name="building_name" value="{{ old('building_name') }}">
                <div class="example">例）千駄ヶ谷マンション101</div>
            </div>
            <div class="form-Item">
                <label for="opinion" class="required-tag opinion-tag">ご意見<span class="Form-Item-Label-Required">※</span></label>
                <textarea name="opinion" id="opinion" cols="120" rows="10" value="{{ old('opinion') }}"></textarea>
                @if($errors->has('opinion'))
                  <p class="required">{{ $errors->first('opinion') }}</p>
                @endif
            </div>
            <input class="check-botton" type="submit" value="確認">
        </div>
    </div>
</form>

@endsection