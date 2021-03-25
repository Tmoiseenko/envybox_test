@extends('layout.master')

@section('content')
    @include('layout.errors')
    <form method="post" action="{{ route('save-feedback') }}">
        @csrf
        <div class="form-group">
            <label for="InputEmail">Введите ваш Имя</label>
            <input type="text" class="form-control" id="InputEmail" name="name" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="PhoneEmail">Введите ваш Телефон</label>
            <input type="tel" class="form-control" id="PhoneEmail" name="phone" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="FormControlTextarea">Ваше сообщение</label>
            <textarea class="form-control" id="FormControlTextarea" name="message" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
@endsection
