@extends("Admin.Public.Layout")
@section('title',"后台用户管理")
@section('main')
<form action="/singer/{{$data->id}}" method="post" enctype="multipart/form-data">
  {{csrf_field()}}
  {{method_field('PUT')}}
<div class="form-group">
  <label class="col-xs-8" for="example-text-input">歌手名</label>
    <div class="col-xs-8">
    <input class="form-control" type="text" id="example-text-input" name="s_name" value="{{$data->s_name}}" placeholder="歌手名..">
    <input type="hidden" name="id" value="{{$data->id}}">
  </div>
</div>
  <label class="col-xs-8" for="example-select">语种</label>
  <div class="col-xs-8">
    <select class="form-control" id="example-select" name="language">
      <option value="0"{{$data->language=='0'?"selected":''}}>华语</option>
      <option value="1"{{$data->language?"selected":''}}>欧美</option>
      <option value="2"{{$data->language=='2'?"selected":''}}>日韩</option>
    </select>
  </div>

<div class="form-group">
  <label class="col-xs-12" for="example-file-input">头像</label>

  
  <div class="col-xs-12">
    <input type="file" id="example-file-input" value="{{$data->s_pic}}" name="s_pic">
    <input type="hidden" id="example-file-input" value="{{$data->s_pic}}" name="ss_pic">
    <img style="display:block" src="/{{$data->s_pic}}" width="150">
  </div>
</div>  
<div class="form-group">
  <label class="col-xs-8" for="example-textarea-input">介绍</label>
  <div class="col-xs-8">
    <input id="aa" type="hidden" name="" value="{{$data->content}}">
    <textarea class="form-control" id="content" name="content" rows="6" placeholder="介绍.."></textarea>
  </div>
</div>


<div class="form-group">
  <label class="col-xs-8" for="example-select">性别</label>
  <div class="col-xs-8">
    <select class="form-control" id="example-select" name="s_sex">
      <option value="0"{{$data->s_sex=='0'?"selected":''}}>女</option>
      <option value="1"{{$data->s_sex=='1'?"selected":''}}>男</option>
      <option value="2"{{$data->s_sex=='2'?"selected":''}}>组合</option>
    </select>
    <br>

    <button class="btn btn-pink" style="margin:20px 100px;width:100px;">提交</button>
  </div>

</div>

</form>
<script> 
  $("#content").html($("#aa").val());
</script>
@endsection