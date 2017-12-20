@extends('layouts.default')
@section('title','用户注册')
@section('content')
<div class="col-md-offset-2 col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5>注册</h5>
        </div>
        <div class="panel-body">
            @include('shared._errors')

            <form method="POST" action="{{ route('sessions.store') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="email">邮箱：</label>
                    <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    <label for="password">密码：</label>
                    <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                </div>

                <button type="submit" class="btn btn-primary">登录</button>
            </form>
        </div>
        <div class="panel-fooding">
            <a href="{{ route('users.create') }}"><-- &nbsp &nbsp 没有帐号,现在注册 &nbsp &nbsp --></a>
        </div>
    </div>
</div>
@stop