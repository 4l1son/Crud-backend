<?php

namespace App\Http\Controllers;

use App\Http\Services\ProductService;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;
use Symfony\Component\HttpFoundation\Response;

/**
 * @OA\Schema(
 *     schema="Product",
 *     title="Product",
 *     description="Product model",
 *     @OA\Property(property="id", type="integer", format="int64", description="Product ID"),
 *     @OA\Property(property="name", type="string", description="Product name"),
 *     @OA\Property(property="price", type="number", format="float", description="Product price"),
 *     @OA\Property(property="created_at", type="string", format="date-time", description="Creation date"),
 *     @OA\Property(property="updated_at", type="string", format="date-time", description="Last update date"),
 * )
 */
class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    /**
     * @OA\Post(
     *     path="/products",
     *     summary="Create a new product",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Product")
     *     ),
     *     @OA\Response(response=201, description="Product created"),
     *     @OA\Response(response=422, description="Validation error")
     * )
     */
    public function store(Request $request)
    {
        return $this->productService->store($request);
    }

    /**
     * @OA\Get(
     *     path="/api/v1/admin/user-listing",
     *     summary="List all non-admin users",
     *     security={
     *         {"bearerAuth": {}}
     *     },
     *     tags={"Admin"},
     *     responses={
     *         @OA\Response(response=Response::HTTP_OK, description="Users retrieved successfully"),
     *         @OA\Response(response=Response::HTTP_UNAUTHORIZED, description="Unauthorized"),
     *         @OA\Response(response=Response::HTTP_NOT_FOUND, description="Not Found"),
     *         @OA\Response(response=Response::HTTP_INTERNAL_SERVER_ERROR, description="Server Error")
     *     }
     * )
     */
    public function index()
    {
        return $this->productService->index();
    }

    /**
     * @OA\Get(
     *     path="/products/{id}",
     *     summary="Get a specific product by ID",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=200, description="Successful operation"),
     *     @OA\Response(response=404, description="Product not found")
     * )
     */
    public function show($id)
    {
        return $this->productService->show($id);
    }

    /**
     * @OA\Put(
     *     path="/products/{id}",
     *     summary="Update a specific product by ID",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Product")
     *     ),
     *     @OA\Response(response=200, description="Product updated"),
     *     @OA\Response(response=404, description="Product not found"),
     *     @OA\Response(response=422, description="Validation error")
     * )
     */
    public function update(Request $request, $id)
    {
        return $this->productService->update($request, $id);
    }

    /**
     * @OA\Delete(
     *     path="/products/{id}",
     *     summary="Delete a specific product by ID",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=204, description="Product deleted"),
     *     @OA\Response(response=404, description="Product not found")
     * )
     */
    public function destroy($id)
    {
        return $this->productService->destroy($id);
    }
}
