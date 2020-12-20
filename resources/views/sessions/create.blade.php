@extends('layouts.default')
@section('title','登录')
@section('content')
    <div  class="card">
        <div class="card-header">
            <h5>登录</h5>
        </div>
        <div class="card-body">
            @include('shared._error')

            <form method="post" action="{{route('login')}}">
                {{ csrf_field() }}

                <div class="form-group">
                    <lable for="email">邮箱</lable>
                    <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    <label for="password">密码</label>
                    <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="remember" id="exampleCheck1">
                        <label for="form-check-label" for="exampleCheck1">记住我</label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">登录</button>
            </form>
            <hr>
            <p>还没有账号？<a href="{{ route('signup') }}">现在注册</a></p>
        </div>
    </div>
    @stop