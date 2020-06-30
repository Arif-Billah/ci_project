<div class="container">
<div class="row">
<div class="col-md-12 p-5">
<h3 class='mb-4'>Book Details</h3>
<table id="studentId" class="table table-striped table-sm table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">Book Name</th>
	  <th class="th-sm">Athor Name</th>
	  <th class="th-sm">Department</th>
	  <th class="th-sm">stock</th>
	  <!--<th class="th-sm">Edit</th>
	  <th class="th-sm">Delete</th>-->
    </tr>
  </thead>
  <tbody>
    <tr>
	  <th class="th-sm"><?= $bookDataById->book_name ?></th>
	  <th class="th-sm">
			  <?php
				 $id=$bookDataById->author;
				 $adata=$this->Author_model->AuthorById($id);
				echo $adata->author_name;
			  ?>
	  </th>
	  <th class="th-sm">
			  <?php
				 $id=$bookDataById->department;
				 $ddata=$this->Department_model->DepartmentById($id);
				echo $ddata->dep_name;
			  ?>
	  </th>
	  <th class="th-sm"><?= $bookDataById->stock ?></th>
	  <!--<th class="th-sm"><a href="<?//=base_url()?>author/AuthorDetails/<?//=$bookDataById->book_id?>" ><i class="fas fa-edit"></i></a></th>
	  <th class="th-sm"><a href="<?//=base_url()?>author/DeleteAuthorById/<?//=$bookDataById->book_id ?>" ><i class="fas fa-trash-alt"></i></a></th>-->
    </tr>

  </tbody>
</table>

</div>
</div>
</div> 