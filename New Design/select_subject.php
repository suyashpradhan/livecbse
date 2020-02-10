<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<?php
    include("../connection.php");
	$course=trim($_GET['course']);
	$course_id='';
	$full='';
	if(isset($_GET['select']))
	{
	   $full=$_GET['select'];
	}
	if($course == trim('TestQ CBSE(Mega)'))
	{
	  $course_id='testq_mega';
	}
	else if($course == trim('TestQ CBSE(Mini)'))
	{
	  $course_id='testq_mini';
	}
	else if(strcmp(str_replace(' ','',$course),str_replace(' ','','Conquer CBSE TestQ CBSE(Mega)')) == 0)
	{
	  $course_id='conquer_testq';
	}
	else if(strcmp(str_replace(' ','',$course),str_replace(' ','','Conquer CBSE TestQ CBSE(Mini)')) == 0)
	{
	  $course_id='conquer_testq_mini';
	}
	else if(strcmp(str_replace(' ','',$course),str_replace(' ','','TestQ CBSE(Mega) DoubtFire')) == 0)
	{
	  $course_id='testq_doubtfire';
	}
	else if(strcmp(str_replace(' ','',$course),str_replace(' ','','Conquer CBSE  DoubtFire TestQ CBSE(Mega)')) == 0)
	{
	  $course_id='conquer_doubt_testq';
	}
	else if(strcmp(str_replace(' ','',$course),str_replace(' ','','Conquer CBSE Doubt Fire')) == 0)
	{
	  $course_id='conquer_doubt_fire';
	}
	else if($course == trim('Conquer CBSE'))
	{
	  $course_id='conquer_cbse';
	}
	else
	{
	}
         $course_code=$course_id;
?>
<script language="javascript" src="jquery.js"></script>
<link href="style3.css" rel="stylesheet" type="text/css" />
<table id="hor-minimalist-b" width="100%" style="background-color:#e1e1e1; line-height:50px;">
<tr><td colspan="2" align="center"><b style="font-size:14px">Please select Mathematics or Biology</b></td></tr>
<tr>
<td colspan="2" align="center">
<input type="checkbox" name="Physics"   id="Physics" value="p"   checked="checked"  disabled="disabled" onDblClick="fun_uncheck('Physics');"> Phy <input type="checkbox" name="Chemistry" id="Chemistry" value="c" onClick="get_fee();" disabled="disabled" onDblClick="fun_uncheck('Chemistry');"    checked="checked"  onClick="get_fee();" > Chem  <input type="checkbox" name="English" disabled="disabled" id="English" value="e" onClick="get_fee();" onDblClick="fun_uncheck('English');"   onClick="get_fee();" > Eng <input type="radio" name="sub" id="Maths" value="m" onClick="get_fee();" onDblClick="fun_uncheck('Maths');" > Maths <input type="radio" name="sub" id="Biology" value="b" onClick="get_fee();" onDblClick="fun_uncheck('Biology');"> Bio </td> </tr>
<?php
     if($full =='full')
	 {
	   echo "<script language='javascript'>$('#choose').show(); $('#Physics').attr('checked','checked');$('#Chemistry').attr('checked','checked');$('#English').attr('checked','checked'); get_fee();</script>";
	 }
	 ?>	 
	 <input type="hidden" name="course" id="course" value="<?php echo $course; ?>">
<input type="hidden" name="course_code" id="course_code" value="<?php echo $course_code; ?>">
<tr><td colspan="2" align="center">
   <table cellspacing="0" style="font-size:12px; line-height:20px; padding-right:30px;">
				 <tr >
					<td style="border-bottom:1px solid #000000; border-right:solid 1px black;"><span >Net Amount</span></td>
					<td style="border-bottom:1px solid #000000; padding-left:15px;"><span data-prefix>Rs. </span><span id="net_amount"> </span></td>
				</tr>
				<tr >
					<td style="border-bottom:1px solid #000000; border-right:solid 1px black;"><span >Service Tax</span></td>
					<td style="border-bottom:1px solid #000000; padding-left:15px;"><span data-prefix>Rs. </span><span id="service_tax"> </span></td>
				</tr>
                                <tr  id="courier_charges">
					<td style="border-bottom:1px solid #000000; border-right:solid 1px black;"><span >Courier Charges</span></td>
					<td style="border-bottom:1px solid #000000; padding-left:15px;"><span data-prefix>Rs. </span><span id="courier"> </span></td>
				</tr>
			        <tr>
					<td style="border-bottom:solid 1px black; border-right:solid 1px black;"><span >Amount Received</span></td>
					<td style="border-bottom:solid 1px black; padding-left:15px;"><span data-prefix>Rs. </span><span id="amount_to_pay"> </span></td>
				</tr>
			</table>
</td></tr>
<tr  valign="top"><td  valign="top" colspan="2" align="center" style="height:60px; vertical-align:top; padding-top:15px;"> 
<input type="button" class="but-register" id="register" name="register"  value="Proceed" onClick="pay_now();"></a></td></tr>
</table>
<script language="javascript">
get_fee();
function fun_uncheck(p)
{
   if(document.getElementById(p).checked==true)
   {
      document.getElementById(p).checked=false;
   }
   get_fee();
}

function pay_now()
{
       var net_amount=$('#net_amount').html();
       var amount_pay=$('#amount_to_pay').html();
       var subject = '';
	       if($('#Physics').is(':checked'))
		   {
			  subject = 'P';
		   }
		   if($('#Chemistry').is(':checked')){
			  subject = subject+'C';
		   }
		   if($('#Maths').is(':checked')){
			  subject = subject+'M';
		   }
		   if($('#Biology').is(':checked')){
			  subject = subject+'B';
		   }
		   if($('#English').is(':checked')){
			  subject = subject+'E';
		   }
		   
		     if($('#Maths').is(':checked') || $('#Biology').is(':checked'))
			 {
				var course=$('#course').val();
                                var course_code=$('#course_code').val();
		                var today = new Date();
				var dd = today.getDate();
				var mm = today.getMonth()+1; //January is 0!
				var yyyy = today.getFullYear();
				 if(dd<10) {
					dd='0'+dd
				 }  
				 if(mm<10) {
					mm='0'+mm
			   	} 
				today = Math.floor((Math.random()*100)+1);
		               var code=course_code+'_'+subject+'_'+today;
			     if(net_amount != '' && subject != '')
			   {
				   parent.window.location='paynow_ccavenue.php?code='+code+'&fees='+amount_pay;
			   }
	       }
		        else
				{
				   alert("Please select between Maths & Biology");
				}
}

function get_fee()
{
   var subject=0;
   if($('#Physics').is(':checked')){
      subject = subject+1;
   }
   if($('#Chemistry').is(':checked')){
      subject = subject+1;
   }
   if($('#Maths').is(':checked')){
      subject = subject+1;
   }
   if($('#Biology').is(':checked')){
      subject = subject+1;
   }
   if($('#English').is(':checked')){
      subject = subject+1;
   }
     var course="<?php echo $course_id; ?>";
     $.ajax({
      type: 'POST',
      url: '../get_fee_detail.php',
      data: 'subject='+subject+'&course='+course,
      beforeSend: function() {
	  },
      success: function(response){
 	        var amount_1 = response.split("::");
               
                var amount_to_pay=parseInt(amount_1[0]);
                var courier=parseInt(amount_1[1]);
                      if(courier == '0' || isNaN(courier))
                        {
                           $('#courier_charges').hide();    
                        }
                       else
                        { 
                           $('#courier_charges').show();      
                           $('#courier').html(courier);
                        }   
		var net_amount=Math.round((amount_to_pay/115)*100);
		var service_tax=Math.round(amount_to_pay) - Math.round((amount_to_pay/115)*100);  // Math.round(amount_to_pay/12.36);
	          if(!isNaN(amount_to_pay))
		  {
		     $('#amount_to_pay').html(amount_to_pay+courier);   
		  }
		  else
		  {
		      $('#amount_to_pay').html('0');   
		  }
		  if(!isNaN(net_amount))
		  {
		     $('#net_amount').html(net_amount);
		  }
		  else
		  {
		        $('#net_amount').html('0');
		  }
	         if(!isNaN(service_tax))
		  {
		     $('#service_tax').html(service_tax);
		  }
		  else
		  {
		       $('#service_tax').html('0');
		  }
		} 
      });     
}
</script>