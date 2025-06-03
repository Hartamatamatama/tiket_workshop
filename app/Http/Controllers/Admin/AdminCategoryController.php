<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function index() {
        return view('admin.categories.index', ['categories' => Category::all()]);
    }

    public function create() {
        return view('admin.categories.create');
    }

    public function store(Request $request) {
        Category::create($request->all());
        return redirect()->route('admin.categories.index');
    }

    public function edit(Category $category) {
        return view('admin.categories.edit', ['category' => $category]);
    }

    public function update(Request $request, Category $category) {
        $category->update($request->all());
        return redirect()->route('admin.categories.index');
    }

    public function destroy(Category $category) {
        $category->delete();
        return redirect()->route('admin.categories.index');
    }
}
