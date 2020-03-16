@extends("Admin.Public.Layout")
@section('title',"轮播图添加")
<style>
	.am-form-file
{
  position:relative;
  overflow:hidden;
}
.am-form-file input[type=file]
{
  position:absolute;
  z-index:1;
  width:100%;
  font-size:50rem;
  opacity:0;
  cursor:pointer;
}
</style>
   <main class="lyear-layout-content">
      
      <div class="container-fluid">
        
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                
                <form action="/public/{{$data->id}}" method="post" class="row" enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('put')}}                
                  <div class="form-group col-md-12">
                    <label for="title">标题</label>
                    <input type="text" class="form-control" id="title" name="title"  value="{{$data->title}}" placeholder="请输入标题" />
                  </div>
                  <div class="form-group col-md-12">
                    <label>轮播图上传</label>
                    <div class="form-controls">
                         <img src="{{$data->sm_pic}}" alt="13123" width="50">
                      <ul class="list-inline clearfix lyear-uploads-pic">
<li class="am-form-file">

    <input id="file1" name="l_pic" type="file" hidefocus="true" >上传图片
</li>

                      </ul>
                    </div>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="tags">网址</label>
                    <input class="js-tags-input form-control" type="text" id="tags" name="url" value="{{$data->url}}" />
                  </div>
                  <div class="form-group col-md-12">
                    <label for="status">状态</label>
                    <div class="clearfix">
                      <label class="lyear-radio radio-inline radio-primary">
                        <input type="radio" name="status" value="0"  {{($data->status)?"checked":''}}><span>禁用</span>
                      </label>
                      <label class="lyear-radio radio-inline radio-primary">
                        <input type="radio" name="status" value="1" {{($data->status)?"checked":''}}><span>启用</span>
                      </label>
                    </div>
                  </div>
                  <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-primary ajax-post" target-form="add-form">确 定</button>
                    <button type="button" class="btn btn-default" onclick="javascript:history.back(-1);return false;">返 回</button>
                  </div>
                </form>
       
              </div>
            </div>
          </div>
          
        </div>
        
      </div>
      
    </main>
