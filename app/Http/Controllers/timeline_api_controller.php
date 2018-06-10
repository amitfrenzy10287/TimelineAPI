<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
use Illuminate\Support\Facades\DB;

/**
* Timeline api call get all details
*/
class timeline_api_controller extends Controller
{

	/*********************************************************************************/
	/****************************** Get All Plotpoints ********************************/
	/*********************************************************************************/
	public function get_plotpoints(Request $request)
	{  	 
		// print'<pre>';print_r($request->all());exit;
		$start_time = $request->start_time ? $request->start_time : 0;
		$end_time = $request->end_time ? $request->end_time : 0;
		$where = "";
		if( $start_time > 0 || $end_time > 0 ){
			$where = ' where duration between '.$start_time.' AND '.$end_time;
		}
		$result = DB::select('select * from plotpoints '.$where);
 		
		return response()->json(array('status'=>1,'message'=>$result));	
	} 
	
}

?>