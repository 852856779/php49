<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Albun;
use DB;

class AlbunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Albun::all();
        return view("Admin.Albun.index",['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Admin.Albun.add");
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
        if ($request->hasFile("a_pic")) {
            //不重复的文件名
            $name = "ZJ_".rand(000,999);
            //获得图片的后缀
            $hz = $request->file('a_pic')->getClientOriginalExtension();
            $dirname = date('Y-m-d');
            $path = 'upload/'.$dirname.'/';
            $filename = $name.'.'.$hz;
            //执行文件上传   Config::('app.fileup');
            $jg = $request->file('a_pic')->move($path,$filename);
            
            $data['a_pic'] = $path.$filename;;
            $data['a_time'] = time();
            // dd($data);
            if(Albun::create($data)) {
                return redirect("/albun")->with('success',"添加成功");
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
        $data = Albun::find($id);
        return view("Admin.Albun.edit",['data'=>$data]);
        
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
        $data = $request->except("_token","_method");
        if ($request->hasFile("a_pic")) {
            unlink($data['aa_pic']);
            unset($data['aa_pic']);
            //不重复的文件名
            $name = "ZJ_".rand(000,999);
            //获得图片的后缀
            $hz = $request->file('a_pic')->getClientOriginalExtension();
            $dirname = date('Y-m-d');
            $path = "upload/".$dirname.'/';
            $filename = $name.'.'.$hz;
            //执行文件上传   Config::('app.fileup');
            $jg = $request->file('a_pic')->move($path,$filename);
            // echo $path.'.'.$filename;
            $data['a_pic'] = $path.$filename;;
            // dd($data);
            if (Albun::where('id','=',$id)->update($data)) {
                return redirect("/albun")->with('success',"修改成功");
            } else {
                return back()->with('error',"修改失败");
            }
        } else {
            // dd(2);
            $data['a_pic'] = $data['aa_pic'];
            unset($data['aa_pic']);
            if (Albun::where('id','=',$id)->update($data)) {
                return redirect("/albun")->with('success',"修改成功");
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


    public function ablundel(Request $request)
    {
        $id = $request->input('id');
        $status = $request->input('status');  // 获取id和status
        if ($status == 1) {
            $status = 0;
        } else {
            $status = 1;
        }
        // 添加到数组
        if(DB::update("update albun set status=".$status." where id =".$id)){
            echo $status;
        } else {
            echo "error";
        }
    }
}
