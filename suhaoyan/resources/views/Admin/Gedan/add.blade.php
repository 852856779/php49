@extends("Admin.Public.Layout")
@section('title',"后台用户管理")
@section('main')
<form action="/type" method="post">
	{{csrf_field()}}
<div class="form-group">
	<label class="col-xs-8" for="example-text-input">类别名</label>
		<div class="col-xs-8">
		<input class="form-control" type="text" id="example-text-input" name="t_name" placeholder="类别名..">
		
	</div>
</div>
<!-- 
<button type="button" class="btn btn-primary" id="example-success-notify">确认修改</button>
<button type="button" class="btn btn-dark" id="example-error-notify">修改失败</button>
 -->
<div class="form-group">
	<label class="col-xs-8" for="example-select">所属类别</label>
	<div class="col-xs-8">
		<select class="form-control" id="example-select" name="pid" size="1">
			<option value="0">顶级类别</option>
		@foreach ($data as $v)
			<option value="{{$v->id}}">{{$v->t_name}}</option>
		@endforeach
		</select>
		<br>
		<button class="btn btn-pink" style="margin:20px 100px;width:100px;">提交</button>
	</div>

</div>

</form>
<script type="text/javascript" src="/a/js/jquery.min.js"></script>
<script type="text/javascript" src="/a/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/a/js/perfect-scrollbar.min.js"></script>
<script src="/a/js/bootstrap-notify.min.js"></script>
<script src="/a/js/lightyear.js"></script>
<script src="/a/js/main.min.js"></script>

<!-- <script>
// 消息提示示例
$('#example-success-notify').on('click', function(){
    lightyear.loading('show');
    lightyear.notify('修改成功，页面即将自动跳转~', 'success', 3000);
    // 假设ajax提交操作
    setTimeout(function() {
        lightyear.loading('hide');
        
        window.location.href = "/type";
    },3000)
});
$('#example-error-notify').on('click', function(){
    lightyear.loading('show');
    // 假设ajax提交操作
    setTimeout(function() {
        lightyear.loading('hide');
        lightyear.notify('服务器错误，请稍后再试~', 'danger', 100);
    }, 1e3)
});
</script> -->
@endsection