@extends("Admin.Public.Layout")
@section('title',"后台用户管理")
@section('main')
<h3>分类管理</h3>
				<table class="table table-hover">
                    <tr>
                      <th>#</th>
                      <th>封面</th>
                      <th>歌单名</th>
                      <th>标签</th>
                      <th>播放量</th>
                      <th>介绍</th>
                      <th>操作</th>
                    </tr>
                @foreach($data as $v)
                    <tr>
                      <th scope="row">{{$v->id}}</th>
                      <td><img src="/a/images/logo-ico.png" width='80'></td>
                      <td>{{$v->g_name}}</td>
                      <td>{{$v->t_name}}</td>
                      <td>{{$v->g_num}}</td>
                      <td>{{$v->content}}</td>
                      <td>
                      	<a class="btn btn btn-primary btn-round" href="/type/create">修改</a>
                      	<a class="btn btn btn-danger btn-round" href="/type/create">删除</a>
                      </td>
                    </tr>
                @endforeach
                </table>

@endsection