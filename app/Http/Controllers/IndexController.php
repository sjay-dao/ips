<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\IP;
use Illuminate\Support\Facades\DB;
class IndexController extends Controller
{

    public function mainIndex(){
        
        $users = User::all();
        $ips = IP::all();
        // foreach($users as $user){
        //     echo $user->email . "waihdasugd oas ";
        // }
        return view('index', ["ips"=>$ips]);
    }

    public function goToMainpage(){
        
        return view('mainpage');
    }

    public function searchInIpdata(Request $request){
       
        $results = Ip::where('name' , 'like',  '%' .  $request->search_word . '%' )
        ->orWhere('doc_code' , 'like',  '%' .  $request->search_word . '%' )
        ->orWhere('project_title' , 'like',  '%' .  $request->search_word . '%' )
        ->orWhere('date_filed' , 'like',  '%' .  $request->search_word . '%' )
        ->orWhere('funding_source' , 'like',  '%' .  $request->search_word . '%' )
        ->orWhere('reg_no' , 'like',  '%' .  $request->search_word . '%' )
        ->orWhere('author_r_inventor' , 'like',  '%' .  $request->search_word . '%' )
        ->orWhere('status' , 'like',  '%' .  $request->search_word . '%' )
        ->orWhere('date_approved' , 'like',  '%' .  $request->search_word . '%' )
        ->orWhere('duration' , 'like',  '%' .  $request->search_word . '%' )
        ->orWhere('project_cost' , 'like',  '%' .  $request->search_word . '%' )
        ->orWhere('funding_source' , 'like',  '%' .  $request->search_word . '%' )
        ->orWhere('income_gross' , 'like',  '%' .  $request->search_word . '%' )
        ->limit(30)->offset(0)
        ->get();
        // return response()->json($results);
        return json_encode($results);
    }


    public function countFiledAndApproved(Request $request){
        $max = Ip::select('date_filed')->orderBy('date_filed','DESC')->limit(1)->get();
        $min = Ip::select('date_filed')->orderBy('date_filed','ASC')->limit(1)->get();
        $cnt=0;
        $data = (object)array();
        $min_year = (int)$min[0]->date_filed;
        $max_year = (int)$max[0]->date_filed;
        for($x=$min_year; $x<=$max_year; $x++) {
            $strdatefrom = strtotime($x. "/01/01");
            $strdateto = strtotime($x . "/12/31");
            $datefrom = date('Y-m-d',$strdatefrom);
            $dateto = date('Y-m-d',$strdateto);


            //get the count of filed and approved for Patent
            $sql_str = "SELECT count(id) as filed from ips where type_id= 1 and date_filed >=  STR_TO_DATE('".$datefrom.
            "', '%Y-%m-%d') and date_filed <=  STR_TO_DATE('".$dateto."', '%Y-%m-%d')";
            $patent_filed = DB::select($sql_str);
            $sql_str_ap = "SELECT COUNT(id) AS approved FROM ips AS a WHERE type_id = 1 AND (a.status LIKE '%Approved%' OR a.status LIKE '%Granted%') and date_filed >=  STR_TO_DATE('".$datefrom.
            "', '%Y-%m-%d') and date_filed <=  STR_TO_DATE('".$dateto."', '%Y-%m-%d')";
            $patent_approved = DB::select($sql_str_ap);

            //get the count of filed and approved for Utility Model
            $sql_str = "SELECT count(id) as filed from ips where type_id= 2 and date_filed >=  STR_TO_DATE('".$datefrom.
            "', '%Y-%m-%d') and date_filed <=  STR_TO_DATE('".$dateto."', '%Y-%m-%d')";
            $um_filed = DB::select($sql_str);
            $sql_str_ap = "SELECT COUNT(id) AS approved FROM ips AS a WHERE type_id = 2 AND (a.status LIKE '%Approved%' OR a.status LIKE '%Granted%') and date_filed >=  STR_TO_DATE('".$datefrom.
            "', '%Y-%m-%d') and date_filed <=  STR_TO_DATE('".$dateto."', '%Y-%m-%d')";
            $um_approved = DB::select($sql_str_ap);

            //get the count of filed and approved for Trademark
            $sql_str = "SELECT count(id) as filed from ips where type_id= 3 and date_filed >=  STR_TO_DATE('".$datefrom.
            "', '%Y-%m-%d') and date_filed <=  STR_TO_DATE('".$dateto."', '%Y-%m-%d')";
            $trademark_filed = DB::select($sql_str);
            $sql_str_ap = "SELECT COUNT(id) AS approved FROM ips AS a WHERE type_id = 3 AND (a.status LIKE '%Approved%' OR a.status LIKE '%Granted%') and date_filed >=  STR_TO_DATE('".$datefrom.
            "', '%Y-%m-%d') and date_filed <=  STR_TO_DATE('".$dateto."', '%Y-%m-%d')";
            $trademark_approved = DB::select($sql_str_ap);

            //get the count of filed and approved for Copyright
            $sql_str = "SELECT count(id) as filed from ips where type_id= 4 and date_filed >=  STR_TO_DATE('".$datefrom.
            "', '%Y-%m-%d') and date_filed <=  STR_TO_DATE('".$dateto."', '%Y-%m-%d')";
            $copyright_filed = DB::select($sql_str);
            $sql_str_ap = "SELECT COUNT(id) AS approved FROM ips AS a WHERE type_id = 4 AND (a.status LIKE '%Approved%' OR a.status LIKE '%Granted%') and date_filed >=  STR_TO_DATE('".$datefrom.
            "', '%Y-%m-%d') and date_filed <=  STR_TO_DATE('".$dateto."', '%Y-%m-%d')";
            $copyright_approved = DB::select($sql_str_ap);

            //get the count of filed and approved for All
            $sql_str_all = "SELECT count(id) as filed from ips where  date_filed >=  STR_TO_DATE('".$datefrom.
            "', '%Y-%m-%d') and date_filed <=  STR_TO_DATE('".$dateto."', '%Y-%m-%d')";
            $all_filed = DB::select($sql_str_all);
            $sql_str_ap_all = "SELECT COUNT(id) AS approved FROM ips AS a WHERE  (a.status LIKE '%Approved%' OR a.status LIKE '%Granted%') and date_filed >=  STR_TO_DATE('".$datefrom.
            "', '%Y-%m-%d') and date_filed <=  STR_TO_DATE('".$dateto."', '%Y-%m-%d')";
            $all_approved = DB::select($sql_str_ap_all);
            
            $data->dates[$cnt] = $x;
            $data->f[0][$cnt] =  $patent_filed[0]-> filed;
            $data->a[0][$cnt] = $patent_approved[0]->approved;
            $data->f[1][$cnt] =  $um_filed[0]-> filed;
            $data->a[1][$cnt] = $um_approved[0]->approved;
            $data->f[2][$cnt] =  $trademark_filed[0]-> filed;
            $data->a[2][$cnt] = $trademark_approved[0]->approved;
            $data->f[3][$cnt] =  $copyright_filed[0]-> filed;
            $data->a[3][$cnt] = $copyright_approved[0]->approved;
            $data->f[4][$cnt] =  $all_filed[0]-> filed;
            $data->a[4][$cnt] = $all_approved[0]->approved;
            // $data->sql[$cnt] =  $sql_str;
            $cnt++;
        }
        // $results = $result2->concat($result1);
        echo json_encode($data);
    }

    public function getIpTypesCounts(){
        $data = array();
        $sql_str = "SELECT count(id) as val from ips";
        $sql_str2 = "SELECT COUNT(id) AS val FROM ips WHERE type_id = 1";
        $sql_str3 = "SELECT COUNT(id) AS val FROM ips WHERE type_id = 2";
        $sql_str4 = "SELECT COUNT(id) AS val FROM ips WHERE type_id = 3";
        $sql_str5 = "SELECT COUNT(id) AS val FROM ips WHERE type_id = 4";
        $data[0] = DB::select($sql_str)[0]->val; //all
        $data[1] = DB::select($sql_str2)[0]->val;//patent
        $data[2] = DB::select($sql_str3)[0]->val;//Utility Model
        $data[3] = DB::select($sql_str4)[0]->val;//TM
        $data[4] = DB::select($sql_str5)[0]->val;//CR

        return json_encode($data);
    }

    public function redirectToDashboard(Request $request) {
        
        return redirect('/addIP')->with('iptype', '');
    }
}
