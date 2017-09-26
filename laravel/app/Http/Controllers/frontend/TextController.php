<?php 

namespace App\Http\Controllers\frontend;

use App\Text;
use Illuminate\Support\Facades\DB;
use App\Http\Models\Abb;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class TextController extends Controller
{
	public function Index()
	{
		echo "你好";
	}

	//链接数据库
	public function Ab()
	{
		$aa = Abb::get()->toArray();
		// foreach($aa as $k=>$v)
		// {
		// 	$v->toarray();
		// }
	
		// foreach($aa as $k=>$v)
		// {
		// 	echo "<pre>";
		// 	print_r($v);
		// }
		echo "<pre>";
		print_r($aa);
		//return view('index.ab',['aa'=>$aa]);

	}

	public function Cc(Request $request)
	{
		$aa = $request -> all();
		echo "<pre>";
		print_r($aa);
	}



}




?>