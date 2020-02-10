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
                    <div class="col-xs-12 col-sm-12 col-mg-7 col-lg-7 col-xl-7">
                        <form action="" class="registration-form" id="profile_detail" method="post">
                            <div class="half-Header">
                                <h1>Personal Details</h1>
                            </div>

                            <div class="first-form-wrapper">
                                <label>Name:</label>
                                <input type="text" placeholder="First Name" class="form-control" name="student_name1"
                                    id="student_name1" onkeyup="display_student_first_name()"
                                    onblur="display_student_first_name()" required>
                                <input type="text" placeholder="Last Name" name="last_name"" class=" form-control"
                                    id="last_name" onkeyUp="display_student_last_name()" required>
                            </div>
                            <br>
                            <div class="first-form-wrapper">
                                <label>Phone No:</label>
                                <input type="text" placeholder="Mobile Number 1" name="contact_number"
                                    class="form-control" id="contact_number" onkeyUp="display_student_mobile_number1()"
                                    onBlur="display_student_mobile_number1()" required>
                                <input type="text" placeholder="Mobile Number 2" name="second_contact"
                                    class="form-control" id="second_contact" onkeyUp="display_student_mobile_number2()"
                                    onBlur="display_student_mobile_number2()">
                            </div>
                            <br>
                            <div class="first-form-wrapper-email">
                                <label>Email:</label>
                                <input type="email" placeholder="Email Address" name="student_email1"
                                    class="form-control" id="student_email1" onkeyUp="display_student_email_id()"
                                    onBlur="display_student_email_id()" required>
                            </div>
                            <br>
                            <div class="first-form-wrapper-country">
                                <label>Country:</label>
                                <div>

                                    <input type="radio" name="country" id="country" value="India" checked="checked"
                                        onchange="check_country();">
                                    <label for="country" style="margin-right: 10px;">India</label>
                                </div>
                                <div>

                                    <input type="radio" name="country" id="country2" value="Other"
                                        onchange="check_country();">
                                    <label for="country" style="margin-right: 10px;">Other</label>
                                </div>
                                <div>
                                    <input type="text" name="other_country" class="form-control" id="other_country"
                                        style="display: none;" onkeypress=" display_country()"
                                        onblur="display_country()" placeholder="Enter Country" />


                                </div>

                            </div>
                            <br>
                            <div class="first-form-wrapper" id="india_section">
                                <select id="listBox" name="state_name" onchange='selct_district(this.value) '
                                    class="form-control"></select>
                                <select id='secondlist' name="city_name" onchange="check_city()"
                                    class="form-control"></select><input type="text" name="city" id="city"
                                    style="display:none" placeholder="Enter City Name" class="form-control" />
                            </div>
                            <br>
                            <div class="first-form-wrapper-address">
                                <label>Address:</label>
                                <!-- <input type="text" placeholder="Address" name="address" class="form-control textarea"
                                    id="address" onKeyUp="display_student_address()" onBlur="display_student_email_id()"
                                    required> -->

                                <textarea placeholder="Address" name="address" class="form-control" id="address"
                                    onKeyUp="display_student_address()" onBlur="display_student_email_id()" required>
                                </textarea>
                            </div>
                            <div class="first-form-wrapper-button">
                                <input type="submit" class="btnPayNow" name="step_1_next" id="step_1_next"
                                    value="Pay Now" />
                            </div>
                        </form>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-mg-5 col-lg-5 col-xl-5">
                        <div class="half-Header">
                            <h1>Invoice</h1>
                        </div>
                        <div class="form-input-Wrapper">
                            <label>First Name: <span id="display_student_name"></span></label>
                            <label>Mobile Number 1: <span id="display_mobile_number1"></span></label>
                            <label>Mobile Number 2: <span id="display_mobile_number2"></span></label>
                            <label>Email Address: <span id="display_email_id"></span></label>
                            <label>Country: <span id="display_country"></span></label>
                            <label>Address: <span id="display_address"></span></label>
                        </div>
                        <table class="table table-sm table-bordered table-hover table-striped "
                            style="width: 100%; text-align: center">
                            <thead>
                                <tr>
                                    <th>Module Selected</th>
                                    <th>Cost</th>
                                </tr>
                            </thead>
                            <tr>
                                <td><?php
                                    foreach($_SESSION['module'] as $sess)
                                    {
                                    echo $sess.'/';
                                    }
                                    ?></td>
                                <td>Rs <label id="net_fees"><?php echo $fees_total;?><input type="hidden"
                                            id="net_fees_input" name="net_fees_input"
                                            value="<?php echo $fees_total; ?>"></label></td>
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