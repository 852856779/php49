<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Type\Gedan;
use App\Model\Singer;
use DB;
class SingerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Singer::all();
        // dd($data);
        return view("Admin.Singer.index",['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Admin.Singer.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        if ($request->hasFile("s_pic")) {
            //不重复的文件名
            $name = time()+rand(100000,999999);
            //获得图片的后缀
            $hz = $request->file('s_pic')->getClientOriginalExtension();
            $dirname = date('Y-m-d');
            $path = 'upload/'.$dirname.'/';
            $filename = $name.'.'.$hz;
            //执行文件上传   Config::('app.fileup');
            $jg = $request->file('s_pic')->move($path,$filename);
            // echo $path.'.'.$filename;
            $data['s_pic'] = $path.$filename;;
            // dd($data);
            if(Singer::create($data)) {
                return redirect("/singer")->with('success',"添加成功");
            } else {
                return back()->with('error',"添加失败");
            }
        } else {
            return back()->with("error",'文件上传失败');
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
        $data = Singer::find($id);
        return view("Admin.Singer.edit",['data'=>$data]);
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
        /*$data = $request->except(['_token','_method']);
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

            $path = "./uploads/".$dirname.'/';
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
         $sj = DB::table('lunbo')->where('id','=',$id)->first();*/




        $data = $request->except("_token","_method");
        if ($request->hasFile("s_pic")) {
            unlink($data['ss_pic']);
            unset($data['ss_pic']);
            //不重复的文件名
            $name = time()+rand(100000,999999);
            //获得图片的后缀
            $hz = $request->file('s_pic')->getClientOriginalExtension();
            $dirname = date('Y-m-d');
            $path = "upload/".$dirname.'/';
            $filename = $name.'.'.$hz;
            //执行文件上传   Config::('app.fileup');
            $jg = $request->file('s_pic')->move($path,$filename);
            // echo $path.'.'.$filename;
            $data['s_pic'] = $path.$filename;;
            // dd($jg);
            if (Singer::where('id','=',$id)->update($data)) {
                return redirect("/singer")->with('success',"修改成功");
            } else {
                return back()->with('error',"修改失败");
            }
        } else {
            // dd(2);
            $data['s_pic'] = $data['ss_pic'];
            unset($data['ss_pic']);
            if (Singer::where('id','=',$id)->update($data)) {
                return redirect("/singer")->with('success',"修改成功");
            } else {
                return back()->with('error',"修改失败");
            }
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
    }

    public function sindel(Request $request)
    {
        $id = $request->input('id');
        $status = $request->input('status');  // 获取id和status
        if ($status == 1) {
            $status = 0;
        } else {
            $status = 1;
        }
        // 添加到数组
        if(DB::update("update singer set status=".$status." where id =".$id)){
            echo $status;
        } else {
            echo "error";
        }
        // 操作数据库
    }



}
