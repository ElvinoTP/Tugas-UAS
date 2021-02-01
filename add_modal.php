<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">npm:</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar(8)" class="form-control" name="npm" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">nama:</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar(100)" class="form-control" name="nama" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">tempat_lahir:</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar(50)" class="form-control" name="tempat_lahir" required>
						</div>
				</div>
						<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">tanggal_lahir:</label>
					</div>
					<div class="col-sm-10">
						<input type="date" class="form-control" name="tanggal_lahir" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">jenis_kelamin:</label>
					</div>
					<div class="col-sm-10">
						<input type="Enum['L','P']" class="form-control" name="jenis_kelamin" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">alamat:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="alamat" required>
						</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">kode_pos:</label>
					</div>
					<div class="col-sm-10">
						<input type="varchar(5)" class="form-control" name="kode_pos" required>
					</div>
					</div>
				</div>
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>