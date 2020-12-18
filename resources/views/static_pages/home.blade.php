 @extends('layouts.default')
 @section('title','新入门教程')
@section('content')
    <div class="jumbotron">
        <h1>hello laravel</h1>
        <p class="lead">你现在看到的是示例页</p>
        <p>一切将从这里开始</p>
        <p>
            <a href="{{route('signup')}}" class="btn btn-lg btn-success" role="button">现在注册</a>
        </p>
    </div>
@stop
