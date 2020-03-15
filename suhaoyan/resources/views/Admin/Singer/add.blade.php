@extends("Admin.Public.Layout")
@section('title',"后台用户管理")
@section('main')
<form action="/singer" method="post" enctype="multipart/form-data">
	{{csrf_field()}}
<div class="form-group">
	<label class="col-xs-8" for="example-text-input">歌手名</label>
		<div class="col-xs-8">
		<input class="form-control" type="text" id="example-text-input" name="s_name" placeholder="歌手名..">
	</div>
</div>
	<label class="col-xs-8" for="example-select">语种</label>
	<div class="col-xs-8">
		<select class="form-control" id="example-select" name="language">
			<option value="0">华语</option>
			<option value="1">欧美</option>
			<option value="2">日韩</option>
		</select>
	</div>
	<label class="col-xs-8" for="example-select">首字母</label>
	<div class="col-xs-8">
		<select class="form-control" id="example-select" name="letter">
			<option value="A">A</option>
			<option value="B">B</option>
			<option value="C">C</option>
			<option value="D">D</option>
			<option value="E">E</option>
			<option value="F">F</option>
			<option value="G">G</option>
			<option value="H">H</option>
			<option value="I">I</option>
			<option value="J">J</option>
			<option value="K">K</option>
			<option value="L">L</option>
			<option value="M">M</option>
			<option value="N">N</option>
			<option value="O">O</option>
			<option value="P">P</option>
			<option value="Q">Q</option>
			<option value="R">R</option>
			<option value="S">S</option>
			<option value="T">T</option>
			<option value="U">U</option>
			<option value="V">V</option>
			<option value="W">W</option>
			<option value="X">X</option>
			<option value="Y">Y</option>
			<option value="Z">Z</option>
		</select>
	</div>

<div class="form-group">
	<label class="col-xs-12" for="example-file-input">头像</label>
	<div class="col-xs-12">
		<input type="file" id="example-file-input" name="s_pic">
	</div>
</div>	
<div class="form-group">
	<label class="col-xs-8" for="example-textarea-input">介绍</label>
	<div class="col-xs-8">
		<textarea class="form-control" id="example-textarea-input" name="content" rows="6" placeholder="介绍.."></textarea>
	</div>
</div>


<!-- 
<button type="button" class="btn btn-primary" id="example-success-notify">确认修改</button>
<button type="button" class="btn btn-dark" id="example-error-notify">修改失败</button>
 -->
<div class="form-group">
	<label class="col-xs-8" for="example-select">性别</label>
	<div class="col-xs-8">
		<select class="form-control" id="example-select" name="s_sex">
			<option value="0">女</option>
			<option value="1">男</option>
			<option value="2">组合</option>
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