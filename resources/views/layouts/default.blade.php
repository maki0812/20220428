<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
     <style>
    body {
      font-size:16px;
      margin: 5px;
    }
    h1{
      font-weight: bold;
      font-size: 24px;
      text-align: center;
      margin-top:30px;
    }
    .content{
      margin:0 50px;
    }
    .form-inner{
    width: 65%;
    margin: 0 auto;
    padding: 50px 0;
    }
    .form-Item{
      margin-bottom: 20px;
    }
    .required-tag{
      font-weight: bold;
    }
    .Form-Item-Label-Required{
      color:red; 
    }
    .lg-label{
      font-weight: bold;
    }
    label{
      display:inline-block;
      width: 100%;
      max-width: 150px;
      letter-spacing: 0.05em;
      font-weight: bold;
      font-size: 16px;
    }
    input[type="radio"] {
    position: relative;
    bottom: 3px;
    width:20px;
    height:20px;
    vertical-align: middle;
}

   
  
  @media screen and (max-width: 720px){
  .form-inner {
    width: 80%;
    } 
  }

  </style>
  <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
</head>
<body>
    <h1>@yield('title')</h1>
    <div class="content">
    @yield('content')
    </div>
</body>
</html>