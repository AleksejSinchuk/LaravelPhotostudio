@extends('layouts.admin')
@section('admin_content')
    <style>
    .cont{
    margin: 5px;
    float: left;
    padding: 5px;

    }
    .cont img {
        height: 200px;
        width: 200px;
    }
    .leftcol { /* Левая колонка */
        float: left; /* Обтекание справа */
        width: 20%; /* Ширина колонки */
        position: fixed; /* Make it stick/fixed */
        top: 150px; /* Stay on top */
        transition: top 0.3s; /* Transition effect when sliding down (and up) */
    }
    .rightcol { /* Правая колонка */
        margin-left: 24%; /* Отступ слева */
    }

    </style>
<div class="leftcol ">
    <div class="list-group ">
        @foreach($catalogs as $cat)
            <a href="/deletecatalog/{{$cat}}" class="list-group-item list-group-item-action " >{{$cat}}</a>
        @endforeach
    </div>
</div>
    <div class="rightcol">
    <div class="container">
           <p>RightCol</p>
    </div>
    </div>
    <script>
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.getElementsByClassName("list-group").style.top = "0";
            } else {
                document.getElementsByClassName("list-group").style.top = "-50px";
            }
            prevScrollpos = currentScrollPos;
        }
    </script>
@endsection
