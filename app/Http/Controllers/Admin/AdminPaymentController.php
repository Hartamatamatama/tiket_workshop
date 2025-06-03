<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPaymentController extends Controller
{
    public function index() {
        return view('admin.payments.index', ['payments' => Payment::with('user')->get()]);
    }

    public function verify($id) {
        $payment = Payment::findOrFail($id);
        $payment->status = 'verified';
        $payment->save();

        return redirect()->route('admin.payments.index');
    }
}
