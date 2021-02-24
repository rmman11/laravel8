<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Srmklive\PayPal\Services\ExpressCheckout;

class PaymentsController extends Controller
{
    

   public function index()
    {
        return view('admin.payments.index');
    }

     public function payment()
    {
        $data = [];
        $data['items'] = [
            [
                'name' => 'codechief.org',
                'price' => 100,
                'desc'  => 'Description goes herem',
                'qty' => 1
            ]
        ];
  
        $data['invoice_id'] = 1;
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url'] = route('payment.success');
        $data['cancel_url'] = route('payment.cancel');
        $data['total'] = 100;
  
        $provider = new ExpressCheckout;
  
        $response = $provider->setExpressCheckout($data);
  
        $response = $provider->setExpressCheckout($data, true);
  
        return redirect($response['paypal_link']);
    }
   
    public function cancel()
    {
        dd('Sorry you payment is canceled');
    }
    
}
