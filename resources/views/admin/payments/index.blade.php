
    @extends('admin.layouts.master')
    @section('title', 'Payments API ')
    @section('content')

    <div class="row">

          <div class="card">

                <div class="card-header bg-info text-white">

                    <h4>Payments API </h4>

                </div>

               
                <div class="card-body">
      <h1>Laravel 6 PayPal Integration Tutorial</h1>
                  
                <table border="0" cellpadding="10" cellspacing="0" align="center"><tr><td align="center"></td></tr><tr><td align="center"><a href="https://www.paypal.com/in/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/in/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img src="https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-200px.png" border="0" alt="PayPal Logo"></a></td></tr></table>
  
                <a href="{{ route('admin.index') }}" class="btn btn-success">Pay $100 from Paypal</a>


</div>
</div>
</div>


@endsection