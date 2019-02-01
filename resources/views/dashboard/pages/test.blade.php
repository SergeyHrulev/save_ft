@extends('dashboard.layouts.app')
@section('content')
    <form action="{{ url('/admin-dashboard/set-article-img') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlFile1">Фставьте фото</label>
            <input type="file" class="form-control-file" name="file" id="file">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-outline-primary">Отправить</button>
        </div>
    </form>
    @endsection
