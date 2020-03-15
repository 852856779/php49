@extends("Admin.Public.Layout")
@section('title',"后台用户管理")
@section('main')
<form action="/music" method="post" enctype="multipart/form-data">
	{{csrf_field()}}
<div class="form-group">
	<label class="col-xs-8" for="example-text-input">歌曲名名</label>
		<div class="col-xs-8">
		<input class="form-control" type="text" id="example-text-input" name="m_name" placeholder="专辑名..">
	</div>
</div>



<div class="form-group">
	<label class="col-xs-8" for="example-text-input">作词</label>
		<div class="col-xs-8">
		<input class="form-control" type="text" id="example-text-input" name="lyrics" placeholder="专辑名..">
	</div>
</div>
<div class="form-group">
	<label class="col-xs-8" for="example-text-input">作曲</label>
		<div class="col-xs-8">
		<input class="form-control" type="text" id="example-text-input" name="composing" placeholder="专辑名..">
	</div>
</div>
	

<div class="form-group">
	<label class="col-xs-12" for="example-file-input">封面</label>
	<div class="col-xs-12">
		<input type="file" id="example-file-input" name="m_pic">
	</div>
</div>	

<div class="form-group">
	<label class="col-xs-12" for="example-file-input">音乐</label>
	<div class="col-xs-12">
		<input type="file" id="example-file-input" name="m_url">
	</div>
</div>



<div class="form-group">
	<label class="col-xs-8" for="example-textarea-input">歌词</label>
	<div class="col-xs-8">
		<textarea class="form-control" id="example-textarea-input" name="text" rows="6" placeholder="歌词.."></textarea>
	</div>
</div>


<div class="form-group">
	
	<div class="col-xs-8">
		

		<button class="btn btn-pink" style="margin:20px 100px;width:100px;">提交</button>
	</div>

</div>

</form>

@endsection