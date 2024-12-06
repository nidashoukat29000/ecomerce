<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    const URL='/admin/users';
    const TITLE='/users';
    const VIEW='dashboard.user';
    const PATH='/admin/users';

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
            $data = User::select('*');
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
            'name'=>'required',
            'email'=>'required',
            'password'=>'required|confirmed',
            'role'=>'required',
            'doc'=>'required',
            'status'=>'required',
            
        ]);

        $fileName=time().rand(1111,999).'.'.$request->file('doc')->getClientOriginalExtension();
        User::check_directory('public/user');
        $request->file('doc')->storeAs('public/user',$fileName);
        
        DB::beginTransaction();
        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'role'=>$request->role,
            'doc'=>'user/'.$fileName,
            'status'=>$request->status,
        ]);
        DB::commit();
        return $this->success('user is added',$user);
       }
       catch(Exception $e){
        report($e);
        return $this->error($e->getMessage(),422);
       }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view(self::VIEW.'.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        try{
            $request->validate([
                'name'=>'required',
                'email'=>'required',
                //'password'=>'required|confirmed',
                'role'=>'required',
             //   'doc'=>'required',
                'status'=>'required',
                
            ]);

            if($request->hasFile('doc')){
                if(Storage::exists($user->doc)){
                    Storage::delete($user->doc);
                }
    
            $fileName=time().rand(1111,999).'.'.$request->file('doc')->getClientOriginalExtension();
            User::check_directory('public/user');
            $request->file('doc')->storeAs('public/user',$fileName);

            }
            
            DB::beginTransaction();
            $user->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>$request->password,
                'role'=>$request->role,
                'doc'=>isset($request->doc)?'user/'.$fileName:$user->doc,
                'status'=>$request->status,
            ]);
            DB::commit();
            return $this->success('user is updated',$user);
           }
           catch(Exception $e){
            report($e);
            return $this->error($e->getMessage(),422);
           }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        try{
         $user->delete();
         return $this->success('user is deleted');
        }catch(Exception $e){
           report($e);
           return $this->error($e->getMessage(),422);
        }
    }
}
