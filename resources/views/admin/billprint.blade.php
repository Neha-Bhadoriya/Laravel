@extends("admin.master")
@section("title","Bill Print | PN-Education")
@section("content")
 <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> PN-Education || PN-Infosys Pvt.Ltd.
                    <small class="float-right">Date: <?php
              $mytime = Carbon\Carbon::now();
              echo $mytime->toDateString();
              ?></small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  @foreach($d as $a)
                  <address>
                    <strong>PN-Education || PN-Infosys Pvt.Ltd.</strong><br>
                    Address:{{$a->address}}<br>
                    Phone: {{$a->number}}<br>
                    Email: {{$a->email}}<br>
                    
                  </address>
                  @endforeach
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  To
                  @foreach($corder as $a)
                  @if($id==$a->id)
                  <address>
                    <strong>{{$a->name}}</strong><br>
                    {{$a->address}}<br>
                    {{$a->city}}, {{$a->state}}<br>
                    Phone: {{$a->phone}}<br>
                    Email: {{$a->user_email}}
                  </address>
                  
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Bill ID: <?php echo uniqid('PN'); ?></b><br>
                  <br>
                  <b>Order ID:</b> {{$a->id}}<br>
                  <b>Payment Date:</b> {{$a->created_at}}<br>
                  <b>Payment Method:</b> {{$a->payment_method}}<br>
                  <b>Coupan Code:</b> {{$a->coupon_code}}
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Id #</th>
                      <th>Product</th>
                      <th>Qty</th>
                      <th>Price</th>
                      <th>Description</th>
                      <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($corderd as $d)
                    @if($id==$d->course_order_id)
                    <tr>
                      <td>{{$d->course_id}}</td>
                      <td>{{$d->course_name}}</td>
                      <td>{{$d->course_quantity}}</td>
                      <td>₹{{$d->course_price}}</td>
                      <td>₹{{$d->course_price}}×{{$d->course_quantity}}</td>
                      <?php
                      $total=0;
                      $total=($d->course_price)*($d->course_quantity);
                      ?>
                      <td>₹<?php echo$total; ?></td>
                    </tr>
                    @endif
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

     <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead">Payment Methods:</p>
                  <img src="{{url('backend/dist/img/credit/visa.png')}}" alt="Visa">
                  <img src="{{url('backend/dist/img/credit/mastercard.png')}}" alt="Mastercard">
                  <img src="{{url('backend/dist/img/credit/american-express.png')}}" alt="American Express')}}">
                  <img src="{{url('backend/dist/img/credit/paypal2.png')}}" alt="Paypal">

                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
                    plugg
                    dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                  </p>
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead">Amount Due: {{$a->created_at}}</p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td>₹<?php echo$total; ?></td>
                      </tr>
                      <tr>
                        <th>Tax (9.3%)</th>
                        <td>$10.34</td>
                      </tr>
                      <tr>
                        <th>Shipping:</th>
                        <td>$5.80</td>
                      </tr>
                      <tr>
                        <th>Total:</th>
                        <td>₹<?php echo$total; ?></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

<!-- ./wrapper -->@endsection