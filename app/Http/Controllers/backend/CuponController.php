<?php

namespace App\Http\Controllers\backend;

use App\Models\Product;
use App\Models\ProductCupon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CategoryCupon;
use App\Models\Category;
use App\Models\Cupon;

class CuponController extends Controller
{
   
    /*
    * display all cupon page
    */
    public function allCupon()
    {
        $cupons = Cupon::latest()->get();
        return view('backend.allCupon.view',compact('cupons'));
    }

    public function createAllCupon()
    {
        return view('backend.allCupon.create');
    }

    public function storeAllCupon(Request $request)
    {
        $store = new Cupon();
        $store->name = $request->Cupon_Name;
        $store->type = $request->type;
        $store->discount = $request->Cupon_Discount;
        $store->start_date = $request->Start_Date;
        $store->end_date = $request->End_Date;
        $store->save();
        $notification = [
            'message' => 'Cupon Successfully Created',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('all.product.cupon')
            ->with($notification);
    }

    public function editAllCupon($id)
    {
        $cupon = Cupon::find($id);
        return view('backend.allCupon.edit', compact('cupon'));
    }

    public function updateAllCupon(Request $request,$id)
    {
        $store = Cupon::find($id);
        $store->name = $request->Cupon_Name;
        $store->type = $request->type;
        $store->discount = $request->Cupon_Discount;
        $store->start_date = $request->Start_Date;
        $store->end_date = $request->End_Date;
        $store->save();
        $notification = [
            'message' => 'Cupon Successfully Updated',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('all.product.cupon')
            ->with($notification);
    }

    public function deleteAllCupon($id)
    {
        $cupon = Cupon::find($id);
        $cupon->delete();
        $notification = [
            'message' => 'Cupon Successfully Deleted',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('all.product.cupon')
            ->with($notification);
    }
}
