<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequests;
use Illuminate\Http\Response;
use App\Http\Resources\Collection;
use App\Http\Resources\ProductResources;
use App\Http\Controllers\Controller\sentSuccessRepose;
class ProductDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $product;
    public function __construct(Product $product)
    {
        $this->product = $product;
    }
    public function index(Request $request)
    {
         try {
            $query = $this->product->query();
           if ($request->has('product_name')) {
               $name = $request->input('product_name');
               $query->where('product_name', 'like', '%' . $name . '%');
           }
           if ($request->has('sort') && $request->input('sort') == 'product_name') {
               $query->orderBy('product_name', 'asc');
           }
        //    $perPage = $request->has('per_page') ? $request->input('per_page') : 5;
           $product = $query->paginate();
           $productResource = new Collection($product);
           return $this->sentSuccessRepose($productResource,'thanh cong',Response::HTTP_OK);
        } catch (\Throwable $e) {
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequests $request)
    {
         try {
            if($request->has('image')){
                $file=$request->image;
                $ext=$request->image->extension();
                $file_name=time().'-'.'product.'.$ext;
                $file->move(public_path('upload'),$file_name);
            }
            $url = asset("upload/" . $file_name);
            $request->merge(['product_image'=>$url]);
             $dataCreate=$request->all();
           $product = $this->product->create($dataCreate);
           $productResource = new ProductResources($product);
            return $this->sentSuccessRepose($productResource,'thanh cong',Response::HTTP_OK);
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
    public function show(string $product_id)
    {
        try {
        $product = $this->product->where('product_id', $product_id)->firstOrFail();
        $productResource = new ProductResources($product);

        return $this->sentSuccessRepose($productResource,'thanh cong',Response::HTTP_OK);
    } catch (\Exception $e) {
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
    public function update(Request $request,string $product_id)
    {
          try {
        $product = $this->product->where('product_id', $product_id)->firstOrFail();
        $dataUpdate = $request->all();

        if ($request->hasFile('image')) {
            if (!empty($product->product_image)) {
                $pathInfo = pathinfo(parse_url($product->product_image, PHP_URL_PATH));
                $filename = $pathInfo['basename'];
                $file_path = public_path('upload/' . $filename);
                if (file_exists($file_path)) {
                    unlink($file_path);
                }
            }
            $file = $request->file('image');
            $ext = $file->extension();
            $file_name = time().'-'.'product.'.$ext;
            $file->move(public_path('upload'), $file_name);
            $url = asset("upload/" . $file_name);
            $dataUpdate['product_image'] =  $url;
        }

        $product->update($dataUpdate);

        if ($product->wasChanged()) {
            $productResource = new ProductResources($product);
            return $this->sentSuccessRepose($productResource, 'Thành công', Response::HTTP_OK);
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
    public function destroy(string $product_id)
    {
         try {
        $product = $this->product->where('product_id', $product_id)->firstOrFail();
        $file_path = public_path('upload/' . $product->product_image);
        unlink($file_path);
        $product->delete();
        $productResource = new ProductResources($product);
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
