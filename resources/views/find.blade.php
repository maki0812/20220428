@extends('layouts.default')
<style>
  
 .box1 {
  padding: 50px 120px;
  font-weight: bold;
  border: solid 1px #000000;
}
label{
  line-height:50px;
}
.search-button{
  display: block;
  margin: 30px auto 0;
  width: 120px;
  text-align: center;
  padding: 5px 0;
  background: #000;
  color: #fff;
  font-weight: bold;
  cursor: pointer;
}
.reset-button{
  display: block;
  margin: 0 auto;
  width: 80px;
  text-align: center;
  border: none;
  cursor: pointer;
  background: none;
  border-bottom:solid 1px #000000;
}
input{
    padding: 5px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 14px;
    outline: none;
    }
.required-tag {
  margin-left:30px;
}
.required-tag-gender{
  max-width: 50px;
}
table {
  width:90%;
  border-bottom: 2px solid black;
}
</style>
@section('title', '管理システム')

@section('content')
<form action="find" method="GET" class="box1">
  @csrf
  <span>
  <label for="name" class="required-tag">お名前</label>
  <input type="text" name="name" value="{{$input}}">
  <label for="gender" class="required-tag required-tag-gender">性別</label>
  <input type="radio" name="gender" class="form-check-input" id="gender0" value="全て" checked>全て
  <input type="radio" name="gender" class="form-check-input" id="gender1" value="男性" >男性
  <input type="radio" name="gender" class="form-check-input" id="gender2 " value="女性">女性<br>
  </span>
  <span>
  <label for="created_at" class="required-tag">登録日</label>
  <input type="text" name="created_at" value="{{$input}}"> ～ <input type="text" name="created_at"  value="{{$input}}"><br>
  </span>
  <span>
 <label for="email" class="required-tag">メールアドレス</label>
 <input type="text" name="email" value="{{$input}}">
 </span>
 <button  type="search"  class="search-button">検索</button>
 <button  type="reset"  class="reset-button" >リセット</button>
</form>

<table>
  <thead>
     <tr>
      <th>ID</th>
      <th>お名前</th>
      <th>性別</th>
      <th>メールアドレス</th>
      <th>ご意見</th>
      <th></th>
      </tr>
    </thead>
    @if (@isset($item))
    <tbody>
       <tr>
        <td>
          {{$item->id}}
        </td>
        <td>
          {{$item->gender}}
        </td>
        <td>
          {{$item->email}}
        </td>
        <td>
          {{$item->opinion}}
        </td>
        <td>
          <form action="{{ route('contact.delete', ['id' => $item->id]) }}" method="post">
           @csrf
          <button class="button-delete">削除</button>
          </form>
        </td>
      </tr>
    </tdoby>
    @endif
</table>

@endsection