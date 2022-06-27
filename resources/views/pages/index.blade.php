<!DOCTYPE html>
<html>
<head>
	<title>INRUD Prescribing Indicator</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">


<!-- content wrpper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"
integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">



	<style type="text/css">




		body {
		    padding-top: 90px;
		}
		.panel-login {
			border-color: #ccc;
			-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
			-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
			box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
		}
		.panel-login>.panel-heading {
			color: #00415d;
			background-color: #fff;
			border-color: #fff;
			text-align:center;
		}
		.panel-login>.panel-heading a{
			text-decoration: none;
			color: #666;
			font-weight: bold;
			font-size: 15px;
			-webkit-transition: all 0.1s linear;
			-moz-transition: all 0.1s linear;
			transition: all 0.1s linear;
		}
		.panel-login>.panel-heading a.active{
			color: #029f5b;
			font-size: 18px;
		}
		.panel-login>.panel-heading hr{
			margin-top: 10px;
			margin-bottom: 0px;
			clear: both;
			border: 0;
			height: 1px;
			background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
			background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
			background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
			background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
		}
		.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
			height: 45px;
			border: 1px solid #ddd;
			font-size: 16px;
			-webkit-transition: all 0.1s linear;
			-moz-transition: all 0.1s linear;
			transition: all 0.1s linear;
		}
		.panel-login input:hover,
		.panel-login input:focus {
			outline:none;
			-webkit-box-shadow: none;
			-moz-box-shadow: none;
			box-shadow: none;
			border-color: #ccc;
		}
		.btn-login {
			background-color: #59B2E0;
			outline: none;
			color: #fff;
			font-size: 14px;
			height: auto;
			font-weight: normal;
			padding: 14px 0;
			text-transform: uppercase;
			border-color: #59B2E6;
		}
		.btn-login:hover,
		.btn-login:focus {
			color: #fff;
			background-color: #53A3CD;
			border-color: #53A3CD;
		}
		.forgot-password {
			text-decoration: underline;
			color: #888;
		}
		.forgot-password:hover,
		.forgot-password:focus {
			text-decoration: underline;
			color: #666;
		}

		.btn-register {
			background-color: #1CB94E;
			outline: none;
			color: #fff;
			font-size: 14px;
			height: auto;
			font-weight: normal;
			padding: 14px 0;
			text-transform: uppercase;
			border-color: #1CB94A;
		}
		.btn-register:hover,
		.btn-register:focus {
			color: #fff;
			background-color: #1CA347;
			border-color: #1CA347;
		}

	</style>
</head>
<body>

	<!------ Include the above in your HEAD tag ---------->
	<h3 style="text-align: center; color: green;">INRUD Prescribing Indicator</h3>
	<div class="container">
	    	<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="panel panel-login">
						<div class="panel-heading">
							<div class="row">

								<div class="col-xs-6">
									<a href="#" class="active" id="login-form-link">Reporter Information</a>
								</div>
								<div class="col-xs-6">
									<a href="#" id="register-form-link">Patient Information</a>
								</div>
							</div>
							<hr>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
				<form id="login-form" action="{{route('reporter.store')}}" method="post" role="form" style="display: block;" enctype="multipart/form-data">
					@csrf

					<input type="hidden" name="type" value="reporter">
					<div class="form-group">
						<input type="text" name="reporter_name"  tabindex="1" class="form-control" placeholder="Reporter Name" required="">
					</div>

					<div class="form-group">
						<input type="email" name="reporter_email"  tabindex="1" class="form-control" placeholder="Reporter Email" required="">
					</div>

					<div class="form-group">
						<input type="number" name="reporter_phone"  tabindex="1" class="form-control" placeholder=" Reporter Phone Number"  required="">
					</div>


					<div class="form-group">
						<input type="text" name="reporter_post_code"  tabindex="2" class="form-control" placeholder="Reporter Postal Code" required="">
					</div>

					<div class="form-group">
						<select class="form-control" name="reporter_by" required="">
							<option value="">Select Reported By</option>
							<option value="doctor">Doctor</option>
							<option value="pharmacist">Pharmacist</option>
							<option value="Nurse">Nurse</option>
						</select>
					</div>

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
					<option>Please seleted</option>
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
					   <div class="row">
                    <div class="add_item">

					<div class="form-group col-md-6">
						<select  name="medicine_id[]" id="medicine_id"  class="form-control"  >
							 <option selected="" disabled="">==Medicine Name==</option>
							@foreach($medicine as $row)
							<option value="{{$row->id}}">{{$row->name}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group col-md-6">
						<input type="text" name="generic_name[]" id="generic_name" tabindex="1" class="form-control" placeholder="Generic Name"  readonly="">
					</div>
					<div class="form-group col-md-6">
						<input type="text" name="company[]" id="company" tabindex="1" class="form-control" placeholder="Company Name"  readonly="">
					</div>

					<div  class="form-group col-md-6">
						<input type="text" name="unit[]" tabindex="1" class="form-control" placeholder=" mg,mcg,g" required="">
					</div>

					<div class="form-group col-md-6">
						<select class="form-control" required="" name="dose[]" required="">
							<option value="">Select Dose</option>
							<option value="one">Day one</option>
							<option value="two">Day Two</option>
							<option value="three">Day Three</option>
							<option value="four">Day Four</option>
						</select>
					</div>
					

					<div class="form-group col-md-6">
						<input type="text" name="medicine_price[]"  tabindex="1" class="form-control" placeholder="Price of Antibiotic" required="">
					</div>

					<div class="form-group col-md-6">
				<label>Drug Administation Used</label>
				<select class="form-control" required="" name="medicine_used[]">
					
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

						<input type="date" name="start_date[]"  tabindex="1" class="form-control">
					</div>

					<div class="form-group col-md-6">
								<label>Drug Therapy End Date</label>
						<input type="date" name="end_date[]"  tabindex="1" class="form-control">
					</div>

					<div class="form-group col-md-6" tyle="padding-top: 25px;">
        <span class="btn btn-success addeventmore">Add More </span>
     </div>

                  </div>
              </div>

               <div class="row">
				
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
                      			<!-- <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In"> -->
                      			<button type="submit" class="btn btn-primary">Sent Report</button>
                      		</div>
                      	</div>
                      </div>
					</div>
								
				</form>



				<div style="visibility: hidden;">
				     	<div class="whole_extra_item_add" id="whole_extra_item_add">
				     		<div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
				     			<div class="form-row">
				             
				        	   
				     				<div class="form-group col-md-6">
				     					<select  name="medicine_id[]" id="medicine_id"  class="form-control"  >
				     						 <option selected="" disabled="">==Medicine Name==</option>
				     						@foreach($medicine as $row)
				     						<option value="{{$row->id}}">{{$row->name}}</option>
				     						@endforeach
				     					</select>
				     				</div>
				     				<div class="form-group col-md-6">
				     					<input type="text" name="generic_name[]" id="generic_name" tabindex="1" class="form-control" placeholder="Generic Name"  readonly="">
				     				</div>
				     				<div class="form-group col-md-6">
				     					<input type="text" name="company[]" id="company" tabindex="1" class="form-control" placeholder="Company Name"  readonly="">
				     				</div>
				     				<div class="form-group col-md-6">
				     					<select class="form-control" required="" name="dose[]" required="">
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
				     					<input type="text" name="medicine_price[]"  tabindex="1" class="form-control" placeholder="Price of Antibiotic" required="">
				     				</div>

				     				<div class="form-group col-md-6">
				     					<label>Drug Administation Used</label>
				     					<select class="form-control" required="" name="medicine_used[]">
				     						
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

				     					<input type="date" name="start_date[]"  tabindex="1" class="form-control">
				     				</div>

				     				<div class="form-group col-md-6">
				     				<label>Drug Therapy End Date</label>
				     					<input type="date" name="end_date[]"  tabindex="1" class="form-control">
				     				</div>

				        	<div class="col-md-2" style="padding-top: 25px;">
				      <span class="btn btn-success addeventmore">Add More</span>
				     <span class="btn btn-danger removeeventmore">Delete </span>    		
				        	</div><!-- End col-md-2 -->		
				           </div>  	
				     		</div>	
				     	</div>  	
				     </div>

				          <script type="text/javascript">
				    	$(document).ready(function(){
				    		var counter = 0;
				    		$(document).on("click",".addeventmore",function(){
				    			var whole_extra_item_add = $('#whole_extra_item_add').html();
				    			$(this).closest(".add_item").append(whole_extra_item_add);
				    			counter++;
				    		});
				    		$(document).on("click",'.removeeventmore',function(event){
				    			$(this).closest(".delete_whole_extra_item_add").remove();
				    			counter -= 1
				    		});
				    	});
				    </script>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>





  <script type="text/javascript">
  
   $(document).ready(function() {
    $('select[name="medicine_id[]"]').on('change', function(){
    var medicineid = $(this).val();
    if(medicineid) {
    $.ajax({  
    url: "{{  url('/get/medicine/') }}/"+medicineid,
    type:"GET",
    dataType:"json",
    success:function(data) {
      
            $('#medicineid').empty();
                $('#medicineid').val(data.medicine_id);

                $('#generic_name').empty();
                $('#generic_name').val(data.generic_name);

                $('#company').empty();
                $('#company').val(data.company);
                
        },
      });
    };
   });
   });    

 </script>
		
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

	<script type="text/javascript">
		$(function() {

		    $('#login-form-link').click(function(e) {
				$("#login-form").delay(100).fadeIn(100);
		 		$("#register-form").fadeOut(100);
				$('#register-form-link').removeClass('active');
				$(this).addClass('active');
				e.preventDefault();
			});
			$('#register-form-link').click(function(e) {
				$("#register-form").delay(100).fadeIn(100);
		 		$("#login-form").fadeOut(100);
				$('#login-form-link').removeClass('active');
				$(this).addClass('active');
				e.preventDefault();
			});

		});

	</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" crossorigin="anonymous"></script>


<script type="text/javascript">
    $(document).ready(function() {
         $('select[name="division_id"]').on('change', function(){
             var division_id = $(this).val();
             if(division_id) {

               $.ajax({
                   url: "{{  url('/get/division/') }}/"+division_id,
                   type:"GET",
                   dataType:"json",
                   success:function(data) {
                      var d =$('select[name="distric_id"]').empty();
                         $.each(data, function(key, value){

                             $('select[name="distric_id"]').append('<option value="'+ value.id +'">' + value.name + '</option>');

                         });

                   },
                  
               });
             } else {
                 alert('danger');
             }

         });
     });

</script>

<script type="text/javascript">
    $(document).ready(function() {
         $('select[name="distric_id"]').on('change', function(){
             var distric_id = $(this).val();
             if(distric_id) {

               $.ajax({
                   url: "{{  url('/get/distric/') }}/"+distric_id,
                   type:"GET",
                   dataType:"json",
                   success:function(data) {
                      var d =$('select[name="hospital_id"]').empty();
                         $.each(data, function(key, value){

                             $('select[name="hospital_id"]').append('<option value="'+ value.id +'">' + value.name + '</option>');

                         });

                   },
                  
               });
             } else {
                 alert('danger');
             }

         });
     });

</script>

 
		
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		  <script>
		      @if(Session::has('messege'))
		        var type="{{Session::get('alert-type','info')}}"
		        switch(type){
		            case 'info':
		                 toastr.info("{{ Session::get('messege') }}");
		                 break;
		            case 'success':
		                toastr.success("{{ Session::get('messege') }}");
		                break;
		            case 'warning':
		               toastr.warning("{{ Session::get('messege') }}");
		                break;
		            case 'error':
		                toastr.error("{{ Session::get('messege') }}");
		                break;
		        }
		      @endif
		   </script> 
</body>
</html>