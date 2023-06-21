@extends('layout')

@section('content')
<div class="container w-50">
    <h1>Введите данные регистрации</h1>

    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>        
    @endif
</div>
    <form method="post" action="{{route('auth.store')}}">
    <div class="mb-3">
        <label for="password_confirmation" class="form-label">Повторите пороль</label>
        <input name="password_confirmation" type="password" class="form-control" id="password_confirmation">
    </div>
    <div class="mb-3 form-check">
        <input>
        <label>Согласен на всё</label>
    </div>
    </form>
@endsection