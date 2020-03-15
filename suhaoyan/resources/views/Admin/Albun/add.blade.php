@extends("Admin.Public.Layout")
@section('title',"后台用户管理")
@section('main')
<form action="/albun" method="post" enctype="multipart/form-data">
	{{csrf_field()}}
<div class="form-group">
	<label class="col-xs-8" for="example-text-input">专辑名</label>
		<div class="col-xs-8">
		<input class="form-control" type="text" id="example-text-input" name="a_name" placeholder="专辑名..">
	</div>
</div>
	

<div class="form-group">
	<label class="col-xs-12" for="example-file-input">封面</label>
	<div class="col-xs-12">
		<input type="file" id="example-file-input" name="a_pic">
	</div>
</div>	
<div class="form-group">
	<label class="col-xs-8" for="example-textarea-input">简介</label>
	<div class="col-xs-8">
		<textarea class="form-control" id="example-textarea-input" name="content" rows="6" placeholder="简介.."></textarea>
	</div>
</div>


<div class="form-group">
	
	<div class="col-xs-8">
		

		<button class="btn btn-pink" style="margin:20px 100px;width:100px;">提交</button>
	</div>

</div>

</form>

@endsection