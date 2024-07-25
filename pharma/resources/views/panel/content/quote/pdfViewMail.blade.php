<!DOCTYPE html>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Invoice</title>

		<style>
           
			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				    background: #e5e5e5;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(1) {
				border-top: 2px solid #eee;
				font-weight: bold;
				text-align: right;
			}
			.invoice-box table tr.total td:nth-child(1) ul{
				list-style: none;
				padding-left: 0;
			}
			.invoice-box table tr.total td:nth-child(1) ul li:nth-child(7){
			    background: #b85f81;
    padding: 10px;
    font-size: 20px;
    color: #fff;
    margin-top: 10px;

	}
	/*.invoice-box .new-table tr:nth-child(3){
    background: #f7d1df;
    padding: 10px;

	}*/
          .invoice-box .new-table .sub-total-highlight{
    background: #f7d1df;
    padding: 10px;

	}
          
	/*.invoice-box table tr.total td:nth-child(2) ul li:nth-child(1)
	{
		    display: inline-block;
    background: #f7d1df;
    font-size: 18px;
    padding: 10px;
    margin-bottom: 10px;
	}*/
	.invoice-box .new-table
	{
	    text-align: right;
		border-spacing:0;
		    background: #f1f1f1;
	}
	.invoice-box .new-table tr td:nth-child(1){
		border: 0!important;
	}
	.invoice-box .new-table tr:nth-last-child(1){
		background: #e5e5e5;
    padding: 10px;
    font-size: 15px;
    color: #000;
    margin-top: 10px;
	}
	.invoice-box .new-table tr:nth-last-child{
		background: #000;
    padding: 10px;
    font-size: 15px;
    color: #000;
    margin-top: 10px;
	}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}

			/** RTL **/
			.invoice-box.rtl {
				direction: rtl;
				font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
			}

			.invoice-box.rtl table {
				text-align: right;
			}

			.invoice-box.rtl table tr td:nth-child(2) {
				text-align: left;
			}
			.foot-font{
			    font-size:12px;
			    line-height:16px;
			    padding-top:30px;
			}
		</style>
	</head>

	<body>
		<div class="invoice-box">
			<table cellpadding="0" cellspacing="0">
				<tr class="top">
					<td colspan="5">
						<table>
							<tr>
								<td class="title">
									<img
										src="{{$img}}"
										style="width: 100%; max-width: 300px"
									/>
								</td>

								<td>
									QUOTE #: {{$quote->quote_no}}<br />
									Created: {{ \Carbon\Carbon::parse($quote->quote_date)->format('jS F, Y') }}<br />
									Reference: {{$quote->customer_name }}
								</td>
							</tr>
						</table>
					</td>
				</tr>
               {{-- <tr class="heading">
								<td>Address</td>

								<td>Info</td>
				</tr>--}}
			<tr class="information">
					<td colspan="5">
						<table>
							<tr>
								<td>
									Flash Window Cleaning Services Pty Ltd<br />
							ABN 55109640716<br />
								
								</td>

							{{--	<td>
									{{$quote->user->name}}<br />
								{{$quote->user->phone}}<br />
								{{$quote->user->email}}
								</td>--}}
							</tr>
						</table>
					</td>
				</tr>

				<tr class="heading">
					<td>Description</td>
                     <td>Qty</td>
					<td>Unit Price</td>
					<td>GST</td>
					<td>Amount (AUD)</td>
				</tr>

				<tr class="item">
					<td>{{$quote->description}}</td>
                    <td>{{$quote->quantity}}</td>
					<td>{{ number_format($quote->price, 2) }}</td>
					<td>10%</td>
					<td>{{ number_format($quote->price*$quote->quantity, 2) }}</td>
				</tr>

				<tr class="item last">
				
				</tr>

				<tr class="total">

					<td colspan="5">

						<!-- 
						<ul><li>Total: ₹475.00</li>
							<li>Discount: ₹85.00</li>
							<li>Sub Total: ₹390</li>
							<li>Estimate Tax: ₹5</li>
							<li>Shipping Charge: Free</li>
							<li>Gift Wrap: ₹1</li>
							<li>Payble Amount: ₹396 </li>
						</ul> -->
						
						<table class="new-table">
							<tr>
								<td>Sub Total: </td>
								<td style="font-family: DejaVu Sans; sans-serif;">{{ number_format($quote->price*$quote->quantity, 2) }}</td>
							</tr>
							<tr>
								<td>Total GST @10%:</td>
								<td style="font-family: DejaVu Sans; sans-serif;">{{number_format(($quote->price*$quote->quantity*10)/100 ,2)}}</td>
							</tr>
                           

							<tr>
								<td style="font-weight: 700; font-size: 18px;">Payable Amount:</td>
								<td style="font-weight: 700; font-size: 18px;">{{ number_format(($quote->price*$quote->quantity)+(($quote->price*$quote->quantity*10)/100) , 2) }}</td>
							</tr>
							
						</table>
					</td>

				</tr>
			</table>
			
			<p class="foot-font">Thank you for the opportunity to quote on the service/s you require.<br>
Unless otherwise agreed this quote is valid for 6months. If you have any queries in relation to this quote please
contact Peter Mccallum on 0419482889 or pete@flashwindowcleaning.com.au. Thank you.</p>
		</div>
	</body>
</html>