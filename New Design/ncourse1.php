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
                        
             if($i == 1 || $i == 5)
				 {
			?>			
             <div class="blockWrapperBodySecondary">
               <?php } ?>
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
                        style="float: right; margin-right:10px;"><input type="checkbox" name='pm<?php echo $r1[2]; ?>' id='pm<?php echo $r1[2]; ?>' onclick="phy_course('<?php echo $r1[2]; ?>');"></span>
                        </div>
				</div>
			<?php if($i == 4 || $i == 8)
				 {
			?>			
             </div>
               <?php } ?> 	
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
    </div>
</div>