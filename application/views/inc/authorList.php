<div class="container">
<div class="row">
<div class="col-md-12 p-5">
<h3 class='mb-4'>Author List</h3>
<table id="studentId" class="table table-striped table-sm table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">NO</th>
      <th class="th-sm">Author Id</th>
	  <th class="th-sm">Name</th>
	  <th class="th-sm">Edit</th>
	  <th class="th-sm">Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php
	$i=0;
	foreach ($authorAllData as $adata){
		
		$i++;
	?>
    <tr>
      <th class="th-sm"><?= $i ?></th>
	  <th class="th-sm"><?= $adata->id ?></th>
	  <th class="th-sm"><?= $adata->author_name ?></th>
	  <th class="th-sm"><a href="<?=base_url()?>author/AuthorDetails/<?=$adata->id?>" ><i class="fas fa-edit"></i></a></th>
	  <th class="th-sm"><a href="<?=base_url()?>author/DeleteAuthorById/<?=$adata->id ?>" ><i class="fas fa-trash-alt"></i></a></th>
    </tr>
   <?php } ?>
  </tbody>
</table>

</div>
</div>
</div> 