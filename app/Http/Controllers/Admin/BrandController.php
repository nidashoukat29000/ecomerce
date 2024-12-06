<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class BrandController extends Controller
{
    const URL='/admin/brands';
    const TITLE='/brands';
    const VIEW='dashboard.brand';
    const PATH='/admin/brands';

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
            $data = Brand::select('*');
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
                'title'=>'required',         
                'status'=>'required',
                
            ]);
             // Generate slug
    $slug = Str::slug($request->title);
    $count = Brand::where('slug', $slug)->count();
    if ($count > 0) {
        $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
    }
              
            DB::beginTransaction();
            $brand=Brand::create([
                'title'=>$request->title,
                'slug'=>$slug,  
                'status'=>$request->status,
            ]);
            DB::commit();
            return $this->success('brand is added',$brand);
           }
           catch(Exception $e){
            report($e);
            return $this->error($e->getMessage(),422);
           }
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return view(self::VIEW.'.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        try{
            $request->validate([
                'title'=>'required',         
                'status'=>'required',
                
            ]);
             // Generate slug
    $slug = Str::slug($request->title);
    $count = Brand::where('slug', $slug)->count();
    if ($count > 0) {
        $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
    }
              
            DB::beginTransaction();
            $brand->update([
                'title'=>$request->title,
                'slug'=>$slug,  
                'status'=>$request->status,
            ]);
            DB::commit();
            return $this->success('brand is updated',$brand);
           }
           catch(Exception $e){
            report($e);
            return $this->error($e->getMessage(),422);
           }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        try{
            $brand->delete();
            return $this->success('brand is deleted');
            }catch(Exception $e){
            report($e);
            return $this->error($e->getMessage(),422);
            }
    }
}
