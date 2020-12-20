<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Anda Yakin Ingin Menghapus Data?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Data yang dihapus akan hilang</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
      </div>
    </div>
  </div>
</div>

<form action="<?php echo site_url('admin/santri/kelas') ?>" method="post" enctype="multipart/form-data" >
  <div class="modal fade" id="tkelas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel">Add Class</h4>
    </div>
    <div class="modal-body">
       <div class="input-group">
                        <label class="form-label"><b>Nama Kelas</b></label> 
                        <div class="form-line">
                            <input type="text" class="form-control" name="nkelas" id="nkelas" placeholder="Kelas" required autofocus>
                        </div>
                    </div>
                </div>
   <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
      <button type="submit" class="btn btn-primary" >Simpan</button>
    </div>
  </div>
</div>
</div>
</form>

<div class="modal fade" id="deleteModalk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin menghapus data?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Data yang dihapus akan hilang</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a id="btn-deletek" class="btn btn-danger" href="#">Delete</a>
      </div>
    </div>
  </div>
</div>

<form action="<?php echo site_url('admin/santri/users') ?>" method="post" enctype="multipart/form-data" >
  <div class="modal fade" id="aduser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel">Add User</h4>
    </div>
    <div class="modal-body">
        <div class="input-group">
            <span class="input-group-addon">Nama</span>
            <div class="form-line">
              <input type="text" class="form-control" name="nama"  placeholder="Nama" required autofocus>
            </div>
        </div>

        <div class="form-group form-float">
          <label class="form-label"><b>Level</b></label>  
            <div class="form-line">
              <select class="form-control show-tick" name="level">
                <option value="">-- Please select --</option>
                <option value="1">1</option>
                <option value="2">2</option>
              </select>
            </div>
        </div>

        <div class="form-group form-float">
          <label class="form-label"><b>Kelas</b></label>  
            <div class="form-line">
              <select class="form-control show-tick" name="idkelas">
                <option value="">-- Please select --</option>
                <?php foreach($las as $k) : ?>
                <option value="<?php echo $k->idk ?>"><?php echo $k->nkelas ?></option>
                <?php endforeach; ?>
              </select>
            </div>
        </div>

        <div class="input-group">
            <span class="input-group-addon">Foto</span>
            <div class="form-line">
              <input type="file" class="form-control" name="foto" placeholder="Foto" accept="image/*">
            </div>
        </div>
    
    <div class="input-group">
            <span class="input-group-addon">Password</span>
            <div class="form-line">
              <input type="password" class="form-control" name="pass"  placeholder="Password" required>
            </div>
        </div>
        <div class="input-group">
            <span class="input-group-addon">Konfirmasi Password</span>
            <div class="form-line">
              <input type="password" class="form-control" name="passs"  placeholder="Password" required>
            </div>
        </div>
        </div>

   <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
      <button type="submit" class="btn btn-primary" >Simpan</button>
    </div>
  </div>
</div>
</div>
</form>

<div class="modal fade" id="deleteModalu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Anda Yakin Ingin Menghapus Data??</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Data yang dihapus akan hilang secara permanen</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a id="btn-deleteu" class="btn btn-danger" href="#">Delete</a>
      </div>
    </div>
  </div>
</div>