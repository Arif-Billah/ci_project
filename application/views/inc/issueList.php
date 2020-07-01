<div class="container">
<div class="row">
<div class="col-md-12 p-5">
<h3 class='mb-4'>Issue List</h3>
<table id="issuetblId" class="table table-striped table-sm table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
   
	  <th class="th-sm">Student Name</th>
	  <th class="th-sm">Reg</th>
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
	  <th class="th-sm"><?= $AllIssueData->reg ?></th>
	  <th class="th-sm"><?php 
		$id=$AllIssueData->dep ;
		$ddata=$this->Department_model->DepartmentById($id);
		if(isset($ddata)){
			
			print_r($ddata->dep_name);
		}
		 
	  
	  ?>
	  </th>
	  <th class="th-sm"><?Php 
		$id=$AllIssueData->book;
		$bdata=$this->Book_model->BookNameById($id);
		?>
		<a href="<?=base_url()?>issue/ViewBook/<?=$id?>"><?php if(isset($bdata)){echo($bdata->book_name);}?></a>
	 
	  </th>
	  <th class="th-sm">
		<?php
		$dreg=$AllIssueData->reg;
		if($dreg>0){
			echo(date("d/m/y h:ia",strtotime($AllIssueData->date)));
		}

		?>
		
		</th>
	  <th class="th-sm"><?= (date("d/m/y",strtotime($AllIssueData->return_date))); ?></th>
	   <th class="th-sm">
		   <!--<a "data-toggle='modal' data-target='#centrModalSm'">
				<i class="fas fa-trash-alt"></i>
		   </a>-->
		   <?php // $AllIssueData->return_date ?>
		  <a href="<?=base_url()?>ReturnConfirm/AddConfirm/<?=$AllIssueData->issue_id ?>">
		  
		  <?php
		  $rdate=$AllIssueData->return_back;
		      //$ndate=date("y/m/d",strtotime($rdate));
			   //$var === '0000-00-00 00:00:00';
			
			if($rdate === '0000-00-00'){
				echo ($AllIssueData->status);
				//$AllIssueData->status;
			}else{ //echo ($AllIssueData->return_back);
			
			echo(date("d/m/y",strtotime($AllIssueData->return_back)));
			}
			
			
		  ?>
		  
		  </a>
	   </th>
	   
	  <th class="th-sm">
		<a href="<?=base_url()?>issue/IssueDetails/<?=$AllIssueData->reg ?>" ><i class="fas fa-edit"></i></a>
		
		</th>
	  <th class="th-sm"><a onclick="return confirm('Are you sure you want to delete this item')" href="<?=base_url()?>issue/DeleteIssueById/<?=$AllIssueData->issue_id ?>" ><i class="fas fa-trash-alt"></i></a></th>
    </tr>
   <?php } ?>
  </tbody>
</table>

</div>
</div>

</div>
 <button id='hello'>click</button>
<!-- Button trigger modal -->
<!-- Button to Open the Modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Open modal
</button>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<script type="text/javascript">
 
/* 
	$(document).ready({
		demoTest()
		function demoTest(){
			$('#hello').click(function(){
			alert('hello');
			}
		)}
		
	
	});
	 */
 
	
	
	//$('#hello').click(function(){
			 //alert('hello');
			 //$('#centralModalS').modal('show');
		 //});
		
		//$('#issuetblId').DataTable();
		//$('#issuetblId').DataTable().destroy();
		
		 	
		

</script>