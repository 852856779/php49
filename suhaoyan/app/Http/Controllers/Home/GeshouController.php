<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Singer;
use DB;

class GeshouController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $lan = $request->input('language',"0");
        $sex = $request->input('sex',"1");
        $letter = $request->input('letter',"C");
        if ($letter == 1) {
            $ord = "order by s_num desc";
        } else {
            $ord = "and letter = '{$letter}'";
        }

        $num = $request->input('num',"1"); //第二个参数是不存在的时候 默认显示1
        $page = 5; //每页多少条数据
        $start = ($num-1)*$page;
        $count = DB::table('singer')->count();
        $maxpage = ceil($count/$page); //一共多少页
        $p = array(); //p就是把每一个页的序号都装进这个数组里面
        for ($i = 1;$i <= $maxpage; $i++) {
            $p[] = $i;
        }
        $data = DB::select("select * from singer where language = {$lan} and s_sex = {$sex} {$ord} limit {$start},{$page}");

        if ($request->ajax()){ //请求是否来自ajax
            return view("Home.Geshou.gg",['data'=>$data]);
        }


        
        return view("Home.Geshou.index",['data'=>$data,'p'=>$p]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Singer::find($id);
        return view("Home.Geshou.geshouxiangqing",['data'=>$data]);
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
