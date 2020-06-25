<div class="container">
<div class="row">
<div class="col-md-12 p-5">
<h3 class='mb-4'>Department List</h3>
<table id="studentId" class="table table-striped table-sm table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">NO</th>
      <th class="th-sm">Department Id</th>
	  <th class="th-sm">Department</th>
	  <th class="th-sm">Edit</th>
	  <th class="th-sm">Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php
	$i=0;
	foreach ($depAllData as $sdata){
		
		$i++;
	?>
    <tr>
      <th class="th-sm"><?= $i ?></th>
	  <th class="th-sm"><?= $sdata->dep_id ?></th>
	  <th class="th-sm"><?= $sdata->dep_name ?></th>
	  <th class="th-sm"><a href="<?=base_url()?>department/DepartmentDetails/<?=$sdata->dep_id?>" ><i class="fas fa-edit"></i></a></th>
	  <th class="th-sm"><a href="<?=base_url()?>student/DeleteStudentById/<?=$sdata->dep_id ?>" ><i class="fas fa-trash-alt"></i></a></th>
    </tr>
   <?php } ?>
  </tbody>
</table>

</div>
</div>
</div> 