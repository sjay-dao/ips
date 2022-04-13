<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ip;
use App\Models\tm_dau;

class IpController extends Controller
{
    public function getListofIp(Request $request){
        $vars = Ip::orderBy('id','ASC')
        ->limit(50)->offset(0)
        ->get();
        $vars->url = "viewip";
        return view('mainpage', compact('vars'));
    }

    public function addIP(Request $request){
        $ips = new Ip();
        $ips->type_id = $request->type_id;
        $ips->doc_code = $request->doc_code ;
        $ips->date_filed = $request->date_filed;
        $ips->name = $request->name ;
        $ips->reg_no = $request->reg_no;
        $ips->author_r_inventor = $request->author_r_inventor;
        $ips->status = $request->status;
        $ips->date_approved = $request->date_approved;
        $ips->project_title = $request->project_title;
        $ips->duration = $request->duration;
        $ips->project_cost = $request->project_cost;
        $ips->funding_source = $request->funding_source;
        $ips->income_gross = $request->income_gross;
        $ips->praise_award = $request->praise_award;
        $ips->nast_award = $request->nast_award;
        // $ips->praise_award = "'none'";
        $ips->save();

        if($ips->type_id == 3){ // add trademark DAU data
            $tm_dau = new tm_dau();
            $tm_dau->reg_no = $request->reg_no;
            $tm_dau->goods_n_services = $request->goods_n_services;
            $tm_dau->first_use = date('Y-m-d',strtotime($request->first_use));
            $tm_dau->outlet = $request->outlet;
            $tm_dau->outlet_address = $request->outlet_address;
            $tm_dau->pic_n_lbl = $request->pic_n_lbl;
            $tm_dau->save();
        }
        return response()->json($ips);
        // return json_encode($request);
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

    public function selectIpByType(Request $request){
        if($request->ip_type == -1){
    //         $leagues = DB::table('leagues')
    // ->select('league_name')
    // ->join('countries', 'countries.country_id', '=', 'leagues.country_id')
    // ->where('countries.country_name', $country)
    // ->get();
            $results = tm_dau::select('*')
            ->join('ips', 'ips.reg_no', '=', 'tm_dau.reg_no')
            ->limit(30)->offset(0)->distinct()->get();
            // return response()->json($results);
            return json_encode($results);
        }else if($request->ip_type == 0){
            $results = IP::orderBy('date_filed','ASC')->limit(30)->offset(0)->get();
            // return response()->json($results);
            return json_encode($results);
        }else{
            $results = Ip::where('type_id', $request->ip_type)->orderBy('date_filed','ASC')
            ->limit(50)->offset(0)
            ->get();
            // return response()->json($results);
            return json_encode($results);
        }
    }

    public function selectDateFiled(){// this is for getting the notifications
        
        // for patent
        $strdatefrom = strtotime(((int)date('Y')-20) . "/" .date('m') . "/". date('d'));
        $strdateto = strtotime(((int)date('Y')-19) . "/" .date('m') . "/". date('d'));
        $datefrom = date('Y-m-d',$strdatefrom);
        $dateto = date('Y-m-d',$strdateto);

        // for Utility model and Trademark
        $strdatefrom1 = strtotime(((int)date('Y')-10) . "/" .date('m') . "/". date('d'));
        $strdateto1 = strtotime(((int)date('Y')-9) . "/" .date('m') . "/". date('d'));
        $datefrom1 = date('Y-m-d',$strdatefrom1);
        $dateto1 = date('Y-m-d',$strdateto1);


        
        // // $results =  Ip::select('type_id','date_filed')->get();
        // $results =  Ip::select('type_id','date_filed','name')->where( 'date_filed', '>=', $datefrom)->where( 'date_filed', '<=', $dateto)->where( 'type_id', '==', 1)->
        //     orWhere( 'date_filed', '>=', $datefrom1)->where( 'date_filed', '<=', $dateto1)->get();

        $results = Ip::select('type_id','date_filed','name')->
        where(function ($query) use($datefrom,$dateto) {
            $query->where('date_filed', '>=', $datefrom)
                  ->where('date_filed', '<=', $dateto)
                  ->where( 'type_id', '=', '1');
        })->
        orWhere(function ($query) use($datefrom1,$dateto1) {
            $query->where('date_filed', '>=', $datefrom1)
                  ->where('date_filed', '<=', $dateto1)
                  ->where(function ($query) {
                    $query->where('type_id', '=', '2')
                          ->orWhere( 'type_id', '=', '3');
                });
        })->
        get();

        // $results = $result1->merge($result2);
        $str = "";
        foreach ($results as $result) {
            if($result->type_id == '1')
                $datetodeduct = $datefrom;
            else if($result->type_id == '2' || $result->type_id == '3')
                $datetodeduct = $datefrom1;

            $str = (strtotime($result->date_filed) - strtotime($datetodeduct))/(60*60*24);
            $result->setAttribute('days', $str);
        }

        return json_encode($results);
    }
}
