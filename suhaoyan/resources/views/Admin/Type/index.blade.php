@extends("Admin.Public.Layout")
@section('title',"后台用户管理")
@section('main')
<h3>分类管理</h3>
				<table class="table table-hover">
                    <tr>
                      <th>#</th>
                      <th>类别名</th>
                      <th>操作</th>
                    </tr>
                @foreach($data as $v)
                    <tr>
                      <th scope="row">{{$v->id}}</th>
                      <td style="width:500px">
                      	@if($v->pid!=0)
                      	└──{{$v->t_name}}
                      	@else
                      	{{$v->t_name}}
                      	@endif
                      </td>
                      <td>
                      	
                      	@if($v->pid==0)
                      	<a class="btn btn-secondary btn-round" href="/type/create">添加子类别</a>
                      	@endif
                      	<a class="btn btn btn-primary btn-round" href="/type/create">修改</a>
                        
                      	<a zhi="{{$v->id}}" class="btn btn btn-danger btn-round del" href="javascript:void(0)">删除</a>
                      </td>
                    </tr>
                @endforeach
                </table>
<script>
$('.del').click(function(){
    
    var id = $(this).attr('zhi');
    var t = $(this).parents('tr');
    $.get("/typedel",{id:id},function(data){
      console.log(data);
        if(data == '1'){
            //删除当前按钮所在的行
            t.remove();
            lightyear.notify('删除成功', 'success', 2000);
        }
    })
 
  
})
</script>
@endsection