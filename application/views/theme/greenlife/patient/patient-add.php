<div class="col-sm-2">&nbsp;</div>
<div class="col-sm-10 container-main">


    


 



  <div class="container">

    <form class="well form-horizontal" action="http://localhost/greenlife/index.php/patient/save_changes/0" method="POST"  id="contact_form" enctype="multipart/form-data">
<fieldset>





<!-- Form Name -->
<legend>New Patient</legend>



<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Patient ID</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="patient_id" placeholder="First Name" class="form-control"  type="text" value="<?php
  echo uniqid();
  ?>" readonly>

      <input type="hidden" value="">
    </div>
  </div>
</div>





<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Full Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="person_name" placeholder="First Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->





<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="person_email" placeholder="E-Mail Address" class="form-control"  type="text">
    </div>
  </div>
</div>

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
  <input name="person_phone" placeholder="+088017.." class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="area" placeholder="Mohamodpur etc" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- radio checks -->
 <div class="form-group">
                        <label class="col-md-4 control-label">Gender</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="person_gender" value="Male" /> Male
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="person_gender" value="Female" /> Female
                                </label>
                            </div>
                        </div>
                    </div>






<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">NID</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-paperclip"></i></span>
  <input name="person_NID" placeholder="NID" class="form-control" type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Date Of Birth</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon" ><i class="glyphicon fa fa-table"></i></span>
  <input name="person_date_of_birth" id="datepicker" placeholder="Date Of Birth" class="form-control" type="text">
    </div>
  </div>
</div>



<!-- Text area -->
  
<div class="form-group">
  <label class="col-md-4 control-label">Problems</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
          <textarea class="form-control" name="person_problems" placeholder="Problems"></textarea>
  </div>
  </div>
</div>



<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Register <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->








  </div><!-- end of col-sm-10 -->  