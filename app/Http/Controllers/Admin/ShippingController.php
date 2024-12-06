<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Shipping;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class ShippingController extends Controller
{
    const URL='/admin/shippings';
    const TITLE='/shippings';
    const VIEW='dashboard.shipping';
    const PATH='/admin/shippings';

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
            $data = Shipping::select('*');
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
        return view(self::VIEW.'.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $request->validate([
                'type'=>'required',         
                'price'=>'required',
                'status'=>'required',
                
            ]);
            
      
            DB::beginTransaction();
            $shipping=Shipping::create([
                'type'=>$request->type,
                'price'=>$request->price,  
                'status'=>$request->status,
            ]);
            DB::commit();
            return $this->success('shipping is added',$shipping);
           }
           catch(Exception $e){
            report($e);
            return $this->error($e->getMessage(),422);
           }
    }

    /**
     * Display the specified resource.
     */
    public function show(Shipping $shipping)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shipping $shipping)
    {
        return view(self::VIEW . '.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Shipping $shipping)
    {
        try{
            $request->validate([
                'type'=>'required',         
                'price'=>'required',
                'status'=>'required',
                
            ]);
            
      
            DB::beginTransaction();
            $shipping->update([
                'type'=>$request->type,
                'price'=>$request->price,  
                'status'=>$request->status,
            ]);
            DB::commit();
            return $this->success('shipping is updated',$shipping);
           }
           catch(Exception $e){
            report($e);
            return $this->error($e->getMessage(),422);
           }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shipping $shipping)
    {
        try {
            $shipping->delete();
            return $this->success('shipping is deleted');
        } catch (Exception $e) {
            report($e);
            return $this->error($e->getMessage(), 422);
        }
    }
}
