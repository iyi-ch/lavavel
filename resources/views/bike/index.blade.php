<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1{
            display: flex;
            justify-content: center;
        }
        .one{
            display: flex;
            justify-content: center;
            font-size: 25px;
        }
        .two-1{
            display: flex;
            justify-content: center;
            font-size: 20px;
        }
        .two-2{
            display: flex;
            justify-content: center;
            font-size: 20px;
        }
    </style>
</head>
<body>

<h1>hello blade index :))</h1>
    
    {{-- 方法一 --}}
<div class="one">
    <a href="/bikes/create">create btn</a>
</div>
    {{-- 方法二 --}}
<div class="two">
    <div class="two-1">
    <a href="{{route('bikes.create')}}">create btn</a>
    {{--  --}}
    <a href="/bikes/123/edit">edit btn</a>
    {{-- edit一定要有id --}}
    </div>
    <div class="two-2">
    <a href="{{route('bikes.edit',['bike'=>1])}}">edit btn</a>
    {{-- 會顯示1 --}}
    </div>
</div>

<a href="{{route('student')}}">student btn</a>

{{$data['v1']}}
{{$data['v2']}}

{{-- @php
dd($data);
@endphp --}}

@foreach ($data['myArr'] as $key => $value)
<a href="http://">{{$value}}</a>
@endforeach




</body>
</html>