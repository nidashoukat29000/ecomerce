<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


use App\Models\Banner;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
//use Str;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class BannerController extends Controller
{
    const URL='/admin/banners';
    const TITLE='/banners';
    const VIEW='dashboard.banner';
    const PATH='/admin/banners';

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
            $data = Banner::select('*');
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('doc',function($data){
                        $img=Storage::url($data->doc);
                        return "<div data-bs-toggle='tooltip' data-popup='tooltip-custom' data-bs-placement='top' class='avatar pull-up my-0' title='' data-bs-original-title='Lilian Nenez'>
                        <img src='$img' alt='Avatar' height='26' width='26'>
                    </div>"; 
                    })
                    ->addColumn('actions', function($record){
                      return view(self::VIEW.'.partials.actions',[
                        'record'=>$record
                      ])->render();
                    })
                    ->rawColumns(['actions','doc'])
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
                'description'=>'required',
                'doc'=>'required',
                'status'=>'required',
                
            ]);
             // Generate slug
    $slug = Str::slug($request->title);
    $count = Banner::where('slug', $slug)->count();
    if ($count > 0) {
        $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
    }
   
    
            $fileName=time().rand(1111,999).'.'.$request->file('doc')->getClientOriginalExtension();
            Banner::check_directory('public/banner');
            $request->file('doc')->storeAs('public/banner',$fileName);
            
            DB::beginTransaction();
            $banner=Banner::create([
                'title'=>$request->title,
                'slug'=>$slug,
                'description'=>$request->description,
                'doc'=>'banner/'.$fileName,
                'status'=>$request->status,
            ]);
            DB::commit();
            return $this->success('banner is added',$banner);
           }
           catch(Exception $e){
            report($e);
            return $this->error($e->getMessage(),422);
           }
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        return view(self::VIEW.'.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        try{
            $request->validate([
                'title'=>'required',
            
                'description'=>'required',
                'doc'=>'required',
                'status'=>'required',
                
            ]);
             // Generate slug
    $slug = Str::slug($request->title);
    $count = Banner::where('slug', $slug)->count();
    if ($count > 0) {
        $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
    }
   
    
            if($request->hasFile('doc')){
                if(Storage::exists($banner->doc)){
                    Storage::delete($banner->doc);
                }

            $fileName=time().rand(1111,999).'.'.$request->file('doc')->getClientOriginalExtension();
            Banner::check_directory('public/banner');
            $request->file('doc')->storeAs('public/banner',$fileName);

    }
            
            DB::beginTransaction();
            $banner->update([
                'title'=>$request->title,
                'slug'=>$slug,
                'description'=>$request->description,
                'doc'=>isset($request->doc)? 'banner/'.$fileName:$banner->doc,
                'status'=>$request->status,
            ]);
            DB::commit();
            return $this->success('banner is updated',$banner);
           }
           catch(Exception $e){
            report($e);
            return $this->error($e->getMessage(),422);
           }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        try{
            $banner->delete();
            return $this->success('banner is deleted');
            }catch(Exception $e){
            report($e);
            return $this->error($e->getMessage(),422);
            }
    }
}
