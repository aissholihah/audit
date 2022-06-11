<h1>BANK SOAL</h1>

<div class="card o-hidden border-0 shadow-lg my-5"> <!-- biar bagus kek kotak tabel -->
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">

        <div class="col-lg">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">FORM PENGAWASAN</h1>
            </div>

            <form class="user" method="POST" action="<?php echo base_url(). 'masuk/cek' ?>">  
              <div class="row">
               <div class="col-lg-6">           
                <div class="form-group">
                  <label for="formGroupExampleInput">Nama Instansi</label>
                  <input type="text" class="form-control" id="namains" placeholder="nama instansi">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Unit Kearsipan</label>
                  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="unit kearsipan">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Alamat</label>
                  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="alamat">
                </div>
              </div> <!-- end col-lg 6 -->

              <div class="col-lg-6">           
                <div class="form-group">
                  <label for="formGroupExampleInput">Pengawas</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="pengawas">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Tanggal Audit</label>
                  <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="tanggal audit">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="formGroupExampleInput2">Penanggung Jawab</label>
                    <input type="text" class="form-control" id="exampleFirstName"
                    placeholder="Penanggung Jawab">
                  </div>
                  <div class="col-sm-6">
                    <label for="formGroupExampleInput2">Jabatan</label>
                    <input type="text" class="form-control" id="exampleLastName"
                    placeholder="jabatan">
                  </div>
                </div>
              </div> <!-- end col-lg-6 -->
            </div> <!-- end row -->
            
            <button type="submit" class="btn btn-primary">Submit</button>

          </form>
        </div>
      </div>
    </div>
  </div>
</div><!-- end car o hidden -->