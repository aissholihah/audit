<div class="container-fluid">
  <div class="card o-hidden border-0 shadow-lg my-5"> <!-- biar bagus kek kotak tabel -->
    <div class="card-body">
      <div class="text-center">
        <h1 class="h4 text-gray-900 mt-5"> SUB ASPEK PEMELIHARAAN ARSIP INAKTIF</h1>
      </div>
      <form class="user" method="POST" action="<?php echo base_url(). 'user/pengawasan/tambah_aksi' ?>">

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
                  <li class="py-2">Standar suhu dan kelembaban untuk ruang simpan arsip  tidak lebih dari 27 0 C dan kelembaban tidak lebih dari 60 %;    
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

      <!-- </li>
      <li class="py-2">Peralatan
      </li>
      <li class="py-2">Boks
      </li>
    </ol> -->
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>
</div>