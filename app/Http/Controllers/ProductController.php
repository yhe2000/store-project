<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    // عرض جميع المنتجات
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    // عرض صفحة إنشاء منتج جديد
    public function create()
    {
        $categories = Category::all(); // تمرير الأصناف إلى الـ View
        return view('admin.products.create', compact('categories'));
    }

    // تخزين المنتج الجديد في قاعدة البيانات
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id', // استخدام category_id الصحيح
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
        ]);

        Product::create([
            'name' => $request->input('name'),
            'category_id' => $request->input('category_id'), // استخدام input() لضمان القيم
            'quantity' => $request->input('quantity'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
        ]);

        return redirect()->back()->with('success', 'تمت إضافة المنتج بنجاح!');
    }

    // عرض صفحة تعديل المنتج
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all(); // تمرير الأصناف إلى صفحة التعديل
        return view('admin.products.edit', compact('product', 'categories'));
    }

    // تحديث بيانات المنتج في قاعدة البيانات
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id', // التأكد من صحة category_id
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:1',
            'description' => 'nullable|string',
        ]);

        $product = Product::findOrFail($id); // البحث عن المنتج
        $product->update([
            'name' => $request->input('name'),
            'category_id' => $request->input('category_id'),
            'quantity' => $request->input('quantity'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('products.index')->with('success', 'تم تعديل المنتج بنجاح!');
    }

    // حذف المنتج من قاعدة البيانات
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'تم حذف المنتج بنجاح!');
    }
}
