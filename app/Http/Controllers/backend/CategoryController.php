<?php

namespace App\Http\Controllers\backend;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{

    //display category
    public function create()
    {
        $category = Category::latest()->get();
        return view('backend.category.create', compact('category'));
    }

    public function store(Request $request)
    {
        $category = Category::where('cat_name', $request->Category_Name)->get();
        $request->validate([
            'Category_Name' => 'required|max:255',
            'image' => 'required'
        ]);

        $category = new Category();
        $category->cat_name = $request->Category_Name;
        $category->cat_slug = $this->uniqueSlug($request->Category_Name, $request->Category_Slug);
        $image = $this->saveImage($request);
        $category->image = $image['name'];
        $category->image_url = $image['image_url'];
        $category->save();
        $notification = [
            'message' => 'Cateogory Successfully Uploaded',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('create.category')
            ->with($notification);
    }

    private function uniqueSlug($title, $slug)
    {
        if (!$slug) {
            $newSlug = Str::slug($title);
        } else {
            $newSlug = Str::slug($slug);
        }

        $count = Category::where('cat_slug', 'LIKE', '%' . $newSlug . '%' )->count();
        if ($count > 0) {
            $newSlug = $newSlug . '-' . $count;
        }
        return $newSlug;
    }

    public function all()
    {
        $category = Category::latest()->get();
        return view('backend.category.view', compact('category'));
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('backend.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Category_Name' => 'required|max:255',
        ]);

        $category = Category::findOrFail($id);
        if ($request->hasFile('image')) {
            $path ='category/' . $category->image;
            if (Storage::disk('public')->exists($path)) {
                Storage::disk('public')->delete($path);
            }
            $category->cat_name = $request->Category_Name;
            $category->cat_slug = $this->uniqueSlug($request->Category_Name, $request->Category_Slug);
            $image = $this->saveImage($request);
            $category->image = $image['name'];
            $category->image_url = $image['image_url'];
            $category->save();
            $notification = [
                'message' => 'Cateogory Successfully Uploaded',
                'alert-type' => 'success',
            ];
            return redirect()
                ->route('all.category')
                ->with($notification);
        } else {
            $category->cat_name = $request->Category_Name;
            $category->cat_slug = $this->uniqueSlug($request->Category_Name, $request->Category_Slug);
            $category->save();
            $notification = [
                'message' => 'Cateogory Successfully Uploaded',
                'alert-type' => 'success',
            ];
            return redirect()
                ->route('all.category')
                ->with($notification);
        }
    }

    public function delete($id)
    {
        $category = Category::findOrFail($id);
        $path = 'category/' . $category->image;
        if (Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
        $category->delete();
        $notification = [
            'message' => 'Cateogory Successfully Deleted',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('all.category')
            ->with($notification);
    }

    // save image
    private function saveImage($request)
    {
        $ext = $request->image->extension();
        $name = 'category-' . uniqid() . '.' . $ext;
        $save = $request->image->storeAs('category', $name, 'public');
        $saveUrl = config('app.url') . 'storage/' . $save;
        return ['name' => $name, 'image_url' => $saveUrl];
    }
}
