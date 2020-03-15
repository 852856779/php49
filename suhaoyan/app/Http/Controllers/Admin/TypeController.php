<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Type\Type;
use DB;
class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = DB::select("select *,concat(path,id) as npath from type order by npath");
        

        return view("Admin.Type.index",['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Type::all()->where("pid",'=','0');
        return view("Admin.Type.add",['data'=>$data]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except("_token");
        $pid = Type::find($data['pid']);
        $data['path'] = $pid['path'].$pid['id'].',';

        if (Type::create($data)){
            return redirect("/type")->with('success',"添加成功");
        } else {
            return back()->with('error',"添加失败");
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
        if (Type::destroy($ld)){
            return redirect("/type")->with('success',"删除成功");
        } else {
            return back()->with('error',"删除失败");
        }

    }

    public function typedel(Request $request)
    {
        $id = $request->input('id');
        if(DB::table('type')->where('id','=',$id)->delete()){
            echo "1";
        }else{
            echo "2";
        }
    }
}
