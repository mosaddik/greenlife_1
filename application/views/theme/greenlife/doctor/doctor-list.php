<!-- content main -->
<div class="col-sm-2">&nbsp;</div>
<div class="col-sm-10 container-main">

    <div class="container-header">
        <div class="container-title pull-left">Doctors</div>
        <div class="container-title pull-right">
            <a  class="btn btn-success" title="Add new patient" href="/greenlife/index.php/doctor_controller/register"><span class="fa fa-plus-square"></span> Add new</a>
        </div>
    </div>



    <div class="patient-list-table">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>Picture</th>
                <th>Doctor ID</th>
                <th>Name</th>
                <th>qualification</th>
                <th>specialization</th>
                <th>Action</th>
            </tr>
            </thead>

            <?php foreach($doctor as $doc){?>
                <tbody>
                <tr>
                    <td><img src="http://localhost/greenlife/uploads/<?php echo $doc->image;?>.jpg" width="40px"></td>
                    <td><?php echo $doc->doctor_id; ?></td>
                    <td><?php echo $doc->name; ?></td>
                    <td><?php
                          foreach ($doctor_meta as  $meta){

                              if($meta->doctor_id == $doc->doctor_id)
                                    echo $meta->value;
                                }

                        ?></td>
                    <td><?php


                        $json= json_decode( $doc->specialization);
                        $str2='';
                        foreach ($config as $config)
                        {


                            foreach ($json as $key => $value) {

                                if ($value == $config->id) {
                                    $str2 = $str2 . $config->specialization.',';
                                }
                            }
                        }

                        for ($i = 0; $i < strlen($str2) - 1; $i++)
                        {
                            echo $str2[$i];
                        }


                        ?>


                        </td>
                    <td>
                        <a class="btn btn-info btn-sm" title="Show" href="/greenlife/index.php/doctor_controller/details/<?php echo $doc->doctor_id; ?>">   <span class="fa fa-vcard"></span></a>
                        <a class="btn btn-warning btn-sm" href="/greenlife/index.php/doctor_controller/update/<?php echo $doc->doctor_id; ?>" title="Edit"><span class="fa fa-pencil"></span></a>
                    </td>
                </tr>
                <?php ?>


                </tbody>
            <?php }; ?>
        </table>

    </div>
</div>