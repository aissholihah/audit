<form  method="POST" action="<?php echo base_url(). 'user/pengawasan/tes' ?>" >

                  <?php
                  var_dump($data_instansi);
                  echo $tanggal;
                  echo $id_pengawasan;
                  foreach($data_instansi as $dfn) :?>
                    <!-- <?php
                    foreach($id_pengawasan as $a) :?>
                    <input type="text" name="" value="<?php echo $a->id_pengawasan; ?>">
                <?php endforeach ?> -->
                <input type="hidden" name="id_unit" value="<?php echo $dfn->id_unit; ?>">
                <input type="hidden" name="id_grup_pengawas" value="<?php echo $dfn->id_grup_pengawas; ?>">
                 <input type="hidden" name="id_form" value="<?php echo $dfn->id_form; ?>">
                 <input type="hidden" name="tanggal_audit" value="<?php echo $tanggal; ?>">

                <!-- <input type="text" name="id_form" name="id_form" value="<?php echo $dfn->id_form; ?>"> -->
                    <!-- <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0 text-justify">
                        <label class="text-danger">Nama Instansi</label>
                        <input type="text" class="form-control form-control-user" id="" placeholder="Nama Instansi" name="nama_instansi" value="Universitas Sebelas Maret">
                      </div> -->
                      <div class="col-sm-6 text-justify">
                        <label class="text-danger">Unit Instansi</label>
                        <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="<?php echo $dfn->nama_unit; ?>" value="<?php echo $dfn->id_unit; ?>" >
                      </div>
                    </div>
                    <div class="form-group text-justify">
                      <label class="text-danger">Alamat</label>
                      <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Alamat"  value="<?php echo $dfn->alamat; ?>">
                    </div>

                    <div class="form-group row text-justify">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <label class="text-danger">Tanggal Pengawasan</label>
                        <input type="text" class="form-control form-control-user"
                        id="exampleInputPassword" placeholder="Tanggal" value="<?php echo $tanggal ?>">
                      </div>
                      <div class="col-sm-6">
                        <label class="text-danger">Tim Pengawas</label>
                        <input type="text" class="form-control form-control-user"
                        id="exampleRepeatPassword" placeholder="Grup Pengawas"value="<?php echo $dfn->nama_grup; ?>">
                      </div>
                    </div>
                    <div class="form-group row text-justify">
                      
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <label class="text-danger">Penanggung Jawab Unit Kearsipan</label>
                        <input type="text" class="form-control form-control-user"
                        id="exampleInputPassword" name="nama_pj_unit" placeholder="Penanggung Jawab Unit Kearsipan">
                      </div>
                      <div class="col-sm-6">
                        <label class="text-danger">Jabatan Penanggung Jawab Unit Kearsipan</label>
                        <input type="text" class="form-control form-control-user" name="jabatan_pj_unit" 
                        id="exampleRepeatPassword" placeholder="Jabatan Penanggung Jawab Unit Kearsipan">
                      </div>
                    </div>

                  </div>                              
                <?php endforeach ?>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
              
          </form>