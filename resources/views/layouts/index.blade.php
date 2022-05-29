<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <div>
    <header class="header">
      <nav class="nav">
        <ul class="nav-item">
          <li><a href="{{route('main.index')}}" class="item">Main</a></li>
          <li><a href="{{route('posts.index')}}" class="item">Posts</a></li>
          <li><a href="{{route('contacts.index')}}" class="item">Contacts</a></li>
          <li><a href="{{route('about.index')}}" class="item">About</a></li>
        </ul>
      </nav>
    </header>
    @yield('content')
  </div>
</body>
</html>