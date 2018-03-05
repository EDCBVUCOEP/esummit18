<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 40000");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Payments Gateway</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<meta name="GENERATOR" content="Evrsoft First Page">
</head>
<body class="container">
	<h1 class="display-4 text-center mt-4"><ul>E-Summit'18 Fee Payment</ul></h1>
	<form class="form-group mt-4" method="post" action="pgRedirect.php">
		<div class="form-group">
		<table border="1" class="container">
			<tbody>
				<tr>
					<th>S.No</th>
					<th>Label</th>
					<th>Value</th>
				</tr>
				<tr>
					<td>1</td>
					<td><label>ORDER ID::*</label></td>
					<td><input class="mt-2 mb-2" id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>" readonly="readonly">
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td><label>CUSTOMER ID ::*</label></td>
					<td><input  class="mt-2 mb-2" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo  "CUST" . rand(10000,99999999)?>" readonly="readonly"></td>
				</tr>
				<tr hidden>
					<td>3</td>
					<td><label>INDUSTRY_TYPE_ID ::*</label></td>
					<td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" ></td>
				</tr>
				<tr hidden>
					<td>3</td>
					<td><label>Channel ::*</label></td>
					<td><input id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB" readonly="readonly">
					</td>
				</tr>
				<tr>
					<td>3</td>
					<td><label>Amount Paid</label></td>
					<td><input  class="mt-2 mb-2" title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="300" readonly="readonly">
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input class="btn btn-primary mt-2 mb-2" value="Proceed To Pay" type="submit"	onclick=""></td>
				</tr>
			</tbody>
			</div>
		</table>
		<p class="text-muted mt-4">Note The Details for further Reference</p>
		<!-- * - Mandatory Fields -->
	</form>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>