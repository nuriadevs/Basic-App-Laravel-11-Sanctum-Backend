<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Validations\OrderValidation;
use App\Http\Response\ApiResponse;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;

/**
 * Class OrderController
 * 
 * Controller for managing orders.
 *
 * @package App\Http\Controllers
 */

class OrderController extends Controller
{

    /**
     * Displays all orders.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $orders = Order::with('orderDetails')->get();
            return ApiResponse::success('List of orders', 200, $orders);
        } catch (Exception $e) {
            return ApiResponse::error('Error while retrieving the list of orders ' . $e->getMessage(), 500);
        }
    }

    /**
     * Displays a specific order.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $order = Order::with('orderDetails')->findOrFail($id);
            return ApiResponse::success('Order', 200, $order);
        } catch (ModelNotFoundException $e) {
            return ApiResponse::error('Order not found ' . $e->getMessage(), 404);
        } catch (Exception $e) {
            return ApiResponse::error('Error while retrieving the order ' . $e->getMessage(), 500);
        }
    }


    /**
     * Stores a new order.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            OrderValidation::validateOrderCreation($request->all());
            $order = Order::create([
                'user_id' => $request->user_id,
                'total_amount' => $request->total_amount,
            ]);

            foreach ($request->order_details as $detail) {
                $order->orderDetails()->create([
                    'product_id' => $detail['product_id'],
                    'quantity' => $detail['quantity'],
                    'price' => $detail['price'],
                    'total_price' => $detail['total_price'],
                ]);
            }

            $order->load('orderDetails');

            return ApiResponse::success('Order created successfully', 200, $order);
        } catch (ModelNotFoundException $e) {
            return ApiResponse::error('Order not found ' . $e->getMessage(), 404);
        } catch (ValidationException $e) {
            $errors = $e->validator->errors()->all();
            return ApiResponse::error('Validation errors: ' . implode(', ', $errors), 422);
        } catch (Exception $e) {
            return ApiResponse::error('Error creating the order ' . $e->getMessage(), 500);
        }
    }

    /**
     * Updates an existing order.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            OrderValidation::validateOrderCreation($request->all());
            $order = Order::findOrFail($id);

            $order->update([
                'user_id' => $request->user_id,
                'total_amount' => $request->total_amount,
            ]);

            foreach ($request->order_details as $detail) {
                $orderDetail = OrderDetail::findOrFail($detail['id']);
                $orderDetail->update([
                    'product_id' => $detail['product_id'],
                    'quantity' => $detail['quantity'],
                    'price' => $detail['price'],
                    'total_price' => $detail['total_price'],
                ]);
            }

            $order->load('orderDetails');

            return ApiResponse::success('Order updated successfully', 200, $order);
        } catch (ModelNotFoundException $e) {
            return ApiResponse::error('Order not found ' . $e->getMessage(), 404);
        } catch (ValidationException $e) {
            $errors = $e->validator->errors()->all();
            return ApiResponse::error('Validation errors: ' . implode(', ', $errors), 422);
        } catch (Exception $e) {
            return ApiResponse::error('Error updating the order ' . $e->getMessage(), 500);
        }
    }

    /**
     * Deletes an existing order.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $order = Order::findOrFail($id);

            $order->orderDetails()->delete();

            $order->delete();

            return ApiResponse::success('Order deleted successfully', 200);
        } catch (ModelNotFoundException $e) {
            return ApiResponse::error('Order not found ' . $e->getMessage(), 404);
        } catch (Exception $e) {
            return ApiResponse::error('Error deleting the order ' . $e->getMessage(), 500);
        }
    }
}
