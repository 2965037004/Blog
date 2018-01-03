@extends('layouts.default')
@section('title','首页')
@section('content')
<div class="home">
<div class="row">
<!--
	<div class="col-md-9">
		<div class="post-list">
			<ul class="list-group">
				<li class="list-group-item">
					<a href="{{ route('home') }}"><h1>yarn镜像查看与修改</h1></a>
				</li>
				<li class="list-group-item">
					<span class="glyphicon glyphicon-calendar">&nbsp2017/11/19&nbsp</span>
					<span class="glyphicon glyphicon-user">&nbspAuth&nbsp</span>
					<span class="glyphicon glyphicon-list">&nbsp<span class="label label-default">分类</span>&nbsp</span>
					<span class="glyphicon glyphicon-tags">&nbsp<span class="label label-info">标签</span>&nbsp</span>
				</li>
				<li class="list-group-item">
						// 查看下载源
						yarn config get registry

						// 更换为淘宝源
						yarn config set registry https://registry.npm.taobao.org

						// 初始化项目
						yarn init -y

						// 安装webpack
						yarn add webpack

						// 更新到最新的
						yarn upgrade webpack

						// 安装项目里的依赖
						yarn install
				</li>
				<li class="list-group-item" style="text-align:right;">
					<a href="#"><span class="glyphicon glyphicon-eye-open"> 阅读全文</span></a>
				</li>
			</ul>
		</div>
	</div>
-->
	<div class="col-md-9">
		<div class="post-list">
			@foreach($posts as $post)
			<ul class="list-group">
				<li class="list-group-item">
					<a href="{{ route('home') }}"><h1>{{ $post->title }}</h1></a>
				</li>
				<li class="list-group-item">
					<span class="glyphicon glyphicon-calendar"> {{ $post->created_at->diffForHumans() }} </span>
					&nbsp
					<span class="glyphicon glyphicon-user"> {{ $post->user->name }} </span>
					&nbsp
					<span class="glyphicon glyphicon-list"> <span class="label label-default">{{ $post->category->name }}</span></span>
					<br />
					<br />
					<span class="glyphicon glyphicon-tags">
						@foreach($post->tags as $tag)
						<span class="label label-info">{{ $tag->name }}</span>
						@endforeach
					</span>
				</li>
				<li class="list-group-item">
					{{ $post->content }}
				</li>
				<li class="list-group-item" style="text-align:right;">
					<a href="#"><span class="glyphicon glyphicon-eye-open"> 阅读全文</span></a>
				</li>
			</ul>
			@endforeach
		</div>
		{!! $posts->render() !!}
	</div>

	<div class="col-md-3">

		<div class="post-favorite_count">
			<div class="panel panel-default">
				<div class="panel-heading">
					热门文章
				</div>
				<div class="panel-body">
					<ul class="list-group">
						@foreach($favoriteCountPosts as $post)
						<li class="list-group-item"><a href="#">{{ $post->title }}</a></li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>

		<div class="post-category">
			<div class="panel panel-default">
				<div class="panel-heading">
					文章分类
				</div>
				<div class="panel-body">
					@foreach($categories as $category)
					<a href="#"><span class="label label-default">{{ $category->name }}</span></a>
					@endforeach
				</div>
			</div>
		</div>

		<div class="post-tags">
			<div class="panel panel-default">
				<div class="panel-heading">
					标签云
				</div>
				<div class="panel-body">
					@foreach($tags as $tag)
					<a href="#"><span class="label label-info">{{ $tag->name }}</span></a>
					@endforeach
				</div>
			</div>
		</div>

	</div>

</div>
</div>
@stop
