<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\IP;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Response;

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
       
        // $results = Ip::where('type_id', '=', $request->type_id)
        // ->where('name' , 'like',  '%' .  $request->search_word . '%' )
        // ->orWhere('doc_code' , 'like',  '%' .  $request->search_word . '%' )
        // ->orWhere('project_title' , 'like',  '%' .  $request->search_word . '%' )
        // ->orWhere('date_filed' , 'like',  '%' .  $request->search_word . '%' )
        // ->orWhere('funding_source' , 'like',  '%' .  $request->search_word . '%' )
        // ->orWhere('reg_no' , 'like',  '%' .  $request->search_word . '%' )
        // ->orWhere('author_r_inventor' , 'like',  '%' .  $request->search_word . '%' )
        // ->orWhere('status' , 'like',  '%' .  $request->search_word . '%' )
        // ->orWhere('date_approved' , 'like',  '%' .  $request->search_word . '%' )
        // ->orWhere('duration' , 'like',  '%' .  $request->search_word . '%' )
        // ->orWhere('project_cost' , 'like',  '%' .  $request->search_word . '%' )
        // ->orWhere('funding_source' , 'like',  '%' .  $request->search_word . '%' )
        // ->orWhere('income_gross' , 'like',  '%' .  $request->search_word . '%' )
        // ->orWhere('type_id' , 'like',  '%' .  $request->search_word . '%' )
        // ->limit(30)->offset(0)
        // ->get();
        // return response()->json($results);
        $ip_string = $request->ip_type != ''?"type_id= '$request->ip_type' and ":"";
        $status_string = "status like '%$request->status%' and ";
        $sql_str = "SELECT * from `ip system`.`ips` where $ip_string   $status_string (ips.name Like '$request->search_word' OR doc_code Like '$request->search_word'OR project_title Like '$request->search_word'OR date_filed Like '$request->search_word'OR funding_source Like '$request->search_word'OR reg_no Like '$request->search_word' OR author_r_inventor Like '$request->search_word' OR ips.status Like '$request->search_word'OR date_approved Like '$request->search_word' OR duration Like '$request->search_word'OR project_cost Like '$request->search_word'OR funding_source Like '$request->search_word'OR income_gross Like '$request->search_word') AND (date_filed > '$request->yearfrom-01-01' AND date_filed < '$request->yearto-12-31') 
        -- LIMIT $request->start_row, $request->page_rows
        ";
        $results = DB::select($sql_str);

        $class_cnt = DB::select("select count(id) as cnt from ips");
        $results[0]->ips_count[0] =  $class_cnt[0]->cnt;
        // foreach ($results as $result) { 
        //     // $result->setAttribute('ips_count', $cnt);
        //     // $result->setAttribute('days', $cnt);
        //     break;
        // }
        return json_encode($results);
        
    }

    public function countFiledAndApproved(Request $request){
        // $max = Ip::select('date_filed')->orderBy('date_filed','DESC')->limit(1)->get();
        // $min = Ip::select('date_filed')->orderBy('date_filed','ASC')->limit(1)->get();

        $sql_str_min = "SELECT * from `ip system`.ips order by date_filed asc limit 0,1";
        $sql_str_max = "SELECT * from `ip system`.ips order by date_filed desc limit 0,1";
        $min = DB::select($sql_str_min);
        $max = DB::select($sql_str_max);
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
            $sql_str = "SELECT count(id) as filed from `ip system`.ips where type_id= 1 and date_filed >=  STR_TO_DATE('".$datefrom.
            "', '%Y-%m-%d') and date_filed <=  STR_TO_DATE('".$dateto."', '%Y-%m-%d')";
            $patent_filed = DB::select($sql_str);
            $sql_str_ap = "SELECT COUNT(id) AS approved FROM `ip system`.ips AS a WHERE type_id = 1 AND (a.status LIKE '%Approved%' OR a.status LIKE '%Granted%') and date_filed >=  STR_TO_DATE('".$datefrom.
            "', '%Y-%m-%d') and date_filed <=  STR_TO_DATE('".$dateto."', '%Y-%m-%d')";
            $patent_approved = DB::select($sql_str_ap);

            //get the count of filed and approved for Utility Model
            $sql_str = "SELECT count(id) as filed from `ip system`.ips where type_id= 2 and date_filed >=  STR_TO_DATE('".$datefrom.
            "', '%Y-%m-%d') and date_filed <=  STR_TO_DATE('".$dateto."', '%Y-%m-%d')";
            $um_filed = DB::select($sql_str);
            $sql_str_ap = "SELECT COUNT(id) AS approved FROM `ip system`.ips AS a WHERE type_id = 2 AND (a.status LIKE '%Approved%' OR a.status LIKE '%Granted%') and date_filed >=  STR_TO_DATE('".$datefrom.
            "', '%Y-%m-%d') and date_filed <=  STR_TO_DATE('".$dateto."', '%Y-%m-%d')";
            $um_approved = DB::select($sql_str_ap);

            //get the count of filed and approved for Trademark
            $sql_str = "SELECT count(id) as filed from `ip system`.ips where type_id= 3 and date_filed >=  STR_TO_DATE('".$datefrom.
            "', '%Y-%m-%d') and date_filed <=  STR_TO_DATE('".$dateto."', '%Y-%m-%d')";
            $trademark_filed = DB::select($sql_str);
            $sql_str_ap = "SELECT COUNT(id) AS approved FROM `ip system`.ips AS a WHERE type_id = 3 AND (a.status LIKE '%Approved%' OR a.status LIKE '%Granted%') and date_filed >=  STR_TO_DATE('".$datefrom.
            "', '%Y-%m-%d') and date_filed <=  STR_TO_DATE('".$dateto."', '%Y-%m-%d')";
            $trademark_approved = DB::select($sql_str_ap);

            //get the count of filed and approved for Copyright
            $sql_str = "SELECT count(id) as filed from `ip system`.ips where type_id= 4 and date_filed >=  STR_TO_DATE('".$datefrom.
            "', '%Y-%m-%d') and date_filed <=  STR_TO_DATE('".$dateto."', '%Y-%m-%d')";
            $copyright_filed = DB::select($sql_str);
            $sql_str_ap = "SELECT COUNT(id) AS approved FROM `ip system`.ips AS a WHERE type_id = 4 AND (a.status LIKE '%Approved%' OR a.status LIKE '%Granted%') and date_filed >=  STR_TO_DATE('".$datefrom.
            "', '%Y-%m-%d') and date_filed <=  STR_TO_DATE('".$dateto."', '%Y-%m-%d')";
            $copyright_approved = DB::select($sql_str_ap);

            //get the count of filed and approved for All
            $sql_str_all = "SELECT count(id) as filed from `ip system`.ips where  date_filed >=  STR_TO_DATE('".$datefrom.
            "', '%Y-%m-%d') and date_filed <=  STR_TO_DATE('".$dateto."', '%Y-%m-%d')";
            $all_filed = DB::select($sql_str_all);
            $sql_str_ap_all = "SELECT COUNT(id) AS approved FROM `ip system`.ips AS a WHERE  (a.status LIKE '%Approved%' OR a.status LIKE '%Granted%') and date_filed >=  STR_TO_DATE('".$datefrom.
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
        $sql_str = "SELECT count(id) as val from `ip system`.ips";
        $sql_str2 = "SELECT COUNT(id) AS val FROM `ip system`.ips WHERE type_id = 1";
        $sql_str3 = "SELECT COUNT(id) AS val FROM `ip system`.ips WHERE type_id = 2";
        $sql_str4 = "SELECT COUNT(id) AS val FROM `ip system`.ips WHERE type_id = 3";
        $sql_str5 = "SELECT COUNT(id) AS val FROM `ip system`.ips WHERE type_id = 4";
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

    public function setCookieForLogin(Request $request){
        $sql_str = "SELECT * FROM `d_fnri_db`.user where (username = '$request->username' || email =  '$request->username') and `password` =  '$request->password' " ;
        $result = DB::select($sql_str); //all
        $minutes = 60;
        $response = new Response('Set Cookie');
        $response->withCookie(cookie('name', '', $minutes));
        $response->withCookie(cookie('email', '', $minutes));
        $response->withCookie(cookie('login_ips_enabled', false, $minutes));
        $response->withCookie(cookie('role', "", $minutes));
        if (count($result) != 0 ) {
            $response->withCookie(cookie('name', $result[0]->name, $minutes));
            $response->withCookie(cookie('email', $result[0]->email, $minutes));
            $response->withCookie(cookie('login_ips_enabled', true, $minutes));
            ($result[0]->email == "dost-fnriIP@gmail.com")? $response->withCookie(cookie('role', "admin", $minutes)):$response->withCookie(cookie('role', "user", $minutes));
            
            // in session
            Session::put('name', $result[0]->name);
            Session::put('email', $result[0]->email);
            Session::put('login_ips_enabled', true);
            ($result[0]->email == "dost-fnriIP@gmail.com")?Session::put('role', "admin"):Session::put('role', 'user');
            // return redirect()->route('dashboard', [$response]);
            return $response;
        }else
            return false;

    }

    public function getCookie(Request $request){
        $get_all_cookies = Cookie::get();
        echo json_encode($get_all_cookies);
    }

    public function getUserToDb2(){
        $sql_str5 = "SELECT * FROM `d_fnri_db`.user" ;
        $data = DB::select($sql_str5); //all
        return $data;
    }
    
    public function getLogout()
    {
        // $this->auth->logout();

        Session::flush();

        return redirect('/');
    }
}
