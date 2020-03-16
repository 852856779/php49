<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class IndexController extends Controller
{
    //
     public function index()
    {
        //
    			$parent = DB::table('daohang')->where('id','=','19')->where('status','=','1')->first();
    			$parents = DB::table('daohang')->where('id','=','30')->where('status','=','1')->first();
    			if($parent){
    				$data = DB::table('daohang')->orderby('id','asc')->where('pid','=','19')->where('status','=','1')->get();
    			}else{
    				$data = 0;
    			}
    			if($parents){
    				$data1 = DB::table('daohang')->orderby('id','asc')->where('pid','=','30')->where('status','=','1')->get();
    			}else{
    				$data1 = 0;
    			}  

                $lunbo = DB::table('lunbo')->where('status','=','1')->orderby('id','asc')->get();  			
    			//$data1 = DB::table('daohang')->orderby('id','asc')->where('pid','=','30')->where('status','=','1')->get();
    			//dd($data);
    	        return view('Home.Index.index',['data'=>$data,'data1'=>$data1,'lunbo'=>$lunbo]);
       
    }

}
