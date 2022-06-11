<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Penilaian</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

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
              <div class="row" id="aspek1">
               <div class="col-lg-6"> 
               <h4>ASPEK 1</h4>          
                <div class="form-group">
                  <label for="formGroupExampleInput">Nama Instansi</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="nama instansi">
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
            <div class="row" id="aspek2">
               <div class="col-lg-6"> 
               <h4>ASPEK 2</h4>          
                <div class="form-group">
                  <label for="formGroupExampleInput">Nama Instansi</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="nama instansi">
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

bikin yg kyak tabel lagi ini buat form wizard
<div class="card o-hidden border-0 shadow-lg my-5"> <!-- biar bagus kek kotak tabel -->
  <div class="card-body p-0">
    <!-- Nested Row within Card Body -->
    <div class="row">

      <div class="col-lg">
        <div class="p-5">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">FORM PENILAIAN</h1>
          </div>


          <form method="POST" action="<?php echo base_url(). 'user/tambah_aksi' ?>">
            <div id="accordion">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0">
                    <a class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Penciptaan Arsip
                    </a>
                  </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    ke 1
                    <?php
                    foreach ($sdm as $es) :
                      ?>


                      <div class="card mb-2">
                        <div class="row g-0 p-0">

                          <div class="col-md-8 ">
                            <div class="card-body row">
                              <p class="card-title teksberita text-secondary"><?php echo $es->kode_pertanyaan;?>   <?php echo $es->pertanyaan; ?></p>
                              <div class="form-group mx-5">
                                <input type="radio" id="perlu_jawaban" name="jawaban" value="1" checked>
                                <label for="perlu_jawaban">ya</label>
                                <input type="radio" id="tidak_perlu_jawaban" name="jawaban" value="0">
                                <label for="tidak_perlu_jawaban"> tidak</label><br>
                              </div>                        


                            </div>

                          </div>
                        </div>
                      </div>
                      <?php endforeach; ?> -->
                    </div>
                  </div>
                </div>
                <!-- end collapse ke 1 -->


                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                      <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Pemeliharaan Arsip Inaktif
                      </a>
                    </h5>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>





            
          </div>
        </div>
      </div>
    </div>
  </div><!-- end car o hidden -->
</div> <!-- end container WAJIB BIAR RAPI -->














<h1>INI SUB ASPEK SDM</h1>



<!-- bikin card  -->
























