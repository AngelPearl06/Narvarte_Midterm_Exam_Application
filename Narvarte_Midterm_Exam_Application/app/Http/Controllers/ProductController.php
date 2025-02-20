<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Array of Nancy Drew books
        $products = [
            ['title' => 'The Secret of the Old Clock', 'author' => 'Carolyn Keene', 'year' => 1930],
            ['title' => 'The Hidden Staircase', 'author' => 'Carolyn Keene', 'year' => 1930],
            ['title' => 'The Bungalow Mystery', 'author' => 'Carolyn Keene', 'year' => 1931],
            ['title' => 'The Mystery at Lilac Inn', 'author' => 'Carolyn Keene', 'year' => 1931],
            ['title' => 'The Secret of Shadow Ranch', 'author' => 'Carolyn Keene', 'year' => 1931],
        ];

        // Pass the array to the view
        return view('products.index', compact('products'));
    }
}

