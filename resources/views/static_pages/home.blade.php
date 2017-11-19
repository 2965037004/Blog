@extends('layouts.default')
@section('title','首页')
@section('content')
<div class="home">
<div class="row">
	<div class="col-md-9">
		<div class="article-list">
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

	<div class="col-md-3">

		<div class="article-last">
			<div class="panel panel-default">
				<div class="panel-heading">
					近期文章
				</div>
				<div class="panel-body">
					<ul class="list-group">
						<li class="list-group-item"><a href="#">第一条</a></li>
						<li class="list-group-item"><a href="#">第二条</a></li>
						<li class="list-group-item"><a href="#">第三条</a></li>
						<li class="list-group-item"><a href="#">第四条</a></li>
						<li class="list-group-item"><a href="#">第五条</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="article-category">
			<div class="panel panel-default">
				<div class="panel-heading">
					文章分类
				</div>
				<div class="panel-body">
					<a href="#"><span class="label label-default">分类</span></a>
				</div>
			</div>
		</div>

		<div class="article-tags">
			<div class="panel panel-default">
				<div class="panel-heading">
					标签云
				</div>
				<div class="panel-body">
					<a href="#"><span class="label label-info">标签</span></a>
				</div>
			</div>
		</div>

	</div>

</div>
</div>
@stop
