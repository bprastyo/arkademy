
<br>
<div class="container-fluid col-8">
	<div class="row">
		<h1 class="mx-auto">Aplikasi Website Sederhana</h1>
		<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#formAdd">Add</button>
  	</div>
  	<div id="all">
  	<div class="row">
		<table class="table table-hover">
		  <thead>
		    <tr>
		      <th scope="col">Name</th>
		      <th scope="col">Work</th>
		      <th scope="col">Salary</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php
		  		$queryambil=mysqli_query($connect,"SELECT name.id,name.name, work.name, salary.salary FROM name INNER JOIN (salary INNER JOIN work ON work.id_salary =salary.id) ON work.id=name.id_work") or die($connect);
				while($value=mysqli_fetch_array($queryambil)){
		  	?>

		    <tr>
		      <td><?=$value[1];?></td>
		      <td><?=$value[2];?></td>
		      <td>Rp. <?=number_format($value[3]);?></td>
		      <td>
		      	<a href="hapus.php?id=<?=$value[0];?>" onClick="return confirm('<?php echo "Anda yakin akan menghapus ".$value['1']."?";?>')" class="btn-xs btn-danger">Hapus</a> |
		      	<button type="button" class="btn-xs btn-warning" data-toggle="modal" data-target="#formEdit">Edit</button>
		      </td>
		    </tr>
		<?php } ?>
		  </tbody>
		</table>


	</div>
</div>
</div>



<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="formAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      	<form method="post" action="add.php">
		  <div class="form-group">
		    <input type="text" class="form-control" name="name" placeholder="Nama" required="">
		  </div>
		  <div class="form-group">
			  <select class="form-control" name="work">
			  	<?php 
			  		$query=mysqli_query($connect,"SELECT * FROM `work`") or die($connect);
					while($work=mysqli_fetch_array($query)){
			  	?>
			  <option value="<?=$work[2];?>"><?=$work[1];?></option>
				<?php }?>
			  </select>
		  </div>
		  <div class="form-group">
			  <select class="form-control" name="salary">
			  	<?php 
			  		$query=mysqli_query($connect,"SELECT * FROM `salary`") or die($connect);
					while($salary=mysqli_fetch_array($query)){
			  	?>
			  <option value="<?=$salary[0];?>">Rp. <?=number_format($salary[1]);?></option>
				<?php }?>
			  </select>
		  </div>
	

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Add Data</button>
      </div>

    </form>	  
    </div>
  </div>
</div>