 
  <?php
  // echo "<td colspan='5'>";
   include("connection.php");
   $r=mysqli_query($con,"select * from module_detail where subject='Physics' order by module_no");
    $i=0;
	$sno_e='';
	$sno_t='';
	while($r2=mysqli_fetch_array($r))
	{
	            if($r2[2] == '11')
                  {
                 $sno_e=$r2[0];
                  }  
                 else if($r2[2] == '12')
                  {
                 $sno_t=$r2[0];
                  }  
                 else{}
	 }	
	 $r=mysqli_query($con,"select * from module_detail where subject='Physics' order by module_no");
	 while($r1=mysqli_fetch_array($r))
	 {
                $i++;		   
			     if($i == 1 && isset($sno_e))
				 {
			    ?>   <!-- <div class="blockWrapper"> <div class="sectionInnerFirstList" style="background-color:#f5f6c4;padding:2px 5px !important;height: 28px;">
                      <p><a href="#" style="background-color:#000000; color:#fdbc64; text-decoration:none; cursor:pointer; padding:0 2px">Full Course</a> <span style="padding-left: 15px">Class XI</span> <span style="float: right; margin-right:10px;">
					       <input  type="checkbox"   name='pm11' id='pm11' onclick="fullcourse21('p','11','pm');"></span></p>
                       </div> -->
                       <div class="blockWrapper"> 
                       <div class=" sectionInnerFirstListHead">
                       <p><a href="#" class="full-course">Full Course</a> <span class="class-text">Class
										XI</span class="class-text">
									<span style="float: right; margin-right:10px;">
                                        <input type="checkbox" name='pm11' id='pm11' onclick="fullcourse21('p','11','pm');"></span>
                        </p>
								
						</div>
			<?php  } 
			     if($i == 5 && isset($sno_t))
				 { ?>
				          <!-- <div class="sectionInnerFirstList"  style="background-color:#f5f6c4;padding:2px 5px !important;height: 28px;">
                               <p><a href="#" style="background-color:#000000; color:#fdbc64; text-decoration:none; cursor:pointer; padding:0 2px">Full Course</a> <span style="padding-left: 15px">Class XII</span> <span style="float: right; margin-right:10px;">
                                         <input type="checkbox"   name='pm12' id='pm12' onclick="fullcourse21('p','12','pm');" ></span></p>
                              </div> -->
                              <div class=" sectionInnerFirstListHead">
								<p><a href="#" class="full-course">Full Course</a> <span class="class-text">Class
										XII</span class="class-text">
									<span style="float: right; margin-right:10px;">
										<input type="checkbox" name='pm12' id='pm12' onclick="fullcourse21('p','12','pm');"></span>
								</p>
						    </div>		
			<?php } 
			    if($i>4)
				  { 
				      $cls='XII';
				  }
				  else
				  {
				     $cls='XI';
				  }
                       if($i > 8)
                        {
                             continue;
                        }
			?>			
           
           <div class="blockWrapperBodySecondary">
				<div class="sectionInnerFirstList">
					<div class="innerSection">
                <span class="mod">Mod <?php if($r1[2] > 4) { echo 4-$r1[2]; } else { echo $r1[2]; }; ?></span> <span class="topic"><a href="javascript:void(0);"  data-toggle="popover" title="<?php echo $r1[3]; ?>" data-content="<?php echo  $r1['detail']; ?>" data-trigger="hover" style="color:#006666; "><?php 
              if(strlen($r1[3]) > 11) 
               {
                   echo substr($r1[3], 0, 11) . '...'; 
               } 
               else
               {      
                  echo $r1[3]; 
               }               ?></a></span> <span
                        style="float: right; margin-right:10px;"><input type="checkbox" name='pm<?php echo $r1[2]; ?>' id='pm<?php echo $r1[2]; ?>' onclick="phy_course('<?php echo $r1[2]; ?>');"></span></p>
                        </div>
								</div>
             
	   <?php } ?>		 
             <div class="section-1-of-3-footer-secondary" style="text-align:center">
                        <a href="#" data-toggle="modal" data-target="#fee_structure_12" class="fees-link" style="text-transform: none;
                        text-decoration: none;
                        color: #fff;
                        padding-right: 5px;">Fees Structure | </a>
                         <a href="#" data-toggle="modal" data-target="#exampleModalR" data-backdrop="static" data-keyboard="false"  style="text-transform: none;
                        text-decoration: none;
                        color: #fff;
                        padding-right: 5px;" class="refund-link">Refund Policy | </a>
                        <a href="#" data-toggle="modal" data-target="#exampleModalT" data-backdrop="static" data-keyboard="false" style="text-transform: none;
                        text-decoration: none;
                        color: #fff;
                        padding-right: 5px;">Terms & Condition</a>
						
                     
                    </div>
					
					
					
					<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title fees-structure-title" id="exampleModalLabel">Fees Structure IX-X</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h1 class="modal-body-header-sub">Fee Structure for Modules of Individual Subject (SM)* : -</h1>
                                        <div style="overflow-x:auto;overflow-y:auto">
                                            <table class="table table-sm fees-table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="table-sm-header" colspan="10">Module-wise Fees Structure</th>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col" class="table-sm-header-sub">No.Of Modules</th>
                                                        <th scope="col" class="table-sm-header-sub">Fees</th>
                                                        <th scope="col" class="table-sm-header-sub">GST</th>
                                                        <th scope="col" class="table-sm-header-sub">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row" class="table-sm-first-col">One Module</th>
                                                        <td class="table-sm-first-col">Rs 4766.94</td>
                                                        <td class="table-sm-first-col">Rs 858.05</td>
                                                        <td class="table-sm-first-col">Rs 5625</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="table-sm-first-col">
                                                            Two Modules
                                                        </th>
                                                        <td class="table-sm-first-col">Rs 9533.89</td>
                                                        <td class="table-sm-first-col">Rs 1716.10</td>
                                                        <td class="table-sm-first-col">Rs 11250</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="table-sm-first-col">Three Modules</th>
                                                        <td class="table-sm-first-col">Rs 14300.84</td>
                                                        <td class="table-sm-first-col">Rs 2574.15</td>
                                                        <td class="table-sm-first-col">Rs 16875</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="table-sm-first-col">Full Course for IX/X</th>
                                                        <td class="table-sm-first-col">Rs 19067.79</td>
                                                        <td class="table-sm-first-col">Rs 3432.20</td>
                                                        <td class="table-sm-first-col">Rs 22500</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <h1 class="modal-body-header-second">Fee Structure Subject Wise : -</h1>
                                        <div style="overflow-x:auto;overflow-y:auto">
                                            <table class="table table-sm fees-table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="table-sm-header" colspan="10">Full Course - Fees Structure</th>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col" class="table-sm-header-sub">No. of Subjects</th>
                                                        <th scope="col" class="table-sm-header-sub">Fees</th>
                                                        <th scope="col" class="table-sm-header-sub">GST</th>
                                                        <th scope="col" class="table-sm-header-sub">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row" class="table-sm-first-col">Single Subjects</th>
                                                        <td class="table-sm-first-col">Rs 19067.79</td>
                                                        <td class="table-sm-first-col">Rs 3432.20</td>
                                                        <td class="table-sm-first-col">Rs 22500
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="table-sm-first-col">
                                                            Two Subjects
                                                        </th>
                                                        <td class="table-sm-first-col">Rs 38135.59</td>
                                                        <td class="table-sm-first-col">Rs 6864.40</td>
                                                        <td class="table-sm-first-col">Rs 45000</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
						
						 <div class="modal fade" id="exampleModalR" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelR" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title refund-title" id="exampleModalLabelR">Refund Policy</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <ul class="modal-body-list">
                                            <li>Fees will be refunded only within 7 days or 3 lectures (whichever is earlier)
                                                from the day of commencement.</li>
                                            <li>Post which, Students will not be entitled for any refund under any circumstances.</li>
                                            <li>Refund Policy:</li>
                                            <li>Refund Amount = 95% of Course Fees(Inclusive of Service Tax) - Course Material
                                                Cost(Incase dispatched).</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
						
			        <div class="modal fade" id="exampleModalT" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelT" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title terms-title" id="exampleModalLabelT">Terms & Condition</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                    <ul class="modal-body-list">
                                        <li>The students enrolling for the course must first ensure that they possess
                                            all the minimum requirements of PC, headphones and internet connection
                                            for successful conduction of Classes.
                                        </li>
                                        <li>If there occurs any technical snag/error from the student's end, he/she is
                                            unable to attend the lecture, in that case student can only view the
                                            recorded lecture.</li>
                                        <li>The student must opt for timing most suitable to them from the teacher time
                                            table because if they fails to attend the same, the session will still
                                            be conducted and any request for rescheduling will not be entertained.
                                        </li>
                                    </ul>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="modal fade" id="fee_structure_12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title fees-structure-title" id="exampleModalLabel">Fees Structure XI-XII</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h1 class="modal-body-header-sub">Fee Structure for Modules of Individual Subject (SM)* : -</h1>
                                            <div style="overflow-x:auto;overflow-y:auto">
                                                <table class="table table-sm fees-table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" class="table-sm-header" colspan="10">Module-wise Fees Structure</th>
                                                        </tr>
                                                        <tr>
                                                            <th scope="col" class="table-sm-header-sub">No.Of Modules</th>
                                                            <th scope="col" class="table-sm-header-sub">Fees</th>
                                                            <th scope="col" class="table-sm-header-sub">GST</th>
                                                            <th scope="col" class="table-sm-header-sub">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row" class="table-sm-first-col">One Module</th>
                                                            <td class="table-sm-first-col">Rs 9194.91</td>
                                                            <td class="table-sm-first-col">Rs 1655.08
                                                            </td>
                                                            <td class="table-sm-first-col">Rs 10850</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="table-sm-first-col">
                                                                Two Modules
                                                            </th>
                                                            <td class="table-sm-first-col">Rs 18389.83</td>
                                                            <td class="table-sm-first-col">Rs 3310.16
                                                            </td>
                                                            <td class="table-sm-first-col">Rs 21700</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="table-sm-first-col">Three Modules</th>
                                                            <td class="table-sm-first-col">Rs 27542.37</td>
                                                            <td class="table-sm-first-col">Rs 4957.62</td>
                                                            <td class="table-sm-first-col">Rs 32500</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="table-sm-first-col">Full Course for XI/XII</th>
                                                            <td class="table-sm-first-col">Rs 36737.28</td>
                                                            <td class="table-sm-first-col">Rs 6612.71</td>
                                                            <td class="table-sm-first-col">Rs 43350</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <h1 class="modal-body-header-second">Fee Structure Subject Wise : -</h1>
                                            <div style="overflow-x:auto;overflow-y:auto">
                                                <table class="table table-sm fees-table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" class="table-sm-header" colspan="10">Full Course - Fees Structure</th>
                                                        </tr>
                                                        <tr>
                                                            <th scope="col" class="table-sm-header-sub">No. of Subjects</th>
                                                            <th scope="col" class="table-sm-header-sub">Fees</th>
                                                            <th scope="col" class="table-sm-header-sub">GST</th>
                                                            <th scope="col" class="table-sm-header-sub">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row" class="table-sm-first-col">Single Subjects</th>
                                                            <td class="table-sm-first-col">Rs 36737.28</td>
                                                            <td class="table-sm-first-col">Rs 6612.71</td>
                                                            <td class="table-sm-first-col">Rs 43350
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="table-sm-first-col">
                                                                Two Subjects
                                                            </th>
                                                            <td class="table-sm-first-col">Rs 73474.57</td>
                                                            <td class="table-sm-first-col">Rs 13225.42
                                                            </td>
                                                            <td class="table-sm-first-col">Rs 86700
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="table-sm-first-col">
                                                                Combination Of Any Three Subjects
                                                            </th>
                                                            <td class="table-sm-first-col">Rs 110169.49</td>
                                                            <td class="table-sm-first-col">Rs 19830.50

                                                            </td>
                                                            <td class="table-sm-first-col">Rs 130000
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
