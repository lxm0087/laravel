@extends('layouts.default')
@section('title', '更新个人资料')

@section('content')
    <div class="offset-md-2 col-md-8">
        <div class="card">
            <div class="card-header">
                <h5>更新个人资料</h5>
            </div>
            <div class="card-body">

                @include('shared._error')

                <div class="gravatar-edit">
                    <a href="http://gravatar.com/email" target="_blank">
                        <img src="{{ $user->gravatar('200') }}" alt="{{ $user->name }}" class="gravatar">
                    </a>
                </div>

                <form method="post" action="{{ route('users.update',$user->id ) }}">
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}

                    <div class="form-group">
                        <lable for="name">名称:</lable>
                        <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                    </div>

                    <div class="form-group">
                        <lable for="email">邮箱:</lable>
                        <input type="text" name="email" class="form-control" value="{{ $user->email }}" disabled >
                    </div>

                    <div class="form-group">
                        <lable for="password">密码:</lable>
                        <input type="password" name="password" class="form-control" value="{{ old('password') }}"  >
                    </div>
                    <div class="form-group">
                        <lable for="password_confirmation">确认密码:</lable>
                        <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}"  >
                    </div>
                    <button type="submit" class="btn-primary btn">更新</button>

                </form>
            </div>
        </div>
    </div>

@stop
