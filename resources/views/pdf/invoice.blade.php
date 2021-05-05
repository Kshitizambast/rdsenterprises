
    <div>
      <center><h2 style="background-color:black; color:#fff">Invoice</h2></center>
        <div style="margin-bottom:100px">
            <div class="row invoice-company-details" style="margin-bottom:26px;">
                  <br/>
                  <div style="border:1px, black, solid;">
                       <img src="https://rdsenterprises.online/img/RDS_Logo-01.jpg" style="width:100px; height:100px;">
                    </div>
                     <div style="border:1px, black, solid; float:right; margin-top: -300px">
                       <img src="https://rdsenterprises.online/img/RDS_Logo-01.jpg" style="width:100px; height:100px;">
                    </div>
                </div>
            </div>
            <div class="row sender-and-recipient" style="position:relative; display:flex; margin-bottom:26px;">
                <div class="col-6 invoice-contact-info">
                    <div><small>From</small></div>
                    <div><b>RDS Enterprises</b></div>
                    <div>Sender Contact Details</div>
                </div>
                <div class="col-6 invoice-client" style="float:right;">
                    <div><small>To</small></div>
                    <div><b>{{$order->student->student_name}}</b></div>
                    <div><b>Admission No: {{$order->student->admission_number}}</b></div>
                    <div style="width:200px; margin-bottom:10px">
                      {{$order->address}}
                    </div>
                    <div>{{$order->student->contact_number}}</div>
                </div>
            </div>
            <div class="row invoice-details" style="position:relative; display:flex; margin-bottom:26px;">
                <div class="col-6 invoice-meta">
                    <div><b>Order No : </b> {{$order->id.''.$order->student->admission_number}} </div>
                    <div><b>Order Date : </b>{{$order->created_at}}</div>
                    <div><b>Delivered on : </b> 30/04/21 </div>
                </div>
                <div class="col-6 invoice-due-date" style="float:right;"></div>
            </div>
            <div class="row invoice-item-table" style="margin-left:15%; margin-right:15%; margin-bottom:26px;">
                <center><h4>Invoice Items</h4></center>
                <table class="table" style="width:100%;">
                    <thead>
                      <tr>
                        <th style="padding: 5px 15px 5px 15px;
      border-bottom: 1px solid black;" scope="col">#</th>
                        <th style="padding: 5px 15px 5px 15px;
      border-bottom: 1px solid black;" scope="col">Product Name</th>
                        <th style="padding: 5px 15px 5px 15px;
      border-bottom: 1px solid black;" scope="col">Price</th>
                        <th style="padding: 5px 15px 5px 15px;
      border-bottom: 1px solid black;" scope="col">Service Charge</th>
      <th style="padding: 5px 15px 5px 15px;
      border-bottom: 1px solid black;" scope="col">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th style="padding: 5px 15px 5px 15px;
      border-bottom: 1px solid black;" scope="row">1</th>
                        <td style="padding: 5px 15px 5px 15px;
      border-bottom: 1px solid gray;">{{$order->book->title}}</td>
                        <td style="padding: 5px 15px 5px 15px;
      border-bottom: 1px solid gray;">Rs.{{$order->book->price}}</td>
                        <td style="padding: 5px 15px 5px 15px;
      border-bottom: 1px solid gray;">Rs.{{$order->service_fee}}</td>
       <td style="padding: 5px 15px 5px 15px;
      border-bottom: 1px solid gray;">Rs.{{$order->paid_amount}}</td>
                      </tr>                    
                    </tbody>
                </table>
            </div>
            <div class="row invoice-summary" style="margin-left:45%; margin-right:15%; margin-bottom:26px;">
              <center><h4>Invoice Summary</h4></center>
                <table class="table" style="width:100%;">
                    
                    <thead>
                      <tr>
                        <th style="padding: 5px 15px 5px 15px;
      border-bottom: 1px solid black;" scope="col">Product Price</th>
                        <th style="padding: 5px 15px 5px 15px;
      border-bottom: 1px solid black;" scope="col">Extra Charge</th>
                        <th style="padding: 5px 15px 5px 15px;
      border-bottom: 1px solid black;" scope="col">Total Amount</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td style="padding: 5px 15px 5px 15px;
      border-bottom: 1px solid gray;">Rs. {{$order->payble}}</td>
                        <td style="padding: 5px 15px 5px 15px;
      border-bottom: 1px solid gray;">Rs.{{$order->service_fee}}</td>
                        <td style="padding: 5px 15px 5px 15px;
      border-bottom: 1px solid gray;">Rs. {{$order->paid_amount}}</td>
                      </tr>                  
                    </tbody>
                </table>
            </div>
             <center><h2 style="background-color:black; color:#fff">Thank You</h2></center>
        </div>
    </div>
