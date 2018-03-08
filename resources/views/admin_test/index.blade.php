@extends('layouts.app')

@section('title', 'page title')

@section('sidebar')
    @parent
    <p> this is appended to the master sidebar</p>

@endsection

@section('content')
    <p> hello, {{$name}}, the current unix time is {{ time() }}</p>
    <p> ddd, @{{ $name }}
    <p> {{ $name or 'default' }} , htmlentities 语法处理之后的写法</p>
    <p> {!! $name !!} ， 原生的写法</p>
    <p>http://www.aichengxu.com/htmlcss/4665945.htm</p>
    @endsection

