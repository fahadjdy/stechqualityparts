<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Notification;
use App\Models\Admin\AdminModel;
use App\Models\Admin\CategoryModel;

class Home extends Controller
{
    protected $adminId = 1 ;

    public function index()
    {   
        $profile = AdminModel::findOrFail($this->adminId)->toArray();
        return view('user.index',compact('profile'));
    }

    public function getProducts(Request $request)
    {
        // Get products where parent_id is NOT NULL
        $products = CategoryModel::whereNotNull('parent_id')
            ->with('parent') // Load parent category data
            ->paginate(10); // Server-side pagination
    
        // If no products found, return response
        if ($products->isEmpty()) {
            return response()->json(['status' => false, 'message' => 'No products found.'], 404);
        }
    
        // Render product card view
        $html = view('user.product_card', compact('products'))->render();
    
        return response()->json([
            'status' => true,
            'products' => $products, // Laravel paginated response
            'html' => $html
        ]);
    }
    
    

    // public function test_send_notification(){

    //     $channels = ['sms', 'email']; 
    //     $data = [
    //         'phone' => '1234567890',
    //         'message' => 'Hello! This is a test SMS.',
    //         'email' => 'example@example.com',
    //         'subject' => 'Test Email',
    //     ];
    //     Notification::sendNotification($data); // here default chennel EmailNotifications
    //     Notification::sendNotification($data,$channels);

    // }
}
