@extends('layouts.default')
@section('title','用户信息')
@section('content')
<div class="users-show row">
    <div class="col-md-3">
        <div class="box">
            <div class="padding-sm user-basic-info">
                <div style="">
                    <div class="media">
                        <div class="media-left">
                            <div class="image">
                                <a href="" class="popover-with-html" data-content="修改头像">
                                    <img class="media-object avatar-112 avatar img-thumbnail" src="">
                                </a>
                            </div>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">
                                {{ $user->name }}
                            </h3>
                            <div class="item">
                            </div>
                            <div class="item">
                                第 {{ $user->id }} 位会员
                            </div>
                            <div class="item number">
                                注册于 <span class="timeago">{{ $user->created_at }}</span>
                            </div>
                            <div class="item number">
                                活跃于 <span class="timeago">{{ $user->updated_at }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="follow-info row">
                    <div class="col-xs-4">
                        <a class="counter" href="#">0</a>
                        <a class="text" href="#">关注者</a>
                    </div>
                    <div class="col-xs-4">
                        <a class="counter" href="#">0</a>
                        <a class="text" href="#">讨论</a>
                    </div>
                    <div class="col-xs-4">
                        <a class="counter" href="#">0</a>
                        <a class="text" href="#">文章</a>
                    </div>
                </div>
                <hr>
                <div class="topic-author-box text-center">
                    <ul class="list-inline">

                    </ul>
                </div>
                <hr>
                <a class="btn btn-primary btn-block" href="#" id="user-edit-button">
                    <i class="fa fa-edit"></i> 编辑个人资料
                </a>
            </div>
        </div>
        <br/>
        <br/>
        <br/>

        <div class="box text-center">
            <div class="padding-sm user-basic-nav">
                <ul class="list-group">
                    <a href="#" class="">
                        <li class="list-group-item"><i class="text-md fa fa-headphones"></i> Ta 发布的文章</li>
                    </a>
                    <a href="#" class="">
                        <li class="list-group-item"><i class="text-md fa fa-list-ul"></i> Ta 发布的话题</li>
                    </a>
                    <a href="#" class="">
                        <li class="list-group-item"><i class="text-md fa fa-comment"></i> Ta 发表的回复</li>
                    </a>
                    <a href="#" class="">
                        <li class="list-group-item"><i class="text-md fa fa-eye"></i> Ta 关注的用户</li>
                    </a>
                    <a href="#" class="">
                        <li class="list-group-item"><i class="text-md fa fa-thumbs-up"></i> Ta 赞过的话题</li>
                    </a>
                </ul>
            </div>
        </div>
    </div>
    <div class="main-col col-md-9 left-col">
        <div class="panel panel-default">
            <div class="panel-heading">
                专栏文章
            </div>
            <div class="panel-body">
                <div class="empty-block">
                    <a href="https://laravel-china.org/articles/create" class="btn btn-primary no-pjax">
                        <i class="fa fa-paint-brush" aria-hidden="true"></i>  创作文章
                    </a>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                最近话题
            </div>
            <div class="panel-body">
                <div class="empty-block">没有任何数据~~</div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                最新评论
            </div>
            <div class="panel-body">
                <div class="empty-block">还未留下任何评论~~</div>
            </div>
        </div>
    </div>
</div>
@stop
