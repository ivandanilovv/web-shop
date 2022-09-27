<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductApiController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $products = Product::query()->paginate(10);
        return JsonResource::collection($products);
    }

    public function show(Product $product): JsonResource
    {
        return JsonResource::make($product);
    }
}
