<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/mdb.min.css" />
        <title>Изменить</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid bg-light border-bottom">

            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container align-items-center justify-content-center justify-content-md-between py-3">
                  <a class="navbar-brand" href="{{ url('/') }}">
                    <x-application-logo class="block h-8 w-auto fill-current text-gray-600" />
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    ☰
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav justify-content-center me-auto mb-2 mb-lg-0 ">
                      <li class="nav-item">
                        <a " class="nav-link active text-sm text-gray-700 dark:text-gray-500 underline" aria-current="page" href="{{ url('/') }}">Главная</a>
                        
                      </li>
                      <a class="nav-link active text-sm text-gray-700 dark:text-gray-500 underline" aria-current="page" href="{{ url('/categor') }}">Категории</a>
                      <a class="nav-link active text-sm text-gray-700 dark:text-gray-500 underline" aria-current="page" href="{{ route('hrono.index') }}">Хронология</a>
                    </ul>
                    <div >
                        @if (Route::has('admin'))
                            <div class="">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Профиль</a>
                                    <a href="{{ route('auth.logout') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Выйти</a>
                                @else
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Войти</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Зарегистрироваться</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                  </div>
                </div>
              </nav>
        </div>
        <div class="container">
            <form method="post" action="{{route('races.update', $race)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Изменить название расы</label>
                <textarea name="race_name"class="form-control" id="exampleFormControlTextarea1" rows="1">{{$race-> race_name}}</textarea>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Изменить описание расы</label>
                <textarea name="description"class="form-control" id="exampleFormControlTextarea1" rows="10">{{$race-> description}}</textarea>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Изменить продолжительность жизни</label>
                <textarea name="race_life"class="form-control" id="exampleFormControlTextarea1" rows="1">{{$race-> race_life}}</textarea>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Изменить магию</label>
                <textarea name="magic"class="form-control" id="exampleFormControlTextarea1" rows="2">{{$race-> magic}}</textarea>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Изменить родину</label>
                <textarea name="motherland"class="form-control" id="exampleFormControlTextarea1" rows="4">{{$race-> motherland}}</textarea>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Изменить религию</label>
                <textarea name="religion"class="form-control" id="exampleFormControlTextarea1" rows="3">{{$race-> religion}}</textarea>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Изменить семейные порядки</label>
                <textarea name="family"class="form-control" id="exampleFormControlTextarea1" rows="4">{{$race-> family}}</textarea>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Изменить ядро</label>
                <textarea name="core"class="form-control" id="exampleFormControlTextarea1" rows="1">{{$race-> core}}</textarea>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Изменить слабости расы</label>
                <textarea name="weaknesses"class="form-control" id="exampleFormControlTextarea1" rows="1">{{$race-> weaknesses}}</textarea>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Изменить расовых врагов</label>
                <textarea name="enemies"class="form-control" id="exampleFormControlTextarea1" rows="1">{{$race-> enemies}}</textarea>
              </div>
              <div class="mb-3">
                <label for="addition" class="form-label">Изменить Дополнительную информацию</label>
                <textarea name="addition"class="form-control" id="addition" rows="1">{{$race-> addition}}</textarea>
              </div>
              <div class="mb-3">
                <label for="images1" class="form-label">Изменить изображение расы 1</label>
                <input name="images1"class="form-control" type="file" value="{{$race-> images1}}">
              </div>
              <div class="mb-3">
                <label for="images2" class="form-label">Изменить изображение расы 2</label>
                <input name="images2"class="form-control" type="file" value="{{$race-> images2}}">
              </div>
              <div class="mb-3">
                <label for="images3" class="form-label">Изменить изображение ядра </label>
                <input name="images3"class="form-control" type="file" value="{{$race-> images3}}">
              </div>
              <div class="mb-3">
                <label for="images4" class="form-label">Изменить дополнительное изображение </label>
                <input name="images4"class="form-control" type="file" value="{{$race-> images4}}">
              </div>
              
              <button type="submit" class="btn btn-danger  m-2">Изменить</button>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    </body>
</html>