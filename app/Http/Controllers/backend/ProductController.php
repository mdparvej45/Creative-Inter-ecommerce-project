<?php

namespace App\Http\Controllers\backend;

use App\Exports\ProductExport;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;
use App\Models\ProductPrice;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use function Pest\Laravel\json;
use function PHPUnit\Framework\isNull;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;
class ProductController extends Controller
{

    //create product method
    public function create()
    {
        //Fetch categories and sub-categories
        $categories = Category::get();
        $sub_categories = SubCategory::get();
        return view('backend.product.create', compact('categories', 'sub_categories'));
    }

    // jquery ajax find category's subcategory
    public function category($id)
    {
        $subCategory = SubCategory::where('category_id',$id)->get(['id','sub_name']);
        return response()->json($subCategory);
    }
    //Store product method
    public function store(Request $request)
    {
//        dd($request->all());
        $user = Auth::user();
        $request->validate([
            'category' => 'required',
            'product_name' => 'required|max:255',
            'sku_name' => 'required|max:255',
            'stock' => 'required|max:255',
            'specification' => 'required',
            'description' => 'required',
            'price' => 'required',
            'Product_Purchase_Price' => 'required',
            'initial_stock'=> 'required',

        ]);
        $product = new Product();

        $product->user_id = $user->id;
        $product->category_id = $request->category;
        $product->sub_category_id = $request->sub_category;
        $product->title = $request->product_name;
        $product->slug_unique = $this->slugGenerator($request->product_name,$request->product_slug);
        $product->sku = $request->sku_name;
        $product->stock = $request->stock;
        $product->purchase_price = $request->Product_Purchase_Price;
        $product->intial_stock = $request->initial_stock;
        $product->product_tag = $request->product_tag;
        $product->description = $request->description;
        $product->specification = $request->specification;
        $imageUrl = $this->slugGenerator($request->product_name,$request->product_slug);
        $ext = $request->product_image->extension();
        $image_name = $imageUrl . '.' . $ext;
        $upload_product_img = $request->product_image->storeAs('product', $image_name, 'public');
        $product->image_url = config('app.url') . 'storage/' . $upload_product_img;
        $product->image = $image_name;
        if (!isset($request->banner)) {
            $product->banner = '0';
        } else {
            $product->banner = '1';
        }
        if (!isset($request->featured)) {
            $product->featured = '0';
        } else {
            $product->featured = '1';
        }
        if (!isset($request->trending)) {
            $product->trending = '0';
        } else {
            $product->trending = '1';
        }
        if (!isset($request->deals_of_the_day)) {
            $product->deals_of_the_day = '0';
        } else {
            $product->deals_of_the_day = '1';
        }
        $product->save();
        $productPrice = new ProductPrice();
        $productPrice->product_id = $product->id;
        $productPrice->price = $request->price;
        $productPrice->discount = $request->discount;
        $productPrice->save();

        if ($request->gallery_images) {
            $gallery_images = $request->gallery_images;
            foreach ($gallery_images as $image) {
                $ext = $image->extension();
                $image_name = 'gallery-' . uniqid() . '.' . $ext;
                $upload_product_img = $image->storeAs('product/gallery', $image_name, 'public');
                $galleryImage = new ProductImage();
                $galleryImage->product_id = $product->id;
                $galleryImage->image = $image_name;
                $galleryImage->image_url = config('app.url') . 'storage/' . $upload_product_img;
                $galleryImage->save();
            }
        }

        $notification = [
            'message' => 'Your product successful update',
            'alert-type' => 'success'
        ];
        return back()
            ->with($notification);
    }

    //show all product method
    public function all()
    {
        // $products = Product::where('SoftDelete', 1)->latest()->get(['id','image_url','title','status']);
        $products = Product::where('SoftDelete', 1)->latest()->select('id','image_url','title','status')->simplePaginate(10);
        return view('backend.product.view', compact('products'));
    }

    //edit product method
    public function edit($id)
    {
        $product = Product::where('id', $id)->with('category', 'subCategory', 'productPrice')->first();
        $categories = Category::get();
        $sub_categories = SubCategory::get();
        $galleryImage = ProductImage::where('product_id', $id)->get();
        return view('backend.product.edit', compact('product', 'categories', 'sub_categories', 'galleryImage'));
    }

    //update product method
    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required|max:255',
            'product_name' => 'required|max:255',
            'sku_name' => 'required|max:255',
            'stock' => 'required',
            'specification' => 'required',
            'description' => 'required',
            'price' => 'required',

        ]);
        $product = Product::find($id);
        if ($request->hasFile('product_image')) {
            $product->category_id = $request->category;
            $product->sub_category_id = $request->sub_category;
            $product->title = $request->product_name;
            $product->slug_unique = $this->slugGenerator($request->product_name,$request->product_slug);
            $product->sku = $request->sku_name;
            $product->stock = $request->stock;
            $product->purchase_price = $request->Product_Purchase_Price;
            $product->intial_stock = $request->initial_stock;
            $product->product_tag = $request->product_tag;
            $product->description = $request->description;
            $product->specification = $request->specification;
            $path = 'product/' . $product->image;
            if (Storage::disk('public')->exists($path)) {
                Storage::disk('public')->delete($path);
            }
            $imageUrl=$this->slugGenerator($request->product_name,$request->product_slug);
            $ext = $request->product_image->extension();
            $image_name = $imageUrl . '.' . $ext;
            $upload_product_img = $request->product_image->storeAs('product', $image_name, 'public');
            $product->image_url = config('app.url') . 'storage/' . $upload_product_img;
            $product->image = $image_name;
            if (!isset($request->banner)) {
                $product->banner = '0';
            } else {
                $product->banner = '1';
            }
            if (!isset($request->featured)) {
                $product->featured = '0';
            } else {
                $product->featured = '1';
            }
            if (!isset($request->trending)) {
                $product->trending = '0';
            } else {
                $product->trending = '1';
            }
            if (!isset($request->deals_of_the_day)) {
                $product->deals_of_the_day = '0';
            } else {
                $product->deals_of_the_day = '1';
            }
            $product->save();
            $productPrice = ProductPrice::where('product_id', $id)->first();
            $productPrice->product_id = $product->id;
            $productPrice->price = $request->price;
            $productPrice->discount = $request->discount;
            $productPrice->save();
            $notification = [
                'message' => 'Product update successful !',
                'alert-type' => 'success'
            ];
            return back()
                ->with($notification);
        } else {
            $product->category_id = $request->category;
            $product->sub_category_id = $request->sub_category;
            $product->title = $request->product_name;
            $product->slug_unique = $this->slugGenerator($request->product_name,$request->product_slug);
            $product->sku = $request->sku_name;
            $product->stock = $request->stock;
            $product->purchase_price = $request->Product_Purchase_Price;
            $product->intial_stock = $request->initial_stock;
            $product->description = $request->description;
            $product->specification = $request->specification;
            $product->product_tag = $request->product_tag;
            if (!isset($request->banner)) {
                $product->banner = '0';
            } else {
                $product->banner = '1';
            }
            if (!isset($request->featured)) {
                $product->featured = '0';
            } else {
                $product->featured = '1';
            }
            if (!isset($request->trending)) {
                $product->trending = '0';
            } else {
                $product->trending = '1';
            }
            if (!isset($request->deals_of_the_day)) {
                $product->deals_of_the_day = '0';
            } else {
                $product->deals_of_the_day = '1';
            }
            $product->save();
            $productPrice = ProductPrice::where('product_id', $id)->first();
            $productPrice->product_id = $product->id;
            $productPrice->price = $request->price;
            $productPrice->discount = $request->discount;
            $productPrice->save();
            $notification = [
                'message' => 'Product update successful !',
                'alert-type' => 'success'
            ];
            return back()
                ->with($notification);
        }
    }

    public function galleryImage(Request $request, $id)
    {
        $request->validate([
            'gallery_image' => 'required',
        ]);
        $productImage = ProductImage::find($id);
        $path = 'product/gallery/' . $productImage->image;
        if (Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
        $ext = $request->gallery_image->extension();
        $image_name = 'gallery-' . uniqid() . '.' . $ext;
        $upload_product_img = $request->gallery_image->storeAs('product/gallery', $image_name, 'public');
        $productImage->image_url = config('app.url') . 'storage/' . $upload_product_img;
        $productImage->image = $image_name;
        $productImage->save();
        $notification = [
            'message' => 'Product gallery image successful updated!',
            'alert-type' => 'success'
        ];
        return back()
            ->with($notification);
    }

    public function deleteGalleryImage($id)
    {
        $productImage = ProductImage::find($id);
        $path = 'product/gallery/' . $productImage->image;
        if (Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
        $productImage->delete();
        $notification = [
            'message' => 'Product gallery image successful updated!',
            'alert-type' => 'success'
        ];
        return back()
            ->with($notification);
    }

    //view single product
    public function viewSingle($id)
    {
        $product = Product::where('id', $id)->with('category', 'subCategory', 'productPrice')->first();
        $galleryImage = ProductImage::where('product_id', $id)->get();
        return view('backend.product.viewSingle', compact('product', 'galleryImage'));
    }

    //Soft delete product method
    public function delete($id)
    {
        $product =Product::find($id);

       $product->SoftDelete = 0;
        $product->save();
        $notification = [
            'message' => 'Product move to the Trashed folder  !',
            'alert-type' => 'warning'
        ];
        return back()
                ->with($notification);
    }


    public function slugGenerator($title,$slug)
    {
        $new_title='';
        if(!$slug){
            $new_title= Str::slug($title);
        }else{
            $new_title= Str::slug($slug);
        }

        $count = Product::where('slug_unique', 'LIKE', '%' . $new_title . '%')->count();
        if ($count > 0) {
            $new_title = $title . '-' . $count++;
        }
        return $new_title;
    }

    public function showPdf()
    {
        $data = collect(Product::latest()->first())->toArray();
        $pdf = Pdf::loadView('backend.PDF.PDF', $data);
        return $pdf->download('product.pdf');

    }

    public function export()
    {
        return Excel::download(new ProductExport, 'products.xlsx');
    }

   
}
