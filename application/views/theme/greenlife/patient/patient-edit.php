<div class="col-sm-2">&nbsp;</div>
<div class="col-sm-10 container-main">


    


 



  <div class="container">

    <form class="well form-horizontal" action="/greenlife/index.php/patient/save_changes/1" method="post"  id="contact_form" enctype="multipart/form-data">
<fieldset>





<!-- Form Name -->
<legend>New Patient</legend>

<!-- Text input-->
<?php foreach($patient_data as $patient) {  ?>


<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Patient ID</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-id-badge"></i></span>
  <input type="text" name="patient_id" placeholder="First Name" class="form-control" value="<?php echo $patient->patient_id;  ?>" disabled>
  <input type="hidden" name="patient_id" value="<?php echo $patient->patient_id;  ?>">
    </div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">Full Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input type="text" name="person_name" placeholder="First Name" class="form-control" value="<?php echo $patient->full_name; ?>" >
    </div>
  </div>
</div>


<!-- radio checks -->
 <div class="form-group">
                        <label class="col-md-4 control-label">Gender</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="person_gender" <?php
                                    if(isset($patient->gender) && $patient->gender=="Male")
                                     echo "checked";?> value="Male"/>
                                   Male
                                        
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                <input type="radio" name="person_gender" <?php 
                                    if(isset($patient->gender) && $patient->gender=="Female")
                                     echo "checked";?> value="Female"/>
                                   Female

                                </label>
                            </div>
                        </div>
                    </div>







<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="person_email" placeholder="E-Mail Address" class="form-control"  type="text" value="<?php echo $patient->email ?>">
    </div>
  </div>
</div>
<!-- image -->
    <div id="patientImage"  class="col-md-12" align="center">
        <div class="container_image" style="margin-bottom: 20px;">
            <img  src="http://localhost/greenlife/uploads/<?php echo $patient->image;?>.jpg" style ="hieght:70; width:70px;"/><!-- end of image -->
        </div>	<!-- end of container_image -->
    </div><!-- end of  patientImage -->


    <div class="form-group">
        <label class="col-md-4 control-label">Image</label>
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">


                <span class="input-group-addon">
        <input type="file" name="person_image" style="padding: 0px;"><span class="fa fa-folder-open"></span> </span></input>
                </span>
            </div>
        </div>
    </div>

<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Phone #</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="person_phone" placeholder="Enter 11 digit Number" class="form-control" type="text" value="<?php echo $patient->phone ?>">
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
        <?php $json= json_decode( $patient->address);
            foreach($json as $key=>$value){
              if($key=="area")
              { ?>
  <input name="<?php echo $key; ?>" placeholder="Mohamodpur etc" class="form-control" type="text" value="<?php echo $value; ?>" />
  <input type="hidden" name="person_address[]" value="<?php echo $key;?>" /> 
  <?php } } ?>
    </div>
  </div>
</div>





<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">NID</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-address-card-o"></i></span>
  <input name="person_NID" placeholder="Enter Valid National Id Card #" class="form-control" type="text" value="<?php echo $patient->NID ?>">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Date Of Birth</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon" ><i class="fa fa-calendar"></i></span>
  <input name="person_date_of_birth" id="datepicker" placeholder="Date of Birth" class="form-control" type="text"
  value="<?php echo $patient->date_of_birth ?>">
    </div>
  </div>
</div>



<!-- Text area -->
  
<div class="form-group">
  <label class="col-md-4 control-label">Problems</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-heartbeat" style="font-size:30px;color:#ff1315"></i></span>
          <textarea class="form-control" name="person_problems" placeholder="Patient Problems" ><?php echo$patient->problems?></textarea>
  </div>
  </div>
</div>



<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-primary" >Update<span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>


<?php } ?>
</fieldset>
</form>
</div>
    </div><!-- /.container -->








  </div><!-- end of col-sm-10 -->  