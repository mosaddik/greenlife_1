<div class="col-sm-2">&nbsp;</div>
<div class="col-sm-10 container-main">

    <div class="container">

        <form class="well form-horizontal" action="http://localhost/greenlife/index.php/doctor_controller/save_changes/1" method="POST"  id="contact_form" enctype="multipart/form-data">
            <fieldset>




            <?php foreach ($doctor as $doc) {

                ?>
                <!-- Form Name -->
                <legend>New Doctor</legend>


                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Doctor ID</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="doctor_id" placeholder="First Name" class="form-control" type="text"
                                   value="<?php
                                   echo $doc->doctor_id;
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
                            <input name="doctor_name" placeholder="First Name" class="form-control" type="text"value="<?php
                            echo $doc->name;
                            ?>" >
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
                            <input name="doctor_email" placeholder="E-Mail Address" class="form-control" type="text" value="<?php
                            echo $doc->email;
                            ?>">
                        </div>
                    </div>
                </div>

                <div id="patientImage"  class="col-md-12" align="center">
                    <div class="container_image" style="margin-bottom: 20px;">
                        <img  src="http://localhost/greenlife/uploads/<?php echo $doc->image;?>.jpg" style ="hieght:70; width:70px;"/><!-- end of image -->
                    </div>	<!-- end of container_image -->
                </div><!-- end of  patientImage -->

                <div class="form-group">
                    <label class="col-md-4 control-label">Image</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">


  <span class="input-group-addon">
        <input type="file" name="person_image" value="NULL" style="padding: 0px;"><span
          class="fa fa-folder-open" value="<?php
      echo $doc->image;
      ?>"></span> </span></input>
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
                            <input name="doctor_phone" placeholder="+088017.." class="form-control" type="text" value="<?php
                            echo $doc->phone;
                            ?>">
                        </div>
                    </div>
                </div>


                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Specialization </label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <?php
                            foreach ($config as $data) {

                                ?>


                                <div class="checkbox">
                                    <label><input type="checkbox" name="specialization[]"
                                                  <?php
                                                  foreach (json_decode($doc->specialization) as $spec ){
                                                     if($spec == $data->id){
                                                         echo "checked";
                                                     }

                                                    }
                                                    ?>

                                                  value="<?php echo $data->id; ?>"><?php echo $data->specialization; ?>
                                    </label>
                                </div>

                            <?php }

                            ?>

                        </div>
                    </div>
                </div>

                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Address</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input name="area" placeholder="Mohamodpur etc" class="form-control" type="text" value="<?php
                            echo $doc->address;
                            ?>">
                        </div>
                    </div>
                </div>

                <!-- radio checks -->
                <div class="form-group">
                    <label class="col-md-4 control-label">Gender</label>
                    <div class="col-md-4">
                        <div class="radio">
                            <label>
                                <input type="radio" name="doctor_gender" <?php
                                if(isset($doc->gender) && $doc->gender=="Male")
                                    echo "checked";?> value="Male"/>
                                Male

                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="doctor_gender" <?php
                                if(isset($doc->gender) && $doc->gender=="Female")
                                    echo "checked";?> value="Female"/>
                                Female

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
                            <input name="person_NID" placeholder="NID" class="form-control" type="text" value="<?php
                            echo $doc->NID;
                            ?>">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Date Of Birth</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon fa fa-table"></i></span>
                            <input name="doctor_date_of_birth" id="datepicker" placeholder="Date Of Birth"
                                   class="form-control" type="text" value="<?php
                            echo $doc->date_of_birth;
                            ?>">
                        </div>
                    </div>
                </div>


                <!-- Text area -->
                <?php foreach ($meta as $doctor_meta){
                    ?>


                <div class="form-group">
                    <label class="col-md-4 control-label">Qualification</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                            <textarea class="form-control" name="doctor_qualification"
                                      placeholder="Qualification"><?php echo $doctor_meta->value ;?></textarea>
                        </div>
                    </div>
                </div>
                    <?php }
                    ?>

                <?php


            }

            ?>
                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-warning" >Save Changes <span class="glyphicon glyphicon-send"></span></button>
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
</div><!-- /.container -->








</div><!-- end of col-sm-10 -->