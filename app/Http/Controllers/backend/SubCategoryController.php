<?php

namespace App\Http\Controllers\backend;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubCategoryController extends Controller
{
    public function create()
    {
        $category = Category::latest()->get();
        return view('backend.category.create', compact('category'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'SubCategory_Name' => 'required|max:255',
            'category_id' => 'required',
        ]);

        $category = new SubCategory();
        $category->category_id = $request->category_id;
        $category->sub_name = $request->SubCategory_Name;
        $category->sub_slug = $this->uniqueSlug($request->SubCategory_Name, $request->SubCategory_Slug);
        $category->save();
        $notification = [
            'message' => 'SubCateogory Successfully Uploaded',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('create.subCategory')
            ->with($notification);
    }

    private function uniqueSlug($title, $slug)
    {
        if (!$slug) {
            $newSlug = Str::slug($title);
        } else {
            $newSlug = Str::slug($slug);
        }

        $count = SubCategory::where('sub_slug', 'LIKE', '%' . $newSlug . '%' )->count();
        if ($count > 0) {
            $newSlug = $newSlug . '-' . $count;
        }
        return $newSlug;
    }

    public function all()
    {
        $subCategory = SubCategory::with('category')
            ->latest()
            ->get();
        return view('backend.subCategory.view', compact('subCategory'));
    }

    public function edit($id)
    {
        $category = Category::latest()->get();
        $subCategory = SubCategory::findorFail($id);
        return view('backend.subCategory.edit', compact('category','subCategory'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'SubCategory_Name' => 'required|max:255',
            'category_id' => 'required',
        ]);

        $category = SubCategory::findOrfail($id);
        $category->category_id = $request->category_id;
        $category->sub_name = $this->uniqueTitle($request->SubCategory_Name);
        $category->sub_slug = $this->uniqueSlug($request->SubCategory_Name, $request->SubCategory_Slug);
        $category->save();
        $notification = [
            'message' => 'SubCateogory Successfully Updated',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('all.subCategory')
            ->with($notification);
    }

    public function delete($id)
    {
        $subCategory = SubCategory::findOrFail($id);
        $subCategory->delete();
        $notification = [
            'message' => 'SubCateogory Successfully Deleted',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('all.subCategory')
            ->with($notification);
    }
}
