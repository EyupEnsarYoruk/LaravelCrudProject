<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ürün Ekle</title>
</head>
<body>
<div class="container">
  <div class="auth-links">
      @if(Auth::guard('panel')->check())
          <form action="{{ route('panel.auth.logout') }}" method="POST" style="display: inline;">
              @csrf
              <button type="submit">{{ __('project.cikis') }}</button>
          </form>
      @else
          <p><a href="{{ route('panel.loginForm') }}">{{ __('project.giris') }}</a></p>
          <p><a href="{{ route('panel.registerForm') }}">{{ __('project.kayit') }}</a></p>
      @endif |
      @if (App::getLocale()==='tr')
      <a class="nav-link" href="/dilDegistir">İngilizce</a>
      @else
          <a class="nav-link" href="/dilDegistir">Turkish</a>
      @endif |
      <a href="/panel/urunler">{{__('project.urunler')}}</a>/{{__('project.urunekle')}}
  </div>
    <h1>{{__('project.urunekle')}}</h1>
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif
    <form action="" method="POST">
      @csrf
      <input type="text" name="name" placeholder="{{__('project.ad')}}"><br>
      <textarea type="text" name="description" placeholder="{{__('project.aciklama')}}"></textarea><br>
      <input type="number" name="price" placeholder="{{__('project.fiyat')}}"><br>
      <input type="checkbox" name="is_published" id="" placeholder="Ad"> {{__('project.yayinla')}} <br>
      <button>{{__('project.ekle')}}</button>
    </form>
</div>

</body>
</html>