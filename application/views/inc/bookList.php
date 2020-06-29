<div class="container">
<div class="row">
<div class="col-md-12 p-5">
<h3 class='mb-4'>Book List</h3>
<table id="studentId" class="table table-striped table-sm table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">NO</th>
      <th class="th-sm">Name</th>
	  <th class="th-sm">Department</th>
	  <th class="th-sm">Author</th>
	  <th class="th-sm">Edit</th>
	  <th class="th-sm">Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php
	$i=0;
	foreach ($bookAllData as $bdata){
		
		$i++;
	?>
    <tr>
      <th class="th-sm"><?= $i ?></th>
	  <th class="th-sm"><?= $bdata->book_name ?></th>
	  <th class="th-sm"><?= $bdata->department ?></th>
	  <th class="th-sm"><?= $bdata->author ?></th>
	  <th class="th-sm"><a href="<?=base_url()?>book/BookDetails/<?=$bdata->book_id?>" ><i class="fas fa-edit"></i></a></th>
	  <th class="th-sm"><a href="<?=base_url()?>book/DeleteBookById/<?=$bdata->book_id ?>" ><i class="fas fa-trash-alt"></i></a></th>
    </tr>
   <?php } ?>
  </tbody>
</table>

</div>
</div>
</div> 