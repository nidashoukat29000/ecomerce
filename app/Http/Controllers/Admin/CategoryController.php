<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Category;
use Exception;
use GuzzleHttp\Psr7\Query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    const URL = '/admin/categories';
    const TITLE = '/category';
    const VIEW = 'dashboard.category';
    const PATH = '/admin/categories';

    public function __construct()
    {
        view()->share([
            'url' => url(self::URL),
            'title' => self::TITLE,
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Category::select('*')
            ->with(['parent']);
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('parent',function($record){
                   return $record->parent?->title;
                })
                ->addColumn('doc', function ($data) {
                    $img = Storage::url($data->doc);
                    return "<div data-bs-toggle='tooltip' data-popup='tooltip-custom' data-bs-placement='top' class='avatar pull-up my-0' title='' data-bs-original-title='Lilian Nenez'>
                        <img src='$img' alt='Avatar' height='26' width='26'>
                    </div>";
                })
                ->addColumn('actions', function ($record) {
                    return view(self::VIEW . '.partials.actions', [
                        'record' => $record
                    ])->render();
                })
                ->rawColumns(['actions', 'doc'])
                ->make(true);
        }

        return view(self::VIEW . '.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $parent_categories = Category::whereNull('parent_id')->get();

        return view(self::VIEW . '.create',get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        try {
            $request->validate([
                'title' => 'required',
                // 'title'=>'required',
                'summary' => 'required',
                'doc' => 'required',
                'is_parent' => 'sometimes|boolean',
                'parent_id' => 'nullable',
                'status' => 'required',

            ]);
            $slug = Str::slug($request->title);
            $count = Category::where('slug', $slug)->count();
            if ($count > 0) {
                $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
            }


            $fileName = time() . rand(1111, 999) . '.' . $request->file('doc')->getClientOriginalExtension();
            Category::check_directory('public/category');
            $request->file('doc')->storeAs('public/category', $fileName);

            DB::beginTransaction();
            $category = Category::create([
                'title' => $request->title,
                'slug' => $slug,
                'summary' => $request->summary,
                'doc' => 'category/' . $fileName,
                'is_parent' => $request->has('is_parent') ? 1 : 0,
                'parent_id' => $request->parent_id,
                'added_by' => Auth::id(),
                'status' => $request->status,

            ]);
            DB::commit();
            return $this->success('category is added', $category);
        } catch (Exception $e) {
            report($e);
            return $this->error($e->getMessage(), 422);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $parent_categories = Category::whereNull('parent_id')->get();
        return view(self::VIEW . '.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        try {
            $request->validate([
                'title' => 'required',
                // 'title'=>'required',
                'summary' => 'required',
                'doc' => 'required',
                'is_parent' => 'required',
                'parent_id' => 'required',
                'added_by' => 'required',
                'status' => 'required',

            ]);
            $slug = Str::slug($request->title);
            $count = Category::where('slug', $slug)->count();
            if ($count > 0) {
                $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
            }

            if ($request->hasFile('doc')) {
                if (Storage::exists($category->doc)) {
                    Storage::delete($category->doc);
                }

                $fileName = time() . rand(1111, 999) . '.' . $request->file('doc')->getClientOriginalExtension();
                Category::check_directory('public/category');
                $request->file('doc')->storeAs('public/category', $fileName);
            }


            DB::beginTransaction();
            $category->update([
                'title' => $request->title,
                'slug' => $slug,
                'summary' => $request->summary,
                'doc' => isset($request->doc) ? 'category/' . $fileName : $category->doc,
                'is_parent' => $request->is_parent,
                'parent_id' => $request->parent_id,
                'added_by' => $request->added_by,
                'status' => $request->status,

            ]);
            DB::commit();
            return $this->success('category is updated');
        } catch (Exception $e) {
            report($e);
            return $this->error($e->getMessage(), 422);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        try {
            $category->delete();
            return $this->success('customer is deleted');
        } catch (Exception $e) {
            report($e);
            return $this->error($e->getMessage(), 422);
        }
    }
}
