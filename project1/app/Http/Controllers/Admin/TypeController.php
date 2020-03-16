<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $search = $request->input('dl_name');
        //$data = DB::table('daohang')->get();
        $data = DB::table('daohang')->select(DB::raw('*,concat(path,id) as npath'))->orderby('id','asc')->where('dl_name','like',"%{$search}%")->paginate(5);
        //dd($data);
        foreach($data as $k=>$v){
            $res = explode(',',$v->npath);
            $gs = count($res)-2;
            $data[$k]->dl_name = str_repeat('----',$gs).$v->dl_name;
        }
       // dd($request->dl_name);
        return view('Admin.Type.index',['data'=>$data,'request'=>$request->all()]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = DB::table('daohang')->get();
        //dd($data);
         return view('Admin.Type.add',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
      $data = $request->except(['_token']);
      
      if($data["pid"]){
        //dd($data);
        $parent = DB::table('daohang')->where("id",'=',$data['pid'])->first();
        //dd($parent);
        $data['path'] = $parent->path.$parent->id.',';
        //dd($data['path']);
      }else{
        $data['path'] = '0,';
      }
      //dd($data);
      if(DB::table('daohang')->insert($data)){
        return redirect('/type')->with('success','类别添加成功');
      }else{
        return back()->with('error','类别添加失败');
      }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = DB::table('daohang')->where('id','=',$id)->first();
        return view('Admin.Type.edit',['data'=>$data]);
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
          $data = $request->except(['_token','_method']);
          if( DB::table('daohang')->where('id','=',$id)->update($data)){
            return redirect('/type')->with('success','修改成功');
          }

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $son = DB::table('daohang')->where('pid','=',$id)->count();
        if($son){
               return redirect('/type')->with('error','该类别有子类别');  
        }else{
            if(DB::table('daohang')->where('id','=',$id)->delete()){
                return redirect('/type')->with('success','删除成功');
            }
        }
      
    }

    public function ajaxjin(Request $request){
        $id = $request->input('id');
        //dd($id);
        $status = DB::table('daohang')->where('id','=',$id)->first();
        if($status->status){
            $arr = array('status'=>'0');
            $jg = DB::table('daohang')->where('id','=',$id)->update($arr);
            if($jg){
             echo "1";
            }
        }else{
            $arr = array('status'=>'1');
            $jg = DB::table('daohang')->where('id','=',$id)->update($arr);          
              if($jg){                
             echo "2";
            }
        }
    }
}
