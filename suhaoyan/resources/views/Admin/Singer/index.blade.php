@extends("Admin.Public.Layout")
@section('title',"后台用户管理")
@section('main')
<h3>分类管理</h3>
				<table class="table table-hover">
                    <tr>
                      <th>#</th>
                      <th>头像</th>
                      <th>歌手名</th>
                      <th>性别</th>
                      <th>介绍</th>
                      <th>操作</th>
                    </tr>
                @foreach($data as $v)
                    <tr>
                      <th scope="row">{{$v->id}}</th>
                      <td><img src="/{{$v->s_pic}}" width='100'></td>
                      <td>{{$v->s_name}}</td>
                      <td>{{$v->s_sex}}</td>
                      <td style="width:400px;height:100px;overflow:hidden;display: block;">{{$v->content}}</td>
                      <td>
                      	<a class="btn btn btn-primary btn-round" href="/singer/{{$v->id}}/edit">修改</a>
                      	<a class="btn btn btn-danger btn-round del" sid="{{$v->id}}" zhuang="{{$v->status}}" href="javascript:void(0)">{{$v->status?"启用":'禁用'}}</a>
                      </td>
                    </tr>
                @endforeach
                </table>
                <div id="show"></div>
<script>
  $(".del").click(function(){
    var status = $(this).attr('zhuang');
    var id = $(this).attr('sid');
    var t = $(this);
    $.get("/sindel",{id:id,status:status},function(data){
      console.log(data);
      if (data == 1) {
        t.html('启用');
      } else {
        t.html("禁用");
      }
      t.attr("zhuang",data);
    })
  })
</script>
@endsection