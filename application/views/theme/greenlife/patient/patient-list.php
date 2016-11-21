<!-- content main -->
<div class="col-sm-2">&nbsp;</div>
<div class="col-sm-10 container-main">

	<div class="container-header">
		<div class="container-title pull-left">Patient</div>
        <div class="container-title pull-right">
        	<a  class="btn btn-success" title="Add new patient" href="/greenlife/index.php/patient/register"><span class="fa fa-plus-square"></span> Add new</a>
        </div>
	</div>
    
			
		
    <div class="patien-list-table">
    	<table class="table table-striped table-hover">
        	<thead>
                <tr>
                	<th>Picture</th>
                    <th>Patient ID</th>
                    <th>Name</th>
                    <th>Problem</th>
                    <th>Area</th>
                    <th>Action</th>
                </tr>
            </thead>
            
			<?php foreach($patient_data as $patient){?>
            <tbody>
                <tr>
                	<td><img src="http://localhost/greenlife/uploads/<?php echo $patient->image;?>.jpg" width="40px"></td>
                    <td><?php echo $patient->patient_id; ?></td>
                    <td><?php echo $patient->full_name; ?></td>
                    <td><?php echo $patient->problems; ?></td>
                    <td><?php $json= json_decode( $patient->address);
						foreach($json as $key=>$value){
							if($key=="area")
							{
								echo $value;
							}
						}

					?></td>
                    <td>
                    	<a class="btn btn-info btn-sm" title="Show" href="/greenlife/index.php/patient/view/<?php echo $patient->patient_id; ?>">   <span class="fa fa-vcard"></span></a>
                        <a class="btn btn-warning btn-sm" href="/greenlife/index.php/patient/edit/<?php echo $patient->patient_id; ?>" title="Edit"><span class="fa fa-pencil"></span></a>
                    </td>
                </tr>
              <?php ?>
                
             
            </tbody>
			<?php }; ?>	
        </table>
    
    </div>
</div>