<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DB::table('lunbo')->orderby('id','asc')->paginate(5);;


        return view('Admin.Publics.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.Publics.add');
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
    if ($request->hasFile('l_pic')){
            //不重复的文件名
            $name = time()+rand(100000,31231231);
            //获得图片的后缀
            $hz = $request->file('l_pic')->getClientOriginalExtension();
            $dirname = date('Y-m-d');

            $path = "./upload/".$dirname.'/';
            $filename = $name.'.'.$hz;
            $jg = $request->file('l_pic')->move($path,$filename);
            $data['l_pic'] = $path.$filename;
            Small($path.$filename,"200","200");
            $data['sm_pic'] = $path."small_".$filename ;

        }else{
            return redirect('/public')->with('error','必须添加轮播图片');
        }
        $jg = DB::table('lunbo')->insert($data);
     if($jg){
        return redirect('/public/create')->with('success','轮播添加成功');
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
        $data = DB::table('lunbo')->where('id','=',$id)->first();
        //dd($data);

        $data->sm_pic = substr($data->sm_pic,1);
        //dd($data);
         return view('Admin.Publics.edit',['data'=>$data]);

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
         //dd($data);
         if(isset($data['l_pic'])){
            //修改了图片走的地方
             $sj = DB::table('lunbo')->where('id','=',$id)->first();
             unlink($sj->l_pic);
             unlink($sj->sm_pic);
               if ($request->hasFile('l_pic')){
            //不重复的文件名
            $name = time()+rand(100000,31231231);
            //获得图片的后缀
            $hz = $request->file('l_pic')->getClientOriginalExtension();
            $dirname = date('Y-m-d');

            $path = "./upload/".$dirname.'/';
            $filename = $name.'.'.$hz;
            $jg = $request->file('l_pic')->move($path,$filename);
            $data['l_pic'] = $path.$filename;
            Small($path.$filename,"200","200");
            $data['sm_pic'] = $path."small_".$filename ;

        }else{
            return redirect('/public')->with('error','必须添加轮播图片');
        }
        $jg = DB::table('lunbo')->where('id','=',$id)->update($data);
        if($jg){
            return redirect('/public')->with('success','轮播修改成功');
        }
         }else{
            $jg = DB::table('lunbo')->where('id','=',$id)->update($data);
         if($jg){
            return redirect('/public')->with('success','轮播修改成功');
         }
         }
         $sj = DB::table('lunbo')->where('id','=',$id)->first();
         //dd($data);
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
            $data = DB::table('lunbo')->where('id','=',$id)->first();
            unlink($data->l_pic);
            unlink($data->sm_pic);
            if(DB::table('lunbo')->where('id','=',$id)->delete()){
                return redirect('/public')->with('success','删除成功');
            }
        
    }

        public function lbjy(Request $request){
        $id = $request->input('id');
        //dd($id);
        $status = DB::table('lunbo')->where('id','=',$id)->first();
        if($status->status){
            $arr = array('status'=>'0');
            $jg = DB::table('lunbo')->where('id','=',$id)->update($arr);
            if($jg){
             echo "1";
            }
        }else{
            $arr = array('status'=>'1');
            $jg = DB::table('lunbo')->where('id','=',$id)->update($arr);          
              if($jg){                
             echo "2";
            }
        }
    }
}
