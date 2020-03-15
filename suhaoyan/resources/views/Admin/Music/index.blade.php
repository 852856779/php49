@extends("Admin.Public.Layout")
@section('title',"后台用户管理")
@section('main')
<h3>歌曲管理</h3>
				<table class="table table-hover">
                    <tr>
                      <th>#</th>
                      <th>封面</th>
                      <th>歌曲名</th>
                      <th>时长</th>
                      <th>作词</th>
                      <th>作曲</th>
                      <th>上架时间</th>
                      <th>歌词</th>
                      <th>操作</th>
                    </tr>
                @foreach($data as $v)
                    <tr>
                      <th scope="row">{{$v->id}}</th>
                      <td><img src="/{{$v->m_pic}}" width='100'></td>
                      <td>{{$v->m_name}}</td>
                      <td>{{$v->m_time}}</td>
                      <td>{{$v->lyrics}}</td>
                      <td>{{$v->composing}}</td>



                      <td>{{date("Y-m-d",$v->m_time)}}</td>
                      <td style="width:300px;height:100px;overflow:hidden;display: block;">{{$v->text}}</td>
                      <td>
                      	<a class="btn btn btn-primary btn-round" href="/albun/{{$v->id}}/edit">修改</a>
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
    $.get("/ablundel",{id:id,status:status},function(data){
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