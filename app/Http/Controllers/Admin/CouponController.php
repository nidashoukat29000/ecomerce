<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Coupon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class CouponController extends Controller
{
    const URL='/admin/coupons';
    const PATH='/admin/coupons';
    const VIEW='dashboard.coupon';
    const TITLE='/coupons';

    public function __construct()
    {
        view()->share([
         'url'=>url(self::URL),
         'title'=>self::TITLE,
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Coupon::select('*');
            return DataTables::of($data)
                    ->addIndexColumn()
                   
                    ->addColumn('actions', function($record){
                      return view(self::VIEW.'.partials.actions',[
                        'record'=>$record
                      ])->render();
                    })
                    ->rawColumns(['actions'])
                    ->make(true);
        }

        return view(self::VIEW.'.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(self::VIEW.'.create',get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $request->validate([
                'code'=>'required',         
                'type'=>'required|in:fixed,percent',         
                'value'=>'required|numeric',
                'status'=>'required|in:active,inactive',
                
            ]);
            
      
            DB::beginTransaction();
            $coupon=Coupon::create([
                'code'=>$request->code,
                'type'=>$request->type, 
                'value'=>$request->value, 
                'status'=>$request->status,
            ]);
            DB::commit();
            return $this->success('coupon is added',$coupon);
           }
           catch(Exception $e){
            report($e);
            return $this->error($e->getMessage(),422);
           }
    }

    /**
     * Display the specified resource.
     */
    public function show(Coupon $coupon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Coupon $coupon)
    {
        return view(self::VIEW . '.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Coupon $coupon)
    {
        try{
            $request->validate([
                'code'=>'required',         
                'type'=>'required|in:fixed,percent',         
                'value'=>'required|numeric',
                'status'=>'required|in:active,inactive',
                
            ]);
            
      
            DB::beginTransaction();
            $coupon->update([
                'code'=>$request->code,
                'type'=>$request->type, 
                'value'=>$request->value, 
                'status'=>$request->status,
            ]);
            DB::commit();
            return $this->success('coupon is updated',$coupon);
           }
           catch(Exception $e){
            report($e);
            return $this->error($e->getMessage(),422);
           }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Coupon $coupon)
    {
        try {
            $coupon->delete();
            return $this->success('coupon is deleted');
        } catch (Exception $e) {
            report($e);
            return $this->error($e->getMessage(), 422);
        }
    }
}
