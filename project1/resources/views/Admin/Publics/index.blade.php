@extends("Admin.Public.Layout")
@section('title',"轮播图展示展示")
<script src="/static/jquery-1.8.3.min.js"></script>
<main class="lyear-layout-content">
      
      <div class="container-fluid">
        
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-toolbar clearfix">
                <form class="pull-right search-bar" method="get" action="#!" role="form">
                  <div class="input-group">
                    <div class="input-group-btn">
                      <input type="hidden" name="search_field" id="search-field" value="title">
                      <button class="btn btn-default dropdown-toggle" id="search-btn" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="false">
                      标题 <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu">
                        <li> <a tabindex="-1" href="javascript:void(0)" data-field="title">标题</a> </li>
                        <li> <a tabindex="-1" href="javascript:void(0)" data-field="cat_name">栏目</a> </li>
                      </ul>
                    </div>
                    <input type="text" class="form-control" value="" name="keyword" placeholder="请输入名称">
                  </div>
                </form>
                <div class="toolbar-btn-action">
                  <a class="btn btn-primary m-r-5" href="#!"><i class="mdi mdi-plus"></i> 新增</a>
                  <a class="btn btn-success m-r-5" href="#!"><i class="mdi mdi-check"></i> 启用</a>
                  <a class="btn btn-warning m-r-5" href="#!"><i class="mdi mdi-block-helper"></i> 禁用</a>
                  <a class="btn btn-danger" href="#!"><i class="mdi mdi-window-close"></i> 删除</a>
                </div>
              </div>
              <div class="card-body">
                
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                      
                        <th>编号</th>
                        <th>标题</th>
                        <th>图片</th>
                        <th>链接</th>
                        <th>状态</th>
                        <th>操作</th>
                      </tr>
                    </thead>
                    <tbody>
                 
                     @foreach($data as $v)
                      <tr>
                    
                        <td>{{$v->id}}</td>
                        <td>{{$v->title}}</td>
                        <td>{{$v->url}}</td>
                        <td><img src="{{$v->sm_pic}}" alt="" width='50'></td>
                        <td><a href="javascript:void(0)" class="text-success jinyong" id="{{$v->id}}">@if($v->status) 启用 @else 禁用 @endif</a></td>
                        <td>
                          <div class="btn-group">
                          <form action="/public/{{$v->id}}/edit" method="get">                        
                            <button class="btn btn-xs btn-default" href="#!" title="编辑" data-toggle="tooltip"><i class="mdi mdi-pencil"></i></button>
                          </form>
                            <form action="/public/{{$v->id}}" method="post">
                             {{csrf_field()}}
                              {{method_field('DELETE')}}
                            <button class="btn btn-xs btn-default" href="#!" title="删除" data-toggle="tooltip"><i class="mdi mdi-window-close"></i></button>
                            </form>

                          </div>
                        </td>
                      </tr>
           
                  @endforeach
                    <script>
                      $('.jinyong').click(function(){
                   
                          var id = $(this).attr('id');
                         // alert(id);
                          var t = $(this);
                          $.get("/lbjy",{id:id},function(data){
                            //alert(data);
                              if(data == "1"){
                                  //删除当前按钮所在的行
                                  t.html("禁用"); 
                              }else{
                                  t.html("启用"); 
                              }
                          })

                          
                     
                    })
                      </script>
                    </tbody>
                  </table>
                </div>
                <ul class="pagination">
                 

                   <li>{{$data->render()}}</li>
              
                
                </ul>
       
              </div>
            </div>
          </div>
          
        </div>
        
      </div>
      
    </main>

