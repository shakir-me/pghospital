<form id="register-form" action="{{route('patient.store')}}" method="post" role="form" style="display: none;" enctype="multipart/form-data">
	@csrf
	<input type="hidden" name="type" value="patient">


    <div class="panel-body">
	@php
	$division=DB::table('divisions')->where('status',1)->get()
	@endphp

				<div class="form-group">
					<select class="form-control" name="division_id" required="">
						<option>Select Division</option>
						@foreach($division as $row)
						<option value="{{$row->id}}">{{$row->name}}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<select class="form-control" name="distric_id" >
					</select>
				</div>
				<div class="form-group">
					<select class="form-control" name="hospital_id">
						
					</select>
				</div>
				<h4>Patient Information</h4>

				<div class="form-group">
					<input type="text" name="first_name"  tabindex="1" class="form-control" placeholder="Patient First Name"  required="">
				</div>

				<div class="form-group">
					<input type="text" name="last_name"  tabindex="1" class="form-control" placeholder="Patient Last Name"  required="">
				</div>
				<div class="form-group">
					<input type="number" name="phone_number"  tabindex="1" class="form-control" placeholder="Patient Phone Number"  required="">
				</div>

				<div class="form-group">
					<input type="number" name="post_code"  tabindex="1" class="form-control" placeholder="Patient Postal Code"  required="">
				</div>

				<div class="form-group">
					<label>Select Gender</label> <br>
					<input type="radio" name="gender" value="male">Male
					<input type="radio" name="gender" value="female">FeMale
					<input type="radio" name="gender" value="others">Others
				</div>

	                       <div class="row">
	                       	
	                       
							<div class="form-group col-md-4">
								<input type="text" name="age"  tabindex="1" class="form-control" placeholder="Patient Age"  required="">
							</div>
							<div class="form-group col-md-4">
								<input type="text" name="weight"  tabindex="1" class="form-control" placeholder="Patient Weight" value="" required="">
							</div>
							<div class="form-group col-md-4">
								<input type="text" name="height"  tabindex="1" class="form-control" placeholder="Patient Height" value="" required="">
							</div>
							</div>

							<div class="form-group">
								<input type="text" name="hospital_name"  tabindex="1" class="form-control" placeholder="Hospital Name" value="" required="">
							</div>


							<div class="form-group">
								<select class="form-control" required="" name="department_id">
									<option>Select Department</option>
									@foreach($department as $row)
									<option value="{{$row->id}}">{{$row->name}}</option>
									@endforeach
									
								</select>
							</div>

	                   <div class="row">
	                   	
	                   
						<div class="form-group col-md-4">
							<input type="text" name="prescription_window" tabindex="1" class="form-control" placeholder="Prescription Window"  required="">
						</div>
						<div class="form-group col-md-4">
							<input type="number" name="noa"  tabindex="1" class="form-control" placeholder="Number Of Antibiotics "  required="">
						</div>
						<div class="form-group col-md-4">
							<input type="number" name="no_of_other"  tabindex="1" class="form-control" placeholder="Number Of Others"  required="">
						</div>
						</div>

						<h4>Antibiotic</h4>


						<div class="form-group col-md-6">
							<select  name="medicine_id[]" id="medicine_id"  class="form-control"  >
								 <option selected="" disabled="">==Medicine Name==</option>
								@foreach($medicine as $row)
								<option value="{{$row->id}}">{{$row->name}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group col-md-6">
							<input type="text" name="generic_name" id="generic_name" tabindex="1" class="form-control" placeholder="Generic Name"  readonly="">
						</div>
						<div class="form-group col-md-6">
							<input type="text" name="company" id="company" tabindex="1" class="form-control" placeholder="Company Name"  readonly="">
						</div>
						<div class="form-group col-md-6">
							<select class="form-control" required="" name="dose" required="">
								<option value="">Select Dose</option>
								<option value="one">Day one</option>
								<option value="two">Day Two</option>
								<option value="three">Day Three</option>
								<option value="four">Day Four</option>
							</select>
						</div>
						<div class="form-group col-md-6">
							<input type="text" name="unit[]" tabindex="1" class="form-control" placeholder=" mg,mcg,g" required="">
						</div>

						<div class="form-group col-md-6">
							<input type="text" name="medicine_price"  tabindex="1" class="form-control" placeholder="Price of Antibiotic" required="">
						</div>

						<div class="form-group col-md-6">
							<label>Drug Administation Used</label>
							<select class="form-control" required="" name="medicine_used">
								
								<option value="mwtobm">Medicine Will Take Orally By Mouth</option>
								<option value="mwtbir">Medicine Will Take By Intravenous Route</option>
								<option value="mwtbiir">Medicine Will Take By Intramuscular Route</option>
								<option value="mwts">Medicine Will Take Suvcutaneously</option>
								<option value="mwttbs">Medicine Will Take Topically By Skin</option>
								<option value="others">Others</option>
							</select>
						</div>

						<div class="form-group col-md-6">
								<label>Drug Therapy Start Date</label>

							<input type="date" name="start_date"  tabindex="1" class="form-control">
						</div>

						<div class="form-group col-md-6">
									<label>Drug Therapy End Date</label>
							<input type="date" name="end_date"  tabindex="1" class="form-control">
						</div>
						<div class="form-group col-md-6">
									<label>Prescripton Image</label>
							<input type="file" name="image"  tabindex="1" class="form-control">
						</div>

	                        <div class="form-group col-md-6">
								<label>Others File</label>
							<input type="file" name="file" id="username" tabindex="1" class="form-control">
						</div>

</div>
	
	<div class="form-group">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<button type="submit" class="btn btn-primary">Sent Report</button>
			</div>
		</div>
	</div>
</form>