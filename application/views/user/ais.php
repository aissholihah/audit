<div class="container-fluid">
  <div class="card o-hidden border-0 shadow-lg my-5"> <!-- biar bagus kek kotak tabel -->
    <div class="card-body">
      <div class="text-center">
        <h1 class="h4 text-gray-900 mt-5"> SUB ASPEK PENCIPTAAN ARSIP</h1>
      </div>
      <form class="user" method="POST" action="<?php echo base_url(). 'user/pengawasan/insert_data' ?>">

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
            <input type="checkbox" id=" 44-1" name=" 44-1" value="Bike" style="width: 30px; height:30px">               
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
                  <input class="form-check-input" type="radio" name=" 42-50" id="inlineRadio1" value="ya">
                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                </div>
                <div class="form-check form-check-inline ">
                  <input class="form-check-input" type="radio" name=" 42-50" id="inlineRadio2" value="tidak">
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
                    <input type="checkbox" id="vehicle1" name=" 44-64" value="Buku Agenda" style="width: 20px; height:20px">               
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-6">
                    <dd>Kartu Kendali</dd>
                  </div>
                  <div class="form-group col-lg-1 mx-3">                
                    <input type="checkbox" id="vehicle1" name="44-65" value="Kartu Kendali" style="width: 20px; height:20px">               
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-6">
                    <dd>Takah</dd>
                  </div>
                  <div class="form-group col-lg-1 mx-3">                
                    <input type="checkbox" id="vehicle1" name="44-67" value="Takah" style="width: 20px; height:20px">               
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <dd>Agenda Elektronik</dd>
                  </div>
                  <div class="form-group col-lg-1 mx-3">                
                    <input type="checkbox" id="vehicle1" name="44-68" value="Agenda Elektronik" style="width: 20px; height:20px">               
                  </div>
                </div>       
              </ul>

            </li>
            <li>Pengiriman
              <div class="yatidak">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="44-51" id="inlineRadio1" value="ya">
                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                </div>
                <div class="form-check form-check-inline ">
                  <input class="form-check-input" type="radio" name="44-51" id="inlineRadio2" value="tidak">
                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                </div>
              </div>
            </li>
            <li>Penyimpanan
              <div class="yatidak">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name=" 44-52" id="inlineRadio1" value="ya">
                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                </div>
                <div class="form-check form-check-inline ">
                  <input class="form-check-input" type="radio" name=" 44-52" id="inlineRadio2" value="tidak">
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
                  <input class="form-check-input" type="radio" name="44-53" id="" value="ya">
                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                </div>
                <div class="form-check form-check-inline ">
                  <input class="form-check-input" type="radio" name="44-53" id="" value="tidak">
                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                </div>
              </div>  

            </li>
            <li class="py-2">Penerimaan arsip diregistrasi oleh pihak yang menerima      
              <div class="yatidak">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="44-54" id="inlineRadio1" value="ya">
                  <label class="form-check-label" for="inlineRadio1">Ya</label>
                </div>
                <div class="form-check form-check-inline ">
                  <input class="form-check-input" type="radio" name="44-54" id="inlineRadio2" value="tidak">
                  <label class="form-check-label" for="inlineRadio2">Tidak</label>
                </div>
              </div>
            </li>
            <li class="py-2">Arsip yang diterima didistribusikan kepada unit pengolah diikuti dengan tindakan pengendalian         


              <ol class="daftar">
                <li>Pencatatan
                  <div class="yatidak">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="44-56" id="inlineRadio1" value="ya">
                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                    </div>
                    <div class="form-check form-check-inline ">
                      <input class="form-check-input" type="radio" name="44-56" id="inlineRadio2" value="tidak">
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
                        <input type="checkbox" id="vehicle1" name="44-69" value="Buku Agenda" style="width: 20px; height:20px">               
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-6">
                        <dd>Kartu Kendali</dd>
                      </div>
                      <div class="form-group col-lg-1 mx-3">                
                        <input type="checkbox" id="vehicle1" name="44-70" value="Kartu Kendali" style="width: 20px; height:20px">               
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-6">
                        <dd>Takah</dd>
                      </div>
                      <div class="form-group col-lg-1 mx-3">                
                        <input type="checkbox" id="vehicle1" name="44-71" value="Takah" style="width: 20px; height:20px">               
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <dd>Agenda Elektronik</dd>
                      </div>
                      <div class="form-group col-lg-1 mx-3">                
                        <input type="checkbox" id="vehicle1" name="44-406" value="Agenda Elektronik" style="width: 20px; height:20px">               
                      </div>
                    </div>       
                  </ul>

                </li>
                <li class="py-2">Pengarahan
                  <div class="yatidak">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="44-57" id="inlineRadio1" value="ya">
                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                    </div>
                    <div class="form-check form-check-inline ">
                      <input class="form-check-input" type="radio" name="44-57" id="inlineRadio2" value="tidak">
                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                    </div>
                  </div> 

                </li>
                <li class="py-2">Penyampaian
                  <div class="yatidak">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="44-58" id="inlineRadio1" value="ya">
                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                    </div>
                    <div class="form-check form-check-inline ">
                      <input class="form-check-input" type="radio" name="44-58" id="inlineRadio2" value="tidak">
                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                    </div>
                  </div> 
                </li>
              </ol>
            </li>
          </ol>          
        </li>
      </div>
    </ol>
  </form>
</div>
</div>
</div>
