<!-- MultiStep Form -->
<div class="container-fluid">
  <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body">
      <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
        <h2 class="text-center"><strong>FORMULIR AUDIT SISTEM KEARSIPAN INTERNAL<br>PERGURUAN TINGGI NEGERI<br>PADA UNIT PENGOLAH</strong></h2>
        <p class="text-center">Fill all form field to go to next step</p>
        <div class="row">
          <div class="col-md-12 mx-0">
            <form class="user" method="POST" action="<?php echo base_url(). 'user/pengawasan/insert_data' ?>" id="msform">
              <!-- progressbar -->
              <ul id="progressbar">
                <li class="active" id="uk0"><strong>DATA PENGAWASAN</strong></li>
                <li id="uk1"><strong>PENCIPTAAN ARSIP</strong></li>
                <li id="uk2"><strong>PENGGUNAAN ARSIP</strong></li>
                <li id="uk3"><strong>PEMELIHARAAN <br>ARSIP INAKTIF</strong></li>
                <li id="uk4"><strong>PENYUSUTAN</strong></li>
                <li id="uk5"><strong>SUMBER DAYA MANUSIA</strong></li>
                <li id="uk6"><strong>SARPRAS</strong></li>
                <!-- <li id="uk6"><strong>Finish</strong></li> -->
              </ul> <!-- fieldsets -->
              <fieldset id="no0">
                <h1 class="h4 text-gray-900 text-center mt-5 py-5">ISI DATA PENGAWASAN</h1>
                <div class="col-lg-11 card border border-left-warning shadow py-5 mx-5 mb-5">
                  <?php
                  var_dump($data_instansi);                                    
                  foreach($data_instansi as $dfn) :?>
                  <input type="hidden" name="id_unit" value="<?php echo $dfn->id_unit; ?>">
                  <input type="hidden" name="id_grup_pengawas" value="<?php echo $dfn->id_grup_pengawas; ?>">
                  <input type="hidden" name="id_form" value="<?php echo $dfn->id_form; ?>">
                  <input type="hidden" name="tanggal_audit" value="<?php echo $tanggal; ?>">
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0 text-justify">
                        <label class="text-danger">Nama Instansi</label>
                        <input type="text" class="form-control form-control-user" id="" placeholder="Nama Instansi" value="Universitas Sebelas Maret" readonly>
                      </div>
                      <div class="col-sm-6 text-justify">
                        <label class="text-danger">Unit Instansi</label>
                        <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Unit Instansi" value="<?php echo $dfn->nama_unit; ?>" readonly>
                      </div>
                    </div>
                    <div class="form-group text-justify">
                      <label class="text-danger">Alamat</label>
                      <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Alamat" value="<?php echo $dfn->alamat; ?>" readonly>
                    </div>

                    <div class="form-group row text-justify">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <label class="text-danger">Tanggal Pengawasan</label>
                        <input type="text" class="form-control form-control-user"
                        id="exampleInputPassword"  placeholder="Tanggal" value="<?php echo $tanggal ?>" readonly>
                      </div>
                      <div class="col-sm-6">
                        <label class="text-danger">Tim Pengawas</label>
                        <input type="text" class="form-control form-control-user"
                        id="exampleRepeatPassword" placeholder="Grup Pengawas" value="<?php echo $dfn->nama_grup; ?>" readonly>
                      </div>
                    </div>
                    <div class="form-group row text-justify">
                      
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <label class="text-danger">Penanggung Jawab Unit Kearsipan</label>
                        <input type="text" class="form-control form-control-user"
                        id="exampleInputPassword" name="nama_pj_unit" placeholder="Penanggung Jawab Unit Kearsipan" required>
                      </div>
                      <div class="col-sm-6">
                        <label class="text-danger">Jabatan Penanggung Jawab Unit Kearsipan</label>
                        <input type="text" class="form-control form-control-user"
                        id="exampleRepeatPassword" name="jabatan_pj_unit" placeholder="Jabatan Penanggung Jawab Unit Kearsipan" required>
                      </div>
                    </div>

                  </div>                              
                <?php endforeach ?>
                <input type="button" name="next" class="next action-button" value="Next Step" />
              </fieldset>

                            <fieldset id="no1">
                              <div class="form-card">
                                <h1 class="h4 text-gray-900 text-center mt-5"> SUB ASPEK PENCIPTAAN ARSIP</h1>
                                <div class="row mt-3">
                                    <div class="col-lg-10 col-sm-1 card border border-left-warning shadow h-100 py-2 mx-5">
                                      <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                          <div class="col mr-2">                    
                                            <p class="mb-0 font-weight-bold text-warning text-justify" style="font-size: 13px;">"Jika Perguruan Tinggi Negeri, tidak memiliki kebijakan tata naskah dinas/pengurusan naskah dinas, maka berikan tanda √ pada kolom checklist/kotak di samping ini!
                                            Dan seluruh pertanyaan di bawah ini dinyatakanan ""Tidak/Belum""."</p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-lg-1">
                                        <input type="checkbox" id="vehicle1" name="57-439" value="Bike" onclick="disall('no1',1)" style="width: 30px; height:30px" >               
                                      </div>
                                    </div>
                                  </div>

                                  <h6>A. PEMBUATAN ARSIP</h6>
                                  <ol class="daftar">
                                    <li class="py-2" >Kesesuaian terhadap Tata Naskah Dinas Pencipta Arsip
                                      <ol class="daftar">
                                        <li class="py-2">Penomoran Naskah Dinas 
                                          <ol class="daftar">
                                            <li class="py-2" id="tesskor" onclick="skor('tesskor')">Pemberian Nomor Naskah sesuai dengan Susunan Penomoran Naskah Dinas
                                              <div class="yatidak">
                                                <div class="form-check form-check-inline">
                                                  <input class="form-check-input" type="radio" name="57-328" id="inlineRadio1" onclick="divres('a1','b1','57-328')" value="Ya">
                                                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline ">
                                                  <input class="form-check-input" type="radio" name="57-328" id="inlineRadio2" onclick="divres('a1','b1','57-328')" value="Tidak">
                                                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                </div>
                                              </div>
                                              <ul class="mt-2">
                                                <div class="row">
                                                  <div class="col-lg-6">
                                                    <dd>Isikan jumlah naskah dinas yang dijadikan sampel</dd>
                                                  </div>
                                                  <div class="form-group col-lg-3 mx-3">                
                                                    <input type="number" id="a1" name="57-330" onkeyup="div('a1','b1','57-328')" style="width: 70px; height:35px">
                                                    <label class="mr-3">naskah dinas</label>             
                                                  </div>
                                                </div>

                                                <div class="row">
                                                  <div class="col-lg-6">
                                                    <dd>Isikan jumlah naskah dinas dari sampel yang sesuai</dd>
                                                  </div>
                                                  <div class="form-group col-lg-3 mx-3">                
                                                    <input type="number" id="b1" onkeyup="div('a1','b1','57-328')" name="57-331" style="width: 70px; height:35px">
                                                    <label class="mr-3">naskah dinas</label>             
                                                  </div>
                                                </div>
                                              </ul>
                                            </li>
                                            <li class="py-2">Pencantuman Kode Klasifikasi Arsip pada Naskah Dinas     
                                              <ol class="a">
                                                <dd>a. Surat Perintah 
                                                  <div class="yatidak">
                                                    <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio" name="57-333" onclick="divres('112.a.a','112.a.b','57-333')" id="inlineRadio1" value="Ya">
                                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline ">
                                                      <input class="form-check-input" type="radio" name="57-333" onclick="divres('112.a.a','112.a.b','57-333')" id="inlineRadio2" value="Tidak">
                                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                    </div>
                                                  </div>
                                                  <ul class="mt-2">
                                                    <div class="row">
                                                      <div class="col-lg-6">
                                                        <dd>Isikan jumlah naskah dinas yang dijadikan sampel</dd>
                                                      </div>
                                                      <div class="form-group col-lg-3 mx-3">                
                                                        <input type="number" id="112.a.a" name="57-334" onkeyup="div('112.a.a','112.a.b','57-333')" max="100" style="width: 70px; height:35px">
                                                        <label class="mr-3">naskah dinas</label>             
                                                      </div>
                                                    </div>

                                                    <div class="row">
                                                      <div class="col-lg-6">
                                                        <dd>Isikan jumlah naskah dinas dari sampel yang sesuai</dd>
                                                      </div>
                                                      <div class="form-group col-lg-3 mx-3">                
                                                        <input type="number" id="112.a.b" name="57-335" onkeyup="div('112.a.a','112.a.b','57-333')" max="100" style="width: 70px; height:35px">
                                                        <label class="mr-3">naskah dinas</label>             
                                                      </div>
                                                    </div>
                                                  </ul>

                                                </dd>
                                                <dd>b. Surat Dinas
                                                <div class="yatidak">
                                                    <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio" name="57-336" onclick="divres('112.b.a','112.b.b','57-336')" id="inlineRadio1" value="Ya">
                                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline ">
                                                      <input class="form-check-input" type="radio" name="57-336" onclick="divres('112.b.a','112.b.b','57-336')" id="inlineRadio2" value="Tidak">
                                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                    </div>
                                                  </div>
                                                  <ul class="mt-2">
                                                    <div class="row">
                                                      <div class="col-lg-6">
                                                        <dd>Isikan jumlah naskah dinas yang dijadikan sampel</dd>
                                                      </div>
                                                      <div class="form-group col-lg-3 mx-3">                
                                                        <input type="number" id="112.b.a" name="57-337" onkeyup="div('112.b.a','112.b.b','57-336')" max="100" style="width: 70px; height:35px">
                                                        <label class="mr-3">naskah dinas</label>             
                                                      </div>
                                                    </div>

                                                    <div class="row">
                                                      <div class="col-lg-6">
                                                        <dd>Isikan jumlah naskah dinas dari sampel yang sesuai</dd>
                                                      </div>
                                                      <div class="form-group col-lg-3 mx-3">                
                                                        <input type="number" id="112.b.b" name="57-338" onkeyup="div('112.b.a','112.b.b','57-336')" max="100" style="width: 70px; height:35px">
                                                        <label class="mr-3">naskah dinas</label>             
                                                      </div>
                                                    </div>
                                                  </ul>
                                                </dd>
                                                <dd>c. Nota Dinas 
                                                <div class="yatidak">
                                                    <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio" name="57-339" onclick="divres('112.c.a','112.c.b','57-339')" id="inlineRadio1" value="Ya">
                                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline ">
                                                      <input class="form-check-input" type="radio" name="57-339" onclick="divres('112.c.a','112.c.b','57-339')" id="inlineRadio2" value="Tidak">
                                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                    </div>
                                                  </div>
                                                  <ul class="mt-2">
                                                    <div class="row">
                                                      <div class="col-lg-6">
                                                        <dd>Isikan jumlah naskah dinas yang dijadikan sampel</dd>
                                                      </div>
                                                      <div class="form-group col-lg-3 mx-3">                
                                                        <input type="number" id="112.c.a" name="57-340" onkeyup="div('112.c.a','112.c.b','57-339')" max="100" style="width: 70px; height:35px">
                                                        <label class="mr-3">naskah dinas</label>             
                                                      </div>
                                                    </div>

                                                    <div class="row">
                                                      <div class="col-lg-6">
                                                        <dd>Isikan jumlah naskah dinas dari sampel yang sesuai</dd>
                                                      </div>
                                                      <div class="form-group col-lg-3 mx-3">                
                                                        <input type="number" id="112.c.b" name="57-341" onkeyup="div('112.c.a','112.c.b','57-339')" max="100" style="width: 70px; height:35px">
                                                        <label class="mr-3">naskah dinas</label>             
                                                      </div>
                                                    </div>
                                                  </ul>
                                                </dd>
                                              </ol>
                                            </li>

                                          </ol>
                                        </li>
                                        <li class="py-2">Penggunaan Kertas Naskah Dinas 
                                          <ol class="daftar">
                                            <li class="py-2">Ukuran Kertas 
                                              <div class="yatidak">
                                                <div class="form-check form-check-inline">
                                                  <input class="form-check-input" type="radio" name="57-346" onclick="divres('121.a','121.b','57-346')" id="inlineRadio1" value="Ya">
                                                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline ">
                                                  <input class="form-check-input" type="radio" name="57-346" onclick="divres('121.a','121.b','57-346')" id="inlineRadio2" value="Tidak">
                                                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                </div>
                                              </div>
                                              <ul class="mt-2">
                                                <div class="row">
                                                  <div class="col-lg-6">
                                                    <dd>Isikan jumlah naskah dinas yang dijadikan sampel</dd>
                                                  </div>
                                                  <div class="form-group col-lg-3 mx-3">                
                                                    <input type="number" id="121.a" name="57-347" onkeyup="div('121.a','121.b','57-346')" max="100" style="width: 70px; height:35px">
                                                    <label class="mr-3">naskah dinas</label>             
                                                  </div>
                                                </div>

                                                <div class="row">
                                                  <div class="col-lg-6">
                                                    <dd>Isikan jumlah naskah dinas dari sampel yang sesuai</dd>
                                                  </div>
                                                  <div class="form-group col-lg-3 mx-3">                
                                                    <input type="number" id="121.b" name="57-348" onkeyup="div('121.a','121.b','57-346')" max="100" style="width: 70px; height:35px">
                                                    <label class="mr-3">naskah dinas</label>             
                                                  </div>
                                                </div>
                                              </ul>
                                            </li>
                                            <li class="py-2">Gramatur (berat kertas)  
                                              <div class="yatidak">
                                                <div class="form-check form-check-inline">
                                                  <input class="form-check-input" type="radio" name="57-349" onclick="divres('122.a','122.b','57-349')" id="inlineRadio1" value="Ya">
                                                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline ">
                                                  <input class="form-check-input" type="radio" name="57-349" onclick="divres('122.a','122.b','57-349')" id="inlineRadio2" value="Tidak">
                                                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                </div>
                                              </div>
                                              <ul class="mt-2">
                                                <div class="row">
                                                  <div class="col-lg-6">
                                                    <dd>Isikan jumlah naskah dinas yang dijadikan sampel</dd>
                                                  </div>
                                                  <div class="form-group col-lg-3 mx-3">                
                                                    <input type="number" id="122.a" name="57-350" onkeyup="div('122.a','122.b','57-349')" max="100" style="width: 70px; height:35px">
                                                    <label class="mr-3">naskah dinas</label>             
                                                  </div>
                                                </div>

                                                <div class="row">
                                                  <div class="col-lg-6">
                                                    <dd>Isikan jumlah naskah dinas dari sampel yang sesuai</dd>
                                                  </div>
                                                  <div class="form-group col-lg-3 mx-3">                
                                                    <input type="number" id="122.b" name="57-351" onkeyup="div('122.a','122.b','57-349')" max="100" style="width: 70px; height:35px">
                                                    <label class="mr-3">naskah dinas</label>             
                                                  </div>
                                                </div>
                                              </ul>
                                            </li>

                                          </ol>
                                        </li>
                                        <li class="py-2">Struktur Naskah Dinas 
                                          <ol class="daftar">
                                            <li class="py-2">Kepala Naskah Dinas  
                                              <div class="yatidak">
                                                <div class="form-check form-check-inline">
                                                  <input class="form-check-input" type="radio" name="57-353" onclick="divres('131.a','131.b','57-353')" id="inlineRadio1" value="Ya">
                                                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline ">
                                                  <input class="form-check-input" type="radio" name="57-353" onclick="divres('131.a','131.b','57-353')" id="inlineRadio2" value="Tidak">
                                                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                </div>
                                              </div>
                                              <ul class="mt-2">
                                                <div class="row">
                                                  <div class="col-lg-6">
                                                    <dd>Isikan jumlah naskah dinas yang dijadikan sampel</dd>
                                                  </div>
                                                  <div class="form-group col-lg-3 mx-3">                
                                                    <input type="number" id="131.a" name="57-354" onkeyup="div('131.a','131.b','57-353')" max="100"  style="width: 70px; height:35px">
                                                    <label class="mr-3">naskah dinas</label>             
                                                  </div>
                                                </div>

                                                <div class="row">
                                                  <div class="col-lg-6">
                                                    <dd>Isikan jumlah naskah dinas dari sampel yang sesuai</dd>
                                                  </div>
                                                  <div class="form-group col-lg-3 mx-3">                
                                                    <input type="number" id="131.b" name="57-355" onkeyup="div('131.a','131.b','57-353')"  max="100" style="width: 70px; height:35px">
                                                    <label class="mr-3">naskah dinas</label>             
                                                  </div>
                                                </div>
                                              </ul>
                                            </li>
                                            <li class="py-2">Batang Tubuh /Isi Naskah Dinas 
                                              <div class="yatidak">
                                                <div class="form-check form-check-inline">
                                                  <input class="form-check-input" type="radio" name="57-356" onkeyup="divres('132.a','132.b','57-356')" id="inlineRadio1" value="Ya">
                                                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline ">
                                                  <input class="form-check-input" type="radio" name="57-356" onclick="divres('132.a','132.b','57-356')" id="inlineRadio2" value="Tidak">
                                                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                </div>
                                              </div>
                                              <ul class="mt-2">
                                                <div class="row">
                                                  <div class="col-lg-6">
                                                    <dd>Isikan jumlah naskah dinas yang dijadikan sampel</dd>
                                                  </div>
                                                  <div class="form-group col-lg-3 mx-3">                
                                                    <input type="number" id="132.a" name="57-358" onkeyup="div('132.a','132.b','57-356')" max="100" style="width: 70px; height:35px">
                                                    <label class="mr-3">naskah dinas</label>             
                                                  </div>
                                                </div>

                                                <div class="row">
                                                  <div class="col-lg-6">
                                                    <dd>Isikan jumlah naskah dinas dari sampel yang sesuai</dd>
                                                  </div>
                                                  <div class="form-group col-lg-3 mx-3">                
                                                    <input type="number" id="132.b" name="57-359" onkeyup="div('132.a','132.b','57-356')" max="100" style="width: 70px; height:35px">
                                                    <label class="mr-3">naskah dinas</label>             
                                                  </div>
                                                </div>
                                              </ul>
                                            </li>
                                            <li class="py-2">Kaki Naskah Dinas 
                                              <div class="yatidak">
                                                <div class="form-check form-check-inline">
                                                  <input class="form-check-input" type="radio" name="57-357" onclick="divres('133.a','133.b','57-357')" id="inlineRadio1" value="Ya">
                                                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline ">
                                                  <input class="form-check-input" type="radio" name="57-357" onclick="divres('133.a','133.b','57-357')" id="inlineRadio2" value="Tidak">
                                                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                </div>
                                              </div>
                                              <ul class="mt-2">
                                                <div class="row">
                                                  <div class="col-lg-6">
                                                    <dd>Isikan jumlah naskah dinas yang dijadikan sampel</dd>
                                                  </div>
                                                  <div class="form-group col-lg-3 mx-3">                
                                                    <input type="number" id="133.a" name="57-360" onkeyup="div('133.a','133.b','57-357')" max="100" style="width: 70px; height:35px">
                                                    <label class="mr-3">naskah dinas</label>             
                                                  </div>
                                                </div>

                                                <div class="row">
                                                  <div class="col-lg-6">
                                                    <dd>Isikan jumlah naskah dinas dari sampel yang sesuai</dd>
                                                  </div>
                                                  <div class="form-group col-lg-3 mx-3">                
                                                    <input type="number" id="133.b" name="57-361" onkeyup="div('133.a','133.b','57-357')" max="100" style="width: 70px; height:35px">
                                                    <label class="mr-3">naskah dinas</label>             
                                                  </div>
                                                </div>
                                              </ul>
                                            </li>
                                          </ol>
                                        </li>
                                        <li class="py-2">Format Naskah Dinas
                                          <ol class="daftar">
                                            <li class="py-2">Jenis Huruf 
                                            <div class="yatidak">
                                                <div class="form-check form-check-inline">
                                                  <input class="form-check-input" type="radio" name="57-363" onclick="divres('141.a','141.b','57-363')" id="inlineRadio1" value="Ya">
                                                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline ">
                                                  <input class="form-check-input" type="radio" name="57-363" onclick="divres('141.a','141.b','57-363')" id="inlineRadio2" value="Tidak">
                                                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                </div>
                                              </div>
                                              <ul class="mt-2">
                                                <div class="row">
                                                  <div class="col-lg-6">
                                                    <dd>Isikan jumlah naskah dinas yang dijadikan sampel</dd>
                                                  </div>
                                                  <div class="form-group col-lg-3 mx-3">                
                                                    <input type="number" id="141.a" name="57-364" onkeyup="div('141.a','141.b','57-363')" max="100" style="width: 70px; height:35px">
                                                    <label class="mr-3">naskah dinas</label>             
                                                  </div>
                                                </div>

                                                <div class="row">
                                                  <div class="col-lg-6">
                                                    <dd>Isikan jumlah naskah dinas dari sampel yang sesuai</dd>
                                                  </div>
                                                  <div class="form-group col-lg-3 mx-3">                
                                                    <input type="number" id="141.b" name="57-365" onkeyup="div('141.a','141.b','57-363')" max="100" style="width: 70px; height:35px">
                                                    <label class="mr-3">naskah dinas</label>             
                                                  </div>
                                                </div>
                                              </ul>
                                            </li>
                                            <li class="py-2">Ukuran Huruf 
                                            <div class="yatidak">
                                                <div class="form-check form-check-inline">
                                                  <input class="form-check-input" type="radio" name="57-366" onclick="divres('142.a','142.b','57-366')" id="inlineRadio1" value="Ya">
                                                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline ">
                                                  <input class="form-check-input" type="radio" name="57-366" onclick="divres('142.a','142.b','57-366')" id="inlineRadio2" value="Tidak">
                                                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                </div>
                                              </div>
                                              <ul class="mt-2">
                                                <div class="row">
                                                  <div class="col-lg-6">
                                                    <dd>Isikan jumlah naskah dinas yang dijadikan sampel</dd>
                                                  </div>
                                                  <div class="form-group col-lg-3 mx-3">                
                                                    <input type="number" id="142.a" name="57-367" onkeyup="div('142.a','142.b','57-366')" max="100" style="width: 70px; height:35px">
                                                    <label class="mr-3">naskah dinas</label>             
                                                  </div>
                                                </div>

                                                <div class="row">
                                                  <div class="col-lg-6">
                                                    <dd>Isikan jumlah naskah dinas dari sampel yang sesuai</dd>
                                                  </div>
                                                  <div class="form-group col-lg-3 mx-3">                
                                                    <input type="number" id="142.b" name="57-368" onkeyup="div('142.a','142.b','57-366')" max="100" style="width: 70px; height:35px">
                                                    <label class="mr-3">naskah dinas</label>             
                                                  </div>
                                                </div>
                                              </ul>
                                            </li>
                                            <li class="py-2">Kata Penyambung Perpindahan Halaman
                                              <div class="yatidak">
                                                <div class="form-check form-check-inline">
                                                  <input class="form-check-input" type="radio" name="57-369" onclick="divres('143.a','143.b','57-369')" id="inlineRadio1" value="Ya">
                                                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline ">
                                                  <input class="form-check-input" type="radio" name="57-369" onclick="divres('143.a','143.b','57-369')" id="inlineRadio2" value="Tidak">
                                                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                </div>
                                              </div>
                                              <ul class="mt-2">
                                                <div class="row">
                                                  <div class="col-lg-6">
                                                    <dd>Isikan jumlah naskah dinas yang dijadikan sampel</dd>
                                                  </div>
                                                  <div class="form-group col-lg-3 mx-3">                
                                                    <input type="number" id="143.a" name="55-370" onkeyup="div('143.a','143.b','57-369')" max="100" style="width: 70px; height:35px">
                                                    <label class="mr-3">naskah dinas</label>             
                                                  </div>
                                                </div>

                                                <div class="row">
                                                  <div class="col-lg-6">
                                                    <dd>Isikan jumlah naskah dinas dari sampel yang sesuai</dd>
                                                  </div>
                                                  <div class="form-group col-lg-3 mx-3">                
                                                    <input type="number" id="143.b" name="57-371" onkeyup="div('143.a','143.b','57-369')" max="100" style="width: 70px; height:35px">
                                                    <label class="mr-3">naskah dinas</label>             
                                                  </div>
                                                </div>
                                              </ul>
                                            </li>
                                            <li class="py-2">Penentuan Batas/Ruang Tepi
                                              <div class="yatidak">
                                                <div class="form-check form-check-inline">
                                                  <input class="form-check-input" type="radio" name="57-372" onclick="divres('144.a','144.b','57-372')" id="inlineRadio1" value="Ya">
                                                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline ">
                                                  <input class="form-check-input" type="radio" name="57-372" onclick="divres('144.a','144.b','57-372')" id="inlineRadio2" value="Tidak">
                                                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                </div>
                                              </div>
                                              <ul class="mt-2">
                                                <div class="row">
                                                  <div class="col-lg-6">
                                                    <dd>Isikan jumlah naskah dinas yang dijadikan sampel</dd>
                                                  </div>
                                                  <div class="form-group col-lg-3 mx-3">                
                                                    <input type="number" id="144.a" name="57-373" onkeyup="div('144.a','144.b','57-372')" max="100" style="width: 70px; height:35px">
                                                    <label class="mr-3">naskah dinas</label>             
                                                  </div>
                                                </div>

                                                <div class="row">
                                                  <div class="col-lg-6">
                                                    <dd>Isikan jumlah naskah dinas dari sampel yang sesuai</dd>
                                                  </div>
                                                  <div class="form-group col-lg-3 mx-3">                
                                                    <input type="number" id="144.b" name="57-374" onkeyup="div('144.a','144.b','57-372')" max="100" style="width: 70px; height:35px">
                                                    <label class="mr-3">naskah dinas</label>             
                                                  </div>
                                                </div>
                                              </ul>
                                            </li>
                                            <li class="py-2">Nomor Halaman
                                              <div class="yatidak">
                                                <div class="form-check form-check-inline">
                                                  <input class="form-check-input" type="radio" name="57-375" onclick="divres('145.a','145.b','57-375')" id="inlineRadio1" value="Ya">
                                                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline ">
                                                  <input class="form-check-input" type="radio" name="57-375" onclick="divres('145.a','145.b','57-375')" id="inlineRadio2" value="Tidak">
                                                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                </div>
                                              </div>
                                              <ul class="mt-2">
                                                <div class="row">
                                                  <div class="col-lg-6">
                                                    <dd>Isikan jumlah naskah dinas yang dijadikan sampel</dd>
                                                  </div>
                                                  <div class="form-group col-lg-3 mx-3">                
                                                    <input type="number" id="145.a" name="57-376" onkeyup="div('145.a','145.b','57-375')" max="100" style="width: 70px; height:35px">
                                                    <label class="mr-3">naskah dinas</label>             
                                                  </div>
                                                </div>

                                                <div class="row">
                                                  <div class="col-lg-6">
                                                    <dd>Isikan jumlah naskah dinas dari sampel yang sesuai</dd>
                                                  </div>
                                                  <div class="form-group col-lg-3 mx-3">                
                                                    <input type="number" id="145.b" name="57-377" onkeyup="div('145.a','145.b','57-375')" max="100" style="width: 70px; height:35px">
                                                    <label class="mr-3">naskah dinas</label>             
                                                  </div>
                                                </div>
                                              </ul>
                                            </li>
                                            <li class="py-2">Tembusan
                                              <div class="yatidak">
                                                <div class="form-check form-check-inline">
                                                  <input class="form-check-input" type="radio" name="57-378" onclick="divres('146.a','146.b','57-378')" id="inlineRadio1" value="Ya">
                                                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline ">
                                                  <input class="form-check-input" type="radio" name="57-378" onclick="divres('146.a','146.b','57-378')" id="inlineRadio2" value="Tidak">
                                                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                </div>
                                              </div>
                                              <ul class="mt-2">
                                                <div class="row">
                                                  <div class="col-lg-6">
                                                    <dd>Isikan jumlah naskah dinas yang dijadikan sampel</dd>
                                                  </div>
                                                  <div class="form-group col-lg-3 mx-3">                
                                                    <input type="number" id="146.a" name="57-379" onkeyup="div('146.a','146.b','57-378')" max="100" style="width: 70px; height:35px">
                                                    <label class="mr-3">naskah dinas</label>             
                                                  </div>
                                                </div>

                                                <div class="row">
                                                  <div class="col-lg-6">
                                                    <dd>Isikan jumlah naskah dinas dari sampel yang sesuai</dd>
                                                  </div>
                                                  <div class="form-group col-lg-3 mx-3">                
                                                    <input type="number" id="146.b" name="57-380" onkeyup="div('146.a','146.b','57-378')" max="100" style="width: 70px; height:35px">
                                                    <label class="mr-3">naskah dinas</label>             
                                                  </div>
                                                </div>
                                              </ul>
                                            </li>
                                            <li class="py-2">Lampiran
                                            <div class="yatidak">
                                                <div class="form-check form-check-inline">
                                                  <input class="form-check-input" type="radio" name="57-381" onclick="divres('147.a','147.b','57-381')" id="inlineRadio1" value="Ya">
                                                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline ">
                                                  <input class="form-check-input" type="radio" name="57-381" onclick="divres('147.a','147.b','57-381')" id="inlineRadio2" value="Tidak">
                                                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                </div>
                                              </div>
                                              <ul class="mt-2">
                                                <div class="row">
                                                  <div class="col-lg-6">
                                                    <dd>Isikan jumlah naskah dinas yang dijadikan sampel</dd>
                                                  </div>
                                                  <div class="form-group col-lg-3 mx-3">                
                                                    <input type="number" id="147.a" name="57-382" onkeyup="div('147.a','147.b','57-381')" max="100" style="width: 70px; height:35px">
                                                    <label class="mr-3">naskah dinas</label>             
                                                  </div>
                                                </div>

                                                <div class="row">
                                                  <div class="col-lg-6">
                                                    <dd>Isikan jumlah naskah dinas dari sampel yang sesuai</dd>
                                                  </div>
                                                  <div class="form-group col-lg-3 mx-3">                
                                                    <input type="number" id="147.b" name="57-383" onkeyup="div('147.a','147.b','57-381')" max="100" style="width: 70px; height:35px">
                                                    <label class="mr-3">naskah dinas</label>             
                                                  </div>
                                                </div>
                                              </ul>
                                            </li>
                                            <li class="py-2">Penggunaan Logo Lembaga/Lambang Negara
                                              <div class="yatidak">
                                                <div class="form-check form-check-inline">
                                                  <input class="form-check-input" type="radio" name="57-384" onclick="divres('148.a','148.b','57-384')" id="inlineRadio1" value="Ya">
                                                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline ">
                                                  <input class="form-check-input" type="radio" name="57-384" onclick="divres('148.a','148.b','57-384')" id="inlineRadio2" value="Tidak">
                                                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                </div>
                                              </div>
                                              <ul class="mt-2">
                                                <div class="row">
                                                  <div class="col-lg-6">
                                                    <dd>Isikan jumlah naskah dinas yang dijadikan sampel</dd>
                                                  </div>
                                                  <div class="form-group col-lg-3 mx-3">                
                                                    <input type="number" id="148.a" name="57-385" onkeyup="div('148.a','148.b','57-384')" max="100" style="width: 70px; height:35px">
                                                    <label class="mr-3">naskah dinas</label>             
                                                  </div>
                                                </div>

                                                <div class="row">
                                                  <div class="col-lg-6">
                                                    <dd>Isikan jumlah naskah dinas dari sampel yang sesuai</dd>
                                                  </div>
                                                  <div class="form-group col-lg-3 mx-3">                
                                                    <input type="number" id="148.b" name="57-386" onkeyup="div('148.a','148.b','57-384')" max="100" style="width: 70px; height:35px">
                                                    <label class="mr-3">naskah dinas</label>             
                                                  </div>
                                                </div>
                                              </ul>
                                            </li>
                                          </ol>
                                        </li>
                                        <li class="py-2">Pembubuhan Paraf pada Net Naskah Dinas 
                                        <div class="yatidak">
                                                <div class="form-check form-check-inline">
                                                  <input class="form-check-input" type="radio" name="57-387" onclick="divres('15.a','15.b','57-387')" id="inlineRadio1" value="Ya">
                                                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline ">
                                                  <input class="form-check-input" type="radio" name="57-387" onclick="divres('15.a','15.b','57-387')" id="inlineRadio2" value="Tidak">
                                                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                </div>
                                              </div>
                                              <ul class="mt-2">
                                                <div class="row">
                                                  <div class="col-lg-6">
                                                    <dd>Isikan jumlah naskah dinas yang dijadikan sampel</dd>
                                                  </div>
                                                  <div class="form-group col-lg-3 mx-3">                
                                                    <input type="number" id="15.a" name="57-388" onkeyup="div('15.a','15.b','57-387')" max="100" style="width: 70px; height:35px">
                                                    <label class="mr-3">naskah dinas</label>             
                                                  </div>
                                                </div>

                                                <div class="row">
                                                  <div class="col-lg-6">
                                                    <dd>Isikan jumlah naskah dinas dari sampel yang sesuai</dd>
                                                  </div>
                                                  <div class="form-group col-lg-3 mx-3">                
                                                    <input type="number" id="15.b" name="57-389" onkeyup="div('15.a','15.b','57-387')" max="100" style="width: 70px; height:35px">
                                                    <label class="mr-3">naskah dinas</label>             
                                                  </div>
                                                </div>
                                              </ul>
                                            </li>
                                        <li class="py-2">Penggunaan Cap Dinas 
                                          <ol class="daftar">
                                            <li class="py-2">Bentuk Cap Dinas
                                              <div class="yatidak">
                                                <div class="form-check form-check-inline">
                                                  <input class="form-check-input" type="radio" name="57-391" onclick="divres('161.a','161.b','57-391')" id="inlineRadio1" value="Ya">
                                                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline ">
                                                  <input class="form-check-input" type="radio" name="57-391" onclick="divres('161.a','161.b','57-391')" id="inlineRadio2" value="Tidak">
                                                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                </div>
                                              </div>
                                              <ul class="mt-2">
                                                <div class="row">
                                                  <div class="col-lg-6">
                                                    <dd>Isikan jumlah naskah dinas yang dijadikan sampel</dd>
                                                  </div>
                                                  <div class="form-group col-lg-3 mx-3">                
                                                    <input type="number" id="161.a" name="57-392" onkeyup="div('161.a','161.b','57-391')" max="100" style="width: 70px; height:35px">
                                                    <label class="mr-3">naskah dinas</label>             
                                                  </div>
                                                </div>

                                                <div class="row">
                                                  <div class="col-lg-6">
                                                    <dd>Isikan jumlah naskah dinas dari sampel yang sesuai</dd>
                                                  </div>
                                                  <div class="form-group col-lg-3 mx-3">                
                                                    <input type="number" id="161.b" name="57-393" onkeyup="div('161.a','161.b','57-391')" max="100" style="width: 70px; height:35px">
                                                    <label class="mr-3">naskah dinas</label>             
                                                  </div>
                                                </div>
                                              </ul>
                                            </li>
                                            <li class="py-2">Warna Cap Dinas
                                              <div class="yatidak">
                                                <div class="form-check form-check-inline">
                                                  <input class="form-check-input" type="radio" name="57-394" onclick="divres('162.a','162.b','57-394')" id="inlineRadio1" value="Ya">
                                                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline ">
                                                  <input class="form-check-input" type="radio" name="57-394" onclick="divres('162.a','162.b','57-394')" id="inlineRadio2" value="Tidak">
                                                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                </div>
                                              </div>
                                              <ul class="mt-2">
                                                <div class="row">
                                                  <div class="col-lg-6">
                                                    <dd>Isikan jumlah naskah dinas yang dijadikan sampel</dd>
                                                  </div>
                                                  <div class="form-group col-lg-3 mx-3">                
                                                    <input type="number" id="162.a" name="57-395" onkeyup="div('162.a','162.b','57-394')" max="100" style="width: 70px; height:35px">
                                                    <label class="mr-3">naskah dinas</label>             
                                                  </div>
                                                </div>

                                                <div class="row">
                                                  <div class="col-lg-6">
                                                    <dd>Isikan jumlah naskah dinas dari sampel yang sesuai</dd>
                                                  </div>
                                                  <div class="form-group col-lg-3 mx-3">                
                                                    <input type="number" id="162.b" name="57-396" onkeyup="div('162.a','162.b','57-394')" max="100" style="width: 70px; height:35px">
                                                    <label class="mr-3">naskah dinas</label>             
                                                  </div>
                                                </div>
                                              </ul>
                                            </li>
                                          </ol>
                                        </li>
                                        <li class="py-2">Penandatanganan Naskah Dinas 
                                          <ol class="daftar">
                                            <li class="py-2">Kewenangan Penandatanganan Naskah Dinas
                                              <div class="yatidak">
                                                <div class="form-check form-check-inline">
                                                  <input class="form-check-input" type="radio" name="57-398" onclick="divres('171.a','171.b','57-398')" id="inlineRadio1" value="Ya">
                                                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline ">
                                                  <input class="form-check-input" type="radio" name="57-398" onclick="divres('171.a','171.b','57-398')" id="inlineRadio2" value="Tidak">
                                                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                </div>
                                              </div>
                                              <ul class="mt-2">
                                                <div class="row">
                                                  <div class="col-lg-6">
                                                    <dd>Isikan jumlah naskah dinas yang dijadikan sampel</dd>
                                                  </div>
                                                  <div class="form-group col-lg-3 mx-3">                
                                                    <input type="number" id="171.a" name="57-399" onkeyup="div('171.a','171.b','57-398')" max="100" style="width: 70px; height:35px">
                                                    <label class="mr-3">naskah dinas</label>             
                                                  </div>
                                                </div>

                                                <div class="row">
                                                  <div class="col-lg-6">
                                                    <dd>Isikan jumlah naskah dinas dari sampel yang sesuai</dd>
                                                  </div>
                                                  <div class="form-group col-lg-3 mx-3">                
                                                    <input type="number" id="171.b" name="57-400" onkeyup="div('171.a','171.b','57-398')" max="100" style="width: 70px; height:35px">
                                                    <label class="mr-3">naskah dinas</label>             
                                                  </div>
                                                </div>
                                              </ul>
                                            </li>
                                            <li class="py-2">Pelimpahan Wewenang Penandatanganan Naskah Dinas (a.n., u.b., plt., plh.)
                                              <div class="yatidak">
                                                <div class="form-check form-check-inline">
                                                  <input class="form-check-input" type="radio" name="57-401" onclick="divres('172.a','172.b','57-401')" id="inlineRadio1" value="Ya">
                                                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline ">
                                                  <input class="form-check-input" type="radio" name="57-401" onclick="divres('172.a','172.b','57-401')" id="inlineRadio2" value="Tidak">
                                                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                </div>
                                              </div>
                                              <ul class="mt-2">
                                                <div class="row">
                                                  <div class="col-lg-6">
                                                    <dd>Isikan jumlah naskah dinas yang dijadikan sampel</dd>
                                                  </div>
                                                  <div class="form-group col-lg-3 mx-3">                
                                                    <input type="number" id="172.a" name="57-402" onkeyup="div('172.a','172.b','57-401')" max="100" style="width: 70px; height:35px">
                                                    <label class="mr-3">naskah dinas</label>             
                                                  </div>
                                                </div>

                                                <div class="row">
                                                  <div class="col-lg-6">
                                                    <dd>Isikan jumlah naskah dinas dari sampel yang sesuai</dd>
                                                  </div>
                                                  <div class="form-group col-lg-3 mx-3">                
                                                    <input type="number" id="172.b" name="57-403" onkeyup="div('172.a','172.b','57-401')" max="100" style="width: 70px; height:35px" min="0" max="100">
                                                    <label class="mr-3">naskah dinas</label>             
                                                  </div>
                                                </div>
                                              </ul>
                                            </li>
                                          </ol>
                                        </li>

                                      </ol>
                                    </li>
                                    <li class="py-2">Pengamanan Naskah Dinas
                                      <br>
                                      <p>(Perlakuan Terhadap Naskah Dinas Berdasarkan Klasifikasi Keamanan)</p>
                                      <ol class="daftar">
                                        <li class="py-2" id="disablecb">Pemberian Kode Derajat Klasifikasi Keamanan
                                          <div class="yatidak">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="57-414" id="inlineRadio1" value="Ya" onclick="discb('disablecb',false)">
                                              <label class="form-check-label" for="inlineRadio1">Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline ">
                                              <input class="form-check-input" type="radio" name="57-414" id="inlineRadio2" value="Tidak" onclick="discb('disablecb')" >
                                              <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                            </div>
                                          </div>
                                          <div class="col-lg-9 card border-left-info shadow">
                                            <div class="card-body">
                                              <div class="row no-gutters align-items-center">
                                                <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">(berikan tanda √ minimal 2 (dua) pada kolom checklist di bawah ini, jika poin 2.1. dinyatakan YA/ADA).</p>
                                              </div>
                                            </div>
                                          </div>

                                          <ul class=" mt-2">
                                            <div class="row">
                                              <div class="col-lg-6">
                                                <dd>Sangat Rahasia (SR)</dd>
                                              </div>
                                              <div class="form-group col-lg-1 mx-3">                
                                                <input type="checkbox" id="vehicle1" name="57-415"  style="width: 20px; height:20px" >               
                                              </div>
                                            </div>

                                            <div class="row">
                                              <div class="col-lg-6">
                                                <dd> Rahasia (R)</dd>
                                              </div>
                                              <div class="form-group col-lg-1 mx-3">                
                                                <input type="checkbox" id="vehicle1" name="57-416"  style="width: 20px; height:20px" >               
                                              </div>
                                            </div>

                                            <div class="row">
                                              <div class="col-lg-6">
                                                <dd> Terbatas (T)</dd>
                                              </div>
                                              <div class="form-group col-lg-1 mx-3">                
                                                <input type="checkbox" id="vehicle1" name="57-417"  style="width: 20px; height:20px" >               
                                              </div>
                                            </div>

                                            <div class="row">
                                              <div class="col-lg-6">
                                                <dd>Biasa (B)</dd>
                                              </div>
                                              <div class="form-group col-lg-1 mx-3">                
                                                <input type="checkbox" id="vehicle1" name="57-418"  style="width: 20px; height:20px">               
                                              </div>
                                            </div>
                                          </ul>
                                        </li>
                                        <li class="py-2">Pemberian Nomor Seri Pengaman dan Security Printing
                                          <div class="yatidak">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="57-419" id="inlineRadio1" value="Ya" >
                                              <label class="form-check-label" for="inlineRadio1">Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline ">
                                              <input class="form-check-input" type="radio" name="57-419" id="inlineRadio2" value="Tidak" >
                                              <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                            </div>
                                          </div>
                                          <div class="col-lg-9 card border-left-info shadow">
                                            <div class="card-body">
                                              <div class="row no-gutters align-items-center">
                                                <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">(jika unit pengolah menciptakan jenis naskah dinas yang mengharuskan penggunaan security printing).</p>
                                              </div>
                                            </div>
                                          </div>
                                        </li>
                                      </ol>
                                    </li>
                                    <li class="py-2">Pengendalian Naskah Dinas Keluar
                                      <ol class="daftar">
                                        <li class="py-2" id="disablecb2">Pencatatan
                                          <div class="yatidak">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="57-420" id="inlineRadio1" value="Ya" onclick="discb('disablecb2',false)">
                                              <label class="form-check-label" for="inlineRadio1">Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline ">
                                              <input class="form-check-input" type="radio" name="57-420" id="inlineRadio2" value="Tidak" onclick="discb('disablecb2')">
                                              <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                            </div>
                                          </div>
                                          <div class="col-lg-9 card border-left-info shadow  ">
                                            <div class="card-body">
                                              <div class="row no-gutters align-items-center">
                                                <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">(berikan tanda √ pada kolom checklist di bawah ini, jika poin 3.1.dinyatakan YA/ADA.</p>
                                              </div>
                                            </div>
                                          </div>

                                          <ul class=" mt-2">
                                            <div class="row">
                                              <div class="col-lg-6">
                                                <dd>Buku Agenda</dd>
                                              </div>
                                              <div class="form-group col-lg-1 mx-3">                
                                                <input type="checkbox" id="vehicle1" name="57-421"  style="width: 20px; height:20px" onclick="disradio('disrad4',2)">               
                                              </div>
                                            </div>

                                            <div class="row">
                                              <div class="col-lg-6">
                                                <dd>Kartu Kendali</dd>
                                              </div>
                                              <div class="form-group col-lg-1 mx-3">                
                                                <input type="checkbox" id="vehicle1" name="57-422"  style="width: 20px; height:20px" onclick="disradio('disrad4',2)">               
                                              </div>
                                            </div>

                                            <div class="row">
                                              <div class="col-lg-6">
                                                <dd>Takah</dd>
                                              </div>
                                              <div class="form-group col-lg-1 mx-3">                
                                                <input type="checkbox" id="vehicle1" name="57-423"  style="width: 20px; height:20px" onclick="disradio('disrad4',2)">               
                                              </div>
                                            </div>

                                            <div class="row">
                                              <div class="col-lg-6">
                                                <dd>Agenda Elektronik</dd>
                                              </div>
                                              <div class="form-group col-lg-1 mx-3">                
                                                <input type="checkbox" id="vehicle1" name="57-424"  style="width: 20px; height:20px" onclick="disradio('disrad4',2)">               
                                              </div>
                                            </div>
                                          </ul>
                                        </li>
                                        <li class="py-2">Penggandaan
                                          <div class="yatidak">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="57-425" id="inlineRadio1" value="Ya" >
                                              <label class="form-check-label" for="inlineRadio1">Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline ">
                                              <input class="form-check-input" type="radio" name="57-425" id="inlineRadio2" value="Tidak" >
                                              <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                            </div>
                                          </div>                                          
                                        </li>
                                        <li class="py-2">Pengiriman
                                          <div class="yatidak">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="57-426" id="inlineRadio1" value="Ya" >
                                              <label class="form-check-label" for="inlineRadio1">Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline ">
                                              <input class="form-check-input" type="radio" name="57-426" id="inlineRadio2" value="Tidak" >
                                              <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                            </div>
                                          </div>                                          
                                        </li>
                                        <li class="py-2">Penyimpanan
                                          <div class="yatidak">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="57-427" id="inlineRadio1" value="Ya" >
                                              <label class="form-check-label" for="inlineRadio1">Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline ">
                                              <input class="form-check-input" type="radio" name="57-427" id="inlineRadio2" value="Tidak" >
                                              <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                            </div>
                                          </div>                                          
                                        </li>
                                      </ol>
                                    </li>
                                    <li class="py-2">Penggunaan Amplop
                                      <div class="yatidak">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="57-412" id="inlineRadio1" value="Ya" >
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="57-412" id="inlineRadio2" value="Tidak" >
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>    
                                    </li>

                                  </ol>

                                  <h6>B. PENERIMAAN ARSIP</h6>
                                  <ol class="daftar">
                                    <li class="py-2">Pengendalian Naskah Dinas Masuk
                                      <ol class="daftar">
                                        <li class="py-2">Penerimaan
                                          <div class="yatidak">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="57-429" id="inlineRadio1" value="Ya" >
                                              <label class="form-check-label" for="inlineRadio1">Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline ">
                                              <input class="form-check-input" type="radio" name="57-429" id="inlineRadio2" value="Tidak" >
                                              <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                            </div>
                                          </div>    
                                        </li>
                                        <li class="py-2" id="disablecb3">Pencatatan
                                          <div class="yatidak">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="57-430" id="inlineRadio1" value="Ya" onclick="discb('disablecb3',false)" >
                                              <label class="form-check-label" for="inlineRadio1">Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline ">
                                              <input class="form-check-input" type="radio" name="57-430" id="inlineRadio2" value="Tidak" onclick="discb('disablecb3')" >
                                              <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                            </div>
                                          </div> 
                                          <div class="col-lg-9 card border-left-info shadow">
                                            <div class="card-body">
                                              <div class="row no-gutters align-items-center">
                                                <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">(berikan tanda √ pada kolom checklist di bawah ini, jika poin 1.2. dinyatakan YA/ADA).</p>
                                              </div>
                                            </div>
                                          </div>

                                          <ul class=" mt-2">
                                            <div class="row">
                                              <div class="col-lg-6">
                                                <dd>Buku Agenda</dd>
                                              </div>
                                              <div class="form-group col-lg-1 mx-3">                
                                                <input type="checkbox" id="vehicle1" name="57-431"  style="width: 20px; height:20px" onclick="disradio('disrad4',2)">               
                                              </div>
                                            </div>

                                            <div class="row">
                                              <div class="col-lg-6">
                                                <dd>Kartu Kendali</dd>
                                              </div>
                                              <div class="form-group col-lg-1 mx-3">                
                                                <input type="checkbox" id="vehicle1" name="57-432"  style="width: 20px; height:20px" onclick="disradio('disrad4',2)">               
                                              </div>
                                            </div>

                                            <div class="row">
                                              <div class="col-lg-6">
                                                <dd>Takah</dd>
                                              </div>
                                              <div class="form-group col-lg-1 mx-3">                
                                                <input type="checkbox" id="vehicle1" name="57-433"  style="width: 20px; height:20px" onclick="disradio('disrad4',2)">               
                                              </div>
                                            </div>

                                            <div class="row">
                                              <div class="col-lg-6">
                                                <dd>Agenda Elektronik</dd>
                                              </div>
                                              <div class="form-group col-lg-1 mx-3">                
                                                <input type="checkbox" id="vehicle1" name="57-434"  style="width: 20px; height:20px" onclick="disradio('disrad4',2)">               
                                              </div>
                                            </div>
                                          </ul>   
                                        </li>
                                        <li class="py-2">Pengarahan 
                                          <div class="yatidak">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="57-435" id="inlineRadio1" value="Ya" >
                                              <label class="form-check-label" for="inlineRadio1">Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline ">
                                              <input class="form-check-input" type="radio" name="57-435" id="inlineRadio2" value="Tidak" >
                                              <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                            </div>
                                          </div>
                                        </li>
                                        <li class="py-2">Penyampaian 
                                          <div class="yatidak">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="57-436" id="inlineRadio1" value="Ya" >
                                              <label class="form-check-label" for="inlineRadio1">Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline ">
                                              <input class="form-check-input" type="radio" name="57-436" id="inlineRadio2" value="Tidak" >
                                              <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                            </div>
                                          </div>
                                        </li>
                                      </ol>
                                    </li>
                                  </ol>
                                  <h6>C. KETENTUAN TAMBAHAN</h6>
                                   <div class="row mt-3">
                                    <div class="col-lg-10 col-sm-1 card border border-left-danger shadow h-100 py-2 mx-5">
                                      <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                          <div class="col mr-2">                    
                                            <p class="mb-0 font-weight-bold text-danger text-justify" style="font-size: 13px;">(Apabila pencipta arsip memiliki ketentuan internal yang perlu ditambahkan, berikan tanda √ pada kolom cheklist di samping dan berikan nilai pada kolom yang tersedia maksimal 200).</p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-lg-1">
                                        <input onclick="setnumber('fromcheck','tonumber')" type="checkbox" id="fromcheck" name="57-437" value="Bike" style="width: 30px; height:30px" >               
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row mt-3">
                                    <p class="mx-5">Nilai total pemenuhan ketentuan internal</p>
                                    <div class="form-group col-lg-3 mx-5">                
                                      <input type="number" onchange="setmax('tonumber')" id="tonumber" name="57-438" min="1" max="200" disabled style="width: 70px; height:35px">
                                    </div>
                                  </div>                               
                              </div> <!-- end form card no1-->                              
                              <input type="button" name="next" class="next action-button" value="Next Step" />
                              </fieldset>


                              <fieldset id="no2">
                                <div class="form-card">
                                  <h1 class="h4 text-gray-900 text-center mt-5"> SUB ASPEK PENGGUNAAN ARSIP</h1>
                                  <div class="row mt-3">
                                    <div class="col-lg-10 col-sm-1 card border border-left-warning shadow h-100 py-2 mx-5">
                                      <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                          <div class="col mr-2">                    
                                            <p class="mb-0 font-weight-bold text-warning text-justify" style="font-size: 13px;">Jika Perguruan Tinggi Negeri tidak memiliki kebijakan Sistem Klasifikasi Keamanan dan Akses Arsip Dinamis,  berikan tanda √ dalam kolom disamping, dan seluruh pertanyaan di bawah dinyatakan  "Tidak/Belum".</p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-lg-1">
                                        <input type="checkbox" id="vehicle1" name="59-464" value="Bike" style="width: 30px; height:30px" onclick="disall('no2',1)" >               
                                      </div>
                                    </div>
                                  </div>

                                  <ol class="daftar">
                                    <li class="py-2">Ketersediaan Arsip Aktif
                                      <div class="yatidak">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="58-441" id="inlineRadio1" value="Ya">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="58-441" id="inlineRadio2" value="Tidak">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>
                                    </li>
                                    <li class="py-2">Sarana Peminjaman Arsip
                                      <ol class="daftar">
                                        <li class="py-2">Unit pengolah menggunakan Out Indicator untuk mengganti arsip yang sedang dipinjam
                                          <div class="yatidak">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="58-444" id="inlineRadio1" value="Ya">
                                              <label class="form-check-label" for="inlineRadio1">Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline ">
                                              <input class="form-check-input" type="radio" name="58-444" id="inlineRadio2" value="Tidak">
                                              <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                            </div>
                                          </div>
                                          <div class="col-lg-9 card border-left-info shadow ">
                                            <div class="card-body">
                                              <div class="row no-gutters align-items-center">
                                                <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">(Out Indicator yang dimaksud pada poin 2.1 dapat berupa Out Sheet, Out Guide, Out Boks, atau sarana yang sejenis).</p>
                                              </div>
                                            </div>
                                          </div>
                                        </li>
                                        <li class="py-2">Buku Peminjaman/Formulir Peminjaman
                                          <div class="yatidak">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="58-445" id="inlineRadio1" value="Ya">
                                              <label class="form-check-label" for="inlineRadio1">Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline ">
                                              <input class="form-check-input" type="radio" name="58-445" id="inlineRadio2" value="Tidak">
                                              <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                            </div>
                                          </div>
                                        </li>
                                      </ol>
                                    </li>
                                    <li class="py-2">Penyajian Arsip Aktif
                                      <ol class="daftar">
                                        <li class="py-2">Penyajian arsip aktif bagi kepentingan pengguna internal
                                          <ol class="daftar">
                                            <li class="py-2">Unit Pengolah menyajikan arsip aktif untuk kepentingan pengguna internal
                                              <div class="yatidak">
                                                <div class="form-check form-check-inline">
                                                  <input class="form-check-input" type="radio" name="58-447" id="inlineRadio1" value="Ya">
                                                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline ">
                                                  <input class="form-check-input" type="radio" name="58-447" id="inlineRadio2" value="Tidak">
                                                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                </div>
                                              </div>
                                              <ol class="a mt-3">
                                                <div class="row">
                                                  <div class="col-lg-8">
                                                    <dd>a. Penentu Kebijakan</dd>
                                                  </div>
                                                  <div class="form-group col-lg-1 mx-3">
                                                    <input type="checkbox" id="vehicle1" name="58-448" style="width: 20px; height:20px" value="Penentu Kebijakan">               
                                                  </div>
                                                </div>

                                                <div class="row">
                                                  <div class="col-lg-8">
                                                    <dd>b. Pelaksana Kebijakan</dd>
                                                  </div>
                                                  <div class="form-group col-lg-1 mx-3">
                                                    <input type="checkbox" id="vehicle1" name="58-449" style="width: 20px; height:20px" value="Pelaksana Kebijakan">              
                                                  </div>
                                                </div>

                                                <div class="row">
                                                  <div class="col-lg-8">
                                                    <dd>c. Pengawas Internal</dd>
                                                  </div>
                                                  <div class="form-group col-lg-1 mx-3">
                                                    <input type="checkbox" id="vehicle1" name="58-450" style="width: 20px; height:20px" value="Pengawas Internal">               
                                                  </div>
                                                </div>
                                              </ol>
                                            </li>
                                            <li class="py-2">Unit Pengolah menyajikan arsip aktif  untuk kepentingan pengguna internal berdasarkan sistem <br>klasifikasi keamanan dan akses arsip dinamis
                                              <div class="yatidak">
                                                <div class="form-check form-check-inline">
                                                  <input class="form-check-input" type="radio" name="58-451" id="inlineRadio1" value="Ya">
                                                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline ">
                                                  <input class="form-check-input" type="radio" name="58-451" id="inlineRadio2" value="Tidak">
                                                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                </div>
                                              </div>
                                            </li>
                                          </ol>
                                        </li>
                                        <li class="py-2">Penyajian arsip aktif bagi kepentingan pengguna eksternal
                                          <ol class="daftar">
                                            <li class="py-2">Unit pengolah menyajikan arsip aktif untuk kepentingan pengguna eksternal
                                              <div class="yatidak">
                                                <div class="form-check form-check-inline">
                                                  <input class="form-check-input" type="radio" name="58-453" id="inlineRadio1" value="Ya">
                                                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline ">
                                                  <input class="form-check-input" type="radio" name="58-453" id="inlineRadio2" value="Tidak">
                                                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                </div>
                                              </div>
                                              <ol class="a mt-3">
                                                <div class="row">
                                                  <div class="col-lg-8">
                                                    <dd>a. Publik/Masyarakat</dd>
                                                  </div>
                                                  <div class="form-group col-lg-1 mx-3">
                                                    <input type="checkbox" id="vehicle1" name="58-454" style="width: 20px; height:20px" value="Publik/Masyarakat">               
                                                  </div>
                                                </div>

                                                <div class="row">
                                                  <div class="col-lg-8">
                                                    <dd>b. Pengawas Eksternal</dd>
                                                  </div>
                                                  <div class="form-group col-lg-1 mx-3">
                                                    <input type="checkbox" id="vehicle1" name="58-455" style="width: 20px; height:20px" value="Pengawas Eksternal">              
                                                  </div>
                                                </div>

                                                <div class="row">
                                                  <div class="col-lg-8">
                                                    <dd>c. Penegak Hukum</dd>
                                                  </div>
                                                  <div class="form-group col-lg-1 mx-3">
                                                    <input type="checkbox" id="vehicle1" name="58-456" style="width: 20px; height:20px" value="Penegak Hukum">               
                                                  </div>
                                                </div>
                                              </ol>
                                            </li>
                                            <li class="py-2">Unit Pengolah menyajikan arsip aktif  untuk kepentingan pengguna eksternal berdasarkan <br>sistem klasifikasi keamanan dan akses arsip dinamis
                                              <div class="yatidak">
                                                <div class="form-check form-check-inline">
                                                  <input class="form-check-input" type="radio" name="58-457" id="inlineRadio1" value="Ya">
                                                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline ">
                                                  <input class="form-check-input" type="radio" name="58-457" id="inlineRadio2" value="Tidak">
                                                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                </div>
                                              </div>
                                            </li>
                                          </ol>
                                        </li>
                                      </ol>
                                    </li>  
                                  </ol>





                                </div> <!-- end formcard no2 -->

                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
                                <input type="button" name="next" class="next action-button" value="Next Step" />
                              </fieldset>


                              <fieldset id="no3">
                                <div class="form-card">
                                  <h1 class="h4 text-gray-900 text-center mt-5"> SUB ASPEK PEMELIHARAAN ARSIP INAKTIF</h1>
                                  <div class="row mt-3">
                                    <div class="col-lg-10 col-sm-1 card border border-left-warning shadow h-100 py-2 mx-5">
                                      <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                          <div class="col mr-2">                    
                                            <p class="mb-0 font-weight-bold text-warning text-justify" style="font-size: 13px;">Jika Pemerintah Daerah belum menetapkan Klasifikasi Arsip di lingkungannya, berikan tanda √ pada kolom checklist di samping ini, dan seluruh pertanyaan di bawah dinyatakan "Tidak/Belum".</p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-lg-1">
                                        <input type="checkbox" id="vehicle1" name="59-464" value="Bike" style="width: 30px; height:30px" onclick="disall('no3',1)">               
                                      </div>
                                    </div>
                                  </div>
                                  <ol class="daftar">
                                    <li id="ngecheck2" class="py-2">Pemberkasan Arsip Aktif


                                      <ol class="daftar">
                                        <li class="py-2" id="oriradio5">Unit pengolah melaksanakan pemberkasan arsip aktif
                                          <div class="yatidak">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="59-465" onclick="ngecheck('ngecheck2','1')" id="inlineRadio1" value="Ya">
                                              <label class="form-check-label" for="inlineRadio1">Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline ">
                                              <input class="form-check-input" type="radio" name="59-465" onclick="ngecheck('ngecheck2','1')" id="inlineRadio2" value="Tidak">
                                              <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                            </div>
                                          </div>
                                          <div class="col-lg-9 card border-left-info shadow ">
                                            <div class="card-body">
                                              <div class="row no-gutters align-items-center">
                                                <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Jika unit pengolah tidak melaksanakan pemberkasan arsip aktif, maka seluruh pertanyaan pada poin 1.2., 1.3., 1.4., 1.5., dan 1.6. di bawah ini harus dinyatakan "Tidak".</p>
                                              </div>
                                            </div>
                                          </div>     
                                        </li>
                                        <li class="py-2" id="destradio7">Unit Pengolah melaksanakan pemberkasan arsip aktif terhadap arsip yang dibuat dan diterima
                                          <div class="yatidak">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="59-466" id="inlineRadio1" value="Ya" disabled>
                                              <label class="form-check-label" for="inlineRadio1">Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline ">
                                              <input class="form-check-input" type="radio" name="59-466" id="inlineRadio2" value="Tidak" disabled>
                                              <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                            </div>
                                          </div>
                                          <div class="col-lg-9 card border-left-info shadow ">
                                            <div class="card-body">
                                              <div class="row no-gutters align-items-center">
                                                <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Jika pemberkasan arsip aktif hanya dilakukan terhadap arsip yang dibuat saja atau hanya terhadap arsip yang diterima saja, maka pertanyaan pada angka 1.2. di atas harus dinyatakan "Tidak", dan berikan tanda √ pada kolom dibawah ini sesuai kondisi faktual.</p>
                                              </div>
                                            </div>
                                          </div>
                                          <ol class="a mt-2">
                                            <div class="row">
                                              <div class="col-lg-6">
                                                <dd>- Hanya dilakukan terhadap arsip yang dibuat</dd>
                                              </div>
                                              <div class="form-group col-lg-1 mx-3">                
                                                <input type="checkbox" id="vehicle1" name="59-467" onclick="disradio('destradio7',2)" style="width: 20px; height:20px">               
                                              </div>
                                            </div>

                                            <div class="row">
                                              <div class="col-lg-6">
                                                <dd>- Hanya dilakukan terhadap arsip yang diterima</dd>
                                              </div>
                                              <div class="form-group col-lg-1 mx-3">                
                                                <input type="checkbox" id="vehicle1" name="59-468" onclick="disradio('destradio7',2)" style="width: 20px; height:20px">               
                                              </div>
                                            </div>
                                          </ol> 
                                        </li>
                                        <li class="py-2">Unit Pengolah melaksanakan pemberkasan arsip aktif sesuai klasifikasi arsip 
                                          <div class="yatidak">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="59-469" id="inlineRadio1" value="Ya" >
                                              <label class="form-check-label" for="inlineRadio1">Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline ">
                                              <input class="form-check-input" type="radio" name="59-469" id="inlineRadio2" value="Tidak" >
                                              <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                            </div>
                                          </div>  
                                        </li>
                                        <li class="py-2" id="oriradio4">Unit pengolah menyusun daftar arsip aktif
                                          <div class="yatidak">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="59-470" id="inlineRadio1" value="Ya" onclick="copyradio3('oriradio4','destradio5','destradio6')">
                                              <label class="form-check-label" for="inlineRadio1">Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline ">
                                              <input class="form-check-input" type="radio" name="59-470" id="inlineRadio2" value="Tidak" onclick="copyradio3('oriradio4','destradio5','destradio6')">
                                              <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                            </div>
                                          </div>
                                          <div class="col-lg-9 card border-left-info shadow  ">
                                            <div class="card-body">
                                              <div class="row no-gutters align-items-center">
                                                <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Jika unit pengolah tidak menyusun daftar arsip aktif, maka seluruh pertanyaan pada angka 1.5. dan 1.6. di bawah ini harus dinyatakan "Tidak".</p>
                                              </div>
                                            </div>
                                          </div>  
                                        </li>


                                        <li class="py-2" id="destradio6">Daftar arsip aktif disusun oleh Unit Pengolah telah memuat seluruh informasi pada daftar arsip aktif sesuai ketentuan <br>peraturan perundang-undangan.
                                          <div class="yatidak">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="59-471" id="inlineRadio1" value="Ya" disabled>
                                              <label class="form-check-label" for="inlineRadio1">Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline ">
                                              <input class="form-check-input" type="radio" name="59-471" id="inlineRadio2" value="Tidak" disabled>
                                              <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                            </div>
                                          </div>
                                          <div class="col-lg-9 card border-left-info shadow">
                                            <div class="card-body">
                                              <div class="row no-gutters align-items-center">
                                                <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Berikan tanda √ pada kolom di bawah ini sesuai kondisi faktual pada daftar arsip aktif yang telah disusun, jika seluruh kolom di bawah ini dinyatakan 'Ada" maka pertanyaan poin 1.5 di atas harus dinyatakan "Ya", namun jika terdapat kolom di bawah ini yang dinyatakan "Tidak Ada/Kosong" maka pertanyaan poin 1.5. di atas harus dinyatakan "Tidak".</p>
                                              </div>
                                            </div>
                                          </div>
                                          <hr>
                                          <div class="row">
                                            <p class="col-lg-6">Daftar berkas:</p>
                                            <label class="col-lg-1 form-check-label mx-4" for="inlineRadio2">ADA</label>
                                          </div>
                                          <ol class="a mt-1">
                                            <div class="row">
                                              <div class="col-lg-6">
                                                <dd>a. unit pengolah</dd>
                                              </div>
                                              <div class="form-group col-lg-1 mx-3">                
                                                <input type="checkbox" id="vehicle1" name="59-472" value="unit pengolah" style="width: 20px; height:20px" onclick="disradio('destradio6',14)">               
                                              </div>
                                            </div>

                                            <div class="row">
                                              <div class="col-lg-6">
                                                <dd>b. nomor berkas</dd>
                                              </div>
                                              <div class="form-group col-lg-1 mx-3">                
                                                <input type="checkbox" id="vehicle1" name="59-473" value="nomor berkas" style="width: 20px; height:20px" onclick="disradio('destradio6',14)">               
                                              </div>
                                            </div>

                                            <div class="row">
                                              <div class="col-lg-6">
                                                <dd>c. kode klasifikasi</dd>
                                              </div>
                                              <div class="form-group col-lg-1 mx-3">                
                                                <input type="checkbox" id="vehicle1" name="59-474" value="kode klasifikasi" style="width: 20px; height:20px" onclick="disradio('destradio6',14)">               
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-lg-6">
                                                <dd>d. uraian informasi berkas</dd>
                                              </div>
                                              <div class="form-group col-lg-1 mx-3">                
                                                <input type="checkbox" id="vehicle1" name="59-475" value="uraian informasi berkas" style="width: 20px; height:20px" onclick="disradio('destradio6',14)">               
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-lg-6">
                                                <dd>e. kurun waktu</dd>
                                              </div>
                                              <div class="form-group col-lg-1 mx-3">                
                                                <input type="checkbox" id="vehicle1" name="59-476" value="kurun waktu" style="width: 20px; height:20px" onclick="disradio('destradio6',14)">               
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-lg-6">
                                                <dd>f. jumlah</dd>
                                              </div>
                                              <div class="form-group col-lg-1 mx-3">                
                                                <input type="checkbox" id="vehicle1" name="59-477" value="jumlah" style="width: 20px; height:20px" onclick="disradio('destradio6',14)">               
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-lg-6">
                                                <dd>g. keterangan</dd>
                                              </div>
                                              <div class="form-group col-lg-1 mx-3">                
                                                <input type="checkbox" id="vehicle1" name="59-478" value="keterangan" style="width: 20px; height:20px" onclick="disradio('destradio6',14)">               
                                              </div>
                                            </div>
                                          </ol>

                                          <hr>
                                          <div class="row">
                                            <p class="col-lg-6">Daftar isi berkas:</p>
                                            <label class="col-lg-1 form-check-label mx-4" for="inlineRadio2">ADA</label>
                                          </div>
                                          <ol class="a mt-1">
                                            <div class="row">
                                              <div class="col-lg-6">
                                                <dd>a. nomor berkas</dd>
                                              </div>
                                              <div class="form-group col-lg-1 mx-3">                
                                                <input type="checkbox" id="vehicle1" name="59-480" value="unit pengolah" style="width: 20px; height:20px" onclick="disradio('destradio6',14)">               
                                              </div>
                                            </div>

                                            <div class="row">
                                              <div class="col-lg-6">
                                                <dd>b. nomor item arsip</dd>
                                              </div>
                                              <div class="form-group col-lg-1 mx-3">                
                                                <input type="checkbox" id="vehicle1" name="59-481" value="nomor berkas" style="width: 20px; height:20px" onclick="disradio('destradio6',14)">               
                                              </div>
                                            </div>

                                            <div class="row">
                                              <div class="col-lg-6">
                                                <dd>c. kode klasifikasi</dd>
                                              </div>
                                              <div class="form-group col-lg-1 mx-3">                
                                                <input type="checkbox" id="vehicle1" name="59-482" value="kode klasifikasi" style="width: 20px; height:20px" onclick="disradio('destradio6',14)">               
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-lg-6">
                                                <dd>d. uraian informasi arsip</dd>
                                              </div>
                                              <div class="form-group col-lg-1 mx-3">                
                                                <input type="checkbox" id="vehicle1" name="59-483" value="uraian informasi berkas" style="width: 20px; height:20px" onclick="disradio('destradio6',14)">               
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-lg-6">
                                                <dd>e. tanggal</dd>
                                              </div>
                                              <div class="form-group col-lg-1 mx-3">                
                                                <input type="checkbox" id="vehicle1" name="59-484" value="tanggal" style="width: 20px; height:20px" onclick="disradio('destradio6',14)">               
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-lg-6">
                                                <dd>f. jumlah</dd>
                                              </div>
                                              <div class="form-group col-lg-1 mx-3">                
                                                <input type="checkbox" id="vehicle1" name="59-485" value="jumlah" style="width: 20px; height:20px" onclick="disradio('destradio6',14)">               
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-lg-6">
                                                <dd>g. keterangan</dd>
                                              </div>
                                              <div class="form-group col-lg-1 mx-3">                
                                                <input type="checkbox" id="vehicle1" name="59-486" value="keterangan" style="width: 20px; height:20px" onclick="disradio('destradio6',14)">               
                                              </div>
                                            </div>
                                          </ol>
                                          <li id="destradio5">Unit Pengolah menyampaian daftar arsip aktifnya kepada Unit Kearsipan paling lama 6 (enam) bulan setelah <br>pelaksanaan kegiatan
                                            <div class="yatidak">
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="59-487" id="inlineRadio1" value="Ya">
                                                <label class="form-check-label" for="inlineRadio1">Ya</label>
                                              </div>
                                              <div class="form-check form-check-inline ">
                                                <input class="form-check-input" type="radio" name="59-487" id="inlineRadio2" value="Tidak">
                                                <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                              </div>
                                            </div>             
                                          </li>
                                        </ol>

                                      </li>


                                    </li>
                                    <li class="py-2">Penyimpanan Arsip Aktif
                                      <ol class="daftar">
                                        <li class="py-2">Unit pengolah melaksanakan penyimpanan arsip
                                          <div class="yatidak">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="59-488" id="inlineRadio1" value="Ya">
                                              <label class="form-check-label" for="inlineRadio1">Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline ">
                                              <input class="form-check-input" type="radio" name="59-488" id="inlineRadio2" value="Tidak">
                                              <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                            </div>
                                          </div>
                                        </li>
                                        <li class="py-2">Seluruh arsip yang disimpan oleh unit pengolah telah terdaftar ke dalam daftar arsip aktif
                                          <div class="yatidak">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="59-489" id="inlineRadio1" value="Ya">
                                              <label class="form-check-label" for="inlineRadio1">Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline ">
                                              <input class="form-check-input" type="radio" name="59-489" id="inlineRadio2" value="Tidak">
                                              <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                            </div>
                                          </div>
                                          <div class="col-lg-9 card border-left-info shadow ">
                                            <div class="card-body">
                                              <div class="row no-gutters align-items-center">
                                                <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Jika terdapat arsip yang telah disimpan namun belum terdaftar di dalam daftar arsip aktif, maka pertanyaan poin 2.2 di atas harus dinyatakan "Tidak".</p>
                                              </div>
                                            </div>
                                          </div>  
                                        </li>
                                        <li class="py-2">Arsip yang disimpan oleh unit pengolah tidak melewati retensi arsip aktif sesuai Jadwal Retensi Arsip (JRA)
                                          <div class="yatidak">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="59-490" id="inlineRadio1" value="Ya">
                                              <label class="form-check-label" for="inlineRadio1">Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline ">
                                              <input class="form-check-input" type="radio" name="59-490" id="inlineRadio2" value="Tidak">
                                              <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                            </div>
                                          </div>
                                        </li>
                                        <li class="py-2">Arsip aktif disimpan menggunakan sarana penyimpanan arsip yang sesuai
                                          <div class="yatidak">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="59-491" id="inlineRadio1" value="Ya">
                                              <label class="form-check-label" for="inlineRadio1">Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline ">
                                              <input class="form-check-input" type="radio" name="59-491" id="inlineRadio2" value="Tidak">
                                              <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                            </div>
                                          </div>
                                          <br>
                                          <div class="row mt-3">
                                            <div class="col-lg-6">
                                              <p>Isikan persentase jumlah arsip aktif yang disimpan menggunakan sarana penyimpanan yang sesuai</p>
                                            </div>
                                            <div class="form-check-inline col-lg-1 mx-5">                
                                              <input type="text" id="vehicle1" name="59-492" style="width: 30px; height:30px">
                                              <label class="form-check-label" for="inlineRadio2"> %</label>               
                                            </div>
                                          </div>   
                                        </li>
                                      </ol>

                                    </li>
                                    <li class="py-2" id="no97" onload="disss('no97')">Alih Media Arsip Aktif
                                      <div class="row">
                                        <div class="col-lg-11">
                                          <p>Unit Kearsipan melaksanakan alih media arsip inaktif.</p>
                                        </div>
                                        <div class="form-group col-lg-1 ">                
                                          <input type="checkbox" id="vehicle1" name="59-493" value="Bike" style="width: 25px; height:25px" onclick="ngedis('no97')">               
                                        </div>
                                      </div>
                                      <div class="col-lg-9 card border-left-info shadow ">
                                        <div class="card-body">
                                          <div class="row no-gutters align-items-center">
                                            <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Jika Unit Pengolah melaksanakan alih media arsip aktif, maka berikan tanda √ pada kolom di atas dan berikan tanda √ pada poin informasi di bawah ini sesuai kondisi faktual. Namun, jika Unit Pengolah tidak melaksanakan alih media arsip aktif maka kosongkan dan jangan memberikan tanda apapun pada seluruh kolom informasi yang terkait dengan sub aspek alih media pada formulir ini. </p>
                                          </div>
                                        </div>
                                      </div>
                                      <ol class="daftar">
                                        <div class="row">
                                          <div class="col-lg-11">
                                            <li class="py-2">Arsip aktif yang dialihmediakan tetap disimpan oleh Unit Pengolah.</li>
                                          </div>
                                          <div class="form-group col-lg-1 ">                
                                            <input type="checkbox" id="vehicle1" name="59-494" value="Bike" style="width: 25px; height:25px" disabled>               
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-lg-11">
                                            <li class="py-2">Alih media arsip aktif diautentikasi oleh pimpinan di lingkungan pencipta arsip dengan memberikan tanda tertentu <br>yang dilekatkan, terasosiasi atau terkait dengan arsip hasil alih media.</li>
                                          </div>
                                          <div class="form-group col-lg-1 ">                
                                            <input type="checkbox" id="vehicle1" name="59-495" value="Bike" style="width: 25px; height:25px" disabled>               
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-lg-11">
                                            <li class="py-2">Pelaksanaan alih media arsip aktif disertai dengan pembuatan berita acara alih media arsip.</li>
                                          </div>
                                          <div class="form-group col-lg-1 ">                
                                            <input type="checkbox" id="vehicle1" name="59-496" value="Bike" style="width: 25px; height:25px" disabled>               
                                          </div>
                                        </div>
                                        <div class="row" id="discheck">
                                          <div class="col-lg-11">
                                            <li class="py-2" >Berita acara alih media arsip aktif telah disusun sesuai ketentuan peraturan perundang-undangan.
                                            </li>
                                          </div>
                                          <div class="form-group col-lg-1 ">                
                                            <input type="checkbox" id="vehicle1" name="59-497" value="Bike" style="width: 25px; height:25px" disabled>               
                                          </div>

                                          <div class="col-lg-9 card border-left-info shadow mt-3 ">
                                            <div class="card-body">
                                              <div class="row no-gutters align-items-center">
                                                <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">'Berikan tanda √ pada kolom informasi di bawah ini sesuai kondisi faktual pada berita acara alih media arsip aktif yang telah disusun, jika seluruh kolom di bawah ini dinyatakan "Ada" maka kolom informasi pada poin 3.4 harus dinyatakan "Ya" dan berikan tanda √, namun jika terdapat kolom di bawah ini yang dinyatakan "Tidak Ada/Kosong" maka jangan memberikan tanda apapun di dalam kolom/kosongkan informasi pada poin 3.4.</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-lg-12">Berita acara alih media arsip aktif memuat informasi:</div>
                                          <ol class="a mt-3">
                                            <div class="row">
                                              <div class="col-lg-8">
                                                <dd>a. waktu pelaksanaan</dd>
                                              </div>
                                              <div class="form-group col-lg-1 mx-3">                
                                                <input type="checkbox" id="vehicle1" name="59-498" style="width: 20px; height:20px" onclick="discheck('discheck',7)">               
                                              </div>
                                            </div>

                                            <div class="row">
                                              <div class="col-lg-8">
                                                <dd>b. tempat pelaksanaan</dd>
                                              </div>
                                              <div class="form-group col-lg-1 mx-3">                
                                                <input type="checkbox" id="vehicle1" name="59-499" style="width: 20px; height:20px" onclick="discheck('discheck',7)">               
                                              </div>
                                            </div>

                                            <div class="row">
                                              <div class="col-lg-8">
                                                <dd>c. jenis media</dd>
                                              </div>
                                              <div class="form-group col-lg-1 mx-3">                
                                                <input type="checkbox" id="vehicle1" name="59-500" style="width: 20px; height:20px" onclick="discheck('discheck',7)">               
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-lg-8">
                                                <dd>d. jumlah arsip</dd>
                                              </div>
                                              <div class="form-group col-lg-1 mx-3">                
                                                <input type="checkbox" id="vehicle1" name="59-501" style="width: 20px; height:20px" onclick="discheck('discheck',7)">               
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-lg-8">
                                                <dd>e. keterangan proses alih media yang dilakukan</dd>
                                              </div>
                                              <div class="form-group col-lg-1 mx-3">                
                                                <input type="checkbox" id="vehicle1" name="59-502" style="width: 20px; height:20px" onclick="discheck('discheck',7)">               
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-lg-8">
                                                <dd>f. pelaksana</dd>
                                              </div>
                                              <div class="form-group col-lg-1 mx-3">                
                                                <input type="checkbox" id="vehicle1" name="59-503" style="width: 20px; height:20px" onclick="discheck('discheck',7)">               
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-lg-8">
                                                <dd>g. penandatangan oleh pimpinan unit pengolah.</dd>
                                              </div>
                                              <div class="form-group col-lg-1 mx-3">                
                                                <input type="checkbox" id="vehicle1" name="59-504" style="width: 20px; height:20px" onclick="discheck('discheck',7)">               
                                              </div>
                                            </div>
                                          </ol>

                                        </div>

                                        <div class="row" >
                                          <div class="col-lg-11">
                                            <li class="py-2">Pelaksanaan alih media arsip aktif disertai dengan pembuatan daftar arsip aktif yang dialihmediakan.</li>
                                          </div>
                                          <div class="form-group col-lg-1 ">                
                                            <input type="checkbox" id="vehicle1" name="59-505"  style="width: 25px; height:25px" disabled>               
                                          </div>
                                        </div>

                                      </li>
                                      <div class="row" id="discheck2">
                                        <div class="col-lg-11">
                                          <li class="py-2">Daftar arsip aktif yang dialihmediakan telah disusun sesuai ketentuan peraturan perundang-undangan.</li>
                                        </div>
                                        <div class="form-group col-lg-1 ">                
                                          <input type="checkbox" id="vehicle1" name="59-506" value="Bike" style="width: 25px; height:25px" disabled>               
                                        </div>

                                        <div class="col-lg-9 card border-left-info shadow h-100 mt-3 ">
                                          <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                              <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Berikan tanda √ pada kolom informasi di bawah ini sesuai kondisi faktual pada daftar arsip aktif  yang dialihmediakan yang telah disusun, jika seluruh kolom di bawah ini dinyatakan "Ada" maka kolom informasi pada poin 3.6 harus dinyatakan "Ya" dan berikan tanda √, namun jika terdapat kolom di bawah ini yang dinyatakan "Tidak Ada/Kosong" maka jangan memberikan tanda apapun di dalam kolom/kosongkan informasi pada poin 3.6 di atas.</p>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-lg-12">Daftar arsip aktif yang dialihmediakan memuat informasi:</div>
                                        <ol class="a mt-3">
                                          <div class="row">
                                            <div class="col-lg-8">
                                              <dd>a. unit pengolah</dd>
                                            </div>
                                            <div class="form-group col-lg-1 mx-3">                
                                              <input type="checkbox" id="vehicle1" name="59-507" style="width: 20px; height:20px" onclick="discheck('discheck2',6)">               
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-lg-8">
                                              <dd>b. nomor urut</dd>
                                            </div>
                                            <div class="form-group col-lg-1 mx-3">                
                                              <input type="checkbox" id="vehicle1" name="59-508" style="width: 20px; height:20px" onclick="discheck('discheck2',6)">               
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-lg-8">
                                              <dd>c. jenis arsip</dd>
                                            </div>
                                            <div class="form-group col-lg-1 mx-3">                
                                              <input type="checkbox" id="vehicle1" name="59-509" style="width: 20px; height:20px" onclick="discheck('discheck2',6)">               
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-lg-8">
                                              <dd>d. jumlah arsip</dd>
                                            </div>
                                            <div class="form-group col-lg-1 mx-3">                
                                              <input type="checkbox" id="vehicle1" name="59-510" style="width: 20px; height:20px" onclick="discheck('discheck2',6)">               
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-lg-8">
                                              <dd>e. kurun waktu</dd>
                                            </div>
                                            <div class="form-group col-lg-1 mx-3">                
                                              <input type="checkbox" id="vehicle1" name="59-511" style="width: 20px; height:20px" onclick="discheck('discheck2',6)">               
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-lg-8">
                                              <dd>f.  Keterangan</dd>
                                            </div>
                                            <div class="form-group col-lg-1 mx-3">                
                                              <input type="checkbox" id="vehicle1" name="59-512" style="width: 20px; height:20px" onclick="discheck('discheck2',6)">               
                                            </div>
                                          </div>
                                        </ol>

                                      </div>
                                    </ol>
                                  </li>
                                  TEKAN KENE JS E
                                  <li class="py-2" id="no513">Pemeliharaan Arsip Vital
                                    <ol class="daftar">
                                      <li class="py-2">Unit pengolah menyimpan arsip vital          

                                        <div class="yatidak">
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="59-513" id="inlineRadio1" value="Ya">
                                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                                          </div>
                                          <div class="form-check form-check-inline ">
                                            <input class="form-check-input" type="radio" name="59-513" id="inlineRadio2" value="Tidak">
                                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                          </div>
                                        </div>
                                        <div class="row mt-3">
                                          <div class="col-lg-9 card border-left-info shadow h-100 mr-5 ">
                                            <div class="card-body">
                                              <div class="row no-gutters align-items-center">
                                                <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Seluruh pernyataan di bawah ini berlaku ketika Pemerintah Daerah telah menyusun Program Arsip Vital (pendataan/identifikasi arsip vital, perlindungan dan pengamanan arsip vital, penyelamatan dan pemulihan arsip vital)  atau telah memiliki Pedoman Pengelolaan Arsip Vital. Jika TIDAK ADA PROGRAM ARSIP VITAL ATAU PEDOMAN PENGELOLAAN ARSIP VITAL yang ditetapkan oleh pimpinan Pemerintah Daerah maka BERIKAN TANDA √  PADA KOLOM CHECKLIST/KOTAK DI SAMPING INI ! Dan seluruh pertanyaan di bawah harus dinyatakan "Tidak".</p>
                                              </div>
                                            </div>
                                          </div>  
                                          <div class="form-group">
                                            <div class="col-lg-1">
                                              <input type="checkbox" id="vehicle1" name="59-514" value="Bike" style="width: 30px; height:30px" onclick="ngecheck('no513','2')">               
                                            </div>
                                          </div>
                                        </div>

                                      </li>
                                      <li class="py-2">Identifikasi Arsip Vital
                                        <div class="row py-5">
                                          <div class="col-lg-9 card border-left-info shadow h-100 mr-5 ">
                                            <div class="card-body">
                                              <div class="row no-gutters align-items-center">
                                                <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Apabila berdasarkan hasil identifikasi program arsip vital, tidak terdapat arsip vital yang tercipta pada unit pengolah maka berikan tanda Cheklist  √ pada kotak di samping. </p>
                                              </div>
                                            </div>
                                          </div>  
                                          <div class="form-group">
                                            <div class="col-lg-1">
                                              <input type="checkbox" id="vehicle1"  name="59-516" value="Bike" style="width: 30px; height:30px" onclick="ngecheck('no513','3')">               
                                            </div>
                                          </div>
                                        </div>

                                        <ol class="daftar mt-3">
                                          <li class="py-2" id="oriradio">Melaksanakan kegiatan identifikasi arsip dengan pembuatan daftar arsip vital
                                            <div class="yatidak">
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="59-517" id="inlineRadio1" value="Ya" onclick="copyradio('oriradio','destradio')">
                                                <label class="form-check-label" for="inlineRadio1">Ya</label>
                                              </div>
                                              <div class="form-check form-check-inline ">
                                                <input class="form-check-input" type="radio" name="59-517" id="inlineRadio2" value="Tidak" onclick="copyradio('oriradio','destradio')">
                                                <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                              </div>
                                            </div>

                                            <div class="col-lg-9 card border-left-info shadow ">
                                              <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                  <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">(jika poin 4.2.1. dinyatakan "tidak", maka pada poin 4.2.2. di bawah ini juga harus dinyatakan "tidak").</p>
                                                </div>
                                              </div>
                                            </div>
                                          </li>
                                          <li class="py-2" id="destradio">Penyusunan daftar arsip vital memenuhi ketentuan peraturan perundang-undangan:
                                            <div class="yatidak">
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="59-518" id="inlineRadio1" value="Ya" disabled>
                                                <label class="form-check-label" for="inlineRadio1">Ya</label>
                                              </div>
                                              <div class="form-check form-check-inline ">
                                                <input class="form-check-input" type="radio" name="59-518" id="inlineRadio2" value="Tidak" disabled>
                                                <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                              </div>
                                            </div>

                                            <div class="col-lg-9 card border-left-info shadow  ">
                                              <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                  <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">(berikan tanda √ pada kolom checklist di bawah ini, sesuai komponen pada daftar arsip vital yang telah disusun, jika komponen di bawah ini tidak terpenuhi seluruhnya maka Poin 4.2.2 di atas harus dinyatakan "Tidak").</p>
                                                </div>
                                              </div>
                                            </div>
                                            <ol class="a mt-1">
                                              <div class="row">
                                                <div class="col-lg-6">
                                                  <dd>1) Nomor </dd>
                                                </div>
                                                <div class="form-group col-lg-1 mx-3">                
                                                  <input type="checkbox" id="vehicle1" name="59-519" value="pencipta arsip" onclick="disradio('destradio',8)" style="width: 20px; height:20px">               
                                                </div>
                                              </div>

                                              <div class="row">
                                                <div class="col-lg-6">
                                                  <dd>2) Jenis arsip</dd>
                                                </div>
                                                <div class="form-group col-lg-1 mx-3">                
                                                  <input type="checkbox" id="vehicle1" name="59-520" value="unit pengolah" onclick="disradio('destradio',8)" style="width: 20px; height:20px">               
                                                </div>
                                              </div>

                                              <div class="row">
                                                <div class="col-lg-6">
                                                  <dd>3) Unit kerja</dd>
                                                </div>
                                                <div class="form-group col-lg-1 mx-3">                
                                                  <input type="checkbox" id="vehicle1" name="59-521" value="nomor arsip" onclick="disradio('destradio',8)" style="width: 20px; height:20px">               
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col-lg-6">
                                                  <dd>4) Kurun waktu </dd>
                                                </div>
                                                <div class="form-group col-lg-1 mx-3">                
                                                  <input type="checkbox" id="vehicle1" name="59-522" value="kode klasifikasi" onclick="disradio('destradio',8)" style="width: 20px; height:20px">               
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col-lg-6">
                                                  <dd>5) Media</dd>
                                                </div>
                                                <div class="form-group col-lg-1 mx-3">                
                                                  <input type="checkbox" id="vehicle1" name="59-523" value="uraian informasi arsip" onclick="disradio('destradio',8)" style="width: 20px; height:20px">               
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col-lg-6">
                                                  <dd>6) Jumlah</dd>
                                                </div>
                                                <div class="form-group col-lg-1 mx-3">                
                                                  <input type="checkbox" id="vehicle1" name="59-524" value="kurun waktu" onclick="disradio('destradio',8)" style="width: 20px; height:20px">               
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col-lg-6">
                                                  <dd>7) Jangka simpan</dd>
                                                </div>
                                                <div class="form-group col-lg-1 mx-3">                
                                                  <input type="checkbox" id="vehicle1" name="59-525" value="jumlah" onclick="disradio('destradio',8)" style="width: 20px; height:20px">               
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col-lg-6">
                                                  <dd>8) Metode perlindungan</dd>
                                                </div>
                                                <div class="form-group col-lg-1 mx-3">                
                                                  <input type="checkbox" id="vehicle1" name="59-526" value="keterangan" onclick="disradio('destradio',8)" style="width: 20px; height:20px">               
                                                </div>
                                              </div>

                                            </ol>
                                          </li>
                                        </ol>

                                      </li>
                                      <li class="py-2">Pelindungan dan Pengamanan Dokumen/Arsip Vital Negara
                                        <ol class="daftar">
                                          <li class="py-2">Metode pelindungan arsip vital
                                            <div class="yatidak">
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="59-528" id="inlineRadio1" value="Ya">
                                                <label class="form-check-label" for="inlineRadio1">Ya</label>
                                              </div>
                                              <div class="form-check form-check-inline ">
                                                <input class="form-check-input" type="radio" name="59-528" id="inlineRadio2" value="Tidak">
                                                <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                              </div>
                                            </div>
                                            <ul class="mt-2">
                                              <div class="row">
                                                <div class="col-lg-6">
                                                  <dd>Duplikasi dan Pemencaran (dispersal)</dd>
                                                </div>
                                                <div class="form-group col-lg-3 mx-3">                
                                                  <input type="checkbox" id="vehicle1" name="59-529"  style="width: 20px; height:20px">

                                                </div>
                                              </div>

                                              <div class="row">
                                                <div class="col-lg-6">
                                                  <dd>Peralatan khusus (Vaulting)</dd>
                                                </div>
                                                <div class="form-group col-lg-3 mx-3">                
                                                  <input type="checkbox" id="vehicle1" name="59-530"  style="width: 20px; height:20px">

                                                </div>
                                              </div>
                                            </ul>
                                          </li>
                                          <li class="py-2">Pengamanan fisik
                                            <div class="yatidak">
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="59-531" id="inlineRadio1" value="Ya">
                                                <label class="form-check-label" for="inlineRadio1">Ya</label>
                                              </div>
                                              <div class="form-check form-check-inline ">
                                                <input class="form-check-input" type="radio" name="59-531" id="inlineRadio2" value="Tidak">
                                                <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                              </div>
                                            </div>
                                            <ul class="mt-2">
                                              <div class="row">
                                                <div class="col-lg-6">
                                                  <dd>Pengaturan akses</dd>
                                                </div>
                                                <div class="form-group col-lg-3 mx-3">                
                                                  <input type="checkbox" id="vehicle1" name="59-532"  style="width: 20px; height:20px">

                                                </div>
                                              </div>

                                              <div class="row">
                                                <div class="col-lg-6">
                                                  <dd>Pengaturan ruang simpan</dd>
                                                </div>
                                                <div class="form-group col-lg-3 mx-3">                
                                                  <input type="checkbox" id="vehicle1" name="59-533"style="width: 20px; height:20px">

                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col-lg-6">
                                                  <dd>Penggunaan sistem alarm</dd>
                                                </div>
                                                <div class="form-group col-lg-3 mx-3">                
                                                  <input type="checkbox" id="vehicle1" name="59-534"  style="width: 20px; height:20px">

                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col-lg-6">
                                                  <dd>Struktur bangunan</dd>
                                                </div>
                                                <div class="form-group col-lg-3 mx-3">                
                                                  <input type="checkbox" id="vehicle1" name="59-535"  style="width: 20px; height:20px">

                                                </div>
                                              </div>
                                            </ul>
                                          </li>
                                          <li class="py-2">Pengamanan informasi arsip
                                            <div class="yatidak">
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="59-536" id="inlineRadio1" value="Ya">
                                                <label class="form-check-label" for="inlineRadio1">Ya</label>
                                              </div>
                                              <div class="form-check form-check-inline ">
                                                <input class="form-check-input" type="radio" name="59-536" id="inlineRadio2" value="Tidak">
                                                <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                              </div>
                                            </div>
                                            <ul class="mt-2">
                                              <div class="row">
                                                <div class="col-lg-6">
                                                  <dd>Kartu identifikasi individu pengguna arsip</dd>
                                                </div>
                                                <div class="form-group col-lg-3 mx-3">                
                                                  <input type="checkbox" id="vehicle1" name="59-537"  style="width: 20px; height:20px">

                                                </div>
                                              </div>

                                              <div class="row">
                                                <div class="col-lg-6">
                                                  <dd>Mengatur akses petugas kearsipan</dd>
                                                </div>
                                                <div class="form-group col-lg-3 mx-3">                
                                                  <input type="checkbox" id="vehicle1" name="59-538"  style="width: 20px; height:20px">

                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col-lg-6">
                                                  <dd>Menyusun prosedur tetap</dd>
                                                </div>
                                                <div class="form-group col-lg-3 mx-3">                
                                                  <input type="checkbox" id="vehicle1" name="59-539"  style="width: 20px; height:20px">

                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col-lg-6">
                                                  <dd>Memberi kode rahasia kepada arsip </dd>
                                                </div>
                                                <div class="form-group col-lg-3 mx-3">                
                                                  <input type="checkbox" id="vehicle1" name="59-540"  style="width: 20px; height:20px">                                     
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col-lg-6">
                                                  <dd>Kontrol akses</dd>
                                                </div>
                                                <div class="form-group col-lg-3 mx-3">                
                                                  <input type="checkbox" id="vehicle1" name="59-541"  style="width: 20px; height:20px">                                     
                                                </div>
                                              </div>
                                            </ul>
                                          </li>
                                          <li class="py-2">Lokasi penyimpanan arsip vital
                                            <div class="yatidak">
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="59-542" id="inlineRadio1" value="Ya">
                                                <label class="form-check-label" for="inlineRadio1">Ya</label>
                                              </div>
                                              <div class="form-check form-check-inline ">
                                                <input class="form-check-input" type="radio" name="59-542" id="inlineRadio2" value="Tidak">
                                                <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                              </div>
                                            </div>
                                            <ul class="mt-2">
                                              <div class="row">
                                                <div class="col-lg-6">
                                                  <dd>Penyimpanan on site</dd>
                                                </div>
                                                <div class="form-group col-lg-3 mx-3">                
                                                  <input type="checkbox" id="vehicle1" name="59-543"  style="width: 20px; height:20px">

                                                </div>
                                              </div>

                                              <div class="row">
                                                <div class="col-lg-6">
                                                  <dd>Penyimpanan off site</dd>
                                                </div>
                                                <div class="form-group col-lg-3 mx-3">                
                                                  <input type="checkbox" id="vehicle1" name="59-544"  style="width: 20px; height:20px">

                                                </div>
                                              </div>
                                            </ul>
                                          </li>
                                          <p>URUNGGG BODOAMATTTInformasi tambahan (Bagian di bawah ini diisi apabila pernah terjadi bencana</p>
                                          <ol>
                                            <dd class="py-2">A Penyelamatan pasca musibah
                                              <div class="yatidak">
                                                <div class="form-check form-check-inline">
                                                  <input class="form-check-input" type="radio" name="59-545" id="inlineRadio1" value="Ya">
                                                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline ">
                                                  <input class="form-check-input" type="radio" name="59-545" id="inlineRadio2" value="Tidak">
                                                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                </div>
                                              </div>
                                              <ol>
                                                <dd class="py-2">1 Evakuasi arsip vital
                                                  <div class="yatidak">
                                                    <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio" name="59-546" id="inlineRadio1" value="Ya">
                                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline ">
                                                      <input class="form-check-input" type="radio" name="59-546" id="inlineRadio2" value="Tidak">
                                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                    </div>
                                                  </div>
                                                </dd>
                                                <dd class="py-2">2 Identifikasi jenis arsip yang mengalamai kerusakan
                                                  <div class="yatidak">
                                                    <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio" name="59-547" id="inlineRadio1" value="Ya">
                                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline ">
                                                      <input class="form-check-input" type="radio" name="59-547" id="inlineRadio2" value="Tidak">
                                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                    </div>
                                                  </div>
                                                </dd>
                                                <dd class="py-2">3 Recovery
                                                  <div class="yatidak">
                                                    <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio" name="59-548" id="inlineRadio1" value="Ya">
                                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline ">
                                                      <input class="form-check-input" type="radio" name="59-548" id="inlineRadio2" value="Tidak">
                                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                    </div>
                                                  </div>
                                                  <ol>
                                                    <dd class="py-2">a. Ruang penyimpanan
                                                      <div class="yatidak">
                                                        <div class="form-check form-check-inline">
                                                          <input class="form-check-input" type="radio" name="59-549" id="inlineRadio1" value="Ya">
                                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                        </div>
                                                        <div class="form-check form-check-inline ">
                                                          <input class="form-check-input" type="radio" name="59-549" id="inlineRadio2" value="Tidak">
                                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                        </div>
                                                      </div>
                                                    </dd>
                                                    <dd class="py-2">b. Fisik arsip
                                                      <div class="yatidak">
                                                        <div class="form-check form-check-inline">
                                                          <input class="form-check-input" type="radio" name="59-550" id="inlineRadio1" value="Ya">
                                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                        </div>
                                                        <div class="form-check form-check-inline ">
                                                          <input class="form-check-input" type="radio" name="59-550" id="inlineRadio2" value="Tidak">
                                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                        </div>
                                                      </div>
                                                    </dd>
                                                  </ol>
                                                </dd>
                                              </ol>
                                            </dd>
                                            <dd class="py-2">B Pemulihan (recovery)
                                              <div class="yatidak">
                                                <div class="form-check form-check-inline">
                                                  <input class="form-check-input" type="radio" name="59-551" id="inlineRadio1" value="Ya">
                                                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline ">
                                                  <input class="form-check-input" type="radio" name="59-551" id="inlineRadio2" value="Tidak">
                                                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                </div>
                                              </div>
                                              <ol>
                                                <dd class="py-2">1 Stabilisasi dan perlindungan arsip yang dievakuasi
                                                  <div class="yatidak">
                                                    <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio" name="59-552" id="inlineRadio1" value="Ya">
                                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline ">
                                                      <input class="form-check-input" type="radio" name="59-552" id="inlineRadio2" value="Tidak">
                                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                    </div>
                                                  </div>
                                                </dd>
                                                <dd class="py-2">2 Penilaian tingkat kerusakan dan spesifikasi kebutuhan pemulihan      
                                                  <div class="yatidak">
                                                    <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio" name="59-553" id="inlineRadio1" value="Ya">
                                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline ">
                                                      <input class="form-check-input" type="radio" name="59-553" id="inlineRadio2" value="Tidak">
                                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                    </div>
                                                  </div>
                                                </dd>
                                                <dd class="py-2">3 Pelaksanaan penyelamatan
                                                  <div class="yatidak">
                                                    <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio" name="59-554" id="inlineRadio1" value="Ya">
                                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline ">
                                                      <input class="form-check-input" type="radio" name="59-554" id="inlineRadio2" value="Tidak">
                                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                    </div>
                                                  </div>
                                                  <ol>
                                                    <dd class="py-2">a. Pengepakan arsip yang dipindahkan
                                                      <div class="yatidak">
                                                        <div class="form-check form-check-inline">
                                                          <input class="form-check-input" type="radio" name="59-555" id="inlineRadio1" value="Ya">
                                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                        </div>
                                                        <div class="form-check form-check-inline ">
                                                          <input class="form-check-input" type="radio" name="59-555" id="inlineRadio2" value="Tidak">
                                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                        </div>
                                                      </div>
                                                    </dd>
                                                    <dd class="py-2">b. Pembersihan arsip dari kotoran  yang menempel dengan <br>cairan alkohol atau tymol
                                                      <div class="yatidak">
                                                        <div class="form-check form-check-inline">
                                                          <input class="form-check-input" type="radio" name="59-556" id="inlineRadio1" value="Ya">
                                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                        </div>
                                                        <div class="form-check form-check-inline ">
                                                          <input class="form-check-input" type="radio" name="59-556" id="inlineRadio2" value="Tidak">
                                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                        </div>
                                                      </div>
                                                    </dd>
                                                    <dd class="py-2">c. Pembekuan
                                                      <div class="yatidak">
                                                        <div class="form-check form-check-inline">
                                                          <input class="form-check-input" type="radio" name="59-557" id="inlineRadio1" value="Ya">
                                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                        </div>
                                                        <div class="form-check form-check-inline ">
                                                          <input class="form-check-input" type="radio" name="59-557" id="inlineRadio2" value="Tidak">
                                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                        </div>
                                                      </div>
                                                    </dd>
                                                    <dd class="py-2">d. Pengeringan
                                                      <div class="yatidak">
                                                        <div class="form-check form-check-inline">
                                                          <input class="form-check-input" type="radio" name="59-558" id="inlineRadio1" value="Ya">
                                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                        </div>
                                                        <div class="form-check form-check-inline ">
                                                          <input class="form-check-input" type="radio" name="59-558" id="inlineRadio2" value="Tidak">
                                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                        </div>
                                                      </div>
                                                    </dd>
                                                    <dd class="py-2">e. Penggantian arsip yang ada salinan yang berasal dari <br>tempat lain
                                                      <div class="yatidak">
                                                        <div class="form-check form-check-inline">
                                                          <input class="form-check-input" type="radio" name="59-559" id="inlineRadio1" value="Ya">
                                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                        </div>
                                                        <div class="form-check form-check-inline ">
                                                          <input class="form-check-input" type="radio" name="59-559" id="inlineRadio2" value="Tidak">
                                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                        </div>
                                                      </div>
                                                    </dd>
                                                    <dd class="py-2">f. Pembuatan back up seluruh arsip yang sudah <br> diselamatkan
                                                      <div class="yatidak">
                                                        <div class="form-check form-check-inline">
                                                          <input class="form-check-input" type="radio" name="59-560" id="inlineRadio1" value="Ya">
                                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                        </div>
                                                        <div class="form-check form-check-inline ">
                                                          <input class="form-check-input" type="radio" name="59-560" id="inlineRadio2" value="Tidak">
                                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                        </div>
                                                      </div>
                                                    </dd>
                                                    <dd class="py-2">g. Memusnahkan arsip yang telah rusak parah dengan <br>    membuat berita acara
                                                      <div class="yatidak">
                                                        <div class="form-check form-check-inline">
                                                          <input class="form-check-input" type="radio" name="59-561" id="inlineRadio1" value="Ya">
                                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                        </div>
                                                        <div class="form-check form-check-inline ">
                                                          <input class="form-check-input" type="radio" name="59-561" id="inlineRadio2" value="Tidak">
                                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                        </div>
                                                      </div>
                                                    </dd>

                                                  </ol>
                                                </dd>
                                              </ol>
                                            </dd>
                                            <dd class="py-2">C Penyimpanan Kembali Arsip Vital
                                              <div class="yatidak">
                                                <div class="form-check form-check-inline">
                                                  <input class="form-check-input" type="radio" name="59-562" id="inlineRadio1" value="Ya">
                                                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline ">
                                                  <input class="form-check-input" type="radio" name="59-562" id="inlineRadio2" value="Tidak">
                                                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                </div>
                                              </div>
                                            </dd>
                                            <dd class="py-2">D Evaluasi
                                              <div class="yatidak">
                                                <div class="form-check form-check-inline">
                                                  <input class="form-check-input" type="radio" name="59-563" id="inlineRadio1" value="Ya">
                                                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline ">
                                                  <input class="form-check-input" type="radio" name="59-563" id="inlineRadio2" value="Tidak">
                                                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                                </div>
                                              </div>
                                            </dd>
                                          </ol>
                                        </ol>

                                      </li>
                                    </ol>
                                  </li>
                                  <li class="py-2" id="no564" onload="disss('no564')">Pemberkasan dan Pelaporan Arsip Terjaga
                                    <div class="row mt-3">
                                      <div class="col-lg-9 card border-left-info shadow h-100 mr-5 ">
                                        <div class="card-body">
                                          <div class="row no-gutters align-items-center">
                                            <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Apabila berdasarkan identifikasi, Unit Pengolah tidak menciptakan arsip terjaga maka seluruh pernyataan di bawah ini TIDAK berlaku dan TIDAK menjadi pembagi dalam penilaian.</p>
                                          </div>
                                        </div>
                                      </div>  
                                      <div class="form-group">
                                        <div class="col-lg-1">
                                          <input type="checkbox" id="vehicle1" name="59-564" value="Bike" style="width: 30px; height:30px" onclick="ngedis('no564')">               
                                        </div>
                                      </div>
                                    </div>

                                    <ol class="daftar">
                                      <li class="py-2">Unit pengolah menyimpan arsip terjaga
                                        <div class="yatidak">
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="59-565" id="inlineRadio1" value="Ya">
                                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                                          </div>
                                          <div class="form-check form-check-inline ">
                                            <input class="form-check-input" type="radio" name="59-565" id="inlineRadio2" value="Tidak">
                                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                          </div>
                                        </div>
                                        <div class="col-lg-9 card border-left-info shadow ">
                                          <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                              <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Apabila Unit pengolah menyimpan arsip terjaga maka berikan tanda √ pada kotak jenis arsip terjaga yang sesuai.</p>
                                            </div>
                                          </div>
                                        </div>

                                        <ul class="mt-2">
                                          <div class="row">
                                            <div class="col-lg-6">
                                              <dd>Arsip Kependudukan</dd>
                                            </div>
                                            <div class="form-group col-lg-3 mx-3">                
                                              <input type="checkbox" id="vehicle1" name="59-566"  style="width: 20px; height:20px">

                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-lg-6">
                                              <dd>Arsip Kewilayahan</dd>
                                            </div>
                                            <div class="form-group col-lg-3 mx-3">                
                                              <input type="checkbox" id="vehicle1" name="59-567"  style="width: 20px; height:20px">

                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-lg-6">
                                              <dd>Arsip Kepulauan</dd>
                                            </div>
                                            <div class="form-group col-lg-3 mx-3">              
                                              <input type="checkbox" id="vehicle1" name="59-568"  style="width: 20px; height:20px">
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-lg-6">
                                              <dd>Arsip Perbatasan</dd>
                                            </div>
                                            <div class="form-group col-lg-3 mx-3">              
                                              <input type="checkbox" id="vehicle1" name="59-569"  style="width: 20px; height:20px">
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-lg-6">
                                              <dd>Arsip Perjanjian Internasional</dd>
                                            </div>
                                            <div class="form-group col-lg-3 mx-3">              
                                              <input type="checkbox" id="vehicle1" name="59-570"  style="width: 20px; height:20px">
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-lg-6">
                                              <dd>Arsip Kontrak Karya</dd>
                                            </div>
                                            <div class="form-group col-lg-3 mx-3">              
                                              <input type="checkbox" id="vehicle1" name="59-757"  style="width: 20px; height:20px">
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-lg-6">
                                              <dd>Arsip Masalah Pemerintahan yang Strategis</dd>
                                            </div>
                                            <div class="form-group col-lg-3 mx-3">              
                                              <input type="checkbox" id="vehicle1" name="59-758"  style="width: 20px; height:20px">
                                            </div>
                                          </div>
                                        </ul>
                                      </li>
                                      <li class="py-2">Penataan Arsip Terjaga
                                        <ol class="daftar">
                                          <li class="py-2">Pemberkasan Arsip Terjaga
                                            <div class="yatidak">
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="59-760" id="inlineRadio1" value="Ya">
                                                <label class="form-check-label" for="inlineRadio1">Ya</label>
                                              </div>
                                              <div class="form-check form-check-inline ">
                                                <input class="form-check-input" type="radio" name="59-760" id="inlineRadio2" value="Tidak">
                                                <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                              </div>
                                            </div>
                                          </li>
                                          <li class="py-2">Pembuatan Daftar Arsip Terjaga
                                            <div class="yatidak">
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="59-761" id="inlineRadio1" value="Ya">
                                                <label class="form-check-label" for="inlineRadio1">Ya</label>
                                              </div>
                                              <div class="form-check form-check-inline ">
                                                <input class="form-check-input" type="radio" name="59-761" id="inlineRadio2" value="Tidak">
                                                <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                              </div>
                                            </div>
                                          </li>
                                        </ol>
                                      </li>
                                      <li class="py-2">Pelaporan Arsip Terjaga
                                        <ol class="daftar">
                                          <li class="py-2">Pelaporan Daftar Arsip Terjaga ke ANRI
                                            <div class="yatidak">
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="59-763" id="inlineRadio1" value="Ya">
                                                <label class="form-check-label" for="inlineRadio1">Ya</label>
                                              </div>
                                              <div class="form-check form-check-inline ">
                                                <input class="form-check-input" type="radio" name="59-763" id="inlineRadio2" value="Tidak">
                                                <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                              </div>
                                            </div>
                                          </li>
                                          <li class="py-2">Penyerahan Salinan Autentik Arsip Terjaga ke ANRI
                                            <div class="yatidak">
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="59-764" id="inlineRadio1" value="Ya">
                                                <label class="form-check-label" for="inlineRadio1">Ya</label>
                                              </div>
                                              <div class="form-check form-check-inline ">
                                                <input class="form-check-input" type="radio" name="59-764" id="inlineRadio2" value="Tidak">
                                                <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                              </div>
                                            </div>
                                          </li>
                                        </ol>
                                      </li>
                                      <li class="py-2">Pengamanan Fisik dan Informasi
                                        <div class="yatidak">
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="59-762" id="inlineRadio1" value="Ya">
                                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                                          </div>
                                          <div class="form-check form-check-inline ">
                                            <input class="form-check-input" type="radio" name="59-762" id="inlineRadio2" value="Tidak">
                                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                          </div>
                                        </div>
                                      </li>
                                    </ol>
                                  </li>
                                </ol>




                              </div> <!-- end formcard no3  -->

                              <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
                              <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>


                            <fieldset id="no4">                              
                              <div class="form-card">
                                <h1 class="h4 text-gray-900 text-center mt-5"> SUB ASPEK PENYUSUTAN ARSIP</h1>    

                                <div class="row mt-3">
                                  <div class="col-lg-10 col-sm-1 card border border-left-warning shadow h-100 py-2 mx-5">
                                    <div class="card-body">
                                      <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">                    
                                          <p class="mb-0 font-weight-bold text-warning text-justify" style="font-size: 13px;">Jika Pemerintah Daerah belum menetapkan Klasifikasi Arsip di lingkungannya, berikan tanda √ pada kolom checklist di samping ini, dan seluruh pertanyaan di bawah dinyatakan "Tidak/Belum".</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-lg-1">
                                      <input type="checkbox" id="vehicle1" name="60-580" value="Bike" style="width: 30px; height:30px" onclick="disall('no4',1)">               
                                    </div>
                                  </div>
                                </div>    

                                <ol class="daftar">
                                  <li class="py-2">Intensitas pemindahan arsip inaktif ke unit kearsipan
                                    <div class="yatidak">
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="60-765" id="inlineRadio1" value="Ya">
                                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                                      </div>
                                      <div class="form-check form-check-inline ">
                                        <input class="form-check-input" type="radio" name="60-765" id="inlineRadio2" value="Tidak">
                                        <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                      </div>
                                    </div>
                                    <ul class="mt-2">
                                      <div class="row">
                                        <div class="col-lg-6">
                                          <dd class="py-2">Melaksanakan pemindahan arsip inaktif secara rutin</dd>
                                        </div>            
                                        <div class="form-group col-lg-3 mx-3">                
                                          <input type="checkbox" id="vehicle1" name="60-766"  style="width: 20px; height:20px">
                                        </div>            
                                      </div>
                                      <div class="col-lg-6 card border-left-info shadow ">
                                        <div class="card-body">
                                          <div class="row no-gutters align-items-center">
                                            <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">(pemindahan arsip dinyatakan dilaksanakan secara rutin apabila dalam 5 (lima) tahun terakhir, unit pengolah melaksanakan pemindahan arsip inaktif minimal sebanyak 2 (dua) kali).</p>
                                          </div>
                                        </div>
                                      </div> 


                                      <div class="row">
                                        <div class="col-lg-6">
                                          <dd class="py-2">Melaksanakan pemindahan arsip inaktif tidak secara rutin</dd>
                                        </div>
                                        <div class="form-group col-lg-3 mx-3">                
                                          <input type="checkbox" id="vehicle1" name="60-767"  style="width: 20px; height:20px">
                                        </div>
                                      </div>
                                      <div class="col-lg-6 card border-left-info shadow ">
                                        <div class="card-body">
                                          <div class="row no-gutters align-items-center">
                                            <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">(pemindahan arsip dinyatakan dilaksanakan tidak secara rutin apabila dalam 5 (lima) tahun terakhir, unit pengolah hanya melaksanakan pemindahan arsip inaktif sebanyak 1 (satu) kali).</p>
                                          </div>
                                        </div>
                                      </div> 
                                    </ul>
                                  </li>
                                  <li class="py-2">Pemindahan arsip inaktif dilaksanakan melalui kegiatan:
                                    <ol class="daftar">
                                      <li class="py-2">Penyeleksian arsip inaktif<div class="yatidak">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="60-769" id="inlineRadio1" value="Ya">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="60-769" id="inlineRadio2" value="Tidak">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>
                                    </li>
                                    <li class="py-2">Pembuatan daftar arsip inaktif yang akan dipindahkan
                                      <div class="yatidak">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="60-770" id="inlineRadio1" value="Ya">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="60-770" id="inlineRadio2" value="Tidak">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>
                                    </li>
                                    <li class="py-2">Penataan arsip inaktif yang akan dipindahkan
                                      <div class="yatidak">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="60-771" id="inlineRadio1" value="Ya">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="60-771" id="inlineRadio2" value="Tidak">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>
                                    </li>          
                                  </ol>
                                </li>
                                <li class="py-2">Pemindahan arsip inaktif dilaksanakan setelah melewati retensi arsip aktif
                                  <div class="yatidak">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="60-588" id="inlineRadio1" value="Ya">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="60-588" id="inlineRadio2" value="Tidak">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>
                                  <div class="col-lg-9 card border-left-info shadow ">
                                    <div class="card-body">
                                      <div class="row no-gutters align-items-center">
                                        <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Jika Perguruan Tinggi Negeri belum menetapkan JRA di lingkungannya terhadap jenis arsip yang dipindahkan, maka pertanyaan pada poin 3. di atas harus dinyatakan "Tidak".</p>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                                <li class="py-2" id="oriradio2">Pelaksanaan pemindahan arsip inaktif disertai dengan berita acara pemindahan arsip inaktif.
                                  <div class="yatidak">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="60-589" id="inlineRadio1" value="Ya" onclick="copyradio('oriradio2','destradio2')">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="60-589" id="inlineRadio2" value="Tidak" onclick="copyradio('oriradio2','destradio2')">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>
                                  <div class="col-lg-9 card border-left-info shadow ">
                                    <div class="card-body">
                                      <div class="row no-gutters align-items-center">
                                        <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Jika pertanyaan pada Poin 4 di atas dinyatakan "Tidak", maka seluruh pertanyaan pada poin 5. yakni Poin 5.1. dan Poin 5.2. di bawah ini harus dinyatakan "Tidak".</p>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                                <li class="py-2" id="destradio2">Berita acara pemindahan arsip ditandatangani oleh:
                                  <ol class="daftar">
                                    <li class="py-2">Pimpinan unit pengolah
                                      <div class="yatidak">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="60-591" id="inlineRadio1" value="Ya">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="60-591" id="inlineRadio2" value="Tidak">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>
                                    </li>
                                    <li class="py-2">Pimpinan unit kearsipan
                                      <div class="yatidak">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="60-592" id="inlineRadio1" value="Ya">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="60-592" id="inlineRadio2" value="Tidak">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>
                                    </li>
                                  </ol>
                                </li>
                                <li class="py-2" id="oriradio3">Pelaksanaan pemindahan arsip inaktif disertai dengan daftar arsip inaktif yang dipindahkan
                                  <div class="yatidak">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="60-593" id="inlineRadio1" value="Ya" onclick="copyradio3('oriradio3','destradio3','destradio4')">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="60-593" id="inlineRadio2" value="Tidak" onclick="copyradio3('oriradio3','destradio3','destradio4')">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>
                                  <div class="col-lg-9 card border-left-info shadow">
                                    <div class="card-body">
                                      <div class="row no-gutters align-items-center">
                                        <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Jika pertanyaan pada Poin 6 di atas dinyatakan "Tidak", maka seluruh pertanyaan pada poin 7. yakni Poin 7.1. dan Poin 7.2. serta Poin 8, yakni Poin 8.1 dan Poin 8.2 di bawah ini harus dinyatakan "Tidak".</p>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                                <li class="py-2" id="destradio3">Daftar arsip inaktif yang dipindahkan ditandatangani oleh:
                                  <ol class="daftar">
                                    <li class="py-2">Pimpinan unit pengolah
                                      <div class="yatidak">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="60-595" id="inlineRadio1" value="Ya">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="60-595" id="inlineRadio2" value="Tidak">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>
                                    </li>
                                    <li class="py-2">Pimpinan unit kearsipan
                                      <div class="yatidak">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="60-596" id="inlineRadio1" value="Ya">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="60-596" id="inlineRadio2" value="Tidak">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>
                                    </li>
                                  </ol>
                                </li>
                                <li class="py-2" id="destradio4">Daftar arsip inaktif yang dipindahkan sebagai lampiran berita acara pemindahan arsip memuat informasi :
                                  <div class="yatidak">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="60-597" id="inlineRadio1" value="Ya" disabled>
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="60-597" id="inlineRadio2" value="Tidak" disabled>
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>
                                  <div class="col-lg-9 card border-left-info shadow">
                                    <div class="card-body">
                                      <div class="row no-gutters align-items-center">
                                        <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Berikan tanda √ pada kolom checklist di bawah ini, sesuai komponen daftar arsip inaktif yang dipindahkan, jika komponen di bawah ini tidak terpenuhi seluruhnya maka poin 8 diatas harus dinyatakan "Tidak".</p>
                                      </div>
                                    </div>
                                  </div>
                                  <ol class="daftar">
                                    <li class="py-2">Daftar Berkas
                                      <ol class="a mt-1">
                                        <div class="row">
                                          <div class="col-lg-6">
                                            <dd>a. unit pengolah</dd>
                                          </div>
                                          <div class="form-group col-lg-1 mx-3">                
                                            <input type="checkbox" id="vehicle1" name="60-600" value="unit pengolah" style="width: 20px; height:20px" onclick="disradio('destradio4',14)">               
                                          </div>
                                        </div>

                                        <div class="row">
                                          <div class="col-lg-6">
                                            <dd>b. nomor berkas</dd>
                                          </div>
                                          <div class="form-group col-lg-1 mx-3">                
                                            <input type="checkbox" id="vehicle1" name="60-601" value="nomor berkas" style="width: 20px; height:20px" onclick="disradio('destradio4',14)">               
                                          </div>
                                        </div>

                                        <div class="row">
                                          <div class="col-lg-6">
                                            <dd>c. kode klasifikasi</dd>
                                          </div>
                                          <div class="form-group col-lg-1 mx-3">                
                                            <input type="checkbox" id="vehicle1" name="60-602" value="kode klasifikasi" style="width: 20px; height:20px" onclick="disradio('destradio4',14)">               
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-lg-6">
                                            <dd>d. uraian informasi arsip</dd>
                                          </div>
                                          <div class="form-group col-lg-1 mx-3">                
                                            <input type="checkbox" id="vehicle1" name="60-603" value="uraian informasi arsip" style="width: 20px; height:20px" onclick="disradio('destradio4',14)">               
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-lg-6">
                                            <dd>e. kurun waktu</dd>
                                          </div>
                                          <div class="form-group col-lg-1 mx-3">                
                                            <input type="checkbox" id="vehicle1" name="60-604" value="kurun waktu" style="width: 20px; height:20px" onclick="disradio('destradio4',14)">               
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-lg-6">
                                            <dd>f. jumlah</dd>
                                          </div>
                                          <div class="form-group col-lg-1 mx-3">                
                                            <input type="checkbox" id="vehicle1" name="60-605" value="jumlah" style="width: 20px; height:20px" onclick="disradio('destradio4',14)">               
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-lg-6">
                                            <dd>g. keterangan</dd>
                                          </div>
                                          <div class="form-group col-lg-1 mx-3">                
                                            <input type="checkbox" id="vehicle1" name="60-606" value="keterangan" style="width: 20px; height:20px" onclick="disradio('destradio4',14)">               
                                          </div>
                                        </div>
                                      </ol>
                                    </li>
                                    <li class="py-2">Daftar Isi Berkas
                                      <ol class="a mt-1">
                                        <div class="row">
                                          <div class="col-lg-6">
                                            <dd>a. nomor berkas</dd>
                                          </div>
                                          <div class="form-group col-lg-1 mx-3">                
                                            <input type="checkbox" id="vehicle1" name="60-607" value="nomor berkas" style="width: 20px; height:20px" onclick="disradio('destradio4',14)">               
                                          </div>
                                        </div>

                                        <div class="row">
                                          <div class="col-lg-6">
                                            <dd>b. nomor item arsip</dd>
                                          </div>
                                          <div class="form-group col-lg-1 mx-3">                
                                            <input type="checkbox" id="vehicle1" name="60-608" value="nomor item arsip" style="width: 20px; height:20px" onclick="disradio('destradio4',14)">               
                                          </div>
                                        </div>

                                        <div class="row">
                                          <div class="col-lg-6">
                                            <dd>c. kode klasifikasi</dd>
                                          </div>
                                          <div class="form-group col-lg-1 mx-3">                
                                            <input type="checkbox" id="vehicle1" name="60-609" value="kode klasifikasi" style="width: 20px; height:20px" onclick="disradio('destradio4',14)">               
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-lg-6">
                                            <dd>d. uraian informasi arsip</dd>
                                          </div>
                                          <div class="form-group col-lg-1 mx-3">                
                                            <input type="checkbox" id="vehicle1" name="60-610" value="uraian informasi arsip" style="width: 20px; height:20px" onclick="disradio('destradio4',14)">               
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-lg-6">
                                            <dd>e. tanggal</dd>
                                          </div>
                                          <div class="form-group col-lg-1 mx-3">                
                                            <input type="checkbox" id="vehicle1" name="60-611" value="tanggal" style="width: 20px; height:20px" onclick="disradio('destradio4',14)">               
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-lg-6">
                                            <dd>f. jumlah</dd>
                                          </div>
                                          <div class="form-group col-lg-1 mx-3">                
                                            <input type="checkbox" id="vehicle1" name="60-612" value="jumlah" style="width: 20px; height:20px" onclick="disradio('destradio4',14)">               
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-lg-6">
                                            <dd>g. keterangan</dd>
                                          </div>
                                          <div class="form-group col-lg-1 mx-3">                
                                            <input type="checkbox" id="vehicle1" name="60-613" value="keterangan" style="width: 20px; height:20px" onclick="disradio('destradio4',14)">               
                                          </div>
                                        </div>
                                      </ol>
                                    </li>
                                  </ol>
                                </li>
                                <li class="py-2">Pemindahan arsip inaktif oleh Unit Pengolah dilaksanakan sesuai ketentuan peraturan perundang-undangan sebagai berikut :
                                  <div class="col-lg-9 card border-left-info shadow ">
                                    <div class="card-body">
                                      <div class="row no-gutters align-items-center">
                                        <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Jika Perguruan Tinggi Negeri belum menetapkan JRA di lingkungannya terhadap jenis arsip yang dipindahkan, maka seluruh pertanyaan pada poin 9.1. dan 9.2. di bawah ini harus dinyatakan "Tidak".</p>
                                      </div>
                                    </div>
                                  </div>
                                  <ol class="daftar">
                                    <li class="py-2">Pemindahan arsip inaktif yang memiliki retensi di bawah 10 (sepuluh) tahun  dilakukan dari unit pengolah <br>ke unit kearsipan di lingkungan satuan kerja rektorat, fakultas, atau satuan kerja dengan sebutan lain.
                                      <div class="yatidak">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="60-615" id="inlineRadio1" value="Ya">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="60-615" id="inlineRadio2" value="Tidak">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>
                                    </li>
                                    <li class="py-2">Pemindahan arsip inaktif yang memiliki retensi sekurang-kurangnya 10 (sepuluh) tahun dilakukan dari <br>unit kearsipandi lingkungan satuan kerja rektorat, fakultas, atau satuan kerja dengan sebutan lain ke lembaga kearsipan <br>perguruan tinggi negeri.
                                      <div class="yatidak">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="60-616" id="inlineRadio1" value="Ya">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="60-616" id="inlineRadio2" value="Tidak">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>
                                    </li>
                                  </ol>
                                </li>


                              </ol>               



                            </div> <!-- end form card no4 -->


                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
                            <input type="button" name="next" class="next action-button" value="Next Step" />
                          </fieldset>


                          

                          <fieldset id="no5">                       
                            <div class="form-card">
                             <h1 class="h4 text-gray-900 text-center mt-5">SUB ASPEK SUMBER DAYA MANUSIA </h1>

                             <ol class="daftar">
                               <li class="py-2">Arsiparis.          
                                 <ol class="daftar">
                                  <li class="py-2">Ketersediaan
                                    <ol class="daftar">
                                     <li class="py-2">Unit Pengolah telah terdapat arsiparis
                                       <div class="yatidak">
                                        <div class=" yatidak form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="61-626" id="inlineRadio1" value="Ya">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="yatidak form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="61-626" id="inlineRadio2" value="Tidak">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>                           
                                    </li>
                                    <li class="py-2">Jumlah arsiparis pada Unit Pengolah  telah sesuai dengan analisis beban kerja kearsipan
                                      <div class="yatidak">
                                        <div class=" yatidak form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="61-627" id="inlineRadio1" value="Ya">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="yatidak form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="61-627" id="inlineRadio2" value="Tidak">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>
                                    </li>
                                  </ol>
                                </li>
                                <li class="py-2">Kedudukan Hukum
                                  <ol class="daftar">
                                    <li class="py-2">Mandiri
                                      <div class="yatidak">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="61-628" id="inlineRadio1" value="Ya">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="61-628" id="inlineRadio2" value="Tidak">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>
                                      <div class="col-lg-9 card border-left-info shadow  ">
                                        <div class="card-body">
                                          <div class="row no-gutters align-items-center">
                                            <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Yang dimaksud dengan “kemandirian” adalah dalam melaksanakan fungsi dan tugas arsiparis berpegang pada kompetensi yang dimiliki.</p>
                                          </div>
                                        </div>
                                      </div>
                                    </li>
                                    <li class="py-2">Independen
                                      <div class="yatidak">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="61-629" id="inlineRadio1" value="Ya">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="61-629" id="inlineRadio2" value="Tidak">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>

                                      <div class="col-lg-9 card border-left-info shadow ">
                                        <div class="card-body">
                                          <div class="row no-gutters align-items-center">
                                            <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Yang dimaksud dengan “independen” adalah bebas dari pengaruh pihak manapun dalam melaksanakan kewenangannya berdasarkan pada kaidah-kaidah kearsipan dan ketentuan peraturan perundang-undangan.</p>
                                          </div>
                                        </div>
                                      </div>
                                    </li>
                                  </ol>
                                </li>
                                <li class="py-2">Kewenangan
                                  <ol class="daftar">
                                    <li class="py-2">Melaksanakan tugas pokok Arsiparis
                                      <div class="yatidak">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="61-630" id="inlineRadio1" value="Ya">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="61-630" id="inlineRadio2" value="Tidak">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>
                                    </li>
                                    <li class="py-2">Memiliki kewenangan kearsipan.
                                      <div class="yatidak">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="61-631" id="inlineRadio1" value="Ya">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="61-631" id="inlineRadio2" value="Tidak">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>
                                    </li>

                                  </ol>
                                </li>
                                <li class="py-2">Kompetensi
                                  <div class="yatidak">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="61-622" id="inlineRadio1" value="Ya">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="61-622" id="inlineRadio2" value="Tidak">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>
                                  <ol class="daftar">
                                    <li class="py-2">Memenuhi Persyaratan Kompetensi 

                                      <ul class="mt-2">
                                        <div class="row">
                                          <div class="col-lg-6">
                                            <dd>Pendidikan Formal di bidang selain bidang kearsipan yang telah mengikuti dan lulus Diklat Fungsional Arsiparis.</dd>
                                          </div>
                                          <div class="form-group col-lg-1 mx-3">                
                                            <input type="checkbox" id="vehicle1" name="61-634" style="width: 20px; height:20px">               
                                          </div>
                                        </div>

                                        <div class="row">
                                          <div class="col-lg-6">
                                            <dd>Pendidikan Formal Bidang Kearsipan yang sesuai (Sarjana/S1 di bidang Kearsipan untuk Arsiparis Ahli dan Diploma/D3 di Bidang Kearsipan untuk Arsiparis Terampil).</dd>
                                          </div>
                                          <div class="form-group col-lg-1 mx-3">                
                                            <input type="checkbox" id="vehicle1" name="61-635" style="width: 20px; height:20px">               
                                          </div>
                                        </div>
                                      </ul>
                                    </li>

                                    <div class="row">
                                      <div class="col-lg-6">
                                        <li class="py-2">Lulus Uji Kompetensi/Sertifikasi bagi Arsiparis yang diangkat melalui Inpassing</li>
                                      </div>
                                      <div class="form-group col-lg-1 mt-2 mx-4">                
                                        <input type="checkbox" id="vehicle1" name="61-633" style="width: 20px; height:20px">               
                                      </div>
                                    </div>
                                  </ol>
                                </li>

                                <li class="py-2">Sertifikasi Kearsipan <br><br>
                                  Arsiparis telah mengikuti sertifikasi kearsipan
                                  <div class="yatidak">
                                    <div class=" yatidak form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="61-636" id="inlineRadio1" value="Ya">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="yatidak form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="61-636" id="inlineRadio2" value="Tidak">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>
                                  <ul class="mt-2">
                                    <div class="row">
                                      <div class="col-lg-6">
                                        <dd>Jumlah arsiparis yang terdapat di unit pengolah</dd>
                                      </div>
                                      <div class="form-group col-lg-3 mx-3">                
                                        <input type="number" id="vehicle1" name="61-637"  style="width: 35px; height:35px">
                                        <label class="form-check-label" for="inlineRadio2"> orang</label>               
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-lg-6">
                                        <dd>Jumlah arsiparis yang telah mengikuti dan lulus sertifikasi kearsipan</dd>
                                      </div>
                                      <div class="form-group col-lg-3 mx-3">                
                                        <input type="number" id="vehicle1" name="61-638"  style="width: 35px; height:35px">
                                        <label class="form-check-label" for="inlineRadio2"> orang</label>               
                                      </div>
                                    </div>
                                  </ul>
                                </li>
                                <li class="py-2">Pengembangan SDM Kearsipan (melalui kegiatan pemberian diklat, sosialisasi, workshop, <br>bimbingan teknis dan sejenisnya yang diberikan dalam rangka peningkatan kompetensi Arsiparis) <br><br>
                                  Arsiparis telah mengikuti sertifikasi kearsipan
                                  <div class="yatidak">
                                    <div class=" yatidak form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="61-639" id="inlineRadio1" value="Ya">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="yatidak form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="61-639" id="inlineRadio2" value="Tidak">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>
                                  <ul class="mt-2">
                                    <div class="row">
                                      <div class="col-lg-6">
                                        <dd>Jumlah arsiparis yang terdapat di unit pengolah</dd>
                                      </div>
                                      <div class="form-group col-lg-3 mx-3">                
                                        <input type="number" id="vehicle1" name="61-640"  style="width: 35px; height:35px">
                                        <label class="form-check-label" for="inlineRadio2"> orang</label>               
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-lg-6">
                                        <dd>Jumlah arsiparis yang telah mengikuti kegiatan pengembangan SDM kearsipan</dd>
                                      </div>
                                      <div class="form-group col-lg-3 mx-3">                
                                        <input type="number" id="vehicle1" name="61-641"  style="width: 35px; height:35px">
                                        <label class="form-check-label" for="inlineRadio2"> orang</label>               
                                      </div>
                                    </div>
                                  </ul>
                                </li>
                                <li class="py-2">Arsiparis melaksanakan kewajiban menjaga keautentikan, keutuhan, keamanan <br>dan keselamatan arsip yang dikelolanya dengan indikator:
                                  <ol class="daftar">
                                    <li class="py-2">Arsip tercipta sesuai dengan Tata Naskah Dinas (Lihat dari penilaian pada aspek penciptaan)
                                      <div class="yatidak">
                                        <div class=" yatidak form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="61-642" id="inlineRadio1" value="Ya">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="yatidak form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="61-642" id="inlineRadio2" value="Tidak">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>

                                    </li>
                                    <li class="py-2">Arsip aktif di unit pengolah telah diberkaskan sesuai ketentuan peraturan perundang-undangan
                                      <div class="yatidak">
                                        <div class=" yatidak form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="61-643" id="inlineRadio1" value="Ya">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="yatidak form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="61-643" id="inlineRadio2" value="Tidak">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>
                                    </li>
                                    <li class="py-2">Arsip aktif di unit pengolah telah disimpan menggunakan media penyimpanan yang sesuai
                                      <div class="yatidak">
                                        <div class=" yatidak form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="61-644" id="inlineRadio1" value="Ya">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="yatidak form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="61-644" id="inlineRadio2" value="Tidak">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>
                                    </li>
                                    <li class="py-2">Arsip di Unit Pengolah telah terdaftar dalam daftar berkas dan daftar isi berkas
                                      <div class="yatidak">
                                        <div class=" yatidak form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="61-645" id="inlineRadio1" value="Ya">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="yatidak form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="61-645" id="inlineRadio2" value="Tidak">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>
                                    </li>
                                  </ol>

                                </li>
                              </ol>
                            </li>
                            <li class="py-2">Pengelola Arsip
                             <ol class="daftar">
                              <li class="py-2">Unit Pengolah memiliki pengelola arsip
                                <div class="yatidak">
                                  <div class=" yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="61-646" id="inlineRadio1" value="Ya">
                                    <label class="form-check-label" for="inlineRadio1">Ya</label>
                                  </div>
                                  <div class="yatidak form-check form-check-inline ">
                                    <input class="form-check-input" type="radio" name="61-646" id="inlineRadio2" value="Tidak">
                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                  </div>
                                </div>
                                <div class="col-lg-9 card border-left-info shadow  ">
                                  <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                      <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">(pengelola arsip adalah pegawai negeri atau pegawai lainnya yang menduduki jabatan yang fungsi, tugas, dan tanggung jawabnya melaksanakan kegiatan kearsipan).</p>
                                    </div>
                                  </div>
                                </div>
                              </li>
                              <li class="py-2">Persyaratan Kompetensi Pengelola Arsip 

                                <div class="yatidak">
                                  <div class=" yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="61-647" id="inlineRadio1" value="Ya">
                                    <label class="form-check-label" for="inlineRadio1">Ya</label>
                                  </div>
                                  <div class="yatidak form-check form-check-inline ">
                                    <input class="form-check-input" type="radio" name="61-647" id="inlineRadio2" value="Tidak">
                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                  </div>
                                </div>
                                <ul class="mt-2">
                                  <div class="row">
                                    <div class="col-lg-6">
                                      <dd>Jumlah pengelola arsip yang terdapat di unit pengolah</dd>
                                    </div>
                                    <div class="form-group col-lg-3 mx-3">                
                                      <input type="number" id="vehicle1" name="61-648"  style="width: 35px; height:35px">
                                      <label class="form-check-label" for="inlineRadio2"> orang</label>               
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-lg-6">
                                      <dd>Jumlah pengelola arsip yang telah mengikuti dan lulus diklat teknis kearsipan</dd>
                                    </div>
                                    <div class="form-group col-lg-3 mx-3">                
                                      <input type="number" id="vehicle1" name="61-649"  style="width: 35px; height:35px">
                                      <label class="form-check-label" for="inlineRadio2"> orang</label>               
                                    </div>
                                  </div>
                                </ul>
                              </li>
                              <li class="py-2">Pengembangan SDM Kearsipan (Nondiklat Teknis)

                                <div class="yatidak">
                                  <div class=" yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="61-650" id="inlineRadio1" value="Ya">
                                    <label class="form-check-label" for="inlineRadio1">Ya</label>
                                  </div>
                                  <div class="yatidak form-check form-check-inline ">
                                    <input class="form-check-input" type="radio" name="61-650" id="inlineRadio2" value="Tidak">
                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                  </div>
                                </div>
                                <ul class="mt-2">
                                  <div class="row">
                                    <div class="col-lg-6">
                                      <dd>Jumlah pengelola arsip yang terdapat di unit pengolah</dd>
                                    </div>
                                    <div class="form-group col-lg-3 mx-3">                
                                      <input type="number" id="vehicle1" name="61-651"  style="width: 35px; height:35px">
                                      <label class="form-check-label" for="inlineRadio2"> orang</label>               
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-lg-6">
                                      <dd>Jumlah pengelola arsip yang telah mengikuti mengikuti kegiatan pengembangan SDM kearsipan (nondiklat teknis)</dd>
                                    </div>
                                    <div class="form-group col-lg-3 mx-3">                
                                      <input type="number" id="vehicle1" name="61-652"  style="width: 35px; height:35px">
                                      <label class="form-check-label" for="inlineRadio2"> orang</label>               
                                    </div>
                                  </div>
                                </ul>
                              </li>
                            </ol>
                          </li>
                        </ol>
                        <h6 class="mx-5">Data SDM Kearsipan</h6>
                      <ol class="daftar">
                        <li class="py-3">Arsiparis
                          <div class="yatidak form-check form-check-inline">
                            <input class="form-check-input" type="text" name="61-654" id="inlineRadio1" style="width: 35px; height:35px">
                            <label class="form-check-label" for="inlineRadio1">Orang</label>
                          </div>
                          <ol class="daftar">
                            <li class="py-3">Arsiparis Kategori Keterampilan
                              <div class="yatidak form-check form-check-inline">
                                <input class="form-check-input" type="text" name="61-727" id="inlineRadio1" style="width: 35px; height:35px">
                                <label class="form-check-label" for="inlineRadio1">Orang</label>
                              </div>
                              <ol class="daftar">
                                <li class="py-3">Arsiparis Terampil
                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="61-731" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>

                                </li>
                                <li class="py-3">Arsiparis Mahir
                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="61-732" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>

                                </li>
                                <li class="py-3">Arsiparis Penyelia
                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="61-733" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>
                                </li>
                              </ol>
                            </li>
                            <hr>
                            <li class="py-2">Arsiparis Kategori Keahlian
                              <div class="yatidak form-check form-check-inline">
                                <input class="form-check-input" type="text" name="61-728" id="inlineRadio1" style="width: 35px; height:35px">
                                <label class="form-check-label" for="inlineRadio1">Orang</label>
                              </div>
                              <ol class="daftar">
                                <li class="py-3">Arsiparis Ahli Pertama

                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="61-734" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>

                                </li>
                                <li class="py-3">Arsiparis Ahli Muda

                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="61-735" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>

                                </li>
                                <li class="py-3">Arsiparis Ahli Madya

                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="61-736" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>
                                </li>
                                <li class="py-3">Arsiparis Ahli Utama

                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="61-737" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>
                                </li>
                              </ol>
                            </li>
                            <hr>
                            <li class="py-2">Pendidikan

                              <ol class="daftar">
                                <li class="py-3">S2

                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="61-738" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>

                                </li>
                                <li class="py-3">S1/D4 Kearsipan

                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="61-739" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>

                                </li>
                                <li class="py-3">S1 Selain Kearsipan

                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="61-740" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>
                                </li>
                                <li class="py-3">D3 Kearsipan

                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="61-741" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>
                                </li>
                                <li class="py-2">D3 Selain Kearsipan

                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="61-742" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>
                                </li>
                              </ol>
                            </li>
                            <hr>
                            <li class="py-2"> Rekrutmen
                              <ol class="daftar">
                                <li class="py-3">Impasing

                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="61-743" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>

                                </li>
                                <li class="py-3">Diklat Penciptaan

                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="61-744" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>

                                </li>
                                <li class="py-3">Pendidikan Formal Kearsipan

                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="61-745" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>
                                </li>

                              </ol>
                            </li>

                          </ol>


                        </li>
                        <li class="py-2">Pengelola Arsip
                          <div class="yatidak form-check form-check-inline">
                            <input class="form-check-input" type="text" name="61-655" id="inlineRadio1" style="width: 35px; height:35px">
                            <label class="form-check-label" for="inlineRadio1">Orang</label>
                          </div>
                          <ol class="daftar">
                            <li class="py-2">Jumlah Pengelola Arsip (PNS)
                              <div class="yatidak form-check form-check-inline">
                                <input class="form-check-input" type="text" name="61-746" id="inlineRadio1" style="width: 35px; height:35px">
                                <label class="form-check-label" for="inlineRadio1">Orang</label>
                              </div>
                              <ol class="daftar">
                                <li class="py-3">Gol II/setara

                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="61-754" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>

                                </li>
                                <li class="py-3">Gol III/setara

                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="61-755" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>

                                </li>
                                <li class="py-3">Gol IV/setara


                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="61-756" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>
                                </li>

                              </ol>
                            </li>
                            <li class="py-2">Pendidikan
                              <ol class="daftar">
                                <li class="py-3">S1/D4 Kearsipan

                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="61-749" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>

                                </li>
                                <li class="py-3">S1 Selain Kearsipan

                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="61-750" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>

                                </li>
                                <li class="py-3">D3 Kearsipan


                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="61-751" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>
                                </li>
                                <li class="py-3">D3 Selain Kearsipan


                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="61-752" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>
                                </li>
                                <li class="py-2">SLTA

                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="61-753" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>
                                </li>
                              </ol>

                            </li>
                            <li class="py-2">Jumlah Pengelola Arsip (kontrak/tidak Tetap)
                              <div class="yatidak form-check form-check-inline">
                                <input class="form-check-input" type="text" name="61-748" id="inlineRadio1" style="width: 35px; height:35px">
                                <label class="form-check-label" for="inlineRadio1">Orang</label>
                              </div>
                            </li>
                          </ol>
                        </li>

                      </ol>



                      </div> <!-- end formcard no5-->

                      <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                      <input type="button" name="next" class="next action-button" value="Next Step" />
                    </fieldset>

                    <fieldset id="no6">
                      <div class="form-card">
                        <h1 class="h4 text-gray-900 text-center mt-5">SUB ASPEK PRASARANA DAN SARANA KEARSIPAN </h1>


                        <ol class="daftar">
                          <li class="py-2">Folder 
                            <ol class="daftar">
                              <li class="py-2">Spesifikasi 
                                <ol class="daftar">
                                  <li class="py-2">Bahan terbuat dari lembar kertas manila karton
                                    <div class="yatidak">
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="62-697" id="inlineRadio1" value="Ya">
                                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                                      </div>
                                      <div class="form-check form-check-inline ">
                                        <input class="form-check-input" type="radio" name="62-697" id="inlineRadio2" value="Tidak">
                                        <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                      </div>
                                    </div>

                                  </li>
                                  <li class="py-2">Keadaan lembaran rata, tidak kaku, tidak berlubang dan tidak kusut
                                    <div class="yatidak">
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="62-698" id="inlineRadio1" value="Ya">
                                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                                      </div>
                                      <div class="form-check form-check-inline ">
                                        <input class="form-check-input" type="radio" name="62-698" id="inlineRadio2" value="Tidak">
                                        <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                      </div>
                                    </div>

                                  </li>
                                </ol>
                              </li>
                              <li class="py-2">Bentuk dan Ukuran
                               <ol class="daftar">
                                <li class="py-2">Bentuk Folder seperti map dengan tab atau bagian menonjol disebelah kanan atas yang berfungsi <br>sebagai tempat untuk menuliskan kode/indeks.
                                  <div class="yatidak">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="62-700" id="inlineRadio1" value="Ya">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="62-700" id="inlineRadio2" value="Tidak">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>

                                </li>
                                <li class="py-2">Ukuran folder sesuai dengan ketentuan
                                  <div class="yatidak">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="62-701" id="inlineRadio1" value="Ya">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="62-701" id="inlineRadio2" value="Tidak">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>
                                </li>
                              </ol>
                            </li>
                            <li class="py-2">Penggunaan
                             <ol class="daftar">
                              <li class="py-2">Satu folder digunakan untuk satu subyek atau satu berkas dengan maksimal 150 lembar
                                <div class="yatidak">
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="62-703" id="inlineRadio1" value="Ya">
                                    <label class="form-check-label" for="inlineRadio1">Ya</label>
                                  </div>
                                  <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="radio" name="62-703" id="inlineRadio2" value="Tidak">
                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                  </div>
                                </div>

                              </li>
                              <li class="py-2">Folder dletakkan pada posisi dibelakang guide/sekat dalam laci filing cabinet
                                <div class="yatidak">
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="62-704" id="inlineRadio1" value="Ya">
                                    <label class="form-check-label" for="inlineRadio1">Ya</label>
                                  </div>
                                  <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="radio" name="62-704" id="inlineRadio2" value="Tidak">
                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                  </div>
                                </div>
                              </li>
                            </ol>
                          </li>
                        </ol>
                      </li>
                      <li class="py-2">Guide/Sekat
                        <ol class="daftar">
                          <li class="py-2">Spesifikasi
                            <ol class="daftar">
                              <li class="py-2">Bahan guide arsip terbuat dari kertas karton mm, lebih tebal dari bahan folder sehingga tidak mudah melengkung (terlipat)
                                <div class="yatidak">
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="62-707" id="inlineRadio1" value="Ya">
                                    <label class="form-check-label" for="inlineRadio1">Ya</label>
                                  </div>
                                  <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="radio" name="62-707" id="inlineRadio2" value="Tidak">
                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                  </div>
                                </div>

                              </li>
                              <li class="py-2">Keadaan lembaran rata, kaku, tidak berlubang dan tidak kusut
                                <div class="yatidak">
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="62-708" id="inlineRadio1" value="Ya">
                                    <label class="form-check-label" for="inlineRadio1">Ya</label>
                                  </div>
                                  <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="radio" name="62-708" id="inlineRadio2" value="Tidak">
                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                  </div>
                                </div>

                              </li>
                            </ol>
                          </li>
                          <li class="py-2">Klasifikasi 
                            <ol class="daftar">
                              <li class="py-2">Guide Primer
                                <div class="yatidak">
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="62-709" id="inlineRadio1" value="Ya">
                                    <label class="form-check-label" for="inlineRadio1">Ya</label>
                                  </div>
                                  <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="radio" name="62-709" id="inlineRadio2" value="Tidak">
                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                  </div>
                                </div>

                              </li>
                              <li class="py-2">Guide Sekunder
                                <div class="yatidak">
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="62-710" id="inlineRadio1" value="Ya">
                                    <label class="form-check-label" for="inlineRadio1">Ya</label>
                                  </div>
                                  <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="radio" name="62-710" id="inlineRadio2" value="Tidak">
                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                  </div>
                                </div>
                              </li>
                              <li class="py-2">Guide Tersier
                                <div class="yatidak">
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="62-711" id="inlineRadio1" value="Ya">
                                    <label class="form-check-label" for="inlineRadio1">Ya</label>
                                  </div>
                                  <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="radio" name="62-711" id="inlineRadio2" value="Tidak">
                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                  </div>
                                </div>
                              </li>
                            </ol>
                          </li>
                          <li class="py-2">Bentuk dan Ukuran
                            <ol class="daftar">
                              <li class="py-2">Berbentuk empat persegi panjang dan memiliki tab
                                <div class="yatidak">
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="62-713" id="inlineRadio1" value="Ya">
                                    <label class="form-check-label" for="inlineRadio1">Ya</label>
                                  </div>
                                  <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="radio" name="62-713" id="inlineRadio2" value="Tidak">
                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                  </div>
                                </div>

                              </li>
                              <li class="py-2">Tab terdiri atas:
                                <div class="yatidak">
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="62-714" id="inlineRadio1" value="Ya">
                                    <label class="form-check-label" for="inlineRadio1">Ya</label>
                                  </div>
                                  <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="radio" name="62-714" id="inlineRadio2" value="Tidak">
                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                  </div>
                                </div>
                                <ol class="a mt-3">
                                  <div class="row">
                                    <div class="col-lg-8">
                                      <dd>a. Tab Primer</dd>
                                    </div>
                                    <div class="form-group col-lg-1 mx-3">                
                                      <input type="checkbox" id="vehicle1" name="62-715" style="width: 20px; height:20px">               
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-lg-8">
                                      <dd>b. Tab Sekunder</dd>
                                    </div>
                                    <div class="form-group col-lg-1 mx-3">                
                                      <input type="checkbox" id="vehicle1" name="62-716" style="width: 20px; height:20px">               
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-lg-8">
                                      <dd>c. Tab Tersier</dd>
                                    </div>
                                    <div class="form-group col-lg-1 mx-3">                
                                      <input type="checkbox" id="vehicle1" name="62-717" style="width: 20px; height:20px">               
                                    </div>
                                  </div>
                                </ol>
                              </li>
                              <li class="py-2">Letak tab primer, tab sekunder dan tab tersier pada masing-masing guide tidak saling menutup
                                <div class="yatidak">
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="62-718" id="inlineRadio1" value="Ya">
                                    <label class="form-check-label" for="inlineRadio1">Ya</label>
                                  </div>
                                  <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="radio" name="62-718" id="inlineRadio2" value="Tidak">
                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                  </div>
                                </div>
                              </li>
                            </ol>
                          </li>
                          <li class="py-2">Penggunaan
                            <ol class="daftar">
                              <li class="py-2">Diletakkan diantara kelompok berkas arsip yang satu dengan kelompok berkas arsip lainnya di dalam laci filing cabinet
                                <div class="yatidak">
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="62-720" id="inlineRadio1" value="Ya">
                                    <label class="form-check-label" for="inlineRadio1">Ya</label>
                                  </div>
                                  <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="radio" name="62-720" id="inlineRadio2" value="Tidak">
                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                  </div>
                                </div>

                              </li>
                              <li class="py-2">Tab pada guide digunakan untuk mencantumkan kode klasifikasi, indeks dan masalah arsip
                                <div class="yatidak">
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="62-721" id="inlineRadio1" value="Ya">
                                    <label class="form-check-label" for="inlineRadio1">Ya</label>
                                  </div>
                                  <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="radio" name="62-721" id="inlineRadio2" value="Tidak">
                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                  </div>
                                </div>

                              </li>
                            </ol>
                          </li>
                        </ol>

                      </li>
                      
                      <li class="py-2">Label
                        <div class="row mt-3">
                          <div class="col-lg-9 card border-left-info shadow mr-5 ">
                            <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Apabila berdasarkan identifikasi, Unit Pengolah tidak menciptakan arsip terjaga maka seluruh pernyataan di bawah ini TIDAK berlaku dan TIDAK menjadi pembagi dalam penilaian.</p>
                              </div>
                            </div>
                          </div>  
                          <div class="yatidak mx-5">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="62-722" id="inlineRadio1" value="Ya">
                              <label class="form-check-label" for="inlineRadio1">Ya</label>
                            </div>
                            <div class="form-check form-check-inline ">
                              <input class="form-check-input" type="radio" name="62-722" id="inlineRadio2" value="Tidak">
                              <label class="form-check-label" for="inlineRadio2">Tidak</label>
                            </div>
                          </div>
                        </div>
                        </li>
                        <li class="py-2">Sarana Arsip Aktif Lainnya
                          <ol class="daftar">
                            <li class="py-2">Out Indikator
                              <div class="yatidak">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="62-723" id="inlineRadio1" value="Ya">
                                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                                </div>
                                <div class="form-check form-check-inline ">
                                  <input class="form-check-input" type="radio" name="62-723" id="inlineRadio2" value="Tidak">
                                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                </div>
                              </div>

                            </li>
                            <li class="py-2">Indeks dan Tunjuk Silang
                              <div class="yatidak">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="62-724" id="inlineRadio1" value="Ya">
                                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                                </div>
                                <div class="form-check form-check-inline ">
                                  <input class="form-check-input" type="radio" name="62-724" id="inlineRadio2" value="Tidak">
                                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                </div>
                              </div>

                            </li>
                          </ol>
                        </li>
                        <li class="py-2">Filing Cabinet
                          <ol class="daftar">
                            <li class="py-2">Filing cabinet yang digunakan adalah filing cabinet yang memiliki laci.
                              <div class="yatidak">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="62-725" id="inlineRadio1" value="Ya">
                                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                                </div>
                                <div class="form-check form-check-inline ">
                                  <input class="form-check-input" type="radio" name="62-725" id="inlineRadio2" value="Tidak">
                                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                </div>
                              </div>

                            </li>
                            <li class="py-2">Filing cabinet harus memiliki kunci pengaman.
                              <div class="yatidak">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="62-726" id="inlineRadio1" value="Ya">
                                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                                </div>
                                <div class="form-check form-check-inline ">
                                  <input class="form-check-input" type="radio" name="62-726" id="inlineRadio2" value="Tidak">
                                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                </div>
                              </div>

                            </li>
                          </ol>
                        </li>
                      </ol>
                    </div> <!-- end formcard no6--> 

                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
                    <input type="button" name="next" class="next action-button" value="Next Step" />
                  </fieldset>


                  <fieldset id="notifsukses">
                    <div class="form-card">
                      <h2 class="fs-title text-center">Success !</h2> <br><br>
                      <div class="row justify-content-center">
                        <div class="col-3"> 
                          <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> 
                        </div>
                      </div> <br><br>
                      <div class="row justify-content-center">
                        <div class="col-7 text-center">
                          <h5>Semua Aspek sudah diisi, klik submit untuk menyimpan data.</h5>
                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-center">
                      <div class="col-7 text-center">
                        <input type="submit" name="submit" value="Simpan" />
                      </div>
                    </div>
                  </div>
                </fieldset>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


          <script>
$(document).ready(function(){

/*$("#").on("input", function(){
    // Print entered value in a div box
    $("#result").text($(this).val());
});*/

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;

$(".next").click(function(){

  current_fs = $(this).parent();
  next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
window.scroll({
 top: 0, 
 left: 0, 
 behavior: 'smooth' 
});

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
  step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
  'display': 'none',
  'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 600
});
});

$(".previous").click(function(){

  current_fs = $(this).parent();
  previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
  step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
  'display': 'none',
  'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 600
});
});

$('.radio-group .radio').click(function(){
  $(this).parent().find('.radio').removeClass('selected');
  $(this).addClass('selected');
});

$(".submit").click(function(){
  return false;
})

});
            function disall(aspek,start){
              var list = document.getElementById(aspek);
              var inputs = list.getElementsByTagName("INPUT");
              var thisname = list.getElementsByTagName("INPUT")[start-1];
              let i = start;
              let len = inputs.length;
              if (thisname.checked==true){
                for (; i < len; i++) {
                  if(list.getElementsByTagName("INPUT")[i].type!='button'){
                    list.getElementsByTagName("INPUT")[i].disabled=true;
                  }
                }
              }else{
                for (; i < len; i++) {
                  if(list.getElementsByTagName("INPUT")[i].type!='button'){
                    list.getElementsByTagName("INPUT")[i].disabled=false;
                  }
                }
              }
            }
            function dischild(nama){
              var list = document.getElementsByTagName(nama)[0];
              var inputs = list.getElementsByTagName("INPUT");
              var thisname = list.getElementsByTagName("INPUT")[0];
              let i = 1;
              let len = inputs.length;
              if (thisname.checked==true){
                for (; i < len; i++) {
                  if(list.getElementsByTagName("INPUT")[i].type!='button'){
                    list.getElementsByTagName("INPUT")[i].disabled=true;
                  }
                }
              }else{
                for (; i < len; i++) {
                  if(list.getElementsByTagName("INPUT")[i].type!='button'){
                    list.getElementsByTagName("INPUT")[i].disabled=false;
                  }
                }
              }
            }
            function discb(id,dis=true){
              var elem=document.getElementById(id);
              var cb=elem.getElementsByTagName("INPUT");
              var i =0;
              var len = cb.length;
              for (; i < len; i++) {
                if(elem.getElementsByTagName("INPUT")[i].type=='checkbox'){
                  if(dis==true){
                    elem.getElementsByTagName("INPUT")[i].disabled=true;
                  }else{
                    elem.getElementsByTagName("INPUT")[i].disabled=false;
                  }
                }
              }
            }
      function disradio(id,jml){
      // i = sigma inputanmu dalam sepohon, j= abc di pertanyaanmu.(a = 1st j, b= 2nd j, c= 3th j, dst), jml= sigma abcmu
      var elem=document.getElementById(id);
      var cb=elem.getElementsByTagName("INPUT");
    var i =0; // karena ????
    var j =0;
    var len = cb.length;
    for (; i < len; i++) {
      if(elem.getElementsByTagName("INPUT")[i].type=='checkbox'){
        if(elem.getElementsByTagName("INPUT")[i].checked==true){
          j++;
        }
      }
    }
    console.log(i+'||'+j);
    if(j==jml){
        //if(elem.getElementsByTagName("INPUT")[0].type=='radio'){
          elem.getElementsByTagName("INPUT")[1].disabled=true;
          elem.getElementsByTagName("INPUT")[0].checked=true;
          elem.getElementsByTagName("INPUT")[0].disabled=false;
        //}
      }else{
        elem.getElementsByTagName("INPUT")[0].disabled=true;
        elem.getElementsByTagName("INPUT")[1].checked=true;
        elem.getElementsByTagName("INPUT")[1].disabled=false;
      } 

    }

    function discheck(id,jml){
  // i = inputanmu, j= abc di pertanyaanmu.(a = 1st j, b= 2nd j, c= 3th j, dst), jml= sigma abcmu
  var elem=document.getElementById(id);
  var cb=elem.getElementsByTagName("INPUT");
    var i =1; // karena ????
    var j =0;
    var len = cb.length;
    for (; i < len; i++) {
      if(elem.getElementsByTagName("INPUT")[i].type=='checkbox'){
        if(elem.getElementsByTagName("INPUT")[i].checked==true){
          j++; 
        }
      }
    }
    console.log(j+'||'+jml);
    if(j==jml){
        //if(elem.getElementsByTagName("INPUT")[0].type=='radio'){
            //elem.getElementsByTagName("INPUT")[1].disabled=true;
            elem.getElementsByTagName("INPUT")[0].checked=true;
            // elem.getElementsByTagName("INPUT")[0].disabled=false; ini tu yg masalah hidden tadi tah? yg bikin 2 inputan buat checkbox?
        //}
      }else{
          //elem.getElementsByTagName("INPUT")[0].disabled=true;
          elem.getElementsByTagName("INPUT")[0].checked=false;
          elem.getElementsByTagName("INPUT")[0].disabled=true;
        } 

      }

      function ngedis(id){
    // 1. dapetin semua elemen id alih media 
    var list = document.getElementById(id);
    var inputs = list.getElementsByTagName("INPUT");
    var thisname = list.getElementsByTagName("INPUT")[0];
    let i = 1;
    let len = inputs.length;
    // var inputs = list.getElementsByTagName("INPUT").disabled=true;
    if (thisname.checked==false){
      for (; i < len; i++) {
        if(list.getElementsByTagName("INPUT")[i].type!='button'){
          list.getElementsByTagName("INPUT")[i].disabled=true;
          list.getElementsByTagName("INPUT")[i].checked=false;
        }
      }
    }else{
      for (; i < len; i++) {
        if(list.getElementsByTagName("INPUT")[i].type!='button'){
          list.getElementsByTagName("INPUT")[i].disabled=false;
            //list.getElementsByTagName("INPUT")[i].checked=true;
          }
        }
      }

    }

    function ngecheck(id,start=0){
    // 1. dapetin semua elemen id alih media 
    var list = document.getElementById(id);
    var inputs = list.getElementsByTagName("INPUT");
    var thisname = list.getElementsByTagName("INPUT")[start];
    
    start++;
   
    var i = start;
    
    // var namaini = list.getElementsByTagName("INPUT")[start];
    // mulai++;
    // var y = mulai;
    console.log(start);
    console.log(i);
    let len = inputs.length;
    console.log("oke");

    console.log(len);
    if (thisname.checked==true){
      //kalo kotak checkbox aspek 4->4.1 dicentang
      // namaini.getElementsByTagName("INPUT")[y].checked=true;
      for (; i < len; i++) {
        if(list.getElementsByTagName("INPUT")[i].value=='Tidak'){
          list.getElementsByTagName("INPUT")[i].disabled=false;
          list.getElementsByTagName("INPUT")[i].checked=true;
          console.log("ini adalah for atas"+i);
        }else{
          list.getElementsByTagName("INPUT")[i].disabled=true;
          list.getElementsByTagName("INPUT")[i].checked=false;
          console.log(i);
        }
        console.log('aa');
      }
    }else{
      //kalo kotak checkbox aspek 4->4.1 engga dicentang
      for (; i < len; i++) {
        //if(list.getElementsByTagName("INPUT")[i].type!='button'){
          list.getElementsByTagName("INPUT")[i].disabled=false;
          list.getElementsByTagName("INPUT")[i].checked=false;
            //list.getElementsByTagName("INPUT")[i].checked=true;
         // }
        }
      }

    }

    function ngecheck2(id,start=0){
    // 1. dapetin semua elemen id alih media 
    var list = document.getElementById(id);
    var inputs = list.getElementsByTagName("INPUT");
    var thisname = list.getElementsByTagName("INPUT")[start];
    var ya = inputs[0];
    var tidak = inputs[1];
    start++;
   
    var i = start;
    console.log(start);
    console.log(i);
    let len = inputs.length;
    console.log("oke");

    console.log(len);
    if (tidak.checked==true){
      //kalo kotak checkbox aspek 4->4.1 dicentang
      // namaini.getElementsByTagName("INPUT")[y].checked=true;
      for (; i < len; i++) {
        if(list.getElementsByTagName("INPUT")[i].value=='Tidak'){
          list.getElementsByTagName("INPUT")[i].disabled=false;
          list.getElementsByTagName("INPUT")[i].checked=true;
          console.log("ini adalah for atas"+i);
        }else{
          list.getElementsByTagName("INPUT")[i].disabled=true;
          list.getElementsByTagName("INPUT")[i].checked=false;
          console.log(i);
        }
        console.log('aa');
      }
    }else{
      //kalo kotak checkbox aspek 4->4.1 engga dicentang
      for (; i < len; i++) {
        //if(list.getElementsByTagName("INPUT")[i].type!='button'){
          list.getElementsByTagName("INPUT")[i].disabled=false;
          list.getElementsByTagName("INPUT")[i].checked=false;
            //list.getElementsByTagName("INPUT")[i].checked=true;
         // }
        }
      }

    }

//ketika submit, semua inputan yang ke disabled, di un disabled :D
function copyradio(ori,dest){
    var orielem=document.getElementById(ori);
    var destelem=document.getElementById(dest);
    var destjml = destelem.getElementsByTagName("INPUT");
    let i = 0;
      let len = destjml.length;
      //if (thisname.checked==false){
      for (; i < len; i++) {
          if(orielem.getElementsByTagName("INPUT")[1].checked==true){
            if(destelem.getElementsByTagName("INPUT")[i].value=="Tidak"){
              destelem.getElementsByTagName("INPUT")[i].checked=true;
              destelem.getElementsByTagName("INPUT")[i].disabled=false;
            }else{
              destelem.getElementsByTagName("INPUT")[i].checked=false;
              destelem.getElementsByTagName("INPUT")[i].disabled=true;
            }
            // console.log("Tidak");
          }else{
            destelem.getElementsByTagName("INPUT")[i].checked=false;
            destelem.getElementsByTagName("INPUT")[i].disabled=false;
            // console.log("Ya");
          }
        }      
  }

  function copyradio2(ori,dest){
    var orielem=document.getElementById(ori);
    var destelem=document.getElementById(dest);
    var destjml = destelem.getElementsByTagName("INPUT");
    let i = 0;
      let len = destjml.length;
      //if (thisname.checked==false){
      for (; i < len; i++) {
          if(orielem.getElementsByTagName("INPUT")[1].checked==true){
            destelem.getElementsByTagName("INPUT")[1].checked=true;
            destelem.getElementsByTagName("INPUT")[0].disabled=true;
            destelem.getElementsByTagName("INPUT")[2].disabled=true;
            destelem.getElementsByTagName("INPUT")[3].disabled=false;
            destelem.getElementsByTagName("INPUT")[2].checked=false;
            destelem.getElementsByTagName("INPUT")[3].checked=true;            
            
          }else{
            destelem.getElementsByTagName("INPUT")[1].checked=false;
            destelem.getElementsByTagName("INPUT")[0].disabled=false;
            destelem.getElementsByTagName("INPUT")[2].disabled=false;
            destelem.getElementsByTagName("INPUT")[3].disabled=false;
            destelem.getElementsByTagName("INPUT")[2].checked=false;
            destelem.getElementsByTagName("INPUT")[3].checked=false;
          }
        }
  }

  function copyradio3(ori,dest,dest2){
    var orielem=document.getElementById(ori);
    var destelem=document.getElementById(dest);
    var list1=destelem.getElementsByTagName("INPUT");
    var dest2elem=document.getElementById(dest2);
    var list2=dest2elem.getElementsByTagName("INPUT");
    var orielemjml = orielem.getElementsByTagName("INPUT");
    let i = 0;
      let len = orielemjml.length;
      //if (thisname.checked==false){
      if(orielem.getElementsByTagName("INPUT")[1].checked==true){
        for (; i < list1.length; i++) {
          if(destelem.getElementsByTagName("INPUT")[i].value=="Ya"){
            destelem.getElementsByTagName("INPUT")[i].checked=false;            
            destelem.getElementsByTagName("INPUT")[i].disabled=true;
          }else{
            destelem.getElementsByTagName("INPUT")[i].checked=true;            
            destelem.getElementsByTagName("INPUT")[i].disabled=false;
          }
        }
        // no 8
        i=0;
        for (; i < list2.length; i++) {
          if(dest2elem.getElementsByTagName("INPUT")[i].value=="Ya"){
            dest2elem.getElementsByTagName("INPUT")[i].checked=false;            
            dest2elem.getElementsByTagName("INPUT")[i].disabled=true;
          }else if(dest2elem.getElementsByTagName("INPUT")[i].value=="Tidak"){
            dest2elem.getElementsByTagName("INPUT")[i].checked=true;            
            dest2elem.getElementsByTagName("INPUT")[i].disabled=false;
          }else{
            dest2elem.getElementsByTagName("INPUT")[i].checked=false;            
            dest2elem.getElementsByTagName("INPUT")[i].disabled=true;
          }
        }
      }else{
        // dibawah adalah jika no 6 YA
        for (; i < list1.length; i++) {
          if(destelem.getElementsByTagName("INPUT")[i].value=="Ya"){
            // destelem.getElementsByTagName("INPUT")[i].checked=true;            
            destelem.getElementsByTagName("INPUT")[i].disabled=false;
          }else{
            destelem.getElementsByTagName("INPUT")[i].checked=false;            
            // destelem.getElementsByTagName("INPUT")[i].disabled=true;
          }
        }
        // no 8
        i=0;
        for (; i < list2.length; i++) {
          if(dest2elem.getElementsByTagName("INPUT")[i].value=="Ya"){
            // dest2elem.getElementsByTagName("INPUT")[i].checked=true;            
            dest2elem.getElementsByTagName("INPUT")[i].disabled=true;
          }else if(dest2elem.getElementsByTagName("INPUT")[i].value=="Tidak"){
            dest2elem.getElementsByTagName("INPUT")[i].checked=false;            
            dest2elem.getElementsByTagName("INPUT")[i].disabled=true;
          }else{            
            dest2elem.getElementsByTagName("INPUT")[i].disabled=false;
          }
        }
      }

      /*for (; i < len; i++) {
          if(orielem.getElementsByTagName("INPUT")[1].checked==true){
            destelem.getElementsByTagName("INPUT")[1].checked=true;            
            destelem.getElementsByTagName("INPUT")[0].disabled=true;
            destelem.getElementsByTagName("INPUT")[2].disabled=true;
            destelem.getElementsByTagName("INPUT")[3].disabled=false;
            destelem.getElementsByTagName("INPUT")[2].checked=false;
            destelem.getElementsByTagName("INPUT")[3].checked=true;

            dest2elem.getElementsByTagName("INPUT")[1].checked=true;
            dest2elem.getElementsByTagName("INPUT")[0].disabled=true;
            dest2elem.getElementsByTagName("INPUT")[2].disabled=true;
            dest2elem.getElementsByTagName("INPUT")[3].disabled=true;
            dest2elem.getElementsByTagName("INPUT")[4].disabled=true;
            dest2elem.getElementsByTagName("INPUT")[5].disabled=true;
            dest2elem.getElementsByTagName("INPUT")[6].disabled=true;
            dest2elem.getElementsByTagName("INPUT")[7].disabled=true;
            dest2elem.getElementsByTagName("INPUT")[8].disabled=true;
            dest2elem.getElementsByTagName("INPUT")[9].disabled=true;
            dest2elem.getElementsByTagName("INPUT")[10].disabled=true;
            dest2elem.getElementsByTagName("INPUT")[11].disabled=true;
            dest2elem.getElementsByTagName("INPUT")[12].disabled=true;
            dest2elem.getElementsByTagName("INPUT")[13].disabled=true;
            dest2elem.getElementsByTagName("INPUT")[14].disabled=true;
            dest2elem.getElementsByTagName("INPUT")[15].disabled=true;

            dest2elem.getElementsByTagName("INPUT")[2].checked=false;
            dest2elem.getElementsByTagName("INPUT")[3].checked=false;
            dest2elem.getElementsByTagName("INPUT")[4].checked=false;
            dest2elem.getElementsByTagName("INPUT")[5].checked=false;
            dest2elem.getElementsByTagName("INPUT")[6].checked=false;
            dest2elem.getElementsByTagName("INPUT")[7].checked=false;
            dest2elem.getElementsByTagName("INPUT")[8].checked=false;
            dest2elem.getElementsByTagName("INPUT")[9].checked=false;
            dest2elem.getElementsByTagName("INPUT")[10].checked=false;
            dest2elem.getElementsByTagName("INPUT")[11].checked=false;
            dest2elem.getElementsByTagName("INPUT")[12].checked=false;
            dest2elem.getElementsByTagName("INPUT")[13].checked=false;
            dest2elem.getElementsByTagName("INPUT")[14].checked=false;
            dest2elem.getElementsByTagName("INPUT")[15].checked=false;


          }else{
            destelem.getElementsByTagName("INPUT")[1].checked=false;
            destelem.getElementsByTagName("INPUT")[0].disabled=false;
            destelem.getElementsByTagName("INPUT")[2].disabled=false;
            destelem.getElementsByTagName("INPUT")[3].disabled=false;
            destelem.getElementsByTagName("INPUT")[2].checked=false;
            destelem.getElementsByTagName("INPUT")[3].checked=false;

            dest2elem.getElementsByTagName("INPUT")[1].checked=false;
            // dest2elem.getElementsByTagName("INPUT")[0].disabled=false;
            dest2elem.getElementsByTagName("INPUT")[2].disabled=false;
            dest2elem.getElementsByTagName("INPUT")[3].disabled=false;
            dest2elem.getElementsByTagName("INPUT")[4].disabled=false;
            dest2elem.getElementsByTagName("INPUT")[5].disabled=false;
            dest2elem.getElementsByTagName("INPUT")[6].disabled=false;
            dest2elem.getElementsByTagName("INPUT")[7].disabled=false;
            dest2elem.getElementsByTagName("INPUT")[8].disabled=false;
            dest2elem.getElementsByTagName("INPUT")[9].disabled=false;
            dest2elem.getElementsByTagName("INPUT")[10].disabled=false;
            dest2elem.getElementsByTagName("INPUT")[11].disabled=false;
            dest2elem.getElementsByTagName("INPUT")[12].disabled=false;
            dest2elem.getElementsByTagName("INPUT")[13].disabled=false;
            dest2elem.getElementsByTagName("INPUT")[14].disabled=false;
            dest2elem.getElementsByTagName("INPUT")[15].disabled=false;

            dest2elem.getElementsByTagName("INPUT")[2].checked=false;
            dest2elem.getElementsByTagName("INPUT")[3].checked=false;
            dest2elem.getElementsByTagName("INPUT")[4].checked=false;
            dest2elem.getElementsByTagName("INPUT")[5].checked=false;
            dest2elem.getElementsByTagName("INPUT")[6].checked=false;
            dest2elem.getElementsByTagName("INPUT")[7].checked=false;
            dest2elem.getElementsByTagName("INPUT")[8].checked=false;
            dest2elem.getElementsByTagName("INPUT")[9].checked=false;
            dest2elem.getElementsByTagName("INPUT")[10].checked=false;
            dest2elem.getElementsByTagName("INPUT")[11].checked=false;
            dest2elem.getElementsByTagName("INPUT")[12].checked=false;
            dest2elem.getElementsByTagName("INPUT")[13].checked=false;
            dest2elem.getElementsByTagName("INPUT")[14].checked=false;
            dest2elem.getElementsByTagName("INPUT")[15].checked=false;
          }
        }*/
  }

  function setnumber(from,to){
      cb=document.getElementById(from);
      inp=document.getElementById(to);
      if(cb.checked==true){
        inp.disabled=false;
      }else{
        inp.value=0;
        inp.disabled=true;
      }
  }

  function setmax(id){
      inp=document.getElementById(id);
      maxval=inp.max;
      /*if(inp.value>maxval){
        inp.value=maxval;
      }*/
      inp.addEventListener('input', () => {
      if(inp.value>maxval){
        //inp.value=999;
        console.log(inp.value);
      }
      //console.log(inp.value); // Log the new value after an input is made
      });
  }

  function skor(id){
    var tag_li = document.getElementById(id);
    var poin = tag_li.getElementsByTagName("INPUT").value;
    if (poin.value=="Yes") {
      value=100;
    }else{
      value=0;
    }
  }

  function div(a,b,c){
    var no1=document.getElementById(a).value;
    var no2=document.getElementById(b).value;
    var list=document.getElementsByName(c);
    var len=list.length;
    var res=no2/no1*100;
    //document.getElementById(c).value=res;
    var i=0;
    for (; i < len; i++) {
    if(list[i].value!="Tidak"){
      list[i].value=res;
      }
    }

  } 

  function divres(a,b,c){
    var no1=document.getElementById(a);
    var no2=document.getElementById(b);
    var list=document.getElementsByName(c);
    var len=list.length;
    var i=0;
    console.log("ok");
    for (; i < len; i++) {
    if(list[i].checked==true){
      if(list[i].value=="Tidak"){
        no1.value="";
        no2.value="";
        no1.disabled=true;
        no2.disabled=true;
        console.log("benar");
      }else{
        no1.disabled=false;
        no2.disabled=false;
        console.log("salah");  
        }
      }
    }
  }


</script>
