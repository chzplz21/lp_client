<div class="modal fade" id="add_edit_customer" role="dialog" aria-hidden="true" tabindex="-1">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times-circle"></i></a>
				<h4 class="modal-title"><i class="fa fa-pencil"></i>{{ucfirst($form_type)}} Customer</h4>
			</div>
			<div class="modal-body">
				<form action="/customers/{{$form_type}}" method="post">
          <div class="row">
            <div class="col-md-4 padded-sm">
              <label>Parent Customer:</label>
              <select name="parentid" class="select2 form-control">
                <option value="">None</option>
              </select>
            </div>
          </div>
					<div class="row">
						<div class="col-md-4 padded-sm">
							<label>Company:</label>
							<input type="text" name="company" class="form-control" value="{{ $single_customer->name ?? "" }}">
						</div>
						<div class="col-md-4 padded-sm">
							<label>Primary Contact First Name:</label>
							<input type="text" name="firstname" class="form-control" value="{{ $customer->contact_first_name ?? "" }}">
						</div>
						<div class="col-md-4 padded-sm">
							<label>Last Name:</label>
							<input type="text" name="lastname" class="form-control" value="{{ $customer->contact_last_name ?? "" }}">
						</div>
					</div>
          <hr>
					<div class="row">
						<div class="col-md-4 padded-sm">
							<label>Telephone:</label>
							<input type="text" name="telephone" class="form-control telephone" value="{{ $customer->phone ?? "" }}">
						</div>
						<div class="col-md-4 padded-sm">
							<label>Alternate #:</label>
							<input type="text" name="telephone_alt" class="form-control telephone" value="{{ $customer->alt_phone ?? "" }}">
						</div>
						<div class="col-md-4 padded-sm">
							<label>Email Address:</label>
							<input type="text" name="email" class="form-control" value="{{ $customer->email ?? "" }}">
						</div>
					</div>
          <hr>
					<div class="row" id="billingaddress">
						<div class="col-md-12 padded-sm">
							<label>Billing Address:</label>
							<input type="text" name="billing_address" class="form-control address-street" value="{{ $customer->billing_address ?? "" }}">
						</div>
						<div class="col-md-4 padded-sm">
							<label>Billing City:</label>
							<input type="text" name="billing_city" class="form-control address-city" value="{{ $customer->billing_city ?? "" }}">
						</div>
						<div class="col-md-4 padded-sm">
							<label>Billing State:</label>
							<select name="billing_state" class="select2 form-control address-state" required>
								<option value=" ">-Select One-</option>
																	<option value="AL" >Alabama</option>
																		<option value="AK" >Alaska</option>
																		<option value="AZ" >Arizona</option>
																		<option value="AR" >Arkansas</option>
																		<option value="CA" >California</option>
																		<option value="CO" >Colorado</option>
																		<option value="CT" >Connecticut</option>
																		<option value="DE" >Delaware</option>
																		<option value="FL" selected>Florida</option>
																		<option value="GA" >Georgia</option>
																		<option value="HI" >Hawaii</option>
																		<option value="ID" >Idaho</option>
																		<option value="IL" >Illinois</option>
																		<option value="IN" >Indiana</option>
																		<option value="IA" >Iowa</option>
																		<option value="KS" >Kansas</option>
																		<option value="KY" >Kentucky</option>
																		<option value="LA" >Louisiana</option>
																		<option value="ME" >Maine</option>
																		<option value="MD" >Maryland</option>
																		<option value="MA" >Massachusetts</option>
																		<option value="MI" >Michigan</option>
																		<option value="MN" >Minnesota</option>
																		<option value="MS" >Mississippi</option>
																		<option value="MO" >Missouri</option>
																		<option value="MT" >Montana</option>
																		<option value="NE" >Nebraska</option>
																		<option value="NV" >Nevada</option>
																		<option value="NH" >New Hampshire</option>
																		<option value="NJ" >New Jersey</option>
																		<option value="NM" >New Mexico</option>
																		<option value="NY" >New York</option>
																		<option value="NC" >North Carolina</option>
																		<option value="ND" >North Dakota</option>
																		<option value="OH" >Ohio</option>
																		<option value="OK" >Oklahoma</option>
																		<option value="OR" >Oregon</option>
																		<option value="PA" >Pennsylvania</option>
																		<option value="RI" >Rhode Island</option>
																		<option value="SC" >South Carolina</option>
																		<option value="SD" >South Dakota</option>
																		<option value="TN" >Tennessee</option>
																		<option value="TX" >Texas</option>
																		<option value="UT" >Utah</option>
																		<option value="VT" >Vermont</option>
																		<option value="VA" >Virginia</option>
																		<option value="WA" >Washington</option>
																		<option value="WV" >West Virginia</option>
																		<option value="WI" >Wisconsin</option>
																		<option value="WY" >Wyoming</option>
																		<option value="DC" >Washington DC</option>
																</select>
						</div>
						<div class="col-md-4 padded-sm">
							<label>Billing Zip Code:</label>
							<input type="text" name="billing_zip" class="form-control address-zip" value="{{ $customer->zip ?? "" }}">
						</div>
					</div>
          <hr>
					<div class="row" id="shippingaddress">
						<div class="col-md-12 padded-sm">
							<label>Shipping Address: <a href="javascript:void(0)" class="copyfrombillingbutton" data-toggle="tooltip" title="Copy from billing address."><i class="fas fa-copy"></i></a></label>
							<input type="text" name="shipping_address" class="form-control address-street" value="{{ $customer->shipping_address ?? "" }}">
						</div>
						<div class="col-md-4 padded-sm">
							<label>Shipping City:</label>
							<input type="text" name="shipping_city" class="form-control address-city" value="{{ $customer->shipping_city ?? "" }}">
						</div>
						<div class="col-md-4 padded-sm">
							<label>Shipping State:</label>
							<select name="shipping_state" class="select2 form-control address-state" required>
								<option value=" ">-Select One-</option>
																	<option value="AL" >Alabama</option>
																		<option value="AK" >Alaska</option>
																		<option value="AZ" >Arizona</option>
																		<option value="AR" >Arkansas</option>
																		<option value="CA" >California</option>
																		<option value="CO" >Colorado</option>
																		<option value="CT" >Connecticut</option>
																		<option value="DE" >Delaware</option>
																		<option value="FL" >Florida</option>
																		<option value="GA" >Georgia</option>
																		<option value="HI" >Hawaii</option>
																		<option value="ID" >Idaho</option>
																		<option value="IL" >Illinois</option>
																		<option value="IN" >Indiana</option>
																		<option value="IA" >Iowa</option>
																		<option value="KS" >Kansas</option>
																		<option value="KY" >Kentucky</option>
																		<option value="LA" >Louisiana</option>
																		<option value="ME" >Maine</option>
																		<option value="MD" >Maryland</option>
																		<option value="MA" >Massachusetts</option>
																		<option value="MI" >Michigan</option>
																		<option value="MN" >Minnesota</option>
																		<option value="MS" >Mississippi</option>
																		<option value="MO" >Missouri</option>
																		<option value="MT" >Montana</option>
																		<option value="NE" selected>Nebraska</option>
																		<option value="NV" >Nevada</option>
																		<option value="NH" >New Hampshire</option>
																		<option value="NJ" >New Jersey</option>
																		<option value="NM" >New Mexico</option>
																		<option value="NY" >New York</option>
																		<option value="NC" >North Carolina</option>
																		<option value="ND" >North Dakota</option>
																		<option value="OH" >Ohio</option>
																		<option value="OK" >Oklahoma</option>
																		<option value="OR" >Oregon</option>
																		<option value="PA" >Pennsylvania</option>
																		<option value="RI" >Rhode Island</option>
																		<option value="SC" >South Carolina</option>
																		<option value="SD" >South Dakota</option>
																		<option value="TN" >Tennessee</option>
																		<option value="TX" >Texas</option>
																		<option value="UT" >Utah</option>
																		<option value="VT" >Vermont</option>
																		<option value="VA" >Virginia</option>
																		<option value="WA" >Washington</option>
																		<option value="WV" >West Virginia</option>
																		<option value="WI" >Wisconsin</option>
																		<option value="WY" >Wyoming</option>
																		<option value="DC" >Washington DC</option>
																</select>
						</div>
						<div class="col-md-4 padded-sm">
							<label>Shipping Zip Code:</label>
							<input type="text" name="shipping_zip" class="form-control address-zip" value="{{ $customer->shipping_zip ?? "" }}">
						</div>
					</div>
          <hr>
          <div class="row">
            <div class="col-md-4 padded-sm">
              <label>Choose Tax Rate:</label>
              <select name="taxrate" class="select2 form-control" id="editcustomer-taxrate">
                <option value="">-Select One-</option>
                              </select>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-12 padded-sm">
              <label>Internal Notes:</label>
              <textarea name="notes" class="form-control">{{ $customer->notes ?? "" }}</textarea>
            </div>
          </div>


					<div class="row">
						<div class="col-md-12 padded-sm text-right">
							<input type="hidden" name="customerid" value="1409">
							<input type="submit" name="editcustomersubmit" class="btn btn-success" value="{{ucfirst($form_type)}} Customer">
							<input type="button" class="deletebutton-confirm btn btn-danger" value="Delete Customer">
							<input type="submit" name="deletecustomersubmit" class="deletebutton-actual hidden" value="Delete Customer">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
