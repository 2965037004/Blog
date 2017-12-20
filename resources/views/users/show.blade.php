@extends('layouts.default')
@section('title','用户信息')
@section('content')
<div class="row">
    <div class="col-md-offset-2 col-md-8">
        <div class="col-md-12">
            <div class="col-md-offset-2 col-md-8">
                <table class="table table-hover table-bordered">
                    <tr>
                        <th>用户ID</th>
                        <th>用户名</th>
                        <th>用户邮箱</th>
                    </tr>
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@stop
