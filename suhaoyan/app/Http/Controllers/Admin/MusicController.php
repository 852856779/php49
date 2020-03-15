<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Type\Music;
use DB;


class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Music::all();
        return view("Admin.Music.index",['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Admin.Music.add");
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
        if ($request->hasFile("m_pic")) {
            //不重复的文件名
            $pic = "Pic_".time().rand(000,999);
            $url = "Music_".time().rand(000,999);
            //获得图片的后缀
            $hzp = $request->file('m_pic')->getClientOriginalExtension();
            $hzu = $request->file('m_url')->getClientOriginalExtension();
            $dirname = "Music";
            $path = 'upload/'.$dirname.'/';
            $filenamep = $pic.'.'.$hzp;
            $filenameu = $url.'.'.$hzu;
            //执行文件上传   Config::('app.fileup');
            $jgp = $request->file('m_pic')->move($path,$filenamep);
            $jgu = $request->file('m_url')->move($path,$filenameu);
            
            $data['m_pic'] = $path.$filenamep;
            $data['m_url'] = $path.$filenameu;
            $data['m_time'] = time();

            // dd($data);
            if(Music::create($data)) {
                return redirect("/music")->with('success',"添加成功");
            } else {
                return back()->with('error',"添加失败");
            }
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
}
