<div class="container">
<div class="row">
<div class="col-md-12 p-5">
<h3 class='mb-4'>Student List</h3>
<table id="studentId" class="table table-striped table-sm table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">NO</th>
	  <th class="th-sm">Name</th>
	  <th class="th-sm">roll</th>
	  <th class="th-sm">registration</th>
	  <th class="th-sm">email</th>
	  <th class="th-sm">department</th>
	  <th class="th-sm">Edit</th>
	  <th class="th-sm">Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php
	$i=0;
	foreach ($studentdata as $sdata){
		
		$i++;
	?>
    <tr>
      <th class="th-sm"><?= $i ?></th>
	  <th class="th-sm"><?= $sdata->student_name ?></th>
	  <th class="th-sm"><?= $sdata->student_roll ?></th>
	  <th class="th-sm"><?= $sdata->student_reg ?></th>
	  <th class="th-sm"><?= $sdata->student_email ?></th>
	  <th class="th-sm"><?= $sdata->student_dep ?></th>
	  <th class="th-sm"><a href="<?=base_url()?>student/studentDetails/<?=$sdata->sid ?>" ><i class="fas fa-edit"></i></a></th>
	  <th class="th-sm"><a onclick="return confirm('Are you sure you want to delete this item')" href="<?=base_url()?>student/DeleteStudentById/<?=$sdata->sid ?>" ><i class="fas fa-trash-alt"></i></a></th>
    </tr>
   <?php } ?>
  </tbody>
</table>

</div>
</div>
</div> 