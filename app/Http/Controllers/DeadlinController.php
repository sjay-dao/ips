<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ip;

class DeadlinController extends Controller
{
    //
    public function goToDeadlinePage(){
        // $page = Object;
        $vars = (Object)array('url' => 'deadline');
        return view('mainpage', compact('vars'));
    }

    public function getlistofDeadline(Request $request){// this is for getting the deadline
        $a = (Object)array();
        // // for patent
        $patent_year = 20; //suppossed it is taken from the db
        if($request->type_id == 0 || $request->type_id == 1){
            for($x=0; $x<$patent_year; $x++){
                $strdatefrom = strtotime(((int)date('Y')-($patent_year-$x)) . "/01/01");
                $strdateto = strtotime(((int)date('Y')-($patent_year-$x)) . "/12/31");
                $datefrom = date('Y-m-d',$strdatefrom);
                $dateto = date('Y-m-d',$strdateto);

                $results[$x] = Ip::select('type_id','date_filed','name', 'date_approved', 'reg_no', 'author_r_inventor', 'status' )->
                where(function ($query) use($datefrom,$dateto) {
                    $query->where('date_filed', '>=', $datefrom)
                        ->where('date_filed', '<=', $dateto)
                        ->where( 'type_id', '=', '1');
                })->orderBy('date_filed','DESC')->
                get();

                // $results = $result1->merge($result2);
                $str = "";
                foreach ($results[$x] as $result) {
                    $datetodeduct = $datefrom;
                    $str = (strtotime($result->date_filed) - strtotime($datetodeduct))/(60*60*24);
                    $result->setAttribute('year', ((int)date('Y')+$x));
                    $result->setAttribute('days', $str);
                    $result->setAttribute('exp_date',   $result->year . "-" . substr($result->date_filed,5));
                    $result->setAttribute('exp_detail',   "Patent end-of-life");
                }
                
                //concatinating using temp storage
                $c = $results[$x];
                $b = $c->concat($a);
                $a = $b;
            }
        }
        ///////////////////////////////////////////////////end for patent/////////////////////////////////////////////

        if($request->type_id == 0 || $request->type_id ==2){
            //for Utility model
            for($x=0; $x<7; $x++){
                $strdatefrom1 = strtotime(((int)date('Y')-(7-$x)) . "/01/01");
                $strdateto1 = strtotime(((int)date('Y')-(7-$x)) . "/12/31");
                $datefrom1 = date('Y-m-d',$strdatefrom1);
                $dateto1 = date('Y-m-d',$strdateto1);

                $results1[$x] = Ip::select('type_id','date_filed','name', 'date_approved', 'reg_no', 'author_r_inventor', 'status')->
                where(function ($query) use($datefrom1,$dateto1) {
                    $query->where('date_filed', '>=', $datefrom1)
                        ->where('date_filed', '<=', $dateto1)
                        ->where( 'type_id', '=', '2');
                })->orderBy('date_filed','DESC')->
                get();

                // $results = $result1->merge($result2);
                $str = "";
                foreach ($results1[$x] as $result1) {
                    $datetodeduct = $datefrom1;
                    $str = (strtotime($result1->date_filed) - strtotime($datetodeduct))/(60*60*24);
                    $result1->setAttribute('year', ((int)date('Y')+$x));
                    $result1->setAttribute('days', $str);
                    $result1->setAttribute('exp_date',   $result1->year . "-" . substr($result1->date_filed,5));
                    $result1->setAttribute('exp_detail',   "Utility Model end-of-life");
                }
                
                //concatinating using temp storage
                $c = $results1[$x];
                $b = $c->concat($a);
                $a = $b;
            }
        }
        
        
        if($request->type_id == 0 || $request->type_id == 3){
            // for Trademark's 3rd year
            for($x=0; $x<3; $x++){
                $strdatefrom4 = strtotime(((int)date('Y')-(3-$x)) . "/01/01");
                $strdateto4 = strtotime(((int)date('Y')-(3-$x)) . "/12/31");
                $datefrom4 = date('Y-m-d',$strdatefrom4);
                $dateto4 = date('Y-m-d',$strdateto4);

                $results4[$x] = Ip::select('type_id','date_filed','name', 'date_approved', 'reg_no', 'author_r_inventor', 'status')->
                where(function ($query) use($datefrom4,$dateto4) {
                    $query->where('date_filed', '>=', $datefrom4)
                        ->where('date_filed', '<=', $dateto4)
                        ->where( 'type_id', '=', '3');
                })->orderBy('date_filed','DESC')->
                get();

                // $results = $result1->merge($result2);
                $str = "";
                foreach ($results4[$x] as $result) {
                    $datetodeduct = $datefrom4;
                    $str = (strtotime($result->date_filed) - strtotime($datetodeduct))/(60*60*24);
                    $result->setAttribute('year', ((int)date('Y')+$x));
                    $result->setAttribute('days', $str);
                    $result->setAttribute('exp_date',   $result->year . "-" . substr($result->date_filed,5));
                    $result->setAttribute('exp_detail',   "3rd DAU");
                }
                
                //concatinating using temp storage
                $c = $results4[$x];
                $b = $c->concat($a);
                $a = $b;
            }
        // for Trademark's 5th DAU range
            $year_5th = 5; //suppossed it is taken from the db
            for($x=0; $x<$year_5th; $x++){
                $strdatefrom3 = strtotime(((int)date('Y')-($year_5th-$x)) . "/01/01"); //change this to date approved
                $strdateto3 = strtotime(((int)date('Y')-($year_5th-$x)) . "/12/31");
                $datefrom3 = date('Y-m-d',$strdatefrom3);
                $dateto3 = date('Y-m-d',$strdateto3);

                $results3[$x] = Ip::select('type_id','date_filed','name', 'date_approved', 'reg_no', 'author_r_inventor', 'status')->
                where(function ($query) use($datefrom3,$dateto3) {
                    $query->where('date_approved', '>=', $datefrom3)
                        ->where('date_approved', '<=', $dateto3)
                        ->where( 'type_id', '=', '3');
                })->orderBy('date_filed','DESC')->
                get();

                // $results = $result1->merge($result2);
                $str = "";
                foreach ($results3[$x] as $result) {
                    $datetodeduct = $datefrom3;
                    $str = (strtotime($result->date_filed) - strtotime($datetodeduct))/(60*60*24);
                    $result->setAttribute('year', ((int)date('Y')+$x));
                    $result->setAttribute('days', $str);
                    $result->setAttribute('exp_date',   $result->year . "-" . substr($result->date_approved,5) . " to " . ((int)$result->year+1) . "-" . substr($result->date_approved,5));
                    $result->setAttribute('exp_detail',   "5th DAU");
                }
                
                //concatinating using temp storage
                $c = $results3[$x];
                $b = $c->concat($a);
                $a = $b;
            }

            // for Trademark's renewal  - 10 years
                // $yearto = (int)$request->yearto - 20;
                // $yearfrom = (int)$request->yearfrom - 20;
                // $tm_renewal_year = (int)$request->yearto - (int)$request->yearfrom; //suppossed it is taken from the db
                $tm_renewal_year = 10; //suppossed it is taken from the db
            for($x=0; $x<$tm_renewal_year; $x++){
                $strdatefrom2 = strtotime(((int)date('Y')-($tm_renewal_year-$x)) . "/07/01");
                $strdateto2 = strtotime(((int)date('Y')-($tm_renewal_year-$x-1)) . "/06/30");
                $datefrom2 = date('Y-m-d',$strdatefrom2);
                $dateto2 = date('Y-m-d',$strdateto2);
    
                $results2[$x] = Ip::select('type_id','date_filed','name', 'date_approved', 'reg_no', 'author_r_inventor', 'status')->
                where(function ($query) use($datefrom2,$dateto2) {
                    $query->where('date_approved', '>=', $datefrom2)
                        ->where('date_approved', '<=', $dateto2)
                        ->where( 'type_id', '=', '3');
                })->orderBy('date_filed','DESC')->
                get();
    
                // $results = $result1->merge($result2);
                $str = "";
                foreach ($results2[$x] as $result) {
                    $datetodeduct = $datefrom2;
                    $str = (strtotime($result->date_filed) - strtotime($datetodeduct))/(60*60*24);
                    $result->setAttribute('year', ((int)date('Y')+$x));
                    $result->setAttribute('days', $str);
                    $exp_date = date('m-d', strtotime($result->date_approved. ' - 6 months'));
                    $result->setAttribute('exp_date',   $result->year . "-" .$exp_date);
                    $result->setAttribute('exp_detail',   "10th DAU");
                    $result->setAttribute('tm_renewal_year',   $tm_renewal_year);
                }
                
                //concatinating using temp storage
                $c = $results2[$x];
                $b = $c->concat($a);
                $a = $b;
            }
        }
        
        return json_encode($a->sortBy('year'));
       
    }
}
