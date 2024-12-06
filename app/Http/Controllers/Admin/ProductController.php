<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    const URL = '/admin/products';
    const TITLE = '/products';
    const VIEW = 'dashboard.product';
    const PATH = '/admin/products';

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
            $data = Product::select('*');
            return DataTables::of($data)
                ->addIndexColumn()

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
        //
        $categories = Category::where('parent_id', null)->get();
        $brands = Brand::get();
        return view(self::VIEW . '.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required',

                'summary' => 'required',
                'description' => 'required',
                'doc' => 'required',
                'stock' => 'required|numeric',
                'size' => 'nullable',
                'condition' => 'required|in:default,new,hot',
                'status' => 'required|in:active,inactive',
                'price' => 'required|numeric',
                'discount' => 'required|numeric',
                'is_featured' => 'sometimes|in:1',
                'cat_id' => 'required',
                //     'child_cat_id'=>'required',
                'brand_id' => 'required',

            ]);
            $slug = Str::slug($request->title);
            $count = Product::where('slug', $slug)->count();
            if ($count > 0) {
                $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
            }

            $size = $request->size;
            if ($size) {
                $size = implode(',', $size);
            } else {
                $size = '';
            }
            $fileName = time() . rand(1111, 999) . '.' . $request->file('doc')->getClientOriginalExtension();
            Product::check_directory('public/product');
            $request->file('doc')->storeAs('public/product', $fileName);
            DB::beginTransaction();
            $product = Product::create([
                'title' => $request->title,
                'slug' => $slug,
                'summary' => $request->summary,
                'description' => $request->description,
                'stock' => $request->stock,
                'size' => $size,
                'condition' => $request->condition,
                'status' => $request->status,
                'price' => $request->price,
                'discount' => $request->discount,
                'is_featured' => $request->has('is_featured') ? 1 : 0,
                'doc' => 'product/' . $fileName,
                'cat_id' => $request->cat_id,
                'child_cat_id' => $request->child_cat_id,
                'brand_id' => $request->brand_id,
            ]);
            DB::commit();
            return $this->success('product is added', $product);
        } catch (Exception $e) {
            report($e);
            return $this->error($e->getMessage(), 422);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::where('parent_id', null)->get();
        $brands = Brand::get();
        $sub_categories = Category::where('parent_id', $product->cat_id)->get();
        return view(self::VIEW . '.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        try {
            $request->validate([
                'title' => 'required',

                'summary' => 'required',
                'description' => 'required',
              //  'doc' => 'required',
                'stock' => 'required|numeric',
                'size' => 'nullable',
                'condition' => 'required|in:default,new,hot',
                'status' => 'required|in:active,inactive',
                'price' => 'required|numeric',
                'discount' => 'required|numeric',
                'is_featured' => 'sometimes|in:1',
                'cat_id' => 'required',
                //     'child_cat_id'=>'required',
                'brand_id' => 'required',

            ]);
            $slug = Str::slug($request->title);
            $count = Product::where('slug', $slug)->count();
            if ($count > 0) {
                $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
            }

            $size = $request->size;
            if ($size) {
                $size = implode(',', $size);
            } else {
                $size = '';
            }

            if($request->hasFile('doc')){
            if(Storage::exists($product->doc)){
                Storage::delete($product->doc);
            }
            $fileName = time() . rand(1111, 999) . '.' . $request->file('doc')->getClientOriginalExtension();
            Product::check_directory('public/product');
            $request->file('doc')->storeAs('public/product', $fileName);
            }
            DB::beginTransaction();
            $product = Product::create([
                'title' => $request->title,
                'slug' => $slug,
                'summary' => $request->summary,
                'description' => $request->description,
                'stock' => $request->stock,
                'size' => $size,
                'condition' => $request->condition,
                'status' => $request->status,
                'price' => $request->price,
                'discount' => $request->discount,
                'is_featured' => $request->has('is_featured') ? 1 : 0,
                'doc' =>isset($request->doc)? 'product/' . $fileName:$product->doc,
                'cat_id' => $request->cat_id,
                'child_cat_id' => $request->child_cat_id,
                'brand_id' => $request->brand_id,
            ]);
            DB::commit();
            return $this->success('product is updated', $product);
        } catch (Exception $e) {
            report($e);
            return $this->error($e->getMessage(), 422);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        try {
            $product->delete();
            return $this->success('product is deleted');
        } catch (Exception $e) {
            report($e);
            return $this->error($e->getMessage(), 422);
        }
    }

    public function childs(Request $request)
    {
        $childs = Category::where('parent_id', $request->parent_id)->get();

        return response()->json($childs);
    }
}
