<!-- MultiStep Form -->
<div class="container-fluid">
  <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2 class="text-center"><strong>Sign Up Your User Account</strong></h2>
                <p class="text-center">Fill all form field to go to next step</p>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form class="user" method="POST" action="<?php echo base_url(). 'user/pengawasan/tambah_aksi' ?>" id="msform">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="uk1"><strong>PENCIPTAAN ARSIP</strong></li>
                                <li id="uk2"><strong>PENGGUNAAN ARSIP</strong></li>
                                <li id="uk3"><strong>PEMELIHARAAN <br>ARSIP INAKTIF</strong></li>
                                <li id="uk4"><strong>PENYUSUTAN</strong></li>
                                <li id="uk5"><strong>SUMBER DAYA MANUSIA</strong></li>
                                <li id="uk6"><strong>SARPRAS</strong></li>
                                <!-- <li id="uk6"><strong>Finish</strong></li> -->
                            </ul> <!-- fieldsets -->

                            <fieldset id="no1">
                              <div class="form-card">
                                <h1 class="h4 text-gray-900 text-center mt-5"> SUB ASPEK PENCIPTAAN ARSIP</h1>
                                <div class="row py-5">
                                  <div class="col-lg-10 col-sm-1 card border border-left-warning shadow h-100 py-2 mx-5">
                                    <div class="card-body">
                                      <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">                    
                                          <p class="mb-0 font-weight-bold text-warning text-justify" style="font-size: 13px;">"Jika Perguruan Tinggi Negeri tidak memiliki kebijakan tata naskah dinas/pengurusan naskah dinas, maka berikan tanda √ pada kolom checklist/kotak di samping ini!
                                          Dan seluruh pertanyaan di bawah ini dinyatakanan ""Tidak/Belum""."</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-lg-1">
                                      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 30px; height:30px">               
                                    </div>
                                  </div>
                                </div>
                                <ol class="daftar">
                                  <li >PEMBUATAN ARSIP
                                    <div class="col-lg-9 card border-left-info shadow h-100 ">
                                      <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                          <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Pengendalian naskah dinas keluar yang dilakukan oleh Unit Kearsipan Jenjang Berikutnya sesuai wilayah kewenangannya.</p>
                                        </div>
                                      </div>
                                    </div>
                                    <ol class="daftar">
                                      <li>Pencatatan/Registrasi
                                        <div class="yatidak">
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                                          </div>
                                          <div class="form-check form-check-inline ">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                          </div>
                                        </div>
                                        <div class="col-lg-9 card border-left-info shadow h-100 ">
                                          <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                              <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">(berikan tanda √ pada kolom checklist di bawah ini, jika poin 1.1. dinyatakan YA/ADA).</p>
                                            </div>
                                          </div>
                                        </div>
                                        <ul class="mt-1">
                                          <div class="row">
                                            <div class="col-lg-6">
                                              <dd>Buku Agenda</dd>
                                            </div>
                                            <div class="form-group col-lg-1 mx-3">                
                                              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-lg-6">
                                              <dd>Kartu Kendali</dd>
                                            </div>
                                            <div class="form-group col-lg-1 mx-3">                
                                              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-lg-6">
                                              <dd>Takah</dd>
                                            </div>
                                            <div class="form-group col-lg-1 mx-3">                
                                              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-lg-6">
                                              <dd>Agenda Elektronik</dd>
                                            </div>
                                            <div class="form-group col-lg-1 mx-3">                
                                              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                            </div>
                                          </div>       
                                        </ul>

                                      </li>
                                      <li>Pengiriman
                                        <div class="yatidak">
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                                          </div>
                                          <div class="form-check form-check-inline ">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                          </div>
                                        </div>
                                      </li>
                                      <li>Penyimpanan
                                        <div class="yatidak">
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                                          </div>
                                          <div class="form-check form-check-inline ">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                          </div>
                                        </div>
                                      </li>
                                    </ol>
                                  </li>

                                  <li >PENERIMAAN ARSIP
                                    <div class="col-lg-9 card border-left-info shadow h-100 ">
                                      <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                          <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Pengendalian naskah dinas keluar yang dilakukan oleh Unit Kearsipan Jenjang Berikutnya sesuai wilayah kewenangannya.</p>
                                        </div>
                                      </div>
                                    </div>
                                    <ol class="daftar">
                                      <li class="py-2">Penerimaan naskah dinas dianggap sah apabila diterima oleh petugas atau pihak yang berhak menerima di unit kearsipan
                                        <div class="yatidak">
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                                          </div>
                                          <div class="form-check form-check-inline ">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                          </div>
                                        </div>  

                                      </li>
                                      <li class="py-2">Penerimaan arsip diregistrasi oleh pihak yang menerima      
                                        <div class="yatidak">
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                                          </div>
                                          <div class="form-check form-check-inline ">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                          </div>
                                        </div>
                                      </li>
                                      <li class="py-2">Arsip yang diterima didistribusikan kepada unit pengolah diikuti dengan tindakan pengendalian         


                                        <ol class="daftar">
                                          <li>Pencatatan
                                            <div class="yatidak">
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">Ya</label>
                                              </div>
                                              <div class="form-check form-check-inline ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                              </div>
                                            </div> 
                                            <div class="col-lg-9 card border-left-info shadow h-100 ">
                                              <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                  <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Pengendalian naskah dinas keluar yang dilakukan oleh Unit Kearsipan Jenjang Berikutnya sesuai wilayah kewenangannya.</p>
                                                </div>
                                              </div>
                                            </div>

                                            <ul class="mt-1">
                                              <div class="row">
                                                <div class="col-lg-6">
                                                  <dd>Buku Agenda</dd>
                                                </div>
                                                <div class="form-group col-lg-1 mx-3">                
                                                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                                </div>
                                              </div>

                                              <div class="row">
                                                <div class="col-lg-6">
                                                  <dd>Kartu Kendali</dd>
                                                </div>
                                                <div class="form-group col-lg-1 mx-3">                
                                                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                                </div>
                                              </div>

                                              <div class="row">
                                                <div class="col-lg-6">
                                                  <dd>Takah</dd>
                                                </div>
                                                <div class="form-group col-lg-1 mx-3">                
                                                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col-lg-6">
                                                  <dd>Agenda Elektronik</dd>
                                                </div>
                                                <div class="form-group col-lg-1 mx-3">                
                                                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                                </div>
                                              </div>       
                                            </ul>

                                          </li>
                                          <li class="py-2">Pengarahan
                                            <div class="yatidak">
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">Ya</label>
                                              </div>
                                              <div class="form-check form-check-inline ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                              </div>
                                            </div> 

                                          </li>
                                          <li class="py-2">Penyampaian
                                            <div class="yatidak">
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">Ya</label>
                                              </div>
                                              <div class="form-check form-check-inline ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                              </div>
                                            </div> 
                                          </li>
                                        </ol>
                                      </li>
                                    </ol>          
                                  </li>

                                </ol>


                              </div> <!-- end form card no1-->
                              
                              <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>


                            <fieldset id="no2">
                              <div class="form-card">
                                <h1 class="h4 text-gray-900 text-center mt-5"> SUB ASPEK PENGGUNAAN ARSIP</h1>
                                <div class="row py-5">
                                  <div class="col-lg-10 col-sm-1 card border border-left-warning shadow h-100 py-2 mx-5">
                                    <div class="card-body">
                                      <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">                    
                                          <p class="mb-0 font-weight-bold text-warning text-justify" style="font-size: 13px;">"Jika Perguruan Tinggi Negeri tidak memiliki kebijakan tata naskah dinas/pengurusan naskah dinas, maka berikan tanda √ pada kolom checklist/kotak di samping ini!
                                          Dan seluruh pertanyaan di bawah ini dinyatakanan ""Tidak/Belum""."</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-lg-1">
                                      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 30px; height:30px">               
                                    </div>
                                  </div>
                                </div>

                                <ol class="daftar">
                                  <li class="py-2">Ketersediaan Arsip Inaktif
                                    <div class="yatidak">
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                                      </div>
                                      <div class="form-check form-check-inline ">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                      </div>
                                    </div>
                                  </li>
                                  <li class="py-2">Ketersediaan Prosedur Penggunaan Arsip Inaktif
                                    <div class="yatidak">
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                                      </div>
                                      <div class="form-check form-check-inline ">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                      </div>
                                    </div>
                                  </li>
                                  <li class="py-2">Sarana Peminjaman Arsip
                                    <ol class="daftar">
                                      <li class="py-2">Unit kearsipan menggunakan Out Indicator untuk mengganti arsip yang sedang dipinjam
                                        <div class="yatidak">
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                                          </div>
                                          <div class="form-check form-check-inline ">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                          </div>
                                        </div>
                                        <div class="col-lg-9 card border-left-info shadow h-100 ">
                                          <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                              <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">((Out Indicator yang dimaksud pada poin 3.1 dapat berupa Out Sheet, Out Guide, Out Boks, atau sarana yang sejenis).</p>
                                            </div>
                                          </div>
                                        </div>



                                      </li>
                                      <li class="py-2">
                                        Buku Peminjaman/Formulir Peminjaman
                                        <div class="yatidak">
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                                          </div>
                                          <div class="form-check form-check-inline ">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                          </div>
                                        </div>
                                      </li>
                                    </ol>

                                  </li>
                                  <li class="py-2">Penyajian Arsip Inaktif
                                    <ol class="daftar">
                                      <li>Penyajian arsip inaktif bagi kepentingan pengguna internal 

                                        <ol class="daftar">
                                          <li class="py-2">Unit Kearsipan menyajikan arsip inaktif untuk kepentingan pengguna internal
                                            <div class="yatidak">
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">Ya</label>
                                              </div>
                                              <div class="form-check form-check-inline ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                              </div>
                                            </div>

                                            <ol class="a mt-2">
                                              <div class="row">
                                                <div class="col-lg-6">
                                                  <dd>Penentu Kebijakan</dd>
                                                </div>
                                                <div class="form-group col-lg-1 mx-3">                
                                                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                                </div>
                                              </div>

                                              <div class="row">
                                                <div class="col-lg-6">
                                                  <dd>Pelaksana Kebijakan</dd>
                                                </div>
                                                <div class="form-group col-lg-1 mx-3">                
                                                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                                </div>
                                              </div>

                                              <div class="row">
                                                <div class="col-lg-6">
                                                  <dd>Pengawas Internal</dd>
                                                </div>
                                                <div class="form-group col-lg-1 mx-3">                
                                                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                                </div>
                                              </div>
                                            </ol>

                                          </li>
                                          <li>Unit Kearsipan menyajikan arsip inaktif untuk kepentingan pengguna internal berdasarkan sistem klasifikasi keamanan <br>dan akses arsip dinamis
                                            <div class="yatidak">
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">Ya</label>
                                              </div>
                                              <div class="form-check form-check-inline ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                              </div>
                                            </div>


                                          </li>
                                        </ol>
                                      </li>

                                      <li class="py-2">Penyajian arsip inaktif bagi kepentingan pengguna eksternal
                                        <ol class="daftar">
                                          <li class="py-2">Unit Kearsipan menyajikan arsip inaktif untuk kepentingan pengguna eksternal
                                            <div class="yatidak">
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">Ya</label>
                                              </div>
                                              <div class="form-check form-check-inline ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                              </div>
                                            </div>       



                                            <ol class="a mt-2">
                                              <div class="row">
                                                <div class="col-lg-6">
                                                  <dd>Publik/ Masyarakat</dd>
                                                </div>
                                                <div class="form-group col-lg-1 mx-3">                
                                                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                                </div>
                                              </div>

                                              <div class="row">
                                                <div class="col-lg-6">
                                                  <dd>Pengawas Eksternal</dd>
                                                </div>
                                                <div class="form-group col-lg-1 mx-3">                
                                                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                                </div>
                                              </div>

                                              <div class="row">
                                                <div class="col-lg-6">
                                                  <dd>Penegak Hukum</dd>
                                                </div>
                                                <div class="form-group col-lg-1 mx-3">                
                                                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                                </div>
                                              </div>
                                            </ol>
                                          </li>
                                          <li class="py-2">Unit Kearsipan menyajikan arsip inaktif untuk kepentingan pengguna eksternal berdasarkan sistem klasifikasi keamanan <br>dan akses arsip dinamis
                                            <div class="yatidak">
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">Ya</label>
                                              </div>
                                              <div class="form-check form-check-inline ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
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

                                <ol class="daftar">
                                  <li class="py-2">Asas Penataan Arsip Inaktif
                                    <ol class="daftar">
                                      <li class="py-2">Unit Kearsipan melaksanakan penataan arsip inaktif berdasarkan asas asal usul (principle of provenance).
                                        <div class="yatidak">
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                                          </div>
                                          <div class="form-check form-check-inline ">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                          </div>
                                        </div>
                                        <div class="col-lg-9 card border-left-info shadow h-100 ">
                                          <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                              <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">(Asas asal usul adalah asas yang dilakukan untuk menjaga arsip tetap terkelola dalam satu kesatuan pencipta arsip (provenance), tidak dicampur dengan arsip yang berasal dari pencipta arsip lain, sehingga arsip dapat melekat pada konteks penciptaannya).</p>
                                            </div>
                                          </div>
                                        </div>    

                                      </li>
                                      <li class="py-2">Unit Kearsipan melaksanakan penataan arsip inaktif berdasarkan asas aturan asli (principle of original order).
                                        <div class="yatidak">
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                                          </div>
                                          <div class="form-check form-check-inline ">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                          </div>
                                        </div>
                                        <div class="col-lg-9 card border-left-info shadow h-100 ">
                                          <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                              <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">((Asas aturan asli adalah asas yang dilakukan untuk menjaga arsip tetap ditata sesuai dengan pengaturan aslinya (original order) atau sesuai dengan pengaturan ketika arsip masih digunakan untuk pelaksanaan kegiatan pencipta arsip).    </p>
                                            </div>
                                          </div>
                                        </div>       


                                      </li>
                                    </ol>
                                  </li>
                                  <li class="py-2">Kegiatan Penataan Arsip Inaktif
                                    <ol class="daftar">
                                      <li class="py-2">Unit Kearsipan melakukan pengaturan fisik arsip inaktif dalam rangka kemudahan penemuan kembali arsip inaktif.
                                        <div class="yatidak">
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                                          </div>
                                          <div class="form-check form-check-inline ">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                          </div>
                                        </div>
                                        <div class="col-lg-9 card border-left-info shadow h-100 ">
                                          <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                              <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">((Asas aturan asli adalah asas yang dilakukan untuk menjaga arsip tetap ditata sesuai dengan pengaturan aslinya (original order) atau sesuai dengan pengaturan ketika arsip masih digunakan untuk pelaksanaan kegiatan pencipta arsip).    </p>
                                            </div>
                                          </div>
                                        </div>
                                      </li>

                                      <li class="py-2">Unit Kearsipan melaksanakan pengolahan informasi arsip yang menghasilkan daftar informasi tematik, paling sedikit memuat <br> judul, pencipta arsip,uraian hasil pengolahan, dan kurun waktu.   
                                        <div class="yatidak">
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                                          </div>
                                          <div class="form-check form-check-inline ">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                          </div>
                                        </div>

                                      </li>
                                      <li class="py-2">Unit Kearsipan melaksanakan penyusunan daftar arsip inaktif berdasarkan daftar arsip yang dipindahkan dari unit pengolah.
                                        <div class="yatidak">
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                                          </div>
                                          <div class="form-check form-check-inline ">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                          </div>
                                        </div>
                                        <div class="col-lg-9 card border-left-info shadow h-100 ">
                                          <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                              <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Jika Unit Kearsipan tidak menyusun daftar arsip inaktif sama sekali, maka pertanyaan pada poin 2.4. di bawah ini juga harus dinyatakan "Tidak".</p>
                                            </div>
                                          </div>
                                        </div>

                                      </li>
                                      <li class="py-2">Daftar arsip inaktif yang disusun oleh Unit Kearsipan telah sesuai dengan ketentuan peraturan perundang-undangan.
                                        <div class="yatidak">
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                                          </div>
                                          <div class="form-check form-check-inline ">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                          </div>
                                        </div>
                                        <div class="col-lg-9 card border-left-info shadow h-100 ">
                                          <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                              <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Berikan tanda √ pada kolom di bawah ini sesuai kondisi faktual pada daftar arsip inaktif yang telah disusun, jika seluruh kolom di bawah ini dinyatakan "Ada" maka pertanyaan poin 2.4 di atas harus dinyatakan "Ya", namun jika terdapat kolom di bawah ini yang dinyatakan "Tidak Ada/Kosong" maka pertanyaan poin 2.4. di atas harus dinyatakan "Tidak". </p>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <p class="col-lg-6">Daftar arsip inaktif:</p>
                                          <label class="col-lg-1 form-check-label mx-4" for="inlineRadio2">ADA</label>
                                        </div>
                                        <ol class="a mt-1">
                                          <div class="row">
                                            <div class="col-lg-6">
                                              <dd>a. pencipta arsip</dd>
                                            </div>
                                            <div class="form-group col-lg-1 mx-3">                
                                              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-lg-6">
                                              <dd>b. unit pengolah</dd>
                                            </div>
                                            <div class="form-group col-lg-1 mx-3">                
                                              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-lg-6">
                                              <dd>c. nomor arsip</dd>
                                            </div>
                                            <div class="form-group col-lg-1 mx-3">                
                                              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-lg-6">
                                              <dd>d. kode klasifikasi</dd>
                                            </div>
                                            <div class="form-group col-lg-1 mx-3">                
                                              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-lg-6">
                                              <dd>e. uraian informasi arsip</dd>
                                            </div>
                                            <div class="form-group col-lg-1 mx-3">                
                                              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-lg-6">
                                              <dd>f. kurun waktu</dd>
                                            </div>
                                            <div class="form-group col-lg-1 mx-3">                
                                              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-lg-6">
                                              <dd>g. jumlah</dd>
                                            </div>
                                            <div class="form-group col-lg-1 mx-3">                
                                              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-lg-6">
                                              <dd>h. keterangan</dd>
                                            </div>
                                            <div class="form-group col-lg-1 mx-3">                
                                              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                            </div>
                                          </div>

                                        </ol>
                                      </li>
                                    </ol>

                                  </li>
                                  <li class="py-2">Penyimpanan Arsip Inaktif <br>

                                    <ol class="daftar">
                                      <li class="py-2">Unit Kearsipan melaksanakan penyimpanan arsip inaktif
                                        <div class="yatidak">
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                                          </div>
                                          <div class="form-check form-check-inline ">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                          </div>
                                        </div>

                                      </li>
                                      <li class="py-2">Unit Kearsipan telah menyimpan arsip dari seluruh unit pengolah di lingkungannya

                                        <div class="yatidak">
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                                          </div>
                                          <div class="form-check form-check-inline ">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                          </div>
                                        </div>
                                        <ul class="mt-2">
                                         <div class="row mt-1">
                                          <div class="col-lg-6">
                                            <dd class="">Isikan jumlah unit pengolah</dd>
                                          </div>
                                          <div class="form-group col-lg-1 mx-3">                
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                          </div>
                                        </div>

                                        <div class="row mt-1">
                                          <div class="col-lg-6">
                                            <dd class="">Isikan jumlah unit pengolah yang arsipnya telah tersimpan di unit kearsipan</dd>
                                          </div>
                                          <div class="form-group col-lg-1 mx-3">                
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                          </div>
                                        </div>
                                      </ul>

                                    </li>
                                    <li class="py-2">Arsip media kertas/konvensional disimpan di dalam folder atau sampul.              
                                      <div class="yatidak">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>
                                    </li>
                                    <li class="py-2">Arsip media kertas/konvensional yang disimpan di folder atau sampul dimasukkan ke dalam boks arsip.                
                                      <div class="yatidak">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>
                                    </li>
                                    <li class="py-2">Folder atau sampul  yang disimpan di dalam boks arsip diletakkan di rak arsip (besi/baja).          
                                      <div class="yatidak">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>
                                    </li>
                                    <li class="py-2">Arsip inaktif disimpan oleh unit kearsipan di ruang khusus penyimpanan arsip inaktif (records center).
                                      <div class="yatidak">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>

                                    </li>
                                    <li class="py-2">Seluruh arsip yang disimpan oleh unit kearsipan telah terdaftar ke dalam daftar arsip inaktif.
                                      <div class="yatidak">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>
                                      <div class="col-lg-9 card border-left-info shadow h-100 ">
                                        <div class="card-body">
                                          <div class="row no-gutters align-items-center">
                                            <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Jika terdapat arsip yang telah disimpan namun belum terdaftar di dalam daftar arsip inaktif, maka pertanyaan poin 3.7 di atas harus dinyatakan "Tidak".</p>
                                          </div>
                                        </div>
                                      </div>               
                                    </li>
                                    <li class="py-2">Arsip yang disimpan oleh Unit Kearsipan tidak melewati retensi arsip inaktif sesuai Jadwal Retensi Arsip (JRA).
                                      <div class="yatidak">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>
                                      <div class="col-lg-9 card border-left-info shadow h-100 ">
                                        <div class="card-body">
                                          <div class="row no-gutters align-items-center">
                                            <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Jika pencipta arsip belum memiliki JRA, maka pertanyaan poin 3.8 di atas harus dinyatakan "Tidak".</p>
                                          </div>
                                        </div>
                                      </div>                 
                                    </li>
                                    <li class="py-2">Penyimpanan arsip inaktif dilaksanakan dengan melakukan penataan boks arsip pada rak secara berurut berdasarkan <br> nomor boks dan disusun berderet ke samping, dimulai dari rak paling atas dan diatur dari posisi kiri menuju ke kanan.
                                      <div class="yatidak">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>

                                    </li>
                                  </ol>      


                                </li>
                                <li class="py-2">Alih Media Arsip Inaktif
                                  <div class="row">
                                    <div class="col-lg-11">
                                      <p>Unit Kearsipan melaksanakan alih media arsip inaktif.</p>
                                    </div>
                                    <div class="form-group col-lg-1 ">                
                                      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 25px; height:25px">               
                                    </div>
                                  </div>
                                  <div class="col-lg-9 card border-left-info shadow h-100 ">
                                    <div class="card-body">
                                      <div class="row no-gutters align-items-center">
                                        <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Berikan tanda √ pada kolom di bawah ini sesuai kondisi faktual pada daftar arsip inaktif yang telah disusun, jika seluruh kolom di bawah ini dinyatakan "Ada" maka pertanyaan poin 2.4 di atas harus dinyatakan "Ya", namun jika terdapat kolom di bawah ini yang dinyatakan "Tidak Ada/Kosong" maka pertanyaan poin 2.4. di atas harus dinyatakan "Tidak". </p>
                                      </div>
                                    </div>
                                  </div>
                                  <ol class="daftar">
                                    <li class="py-2">Arsip inaktif yang dialihmediakan tetap disimpan oleh Unit Kearsipan.
                                     <div class="yatidak mx-5">                
                                      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 25px; height:25px"> 
                                      <label class="form-check-label" >Ya</label>              
                                    </div>

                                  </li>
                                  <li class="py-2">Alih media arsip inaktif diautentikasi oleh pimpinan di lingkungan pencipta arsip dengan memberikan tanda tertentu <br> yang dilekatkan, terasosiasi atau terkait dengan arsip hasil alih media.
                                    <div class="yatidak mx-5">                
                                      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 25px; height:25px">
                                      <label class="form-check-label">Ya</label>               
                                    </div>                            
                                  </li>
                                  <li class="py-2">Pelaksanaan alih media arsip inaktif disertai dengan pembuatan berita acara alih media arsip.
                                    <div class="yatidak mx-5">                
                                      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 25px; height:25px">
                                      <label class="form-check-label">Ya</label>               
                                    </div>   

                                  </li>
                                  <li class="py-2">Berita acara alih media arsip inaktif telah disusun sesuai ketentuan peraturan perundang-undangan.
                                    <div class="yatidak mx-5">                
                                      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 25px; height:25px">
                                      <label class="form-check-label">Ya</label>               
                                    </div>
                                    <div class="col-lg-9 card border-left-info shadow h-100 ">
                                      <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                          <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Berikan tanda √ pada kolom informasi di bawah ini sesuai kondisi faktual pada berita acara alih media arsip inaktif yang telah disusun, jika seluruh kolom di bawah ini dinyatakan "Ada" maka kolom informasi pada poin informasi di atas harus dinyatakan "Ya" dan berikan tanda √, namun jika terdapat kolom dibawah ini yang dinyatakan "Tidak Ada/Kosong" maka jangan memberikan tanda apapun di dalam kolom/kosongkan informasi pada poin informasi di atas.</p>
                                        </div>
                                      </div>
                                    </div>

                                    <!-- abc -->
                                    <div class="row">
                                      <p class="col-lg-6">Daftar arsip inaktif:</p>
                                      <label class="col-lg-1 form-check-label mx-4" for="inlineRadio2">ADA</label>
                                    </div>
                                    <ol class="a mt-1">
                                      <div class="row">
                                        <div class="col-lg-6">
                                          <dd>a. waktu pelaksanaan</dd>
                                        </div>
                                        <div class="form-group col-lg-1 mx-3">                
                                          <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-lg-6">
                                          <dd>b. tempat pelaksanaan</dd>
                                        </div>
                                        <div class="form-group col-lg-1 mx-3">                
                                          <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-lg-6">
                                          <dd>c. jenis media</dd>
                                        </div>
                                        <div class="form-group col-lg-1 mx-3">                
                                          <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-lg-6">
                                          <dd>d. jumlah arsip</dd>
                                        </div>
                                        <div class="form-group col-lg-1 mx-3">                
                                          <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-lg-6">
                                          <dd>e. keterangan proses alih media yang dilakukan</dd>
                                        </div>
                                        <div class="form-group col-lg-1 mx-3">                
                                          <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-lg-6">
                                          <dd>f. pelaksana</dd>
                                        </div>
                                        <div class="form-group col-lg-1 mx-3">                
                                          <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-lg-6">
                                          <dd>g. penanda tangan oleh pimpinan unit kearsipan.</dd>
                                        </div>
                                        <div class="form-group col-lg-1 mx-3">                
                                          <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                        </div>
                                      </div>
                                    </ol>

                                  </li>
                                  <li class="py-2">Pelaksanaan alih media arsip inaktif disertai dengan pembuatan daftar arsip inaktif yang dialihmediakan.
                                    <div class="yatidak mx-5">                
                                      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 25px; height:25px">
                                      <label class="form-check-label">Ya</label>               
                                    </div>


                                  </li>

                                  <li class="p-y2">Daftar arsip inaktif yang dialihmediakan telah disusun sesuai ketentuan peraturan perundang-undangan.
                                    <div class="yatidak mx-5">                
                                      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 25px; height:25px">
                                      <label class="form-check-label">Ya</label>               
                                    </div>
                                    <div class="col-lg-9 card border-left-info shadow h-100 ">
                                      <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                          <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Berikan tanda √ pada kolom informasi di bawah ini sesuai kondisi faktual pada daftar arsip inaktif  yang dialihmediakan yang telah disusun, jika seluruh kolom di bawah ini dinyatakan "Ada" maka kolom informasi pada poin informasi di atas harus dinyatakan "Ya" dan berikan tanda √, namun jika terdapat kolom dibawah ini yang dinyatakan "Tidak Ada/Kosong" maka jangan memberikan tanda apapun di dalam kolom/kosongkan informasi pada poin informasi  di atas.</p>
                                        </div>
                                      </div>
                                    </div>

                                    <!-- abc -->
                                    <div class="row">
                                      <p class="col-lg-6">Daftar arsip inaktif:</p>
                                      <label class="col-lg-1 form-check-label mx-4" for="inlineRadio2">ADA</label>
                                    </div>
                                    <ol class="a mt-1">
                                      <div class="row">
                                        <div class="col-lg-6">
                                          <dd>a. unit pengolah</dd>
                                        </div>
                                        <div class="form-group col-lg-1 mx-3">                
                                          <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-lg-6">
                                          <dd>b. nomor urut</dd>
                                        </div>
                                        <div class="form-group col-lg-1 mx-3">                
                                          <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-lg-6">
                                          <dd>c. jenis arsip</dd>
                                        </div>
                                        <div class="form-group col-lg-1 mx-3">                
                                          <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-lg-6">
                                          <dd>d. jumlah arsip</dd>
                                        </div>
                                        <div class="form-group col-lg-1 mx-3">                
                                          <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-lg-6">
                                          <dd>e. kurun waktu</dd>
                                        </div>
                                        <div class="form-group col-lg-1 mx-3">                
                                          <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-lg-6">
                                          <dd>f.  keterangan</dd>
                                        </div>
                                        <div class="form-group col-lg-1 mx-3">                
                                          <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-lg-6">
                                          <dd>g. penanda tangan oleh pimpinan unit kearsipan.</dd>
                                        </div>
                                        <div class="form-group col-lg-1 mx-3">                
                                          <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                        </div>
                                      </div>
                                    </ol>
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

                            <ol class="daftar">
                              <li class="py-2">Pemusnahan
                                <ol class="daftar">
                                  <li class="py-2">Berikan tanda √ pada kolom informasi di bawah ini sesuai kondisi faktual:
                                    <ul class="mt-2">
                                      <div class="col-lg-9 card border-left-info shadow h-100 ">
                                        <div class="card-body">
                                          <div class="row no-gutters align-items-center">
                                            <dd class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Berikan tanda √ pada kolom informasi di bawah ini sesuai kondisi faktual pada daftar arsip inaktif  yang dialihmediakan yang telah disusun, jika seluruh kolom di bawah ini dinyatakan "Ada" maka kolom informasi pada poin informasi di atas harus dinyatakan "Ya" dan berikan tanda √, namun jika terdapat kolom dibawah ini yang dinyatakan "Tidak Ada/Kosong" maka jangan memberikan tanda apapun di dalam kolom/kosongkan informasi pada poin informasi  di atas.</dd>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-lg-6">
                                          <dd>Pengawas Eksternal</dd>
                                        </div>
                                        <div class="form-group col-lg-1 mx-3">                
                                          <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                        </div>
                                      </div>
                                    </ul>

                                  </li>
                                  <li class="py-2">Pemusnahan arsip dilaksanakan sesuai prosedur sebagai berikut:
                                    <ol class="daftar">
                                      <li class="py-2">Terdapat pembentukan Panitia Penilai Arsip, yang dibuktikan dengan adanya surat keputusan pimpinan pencipta arsip <br> tentang pembentukan panitia penilai arsip.
                                        <div class="yatidak">
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                                          </div>
                                          <div class="form-check form-check-inline ">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                          </div>
                                        </div>

                                      </li>
                                      <li class="py-2">Terdapat Pimpinan Unit Kearsipan pada satuan kerja rektorat, fakultas, atau satuan kerja dengan sebutan lain, sebagai <br> Ketua merangkap Anggota dalam unsur Panitia Penilai Arsip.
                                        <div class="yatidak">
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                                          </div>
                                          <div class="form-check form-check-inline ">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                          </div>
                                        </div>

                                      </li>
                                      <li class="py-2">Terdapat Pimpinan Unit Pengolah yang arsipnya akan dimusnahkan sebagai Anggota dalam unsur Panitia Penilai Arsip.
                                        <div class="yatidak">
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                                          </div>
                                          <div class="form-check form-check-inline ">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                          </div>
                                        </div>
                                      </li>
                                      <li class="py-2">Terdapat Arsiparis atau Pegawai yang mempunyai tugas dan tanggungjawab di bidang pengelolaan arsip <br>(jika belum memiliki Arsiparis) sebagai Anggota dalam unsur panitia penilai arsip.
                                        <div class="yatidak">
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                                          </div>
                                          <div class="form-check form-check-inline ">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                          </div>
                                        </div>
                                      </li>
                                      <li class="py-2">Dilakukan penyeleksian arsip yang akan dimusnahkan.
                                        <div class="yatidak">
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                                          </div>
                                          <div class="form-check form-check-inline ">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                          </div>
                                        </div>          
                                      </li>
                                      <li class="py-2">Penyeleksian arsip dilakukan oleh penilai arsip melalui JRA dengan melihat kolom retensi inaktif pada kolom keterangan <br> dinyatakan musnah dan apabila pencipta arsip belum memiliki JRA, maka mengikuti tahapan prosedur pemusnahan arsip <br> dengan persetujuan Kepala ANRI. 
                                        <div class="yatidak">
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                                          </div>
                                          <div class="form-check form-check-inline ">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                          </div>
                                        </div>                
                                      </li>
                                      <li class="py-2">Dilakukan pembuatan daftar arsip usul musnah oleh arsiparis di unit kearsipan atau pegawai yang mempunyai tugas <br>dan tanggung jawab di bidang pengelolaan arsip di unit kearsipan.
                                        <div class="yatidak">
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                                          </div>
                                          <div class="form-check form-check-inline ">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                          </div>
                                        </div> 
                                      </li>
                                      <li class="py-2">Dilakukan penilaian oleh panitia penilai arsip, dengan melakukan verifikasi secara langsung terhadap fisik arsip, <br>yang dibuktikan dengan adanya notulen rapat panitia penilai arsip pada saat melakukan penilaian.
                                        <div class="yatidak">
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                                          </div>
                                          <div class="form-check form-check-inline ">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                          </div>
                                        </div>
                                      </li>
                                      <li class="py-2">Panitia penilai arsip menyampaikan surat pertimbangan kepada pimpinan satuan kerja rektorat, fakultas, atau satuan kerja <br>dengan sebutan lain, yang menyatakan bahwa arsip yang diusulkan musnah dan telah memenuhi syarat untuk dimusnahkan.
                                        <div class="yatidak">
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                                          </div>
                                          <div class="form-check form-check-inline ">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                          </div>
                                        </div>
                                      </li>
                                      <li class="py-2">1210</li>

                                      <li class="py-2">Terdapat penetapan arsip yang akan dimusnahkan oleh pimpinan satuan kerja rektorat, fakultas, atau satuan kerja <br> dengan sebutan lain, yang dibuktikan dengan adanya keputusan pimpinan satuan kerja rektorat, fakultas, atau satuan kerja <br>dengan sebutan lain di lingkungan Perguruan Tinggi Negeri tentang penetapan pelaksanaan pemusnahan arsip.
                                       <div class="yatidak">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>
                                      <div class="col-lg-9 card border-left-info shadow h-100 ">
                                        <div class="card-body">
                                          <div class="row no-gutters align-items-center">
                                            <dd class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Jika pertanyaan pada Poin 1.2.11. di atas dinyatakan "Tidak", maka pertanyaan pada poin 1.2.12. di bawah ini harus dinyatakan "Tidak".          </dd>
                                          </div>
                                        </div>
                                      </div>
                                    </li>
                                    <li class="py2">1212</li>
                                    <li class="py-2">Pelaksanaan pemusnahan arsip dilakukan secara total sehingga fisik dan informasi arsip musnah dan tidak dapat dikenali. 
                                      <div class="yatidak">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>      




                                    </li>
                                    <li class="py-2">Pelaksanaan pemusnahan arsip disaksikan oleh sekurang-kurangnya 2 (dua) pejabat dari unit hukum dan/atau pengawasan.
                                      <div class="yatidak">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>         




                                    </li>
                                    <li class="py-2">Pelaksanaan pemusnahan arsip disertai penandatanganan berita acara pemusnahan arsip, yang dibuktikan dengan <br>adanya berita acara pemusnahan arsip.
                                      <div class="yatidak">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>          




                                    </li>
                                    <li class="py-2">Pelaksanaan pemusnahan arsip disertai daftar arsip yang dimusnahkan sebagai bagian dari berita acara pemusnahan arsip, <br> yang dibuktikan dengan adanya daftar arsip yang dimusnahkan.
                                      <div class="yatidak">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>



                                    </li>
                                    <li class="py-2">Pelaksanaan pemusnahan arsip dilakukan dengan membuat Berita Acara Pemusnahan beserta Daftar Arsip Usul Musnah <br>yang dibuat 2 (dua) rangkap.
                                      <div class="yatidak">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>




                                    </li>
                                    <li class="py-2">Berita acara pemusnahan arsip dan Daftar arsip yang dimusnahkan ditembuskan kepada Kepala Arsip Nasional Republik Indonesia.
                                      <div class="yatidak">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>

                                    </li>

                                  </ol>

                                </li>
                                <li class="py-2">Arsip yang tercipta dalam pelaksanaan pemusnahan arsip disimpan oleh Unit Kearsipan pada satuan kerja rektorat, fakultas, atau satuan kerja <br> dengan sebutan lain yang melaksanakan pemusnahan arsip.
                                  <div class="yatidak">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>

                                  <div class="col-lg-9 card border-left-info shadow h-100 ">
                                    <div class="card-body">
                                      <div class="row no-gutters align-items-center">
                                        <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Jika pertanyaan pada Poin 1.3. di atas dinyatakan "Tidak", maka pertanyaan pada Poin 1.4. di bawah ini harus dinyatakan "Tidak".</p>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                                <li class="py-2">Arsip yang tercipta dalam pelaksanaan pemusnahan arsip diperlakukan sebagai arsip vital oleh Unit Kearsipan pada <br> satuan kerja rektorat, fakultas, atau satuan kerja dengan sebutan lain yang melaksanakan pemusnahan arsip.
                                  <div class="yatidak">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>
                                </li>
                              </ol>

                            </li>
                            <li class="py-2">Penyerahan

                              <div class="row ">
                                <div class="col-lg-9 card border-left-info shadow h-100 ">
                                  <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                      <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Jika Unit Kearsipan pada satuan kerja rektorat, fakultas, atau satuan kerja dengan sebutan lain tidak melaksanakan penyerahan arsip statis ke lembaga kearsipan perguruan tinggi,  berikan tanda √ pada kolom di samping ini.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="yatidak col-lg-1">
                                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 30px; height:30px">               
                                  </div>
                                </div>
                              </div>
                              <ol class="daftar">
                                <li class="py-2">Arsip statis yang diserahkan oleh Unit Kearsipan pada satuan kerja rektorat, fakultas, atau satuan kerja dengan sebutan lain <br>kepada lembaga kearsipan perguruan tinggi merupakan arsip yang autentik, terpercaya, utuh, dan dapat digunakan, atau dalam <br> hal arsip statis yang diserahkan tidak autentik maka satuan kerja rektorat, fakultas, atau satuan kerja dengan sebutan lain yang <br> menyerahkan arsip statis telah melakukan autentikasi terhadap arsip yang diserahkan.
                                  <div class="yatidak">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>
                                  <br>
                                  <div class="row mt-3">
                                    <div class="col-lg-6">
                                      <p>Isikan persentase jumlah arsip statis yang telah diserahkan dan merupakan arsip yang autentik atau telah diautentikasi</p>
                                    </div>
                                    <div class="form-check-inline col-lg-1 mx-5">                
                                      <input type="text" id="vehicle1" name="vehicle1" style="width: 35px; height:35px">
                                      <label class="form-check-label" for="inlineRadio2"> %</label>               
                                    </div>
                                  </div>             
                                </li>
                                <li class="py-2">Penyerahan arsip statis dilaksanakan sesuai prosedur sebagai berikut :
                                  <ol class="daftar">
                                    <li class="py-2">Penyeleksian dan pembuatan daftar arsip usul serah di unit kearsipan, dengan melihat JRA pada kolom retensi inaktif <br> dan pada kolom keterangan yang dinyatakan permanen.
                                      <div class="yatidak">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>    
                                    </li>
                                    <li class="py-2">Terdapat pembentukan panitia penilai arsip, yang dibuktikan dengan adanya surat keputusan tentang pembentukan <br> panitia penilai arsip.
                                      <div class="yatidak">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>
                                    </li>
                                    <li class="py-2">Dilakukan penilaian oleh panitia penilai arsip terhadap arsip usul serah, dengan melakukan verifikasi secara langsung <br>terhadap fisik arsip, yang dibuktikan dengan adanya notulen rapat panitia penilai arsip pada saat melakukan penilaian.
                                      <div class="yatidak">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>
                                    </li>
                                    <li class="py-2">Panitia penilai arsip menyampaikan surat pertimbangan kepada kepada pimpinan satuan kerja rektorat, fakultas, <br> atau satuan kerja dengan sebutan lain yang menyatakan bahwa arsip yang diusulkan untuk diserahkan dan <br> telah memenuhi syarat untuk diserahkan.
                                      <div class="yatidak">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>
                                    </li>
                                    <li class="py-2">Pemberitahuan akan menyerahkan arsip statis oleh Pimpinan satuan kerja rektorat, fakultas, atau satuan kerja <br> dengan sebutan lain kepada lembaga kearsipan perguruan tinggi disertai dengan pernyataan dari Pimpinan satuan kerja <br> rektorat, fakultas, atau satuan kerja dengan sebutan lain bahwa arsip yang diserahkan autentik, terpercaya, utuh, <br> dan dapat digunakan.
                                      <div class="yatidak">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>

                                      <div class="col-lg-9 card border-left-info shadow h-100 ">
                                        <div class="card-body">
                                          <div class="row no-gutters align-items-center">
                                            <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Berikan tanda √ pada kolom informasi di bawah ini sesuai kondisi faktual, jika seluruh bukti di bawah ini tidak dapat ditunjukkan oleh unit kearsipan yang menyerahkan arsip statis, maka pertanyaan pada Poin 2.2.5. di atas harus dinyatakan "Tidak". Dalam hal kedua bukti di bawah ini menjadi satu kesatuan di dalam 1 (satu) surat maka pertanyaan pada Poin 2.2.5. di atas harus dinyatakan "Ya" dan berikan tanda √ pada seluruh kolom informasi di bawah ini:</p>
                                          </div>
                                        </div>
                                      </div>

                                      <ul class=" mt-2">
                                        <div class="row">
                                          <div class="col-lg-6">
                                            <dd>Surat pemberitahuan akan menyerahkan arsip statis oleh Pimpinan satuan kerja rektorat, fakultas, atau satuan kerja dengan sebutan lain kepada Lembaga Kearsipan Perguruan Tinggi.</dd>
                                          </div>
                                          <div class="form-group col-lg-1 mx-3">                
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                          </div>
                                        </div>

                                        <div class="row">
                                          <div class="col-lg-6">
                                            <dd>Surat pernyataan dari Pimpinansatuan kerja rektorat, fakultas, atau satuan kerja dengan sebutan lain yang menyatakan bahwa arsip yang diserahkan autentik, terpercaya, utuh dan dapat digunakan.</dd>
                                          </div>
                                          <div class="form-group col-lg-1 mx-3">                
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                          </div>
                                        </div>
                                      </ul>



                                    </li>
                                    <li class="py-2">Verifikasi dan persetujuan dari kepala lembaga kearsipan perguruan tinggi, yang dibuktikan dengan adanya surat <br> persetujuan dari kepala lembaga kearsipan perguruan tinggi.
                                      <div class="yatidak">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>
                                    </li>
                                    <li class="py-2">Penetapan arsip yang akan diserahkan, yang dibuktikan dengan adanya surat Keputusan Rektor tentang penetapan <br> pelaksanaan penyerahan arsip statis.
                                      <div class="yatidak">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>
                                    </li>    



                                    <li class="py-2">Kepala Lembaga Kearsipan Perguruan Tinggi melakukan verifikasi daftar arsip usul serah berdasarkan permohonan <br>penyerahan arsip statis dari Pimpinan satuan kerja rektorat, fakultas, atau satuan kerja dengan sebutan lain.
                                      <div class="yatidak">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>
                                    </li>
                                    <li class="py-2">Pelaksanaaan serah terima arsip statis oleh Pimpinan satuan kerja rektorat, fakultas, atau satuan kerja dengan sebutan <br>lain kepada kepala lembaga kearsipan perguruan tinggi disertai dengan berita acara serah terima arsip statis, yang dibuktikan <br> dengan berita acara serah terima arsip statis
                                      <div class="yatidak">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>
                                    </li>
                                    <li class="py-2">Pelaksanaaan serah terima arsip statis oleh Pimpinan satuan kerja rektorat, fakultas, atau satuan kerja dengan sebutan <br>lain kepada kepala lembaga kearsipan perguruan tinggi disertai dengan daftar arsip yang akan diserahkan, yang dibuktikan <br>dengan daftar arsip yang akan diserahkan
                                      <div class="yatidak">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                          <label class="form-check-label" for="inlineRadio1">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline ">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                          <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                        </div>
                                      </div>
                                    </li>
                                  </ol>      

                                </li>
                                <li class="py-2">Arsip yang tercipta dalam pelaksanaan penyerahan arsip statis disimpan oleh Unit Kearsipan pada satuan kerja rektorat, <br> fakultas, atau satuan kerja dengan sebutan lain yang melaksanakan penyerahan arsip statis.
                                  <div class="yatidak">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>
                                  <div class="col-lg-9 card border-left-info shadow h-100 ">
                                    <div class="card-body">
                                      <div class="row no-gutters align-items-center">
                                        <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">Jika pertanyaan pada Poin 2.3. di atas dinyatakan "Tidak", maka pertanyaan pada poin 2.4. di bawah ini harus dinyatakan "Tidak".</p>
                                      </div>
                                    </div>
                                  </div>

                                </li>
                                <li class="py-2">Arsip yang tercipta dalam pelaksanaan penyerahan arsip statis diperlakukan sebagai arsip vital oleh Unit Kearsipan <br>pada satuan kerja rektorat, fakultas, atau satuan kerja dengan sebutan lain yang melaksanakan penyerahan arsip statis.
                                  <div class="yatidak">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
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
                          <li class="py-2">Pejabat Struktural
                            <ol class="daftar">
                              <li class="py-2">Unit Kearsipan Dipimpin oleh Pejabat Struktural
                                <div class="yatidak">
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Ya</label>
                                  </div>
                                  <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                  </div>
                                </div>
                              </li>
                              <li class="py-2">Dalam Pelaksanaan Fungsi dan Tugasnya, Pimpinan Unit Kearsipan Bertanggungjawab Terhadap
                                <div class="yatidak">
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Ya</label>
                                  </div>
                                  <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                  </div>
                                </div>
                                <ol class="daftar">
                                  <li class="py-2">Perencanaan
                                    <div class="yatidak">
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                                      </div>
                                      <div class="form-check form-check-inline ">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                      </div>
                                    </div>
                                  </li>
                                  <li class="py-2">Penyusunan Program
                                    <div class="yatidak">
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                                      </div>
                                      <div class="form-check form-check-inline ">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                      </div>
                                    </div>
                                  </li>
                                  <li class="py-2">Pengaturan Kegiatan Kearsipan
                                    <div class="yatidak">
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                                      </div>
                                      <div class="form-check form-check-inline ">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                      </div>
                                    </div>
                                  </li>
                                  <li class="py-2">Pengendalian Pelaksanaan Kegiatan Kearsipan
                                    <div class="yatidak">
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                                      </div>
                                      <div class="form-check form-check-inline ">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                      </div>
                                    </div>
                                  </li>
                                  <li class="py-2">Pengelolaan Sumber Daya Kearsipan
                                    <div class="yatidak">
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                                      </div>
                                      <div class="form-check form-check-inline ">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                      </div>
                                    </div>
                                  </li>
                                  <li class="py-2">Monitoring dan Evaluasi
                                    <div class="yatidak">
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Ya</label>
                                      </div>
                                      <div class="form-check form-check-inline ">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                      </div>
                                    </div>
                                  </li>
                                </ol>
                              </li>
                              <li class="py-2">Kompetensi
                               <div class="yatidak">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                                </div>
                                <div class="form-check form-check-inline ">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                </div>
                              </div>
                              <ol class="daftar mt-2">
                                <div class="row">
                                  <div class="col-lg-6">
                                    <li>Sarjana (strata satu/S1) Bidang Kearsipan, atau</li>
                                  </div>
                                  <div class="form-group col-lg-1 mx-3">                
                                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-lg-6">
                                    <li>Sarjana (strata satu/S1) Selain Bidang Kearsipan dan Telah Mengikuti Serta Lulus Pendidikan dan Pelatihan Teknis Kearsipan bagi Pejabat Struktural Kearsipan</li>
                                  </div>
                                  <div class="form-group col-lg-1 mx-3">                
                                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                  </div>
                                </div>
                              </ol>
                            </li>

                          </ol> 
                        </li>
                        <li class="py-2">Arsiparis
                          <ol class="daftar">
                            <li class="py-2">Ketersediaan
                              <ol class="daftar">
                                <li class="py-2">Unit Kearsipan telah terdapat arsiparis
                                  <div class="yatidak">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>
                                </li>
                                <li class="py-2">Jumlah arsiparis pada Unit Kearsipan telah sesuai dengan analisis beban kerja kearsipan
                                  <div class="yatidak">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
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
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>
                                  <div class="col-lg-9 card border-left-info shadow h-100 ">
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
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>

                                  <div class="col-lg-9 card border-left-info shadow h-100 ">
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
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>
                                </li>
                                <li class="py-2">Memiliki kewenangan kearsipan.
                                  <div class="yatidak">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>
                                </li>

                              </ol>
                            </li>
                            <li class="py-2">Kegiatan Arsiparis di Unit Kearsipan
                              <ol class="daftar">
                                <li class="py-2">Pengelolaan Arsip Inaktif
                                  <div class="yatidak">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>
                                </li>
                                <li class="py-2">Pembinaan Kearsipan
                                  <div class="yatidak">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>
                                </li>
                                <li class="py-2">Pengolahan dan Penyajian Arsip menjadi Informasi
                                  <div class="yatidak">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>
                                </li>

                              </ol>
                            </li>
                            <li class="py-2">Kompetensi
                              <ol class="daftar">
                                <li class="py-2">Memenuhi Persyaratan Kompetensi 

                                  <div class="yatidak">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>
                                  <ul class="mt-2">
                                    <div class="row">
                                      <div class="col-lg-6">
                                        <dd>Pendidikan Formal di bidang selain bidang kearsipan yang telah mengikuti dan lulus Diklat Fungsional Arsiparis.</dd>
                                      </div>
                                      <div class="form-group col-lg-1 mx-3">                
                                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-lg-6">
                                        <dd>Pendidikan Formal Bidang Kearsipan yang sesuai (Sarjana/S1 di bidang Kearsipan untuk Arsiparis Ahli dan Diploma/D3 di Bidang Kearsipan untuk Arsiparis Terampil).</dd>
                                      </div>
                                      <div class="form-group col-lg-1 mx-3">                
                                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                      </div>
                                    </div>
                                  </ul>
                                </li>

                                <div class="row">
                                  <div class="col-lg-6">
                                    <li class="py-2">Lulus Uji Kompetensi/Sertifikasi bagi Arsiparis yang diangkat melalui Inpassing</li>
                                  </div>
                                  <div class="form-group col-lg-1 mt-2 mx-4">                
                                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                  </div>
                                </div>
                              </ol>
                            </li>
                            <li class="py-2">Sertifikasi Kearsipan <br><br>
                              Arsiparis telah mengikuti sertifikasi kearsipan
                              <div class="yatidak">
                                <div class=" yatidak form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                                </div>
                                <div class="yatidak form-check form-check-inline ">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                </div>
                              </div>
                              <ul class="mt-2">
                                <div class="row">
                                  <div class="col-lg-6">
                                    <dd>Jumlah arsiparis yang terdapat di unit kearsipan</dd>
                                  </div>
                                  <div class="form-group col-lg-3 mx-3">                
                                    <input type="text" id="vehicle1" name="vehicle1"  style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio2"> orang</label>               
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-lg-6">
                                    <dd>Jumlah arsiparis yang telah mengikuti dan lulus sertifikasi kearsipan</dd>
                                  </div>
                                  <div class="form-group col-lg-3 mx-3">                
                                    <input type="text" id="vehicle1" name="vehicle1"  style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio2"> orang</label>               
                                  </div>
                                </div>
                              </ul>

                            </li>
                            <li class="py-2">Pengembangan SDM Kearsipan (melalui kegiatan pemberian diklat, sosialisasi, workshop, bimbingan teknis dan sejenisnya yang diberikan dalam rangka peningkatan kompetensi Arsiparis) <br><br>
                              Arsiparis telah mengikuti pengembangan SDM Kearsipan
                              <div class="yatidak">
                                <div class=" yatidak form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                                </div>
                                <div class="yatidak form-check form-check-inline ">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                </div>
                              </div>

                              <ul class="mt-2">
                                <div class="row">
                                  <div class="col-lg-6">
                                    <dd>Jumlah arsiparis yang terdapat di unit kearsipan</dd>
                                  </div>
                                  <div class="form-group col-lg-3 mx-3">                
                                    <input type="text" id="vehicle1" name="vehicle1"  style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio2"> orang</label>               
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-lg-6">
                                    <dd>Jumlah arsiparis yang telah mengikuti kegiatan pengembangan SDM kearsipan</dd>
                                  </div>
                                  <div class="form-group col-lg-3 mx-3">                
                                    <input type="text" id="vehicle1" name="vehicle1"  style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio2"> orang</label>               
                                  </div>
                                </div>
                              </ul>

                            </li>

                          </ol>
                        </li>
                        <li class="py-2">Pengelola Arsip
                          <ol class="daftar">
                            <li class="py-2">Unit Kearsipan memiliki pengelola arsip
                              <div class="yatidak">
                                <div class=" yatidak form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                                </div>
                                <div class="yatidak form-check form-check-inline ">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                </div>
                              </div>
                              <div class="col-lg-9 card border-left-info shadow h-100 ">
                                <div class="card-body">
                                  <div class="row no-gutters align-items-center">
                                    <p class="mb-0 font-weight-bold text-info text-justify" style="font-size: 13px;">(pengelola arsip adalah pegawai negeri atau pegawai lainnya yang menduduki jabatan yang fungsi, tugas, dan tanggung jawabnya melaksanakan kegiatan kearsipan)</p>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="py-2">Persyaratan Kompetensi Pengelola Arsip <br><br>
                              Pengelola Arsip telah memiliki persyaratan kompetensi
                              <div class="yatidak">
                                <div class=" yatidak form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                                </div>
                                <div class="yatidak form-check form-check-inline ">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                </div>
                              </div>
                              <ul class="mt-2">
                                <div class="row">
                                  <div class="col-lg-6">
                                    <dd>Jumlah pengelola arsip yang terdapat di unit kearsipan</dd>
                                  </div>
                                  <div class="form-group col-lg-3 mx-3">                
                                    <input type="text" id="vehicle1" name="vehicle1"  style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio2"> orang</label>               
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-lg-6">
                                    <dd>Jumlah pengelola arsip yang telah mengikuti dan lulus  diklat teknis kearsipan</dd>
                                  </div>
                                  <div class="form-group col-lg-3 mx-3">                
                                    <input type="text" id="vehicle1" name="vehicle1"  style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio2"> orang</label>               
                                  </div>
                                </div>
                              </ul>


                            </li>
                            <li class="py-2">Pengembangan SDM Kearsipan (Nondiklat Teknis) <br><br>
                              Pengelola Arsip telah mengikuti pengembangan SDM Kearsipan (Nondiklat Teknis)
                              <div class="yatidak">
                                <div class=" yatidak form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                                </div>
                                <div class="yatidak form-check form-check-inline ">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                </div>
                              </div>

                              <ul class="mt-2">
                                <div class="row">
                                  <div class="col-lg-6">
                                    <dd>Jumlah pengelola arsip yang terdapat di unit kearsipan</dd>
                                  </div>
                                  <div class="form-group col-lg-3 mx-3">                
                                    <input type="text" id="vehicle1" name="vehicle1"  style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio2"> orang</label>               
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-lg-6">
                                    <dd>Jumlah pengelola arsip yang telah mengikuti kegiatan pengembangan SDM kearsipan (nondiklat teknis)</dd>
                                  </div>
                                  <div class="form-group col-lg-3 mx-3">                
                                    <input type="text" id="vehicle1" name="vehicle1"  style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio2"> orang</label>               
                                  </div>
                                </div>
                              </ul>
                            </li>
                            <li class="py-2">Pengelola arsip telah melaksanakan pengelolaan arsip inaktif yang dibuktikan dengan indikator :
                              <ol class="daftar">
                                <li class="py-2">Arsip inaktif yang telah disimpan dengan menggunakan media penyimpanan yang sesuai
                                  <div class="yatidak">
                                    <div class=" yatidak form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="yatidak form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>
                                </li>
                                <li class="py-2">
                                  Arsip inaktif tertata dan terpelihara dengan baik
                                  <div class="yatidak">
                                    <div class=" yatidak form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="yatidak form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>   

                                </li>
                              </ol>
                            </li>
                          </ol>
                        </li>
                      </ol>
                      <br>
                      <h6 class="mx-5">Data SDM Kearsipan</h6>
                      <ol class="daftar">
                        <li class="py-3">Arsiparis
                          <div class="yatidak form-check form-check-inline">
                            <input class="form-check-input" type="text" name="inlineRadioOptions" id="inlineRadio1" style="width: 35px; height:35px">
                            <label class="form-check-label" for="inlineRadio1">Orang</label>
                          </div>
                          <ol class="daftar">
                            <li class="py-3">Arsiparis Kategori Keterampilan
                              <div class="yatidak form-check form-check-inline">
                                <input class="form-check-input" type="text" name="inlineRadioOptions" id="inlineRadio1" style="width: 35px; height:35px">
                                <label class="form-check-label" for="inlineRadio1">Orang</label>
                              </div>
                              <ol class="daftar">
                                <li class="py-3">Arsiparis Terampil
                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="inlineRadioOptions" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>

                                </li>
                                <li class="py-3">Arsiparis Mahir
                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="inlineRadioOptions" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>

                                </li>
                                <li class="py-3">Arsiparis Penyelia
                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="inlineRadioOptions" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>
                                </li>
                              </ol>
                            </li>
                            <hr>
                            <li class="py-2">Arsiparis Kategori Keahlian
                              <div class="yatidak form-check form-check-inline">
                                <input class="form-check-input" type="text" name="inlineRadioOptions" id="inlineRadio1" style="width: 35px; height:35px">
                                <label class="form-check-label" for="inlineRadio1">Orang</label>
                              </div>
                              <ol class="daftar">
                                <li class="py-3">Arsiparis Ahli Pertama

                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="inlineRadioOptions" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>

                                </li>
                                <li class="py-3">Arsiparis Ahli Muda

                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="inlineRadioOptions" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>

                                </li>
                                <li class="py-3">Arsiparis Ahli Madya

                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="inlineRadioOptions" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>
                                </li>
                                <li class="py-3">Arsiparis Ahli Utama

                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="inlineRadioOptions" id="inlineRadio1" style="width: 35px; height:35px">
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
                                    <input class="form-check-input" type="text" name="inlineRadioOptions" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>

                                </li>
                                <li class="py-3">S1/D4 Kearsipan

                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="inlineRadioOptions" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>

                                </li>
                                <li class="py-3">S1 Selain Kearsipan

                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="inlineRadioOptions" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>
                                </li>
                                <li class="py-3">D3 Kearsipan

                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="inlineRadioOptions" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>
                                </li>
                                <li class="py-2">D3 Selain Kearsipan

                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="inlineRadioOptions" id="inlineRadio1" style="width: 35px; height:35px">
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
                                    <input class="form-check-input" type="text" name="inlineRadioOptions" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>

                                </li>
                                <li class="py-3">Diklat Penciptaan

                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="inlineRadioOptions" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>

                                </li>
                                <li class="py-3">Pendidikan Formal Kearsipan

                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="inlineRadioOptions" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>
                                </li>

                              </ol>
                            </li>

                          </ol>


                        </li>
                        <li class="py-2">Pengelola Arsip
                          <div class="yatidak form-check form-check-inline">
                            <input class="form-check-input" type="text" name="inlineRadioOptions" id="inlineRadio1" style="width: 35px; height:35px">
                            <label class="form-check-label" for="inlineRadio1">Orang</label>
                          </div>
                          <ol class="daftar">
                            <li class="py-2">Jumlah Pengelola Arsip (PNS)
                              <div class="yatidak form-check form-check-inline">
                                <input class="form-check-input" type="text" name="inlineRadioOptions" id="inlineRadio1" style="width: 35px; height:35px">
                                <label class="form-check-label" for="inlineRadio1">Orang</label>
                              </div>
                              <ol class="daftar">
                                <li class="py-3">Gol II/setara

                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="inlineRadioOptions" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>

                                </li>
                                <li class="py-3">Gol III/setara

                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="inlineRadioOptions" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>

                                </li>
                                <li class="py-3">Gol IV/setara


                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="inlineRadioOptions" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>
                                </li>

                              </ol>
                            </li>
                            <li class="py-2">Pendidikan
                              <ol class="daftar">
                                <li class="py-3">S1/D4 Kearsipan

                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="inlineRadioOptions" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>

                                </li>
                                <li class="py-3">S1 Selain Kearsipan

                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="inlineRadioOptions" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>

                                </li>
                                <li class="py-3">D3 Kearsipan


                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="inlineRadioOptions" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>
                                </li>
                                <li class="py-3">D3 Selain Kearsipan


                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="inlineRadioOptions" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>
                                </li>
                                <li class="py-2">SLTA

                                  <div class="yatidak form-check form-check-inline">
                                    <input class="form-check-input" type="text" name="inlineRadioOptions" id="inlineRadio1" style="width: 35px; height:35px">
                                    <label class="form-check-label" for="inlineRadio1">Orang</label>
                                  </div>
                                </li>
                              </ol>

                            </li>
                            <li class="py-2">Jumlah Pengelola Arsip (kontrak/tidak Tetap)
                              <div class="yatidak form-check form-check-inline">
                                <input class="form-check-input" type="text" name="inlineRadioOptions" id="inlineRadio1" style="width: 35px; height:35px">
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
                        <li class="py-2">Gedung Penyimpanan Arsip Inaktif (Record Center)
                          <ol class="daftar">
                            <li class="py-2">Lokasi
                              <ol class="daftar">
                                <li class="py-2">Tidak berada di daerah rawan gempa 

                                  <div class="yatidak">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>

                                </li>
                                <li class="py-2">Tidak berada di daerah rawan banjir

                                  <div class="yatidak">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>

                                </li>
                                <li class="py-2">Tidak berdekatan dengan penyimpanan bahan mudah meledak dan terbakar
                                  <div class="yatidak">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>
                                </li>
                                <li class="py-2">Tidak berdekatan dengan pemukiman penduduk dan pabrik    
                                  <div class="yatidak">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>
                                </li>

                                <li class="py-2">Mudah dijangkau untuk pengiriman, penggunaan maupun transportasi pegawai  
                                  <div class="yatidak">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>
                                </li>

                                <li class="py-2">Tidak berdekatan dengan lingkungan yang memiliki kandungan polusi udara tinggi   
                                  <div class="yatidak">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>
                                </li>
                              </ol>
                            </li>
                            <li class="py-2">Tersedia sistem pengairan (drainage) yang baik
                              <div class="yatidak">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                                </div>
                                <div class="form-check form-check-inline ">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                </div>
                              </div>
                            </li>
                          </ol>
                        </li>
                        <li class="py-2">Ruangan
                          <ol class="daftar">
                            <li class="py-2">Ruangan Kerja
                              <ol class="daftar">
                                <li class="py-2">Ruang Transit


                                  <div class="yatidak">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>

                                </li>
                                <li class="py-2">Ruang Layanan

                                  <div class="yatidak">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>

                                </li>
                                <li class="py-2">Ruang pengolahan arsip inaktif

                                  <div class="yatidak">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>
                                </li>

                              </ol>

                            </li>
                            <li class="py-2">Ruang Penyimpanan Arsip Inaktif
                              <ol class="daftar">
                                <li class="py-2">Memiliki pintu darurat untuk memindahkan arsip jika terjadi bencana   
                                  <div class="yatidak">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>

                                </li>
                                <li class="py-2">Standar suhu dan kelembaban untuk ruang simpan arsip  tidak lebih dari 27 0 C dan kelembaban <br>tidak lebih dari 60 %;    
                                  <div class="yatidak">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>

                                </li>
                                <li class="py-2">Terdapat pembatasan akses masuk ke ruang penyimpanan arsip inaktif
                                  <div class="yatidak">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>
                                </li>
                                <li class="py-2">Memiliki ruang khusus penyimpanan arsip audiovisual        
                                  <div class="yatidak">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>
                                </li>

                                <li class="py-2">Memiliki pencahayaan yang tidak menyilaukan dan terlindung dari sinar matahari langsung    

                                  <div class="yatidak">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>
                                </li>

                                <li class="py-2">Bangunan tidak terbuat dari kayu agar terhindar dari rayap   
                                  <div class="yatidak">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>
                                </li>
                              </ol>
                            </li>

                          </ol>
                        </li>
                        <li class="py-2">Peralatan
                          <ol class="daftar">
                            <li class="py-2">Dilengkapi dengan alat perlindungan bahaya kebakaran
                              <ol class="daftar">
                                <li class="py-2">Fire alarm system

                                  <div class="yatidak">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>

                                </li>
                                <li class="py-2">Heat/smoke detector

                                  <div class="yatidak">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>

                                </li>
                                <li class="py-2">Hydran dan atau tabung pemadam kebakaran 
                                  <div class="yatidak">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>
                                </li>                  
                              </ol>       
                            </li>
                            <li class="py-2">Arsip ditempatkan pada rak penyimpanan arsip inaktif sesuai ketentuan perundang-undangan
                              <ol class="daftar">
                                <li class="py-2">Jenis dan bahan rak

                                  <div class="yatidak">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>
                                  <ul class="mt-2">
                                   <div class="row mt-1">
                                    <div class="col-lg-6">
                                      <dd class="">Rak untuk jenis arsip kertas yakni rak besi anti karat</dd>
                                    </div>
                                    <div class="form-group col-lg-1 mx-3">                
                                      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                    </div>
                                  </div>

                                  <div class="row mt-1">
                                    <div class="col-lg-6">
                                      <dd class="">Rak untuk jenis arsip kertas berupa arsip peta yakni laci besi anti karat</dd>
                                    </div>
                                    <div class="form-group col-lg-1 mx-3">                
                                      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                    </div>
                                  </div>

                                  <div class="row mt-1">
                                    <div class="col-lg-6">
                                      <dd class="">Rak untuk jenis arsip foto yakni rak besi anti karat</dd>
                                    </div>
                                    <div class="form-group col-lg-1 mx-3">                
                                      <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                                    </div>
                                  </div>
                                </ul>
                                <li class="py-2">Jarak antara rak dan tembok 70-80 cm dan jarak antara baris rak yang satu dengan yang lainnya 100-110 cm.                
                                  <div class="yatidak">
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                                    </div>
                                  </div>
                                </li>


                              </li>
                            </ol>     

                          </li>
                          <li class="py-2">Arsip disimpan dengan menggunakan media penyimpanan arsip yang sesuai
                            <div class="yatidak">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Ya</label>
                              </div>
                              <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Tidak</label>
                              </div>
                            </div>
                            <ul class="mt-2">
                             <div class="row mt-1">
                              <div class="col-lg-6">
                                <dd class="">Container untuk jenis arsip kertas yakni boks arsip.</dd>
                              </div>
                              <div class="form-group col-lg-1 mx-3">                
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                              </div>
                            </div>

                            <div class="row mt-1">
                              <div class="col-lg-6">
                                <dd class="">Container  untuk jenis arsip kertas berupa arsip peta yakni tabung atau laci sesuai ukuran.</dd>
                              </div>
                              <div class="form-group col-lg-1 mx-3">                
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                              </div>
                            </div>

                            <div class="row mt-1">
                              <div class="col-lg-6">
                                <dd class="">Container untuk jenis arsip foto yakni amplop (1 amplop berisi 1 lembar foto) dan dimasukan pada boks arsip foto.</dd>
                              </div>
                              <div class="form-group col-lg-1 mx-3">                
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                              </div>
                            </div>
                          </ul>
                        </li>
                        34
                        <li class="py-2">Terdapat alat pengatur suhu dan kelembaban
                          <div class="yatidak">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                              <label class="form-check-label" for="inlineRadio1">Ya</label>
                            </div>
                            <div class="form-check form-check-inline ">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                              <label class="form-check-label" for="inlineRadio2">Tidak</label>
                            </div>
                          </div>
                          <ul class="mt-2">
                           <div class="row mt-1">
                            <div class="col-lg-6">
                              <dd class="">Memiliki alat dehumidifier yang berfungsi untuk mengatur kelembapan</dd>
                            </div>
                            <div class="form-group col-lg-1 mx-3">                
                              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                            </div>
                          </div>

                          <div class="row mt-1">
                            <div class="col-lg-6">
                              <dd class="">Memiliki Air Conditioner yang berfungsi untuk mengatur suhu</dd>
                            </div>
                            <div class="form-group col-lg-1 mx-3">                
                              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                            </div>
                          </div>

                          <div class="row mt-1">
                            <div class="col-lg-6">
                              <dd class="">Memiliki alat thermo hygrometer yang berfungsi untuk mengukur suhu dan kelembapan</dd>
                            </div>
                            <div class="form-group col-lg-1 mx-3">                
                              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                            </div>
                          </div>
                        </ul>
                      </li>

                      35
                      <li class="py-2">Dilengkapi dengan alat pengamanan dan kontrol
                        <div class="yatidak">
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                          </div>
                          <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                          </div>
                        </div>
                        <ul class="mt-2">
                         <div class="row mt-1">
                          <div class="col-lg-6">
                            <dd class="">Memiliki CCTV (Closed Circuit Television), yang terkoneksi ke monitor di ruang instalasi teknis</dd>
                          </div>
                          <div class="form-group col-lg-1 mx-3">                
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                          </div>
                        </div>

                        <div class="row mt-1">
                          <div class="col-lg-6">
                            <dd class="">Memiliki pengamanan pintu secara otomatis, menggunakan kontrol akses ID card atau sidik jari pengguna</dd>
                          </div>
                          <div class="form-group col-lg-1 mx-3">                
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                          </div>
                        </div>


                      </ul>
                    </li>
                  </ol>

                </li>
                <li class="py-2">Boks
                  <ol class="daftar">
                    <li class="py-2">Spesifikasi
                      <ol class="daftar">
                        <li class="py-2">Boks Arsip terbuat dari Karton gelombang, yaitu karton yang dibuat dari beberapa lapisan kertas medium <br>bergelombang dengan kertas lainer sebagai penyekat dan pelapisnya
                          <div class="yatidak">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                              <label class="form-check-label" for="inlineRadio1">Ya</label>
                            </div>
                            <div class="form-check form-check-inline ">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                              <label class="form-check-label" for="inlineRadio2">Tidak</label>
                            </div>
                          </div>
                        </li>
                        <li class="py-2">Keadaan lembaran rata, tidak kotor, tidak berlubang dan tidak kisut. 
                          <div class="yatidak">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                              <label class="form-check-label" for="inlineRadio1">Ya</label>
                            </div>
                            <div class="form-check form-check-inline ">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                              <label class="form-check-label" for="inlineRadio2">Tidak</label>
                            </div>
                          </div>  

                        </li>
                      </ol>

                    </li>
                    <li class="py-2">Bentuk dan Ukuran
                      <ol class="daftar">
                        <li class="py-2">Bentuk Boks Arsip adalah kotak empat persegi
                          <div class="yatidak">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                              <label class="form-check-label" for="inlineRadio1">Ya</label>
                            </div>
                            <div class="form-check form-check-inline ">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                              <label class="form-check-label" for="inlineRadio2">Tidak</label>
                            </div>
                          </div> 
                        </li>
                        <li class="py-2">Terdapat ventilasi udara berupa lubang pada sisi depan dan belakang boks arsip. Lubang ventilasi udara untuk <br>boks besar berdiameter 3 cm, untuk boks kecil berdiameter 2.5 cm
                          <div class="yatidak">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                              <label class="form-check-label" for="inlineRadio1">Ya</label>
                            </div>
                            <div class="form-check form-check-inline ">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                              <label class="form-check-label" for="inlineRadio2">Tidak</label>
                            </div>
                          </div>     



                        </li>
                        <li class="py-2">Ukuran Boks:
                          <div class="yatidak">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                              <label class="form-check-label" for="inlineRadio1">Ya</label>
                            </div>
                            <div class="form-check form-check-inline ">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                              <label class="form-check-label" for="inlineRadio2">Tidak</label>
                            </div>
                          </div>
                          <ul class="mt-2">
                           <div class="row mt-1">
                            <div class="col-lg-6">
                              <dd class="">Boks arsip kecil : 37 x 9 x 27</dd>
                            </div>
                            <div class="form-group col-lg-1 mx-3">                
                              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                            </div>
                          </div>

                          <div class="row mt-1">
                            <div class="col-lg-6">
                              <dd class="">Boks arsip besar : 37 x 19 x 27
                              </dd>
                            </div>
                            <div class="form-group col-lg-1 mx-3">                
                              <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 20px; height:20px">               
                            </div>
                          </div>


                        </ul>



                      </li>
                      <li class="py-2">Boks Arsip berwarna dasar coklat, coklat muda, biru muda atau warna lain yang tidak menyilaukan atau terlalu gelap
                        <div class="yatidak">
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                          </div>
                          <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Tidak</label>
                          </div>
                        </div>      


                      </li>
                    </ol>
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
                                <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                              </div> <br><br>
                              <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                  <h5>You Have Successfully Signed Up</h5>
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

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;

$(".next").click(function(){

    current_fs = $(this).parent();
    next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
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



var list = document.getElementById("msform");
  let i = 0;
  let len = list.length;
  var inputan = 0;
  for (; i < len; i++) {
    if(list.getElementsByTagName("INPUT")[i].type=="radio"){
        list.getElementsByTagName("INPUT")[i].name = "inputan"+inputan;
        list.getElementsByTagName("INPUT")[i+1].name = "inputan"+inputan;
        i++;
        inputan++;
    }else{
        list.getElementsByTagName("INPUT")[i].name = "inputan"+inputan;
        inputan++;
    }
  }



});
</script>