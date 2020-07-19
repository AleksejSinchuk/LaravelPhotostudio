@extends('layouts.admin')
@section('admin_content')
    <div class="container">
        <form action="{{route('image.upload')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
            <div class="form-group">
                <input type="file" name="image">
            </div>
            <div class="form-group">
                <input type="text" name="folderpath">
            </div>
            <button class="btn btn-default" type="submit">Загрузка</button>
        </form>
    </div>
    @isset($path)
        <img class="img-fluid" src="{{asset('/storage/'.$path)}}">
    @endisset
@endsection
