<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    public function get_categories()
    {
        $cats =  Category::all();
        foreach ($cats as $cat)
        {
            $a = $cat->materials;
            $cat->mat_count = $a->count();
        }
        $sorted = $cats->sortByDesc('mat_count');
        return $sorted;
    }

    public function get_category(Category $category)
    {
        $category->materials = $category->materials;
        foreach ($category->materials as $material)
        {
            $material->type = $material->type;
        }
        return $category;
    }
}
