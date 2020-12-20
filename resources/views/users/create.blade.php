@extends('layouts.default')
@section('title','注册页面')
@section('content')
    <div  class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header">

                @include('shared._error')

                <form method="post" action="{{route( 'users.store' )}}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <lable for="name">名称：</lable>
                        <input type="text" name="name" class="form-control" value="{{ old('name')  }}">
                    </div>

                    <div class="form-group">
                        <div>
                            <lable for="email">邮箱：</lable>
                            <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password">密码：</label>
                        <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">确认密码：</label>
                        <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}">
                    </div>

                    <button type="submit" class="btn btn-primary">注册</button>

                </form>
            </div>
        </div>
    </div>
    @stop
