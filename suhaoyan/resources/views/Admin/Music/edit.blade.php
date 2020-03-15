@extends("Admin.Public.Layout")
@section('title',"后台用户管理")
@section('main')
<form action="/albun/{{$data->id}}" method="post" enctype="multipart/form-data">
  {{csrf_field()}}
  {{method_field('PUT')}}
<div class="form-group">
  <label class="col-xs-8" for="example-text-input">专辑名</label>
    <div class="col-xs-8">
      <input type="hidden" name="id" value="{{$data->id}}">
    <input class="form-control" type="text" id="example-text-input" value="{{$data->a_name}}" name="a_name" placeholder="专辑名..">
  </div>
</div>
  

<div class="form-group">
  <label class="col-xs-12" for="example-file-input">封面</label>
  <div class="col-xs-12">
    <input type="file" id="example-file-input" name="a_pic">
    <input type="hidden" id="example-file-input" value="{{$data->a_pic}}" name="aa_pic">
    <img style="display:block" src="/{{$data->a_pic}}" width="150">
  </div>
</div>  
<div class="form-group">
  <label class="col-xs-8" for="example-textarea-input">简介</label>
  <div class="col-xs-8">
    <input id="aa" type="hidden" name="" value="{{$data->content}}">
    <textarea class="form-control" id="content" name="content" rows="6" placeholder="简介.."></textarea>
  </div>
</div>


<div class="form-group">
  
  <div class="col-xs-8">
    

    <button class="btn btn-pink" style="margin:20px 100px;width:100px;">提交</button>
  </div>

</div>

</form>
<script> 
  $("#content").html($("#aa").val());
</script>
@endsection