<?php

namespace App\Http\Controllers\API\Order;

use App\Http\Controllers\Controller;
use App\Http\Resources\Order\OrderResource;
use App\Models\Order;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
       $orders = Order::all();
       return OrderResource::collection($orders);


    }
}
