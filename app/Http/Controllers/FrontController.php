<?php

namespace App\Http\Controllers;

use App\Models\Product; // تأكد أن المسار صحيح
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $products = Product::all(); // جلب جميع المنتجات

        return view('home.index', compact('products')); // إرسال البيانات إلى العرض
    }
}
