<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\Categoryrequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Resources\CategoryResources;
use App\Http\Resources\Collection;
class CategoryController extends Controller
{
    protected $category;
    public function __construct(Category $category)
    {
        $this->category = $category;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        try {
        //     $query = $this->category->query();
        //    if ($request->has('category_name')) {
        //        $name = $request->input('category_name');
        //        $query->where('category_name', 'like', '%' . $name . '%');
        //    }
        //    if ($request->has('sort') && $request->input('sort') == 'category_name') {
        //        $query->orderBy('category_name', 'asc');
        //    }
        //    $perPage = $request->has('per_page') ? $request->input('per_page') : 5;
        //    $category = $query->paginate($perPage);
        //    $categoryResource = new Collection($category);
        $data = Category::all();
        //    return $this->sentSuccessRepose($categoryResource,'thanh cong',Response::HTTP_OK);
            return response()->json([
                'data' => $data
        ]);
        } catch (\Throwable $e){
             return response()->json([
            'message' => 'Không tìm thấy danh mục',
        ], Response::HTTP_NOT_FOUND);;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        try {
             $dataCreate=$request->all();
           $category = $this->category->create($dataCreate);
           $categoryResource = new CategoryResources($category);
            return $this->sentSuccessRepose($categoryResource,'thanh cong',Response::HTTP_OK);
         } catch (\Throwable $e) {
            return response()->json([
            'message' => 'Không tạo được sản phẩm',
        ], Response::HTTP_NOT_FOUND);;
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $category_id)
    { try {
        $category = $this->category->where('category_id', $category_id)->firstOrFail();
        $categoryResource = new CategoryResources($category);

        return $this->sentSuccessRepose($categoryResource,'thanh cong',Response::HTTP_OK);
    } catch (\Exception $e) {
        // Xử lý ngoại lệ, ví dụ: category không được tìm thấy
        return response()->json([
            'message' => 'Không tìm thấy danh mục',
        ], Response::HTTP_NOT_FOUND);
    }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,string $category_id)
    {
        try {
        $category = $this->category->where('category_id', $category_id)->firstOrFail();
        $dataUpdate = $request->all();
        $category->update($dataUpdate);
        if ($category->wasChanged()) {
            $categoryResource = new CategoryResources($category);
            return $this->sentSuccessRepose($categoryResource, 'thành công', Response::HTTP_OK);
        } else {
            return response()->json([
                'message' => 'Không có dữ liệu nào thay đổi',
            ], Response::HTTP_OK);
        }
    } catch (\Exception $e) {
        return response()->json([
            'message' => 'Không update được sản phẩm',
        ], Response::HTTP_NOT_FOUND);
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $category_id)
    {
        try {
        $category = $this->category->where('category_id', $category_id)->firstOrFail();
        $category->delete();

        $categoryResource = new CategoryResources($category);
        return response()->json([
            'message' => 'đã xóa',
        ], Response::HTTP_OK);
    } catch (\Exception $e) {
        return response()->json([
            'message' => 'Không thể xóa danh mục.',
        ], Response::HTTP_NOT_FOUND);
    }
    }
}
