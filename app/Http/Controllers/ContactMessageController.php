<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactMessageController extends Controller
{
    public function index() {
        $cMessageList = ContactMessage::all();
        return response()->json($cMessageList);
    }
}
