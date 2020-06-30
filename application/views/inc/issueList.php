<div class="container">
<div class="row">
<div class="col-md-12 p-5">
<h3 class='mb-4'>Issue List</h3>
<table id="issuetblId" class="table table-striped table-sm table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
   
	  <th class="th-sm">Student Name</th>
	  <!--<th class="th-sm">Reg</th>-->
	  <th class="th-sm">Department</th>
	  <th class="th-sm">Book Name</th>
	  <th class="th-sm">Issue date</th>
	  <th class="th-sm">Return date</th>
	  <th class="th-sm">Actual Return date</th>
	  <th class="th-sm">View</th>
	  <th class="th-sm">Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php
	$i=0;
	foreach ($AllIssueData as $AllIssueData){
		
		$i++;
	?>
    <tr>
    
	  <th class="th-sm"><?= $AllIssueData->name ?></th>
	  <!--<th class="th-sm"><?//= $AllIssueData->reg ?></th>-->
	  <th class="th-sm"><?php 
		$id=$AllIssueData->dep ;
		$ddata=$this->Department_model->DepartmentById($id);
		print_r($ddata->dep_name); 
	  
	  ?>
	  </th>
	  <th class="th-sm"><?Php 
		$id=$AllIssueData->book;
		$bdata=$this->Book_model->BookNameById($id);
		?>
		<a href="<?=base_url()?>issue/ViewBook/<?=$id?>"><?=($bdata->book_name)?></a>
	 
	  </th>
	  <th class="th-sm"><?= date("d/m/y h:ia",strtotime($AllIssueData->date))?></th>
	  <th class="th-sm"><?= $AllIssueData->return_date ?></th>
	  
	  <th class="th-sm"><a href="<?=base_url()?>ReturnConfirm/AddConfirm"><?= $AllIssueData->return_date ?></a></th>
	  
	  <th class="th-sm"><a href="<?=base_url()?>issue/IssueDetails/<?=$AllIssueData->reg ?>" ><i class="fas fa-edit"></i></a></th>
	  <th class="th-sm"><a onclick="return confirm('Are you sure you want to delete this item')" href="<?=base_url()?>issue/DeleteIssueById/<?=$AllIssueData->issue_id ?>" ><i class="fas fa-trash-alt"></i></a></th>
    </tr>
   <?php } ?>
  </tbody>
</table>

</div>
</div>

</div> 
<script type="text/javascript">
	$(document).ready(function(){
		//$('#issuetblId').DataTable();
		//$('#issuetblId').DataTable().destroy();
		$('#issuetblId').DataTable({"order":false});
		 $('.dataTables_length').addClass('bs-select');
	});

</script>