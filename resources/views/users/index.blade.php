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
                <td>
                    <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button class="btn btn-block btn-danger" type="submit" name="button">删除</button>
                    </form>
                </td>
                <td>
                    <form action="{{ route('users.show',$user->id) }}" method="GET">
                        {{ csrf_field() }}
                        <button class="btn btn-block btn-info" type="submit" name="button">查看</button>
                    </form>
                <td>
                    <form action="{{ route('users.edit',$user->id) }}" method="GET">
                        {{ csrf_field() }}
                        <button class="btn btn-block btn-warning" type="submit" name="button">修改</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>

        {!! $users->render() !!}
    </div>
</div>
@stop
