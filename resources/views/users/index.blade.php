@extends('layouts.default')
@section('title','用户信息')
@section('content')
<div class="row">
    <div class="col-md-offset-2 col-md-8">
        <table class="table table-hover table-bordered">
            <tr>
                <th>用户ID</th>
                <th>用户名</th>
                <th>用户邮箱</th>
                <th>操作</th>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td><a href="">删除</a></td>
                <td><a href="">查看</a></td>
                <td><a href="">修改</a></td>
            </tr>
            @endforeach
        </table>

        {!! $users->render() !!}
    </div>
</div>
@stop
