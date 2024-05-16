@extends('layouts.template')
@section('content')

                <!-- <//////MPK Design Start ///////> -->
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Avro' />
<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Crete+Round&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Changa:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@700&display=swap" rel="stylesheet">

                <!-- <//////MPK Design END ///////> -->

<link rel="stylesheet" href='https://mmwebfonts.comquas.com/fonts/?font=oursunicode' />

    <style>

#print_card{

    font-family:'Ours-Unicode';
}
            /* <//////MPK Design Start ///////> */
@media print {
    /* body *{
        visibility: hidden;
    } */
 #print-container, #print-container *{
     visibility: visible;
 }
 /* #print-container {
     position: absolute;
     left : 0px;
     top: 0px;
     font-family:'Ours-Unicode';

 } */

 body {
    margin: auto;
    visibility: hidden;
 }

 .print-icon {
    display: none;
 }

}

h1 {
    font-size: 60px;
    font-weight: bold;
    /* font-family: 'Abril Fatface', cursive; */
    /* font-family: 'Secular One', sans-serif; */
    /* font-family: 'Alfa Slab One', cursive; */
    /* font-family: 'Crete Round', serif; */
    /* font-family: 'Changa', sans-serif; */
    font-family: 'Signika Negative', sans-serif;
    color: #D5AD6D;
    background: -webkit-linear-gradient(transparent, transparent),-webkit-linear-gradient(top, rgba(213,173,109,1) 0%, rgba(213,173,109,1) 26%, rgba(226,186,120,1) 35%, rgba(163,126,67,1));
    background: -o-linear-gradient(transparent, transparent);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    color-adjust: exact;
    -webkit-print-color-adjust: exact;
    print-color-adjust: exact;
}

h1, h4, h5{
    text-align: center;

}

h4 {
    /* color: #008080; */
    color: #18bb8a;
    font-family: 'Raleway', sans-serif;
    font-weight: bold;
}

h5{
    /* color: #BF40BF; */
    /* color: #8F8C8F; */
    color: #a71451;
    font-family: 'Noto Serif', serif;
    font-weight: bold;
}
.watermark::after {
  content: "";
 background:url({{asset('/storage/ncr-images/water-mark.png')}}) no-repeat center;
  opacity: 0.1;
  top: 160px;
  left: 0;
  bottom: 0;
  right: 0;
  position: absolute;
  z-index: 1;
  height:100%;
  width:100%;
  align: center;
  transform:rotate(-45deg);
  color-adjust: exact;
    -webkit-print-color-adjust: exact;
    print-color-adjust: exact;
}
        /* *{
            font-family:'Ours-Unicode','pyidaungsu';

        } */
        </style>
                <!-- <//////MPK Design END ///////> -->

     <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-10" >

           <div class="row  justify-content-center "  >

                <!-- <//////MPK Design Start ///////> -->
           <div class="container mt-5 mb-3">
    <div id="print-container" class="row d-flex justify-content-center">
        <div class="col-md-8">
             <div class="card" id="print_card">

                <img src="{{asset('/storage/ncr/ncr1.jpg')}}" width="100%" height="100%"/>

                <div class="table-responsive p-2">


                    <table class="table table-borderless table-light ">
                        <tbody>
                            @foreach ( $order as $order )
                           <tr class="content">
                                <td>Date - {{$order->date}}<br> Invoice - {{$order->id}}</td>
                                <td>Name - {{$order->name}}
                                <br>Phone - {{$order->phone}}</td>

                                <td>Type - {{$order->customer_type}}<br>
                                Seller Name - {{$order->seller}}</td>
                            </tr>
                             @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="products p-2">
                    <table class="table watermark">
                        <thead>
                            <tr class="add fw-bold">
                                <th>Item Name</th>
                                <th>Price</th>
                                <th>Quality</th>
                                <th class="text-center">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order_receipt as $order )
                            <tr class="content">
                                <td>{{$order->name}}</td>
                                <td>{{$order->price}} KS</td>
                                <td>{{$order->quantity}}</td>
                                <td class="text-center">{{number_format($order->amount)}} KS</td>
                            </tr>
                            @endforeach
                              <tr>
                                <td></td>
                                <td></td>
                                <td><strong>TOTAL </strong></td>
                                <td  class="text-center"><strong>{{number_format($order_details->sum('amount'),2)}} KS</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="products p-2">

                    </table>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td>Signature</td>
                            </tr>
                            <tr>
                            <!-- <button class="btn btn-sm btn-dark float-end my-4 mx-4 " id="print"
                            onclick="window.print()"  > <i class="fa fa-print"></i></button> -->
                            </tr>

                        </tbody>
                    </table>
                </div>
                <hr>
                <!-- <div class="address p-2">

                </div> -->
                <div class="invoice-footer">
                    <p class="text-center m-b-5">
                         Pleasure Doing Business With You
                    </p>
                </div>
                    <span class="print-icon float-end">
                    <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10 p-l-5"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
                </span>
            </div>
        </div>
    </div>
</div>
                    <!-- <//////MPK Design END ///////> -->

    </div>
    </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

{{--
<script type="text/javascript">

function printContent(el){

    var rs= document.body.innerHTML;
    var print = document.getElementById(el).innerHTML;
    document.body.innerHTML = print;
    window.print();
    document.body.innerHTML= rs;
}

  </script> --}}

@endsection
