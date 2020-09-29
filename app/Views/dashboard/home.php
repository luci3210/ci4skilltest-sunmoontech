

<div class="container">
<div class="row">
<div class="col-md-12">

<?php if (isset($validation)): ?><br><br><br>
<div class="alert alert-danger" role='alert'>
<small> <?= $validation->listErrors() ?> </small>
</div>
<?php endif; ?>

<h4>Add Song</h4>
<form class="form-signin" action="/dashboard/add" method="post">
<?= csrf_field() ?>
<div class="row">
<div class="col">

	<div class="form-group">
    <input type="text" class="form-control" name="title" value="<?= set_value('title'); ?>" placeholder="Enter Title">
  </div>

</div>

<div class="col">
	<div class="form-group">
    <input type="text" class="form-control" name="artist" value="<?= set_value('atist'); ?>" placeholder="Enter Artist">
  </div>
</div>
</div>


 <div class="row">
    <div class="col">
     <div class="form-group">
      <textarea class="form-control" rows="3" name="lyrics" value="<?= set_value('lyrics'); ?>" placeholder="Enter Lyrics"></textarea>
    </div>
  </div>
  </div>

<div class="row">
	<div class="col">
		<button type="submit" class="btn btn-primary">Save</button>		
	</div>
</div>
</form>






<hr>

    <h4>Song List</h4>

    <table class="table table-bordered" id="users-list">
       <thead>
          <tr>
             <th>Title</th>
             <th>Artist</th>
             <th>Lyrics</th>
             <th>Action</th>
          </tr>
       </thead>
       <tbody>
          <?php if($songlist): ?>
          <?php foreach($songlist as $list): ?>
          <tr>
             <td><?php echo $list['title']; ?></td>
             <td><?php echo $list['artist']; ?></td>
             <td><?php echo $list['lyrics']; ?></td>
             <td class="d-flex justify-content-center">
             	<div class="btn-group" role="group" aria-label="Basic example">
             	<a class="btn btn-primary btn-sm" href="/dashboard/edit/<?php echo $list['id']; ?>" role="button">Edit</a>
             	<a class="btn btn-danger btn-sm" href="/dashboard/delete/<?php echo $list['id']; ?>" role="button">Delete</a>
             </div>
             </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>

    </div>
    </div>
    </div>