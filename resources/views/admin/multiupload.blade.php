@extends('layouts.admin')
@section('admin_content')
    <div class="container">
        <form action="{{route('image.multiupload')}}" method="post"  multipart="" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <input type="file" name="image[]"  multiple>
            </div>
            <div class="form-group">
                <input type="text" name="folderpath" placeholder="Имя категории" >
            </div>
            <button class="btn btn-success" type="submit">Загрузка</button>
        </form>
    </div>
    <br>
    <div class="container">
        <ul class="list-group">
            @foreach($catalogs as $cat)
                <li class="list-group-item list-group-item-dark ">{{$cat}}</li>
        @endforeach
        </ul>
    </div>
@endsection

