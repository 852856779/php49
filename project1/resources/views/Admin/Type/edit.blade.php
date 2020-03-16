@extends("Admin.Public.Layout")
@section('title',"后台类别管理")
  <main class="lyear-layout-content">
      
      <div class="container-fluid">
        
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                
                <form action="/type/{{$data->id}}" method="post" class="row">
                {{csrf_field()}}
                {{method_field('put')}}
                  <div class="form-group col-md-12">
                    <label for="title">类别名</label>
                    <input type="text" class="form-control" id="title" name="dl_name"  placeholder="请输入类别名" value="{{$data->dl_name}}"/>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="status">状态</label>
                    <div class="clearfix">
                      <label class="lyear-radio radio-inline radio-primary">
                        <input type="radio" name="status" value="0"><span>禁用</span>
                      </label>
                      <label class="lyear-radio radio-inline radio-primary">
                        <input type="radio" name="status" value="1" checked><span>启用</span>
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
<script src="/static/jquery-1.8.3.min.js"></script>
