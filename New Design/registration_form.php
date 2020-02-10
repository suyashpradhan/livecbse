<?php
   session_start();
   $fees_total=$_SESSION['fees'];
   $count=count(array_unique($_SESSION['module']));  
?>

<script language="javascript" src="http://www.livecbse.com/jquery.js"></script>
<script language="javascript" src="http://www.livecbse.com/js/state.js"></script>
  
<div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Register Now !!!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="width: 100%">
                <div class="row">
				
                    <div class="col-xs-12 col-sm-12 col-mg-8 col-lg-8 col-xl-8">
					 <form action="" class="registration-form" id="profile_detail" method="post">
                            <div class="first-half-Header">
                            <h1>Personal Details</h1>
                        </div>
                        
                            <div class="first-form-wrapper">
                                <label>Name:</label>
                                <input type="text" placeholder="First Name" class="first_Name" name="student_name1" id="student_name1"  onkeyup="display_student_first_name()" onblur="display_student_first_name()" required>
                                <input type="text" placeholder="Last Name" name="last_name"" class="last_Name" id="last_name" onkeyUp="display_student_last_name()" required>
                            </div>
                            <br>
                            <div class="first-form-wrapper">
                                <label>Phone No:</label>
                                <input type="text" placeholder="Mobile Number" name="contact_number" class="phone_number_one" id="contact_number" onkeyUp="display_student_mobile_number1()" onBlur="display_student_mobile_number1()" required>
                                <input type="text" placeholder="Mobile Number" name="second_contact" class="phone_number_two" id="second_contact" onkeyUp="display_student_mobile_number2()" onBlur="display_student_mobile_number2()">
                            </div>
                            <br>
                            <div class="first-form-wrapper-email">
                                <label>Email:</label>
                                <input type="email" placeholder="Email Address" name="student_email1" class="email_address" id="student_email1" onkeyUp="display_student_email_id()" onBlur="display_student_email_id()" required>
                            </div>
                            <br>
                            <div class="first-form-wrapper-country">
                                <label>Country:</label>
                                <input type="radio" name="country" id="country" value="India" checked="checked" onchange="check_country();">India
                                <input type="radio" name="country" id="country2" value="Other" onchange="check_country();" >Other
                                <input type="text" name="other_country" class="phone_number_two" id="other_country" style="display:none; height:30px; width:200px" onkeypress="display_country()" onblur="display_country()"  placeholder="Enter Country"  />
                             
                            </div>
                            <br>
                            <div class="first-form-wrapper-state" id="india_section">
                                <div id="selection">
                                       <select id="listBox" name="state_name" onchange='selct_district(this.value)'></select>
                                       <select id='secondlist' name="city_name" onchange="check_city()" style="width:150px;"></select><input type="text" name="city" id="city" style="display:none" placeholder="Enter City Name"/>
                                </div>
                            </div>
                            <br>
                            <div class="first-form-wrapper-address">
                               <label>Address:</label>
                                <input type="text" placeholder="Address" name="address" class="address" id="address" onKeyUp="display_student_address()" onBlur="display_student_email_id()" required>
                            </div>
                            <div class="first-form-wrapper-button">
                             <input type="submit" class="btnPayNow" name="step_1_next" id="step_1_next"  
                                style="background-color: #231F20;border: 1px solid #231F20;font-size: 16px;border-radius: 5px;width: 100px;color: #fff;cursor: pointer;padding:3px 0; display:block;" value="Pay Now" />  
                             </div>
                       </form> 
                    </div>
                    <div class="col-xs-12 col-sm-12 col-mg-4 col-lg-4 col-xl-4">
                        <div class="second-half-Header">
                            <h1>Invoice</h1>
                        </div>
                        <div class="form-input-Wrapper">
                            <label>First Name: <span id="display_student_name"></span>
                            </label><br>
                            <label>Mobile Number 1: <span id="display_mobile_number1"></span></label><br>
                            <label>Mobile Number 2: <span id="display_mobile_number2"></span></label><br>
                            <label>Email Address: <span id="display_email_id"></span></label><br>
                            <label>Country: <span id="display_country"></span></label><br>
                            <label>Address: <span id="display_address"></span></label><br>
                        </div>
                        <table class="table_course" style="width: 100%; text-align: center">
                            <tr>
                                <th>Module Selected</th>
                                <th>Cost</th>
                            </tr>
                            <tr>
                                <td><?php
                                    foreach($_SESSION['module'] as $sess)
                                    {
                                    echo $sess.'/';
                                    }
                                    ?></td>
                                <td>Rs <label id="net_fees"><?php echo $fees_total;?><input type="hidden" id="net_fees_input" name="net_fees_input"  value="<?php echo $fees_total; ?>"></label></td>
                            </tr>
                        </table><br>
                        
                    </div>
                
				</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
         

        <script language='javascript'>
		    function ccavenue()
			{
			    $("#profile_detail").submit(function(){
                     alert("Submitted");
                 });
		    }
		
            function display_student_first_name()
            {
                var student_name=$('#student_name1').val();
                $('#display_student_name').html(student_name); 
            }
            
            function display_student_last_name()
            {
                var student_name=$('#student_name1').val();
                var last_name=$('#last_name').val();
                $('#display_student_name').html(student_name+' '+last_name); 
            }
            
            function display_student_mobile_number1()
            {
                var student_name=$('#contact_number').val();
                $('#display_mobile_number1').html(student_name); 
            }
            
            function display_student_mobile_number2()
            {
                var student_name=$('#second_contact').val();
                $('#display_mobile_number2').html(student_name); 
            }
         
            function display_student_email_id()
            {
                var student_name=$('#student_email1').val();
                $('#display_email_id').html(student_name); 
            }
            
            function display_student_address()
            {
                var student_name=$('#address').val();
                $('#display_address').html(student_name); 
            }
            
            function display_country()
            {
                var student_name=$('#other_country').val();
                $('#display_country').html(student_name); 
            }
            
            function check_booksellercode(arg)
            {
               var shop_id = $('#shop_id').val();
               var value = $('#promo_code').val();
             //  var shop_id = id.split("_");  
                      $.ajax({
                                   type: 'POST',
                                   url: 'check_bookseller_code.php?shop_id='+shop_id+'&booksellercode='+value,
                                   data: '',
                                    beforeSend: function() {  
                                     },
                                   success: function(response){
                                      if(response != '')
                                       {
                                             if(response == 'correct')
                                                 { 
                                                    $('#promo_code_c').html('&#10004');
                                                    $('#result_code').val('correct'); 
                                                        $.ajax({
                                                             type: 'POST',
                                                             url: 'get_discount_detail.php?discount='+response,
                                                             data: '',
                                                             beforeSend: function() {  
                                                              },
                                                              success: function(response1){   
                                                                                                    $('#net_fees').html(response1); 
                                                                                                    $('#net_fees_input').val(response1); }
                                                             }); 
                                                 }
                                             else
                                                 { 
                                                   $('#promo_code_c').html('&#10006'); 
                                                   $('#result_code').val('incorrect');
                                                 }			   
                                       }
                                    }
                                });
            }
         
         check_country();
         
            function check_country()
            {
                var country=$('input[name="country"]:checked').val();
                 if(country == 'India')
                    {
                       $('#other_country').hide();
                       $('#india_section').show();
                       // $('#shop_names').show();
                        $('#display_country').html('India'); 
                    }
                 else
                    {
                       $('#other_country').show();
                       $('#india_section').hide();
                       $('#shop_names').hide();
                    }        
            }
         
            function check_city()
            {
               var city=$('#secondlist').val();
             // alert(city);
                 if(city == 'Other')
                 {
                    $('#city').show();
                 }   
                 else
                 {
                     $('#city').hide();
                 }    
            }
         </script>