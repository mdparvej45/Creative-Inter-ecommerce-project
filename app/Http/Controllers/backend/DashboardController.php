<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // display dashboard page
    public function create(Request $request)
    {
        if($request->ajax()){
           $data = Product::where('title', 'LIKE', $request->title . '%')->with('category')->get();
            $output = '';
            if(count($data) > 0){
                $output = '<ul class="list-group" style="display:block;position:relative;z-index:1;>';
                foreach($data as $row){
                    $output .= '<li class="list-group-item">'. $row->title .'</li>';
                }
                $output .= '</ul>';
            }else{
                $output .= '<li class="list-group-item">No Data found..</li>';
            }
            return $output;
        }
       return view('backend.dashboard');
    }
}
