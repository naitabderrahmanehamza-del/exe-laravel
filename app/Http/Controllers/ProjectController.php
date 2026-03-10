<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function index()
{
$products = Project::all();
return response()->json([
'data' => $products,
'message' => 'Products retrieved successfully',
'count' => $products->count(),
], 200);
}
public function show($id)
{
$product = Project::find($id);
if (!$product) {
return response()->json([
'message' => 'Product not found',
], 404);
}
return response()->json([
'data' => $product,
'message' => 'Product retrieved successfully',
], 200);
}
public function store(Request $request)
{
$validated = $request->validate([
'name' => 'required|string|max:255',
'price' => 'required|numeric|min:0',
   'description' => 'nullable|string',
'stock' => 'required|integer|min:0',
'category' => 'nullable|string',
]);
$product =  Project::create($validated);
return response()->json([
'data' => $product,
'message' => 'Product created successfully',
], 201);
}public function update(Request $request, $id)
{
$product =  Project::find($id);
if (!$product) {
return response()->json([
'message' => 'Product not found',
], 404);
}
$validated = $request->validate([
'name' => 'sometimes|string|max:255','price' => 'sometimes|numeric|min:0',
'stock' => 'sometimes|integer|min:0',
'category' => 'nullable|string',
]);
$product->update($validated);
return response()->json([
'data' => $product,
'message' => 'Product updated successfully',
], 200);
}
public function destroy($id)
{
$product =  Project::find($id);
if (!$product) {
return response()->json([
'message' => 'Product not found',
], 404);
}
$product->delete();
return response()->json([
'message' => 'Product deleted successfully',
], 204);
}
}
