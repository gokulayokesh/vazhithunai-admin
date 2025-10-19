<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\SubscriptionHistory;

class PaymentController extends Controller
{
    public function index() {
        $userPayments = Payment::with('subscription')->with('user:id,name')->get();
        return response()->json($userPayments);
    }

    public function subscriptions() {
        $userSubscriptions = SubscriptionHistory::with('user:id,name')->get();
        return response()->json($userSubscriptions);
    }
}
