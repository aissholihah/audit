<div class="container-fluid">
  <div class="card o-hidden border-0 shadow-lg my-5"> <!-- biar bagus kek kotak tabel -->
    <div class="card-body">
      <div class="text-center">
        <h1 class="h4 text-gray-900 mt-5"> SUB ASPEK PENYUSUTAN ASPEK</h1>
      </div>
      <form class="user" method="POST" action="<?php echo base_url(). 'user/pengawasan/tambah_aksi' ?>">

        <ol class="daftar">
          <li class="py-2">Pemusnahan
            <ol class="daftar">
              <li class="py-2">Berikan tanda √ pada kolom informasi di bawah ini sesuai kondisi faktual:
                <ul>
                 <div class="row py-2">
                  <div class="col-lg-8 col-sm-1 card border border-left-warning shadow h-100">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">                    
                          <p class="mb-0 font-weight-bold text-warning text-justify" style="font-size: 13px;">"Jika Perguruan Tinggi Negeri tidak memiliki kebijakan tata naskah dinas/pengurusan naskah dinas, maka berikan tanda √ pada kolom checklist/kotak di samping ini!
                          Dan seluruh pertanyaan di bawah ini dinyatakanan ""Tidak/Belum""."</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="yatidak mx-5">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                    </div>
                    <div class="form-check form-check-inline ">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                    </div>
                  </div>
                </div> <!-- row py-2 -->



                <div class="row py-2">
                  <div class="col-lg-8 col-sm-1 card border border-left-warning shadow h-100">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">                    
                          <p class="mb-0 font-weight-bold text-warning text-justify" style="font-size: 13px;">"Jika Perguruan Tinggi Negeri tidak memiliki kebijakan tata naskah dinas/pengurusan naskah dinas, maka berikan tanda √ pada kolom checklist/kotak di samping ini!
                          Dan seluruh pertanyaan di bawah ini dinyatakanan ""Tidak/Belum""."</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="yatidak mx-5">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1">Ya</label>
                    </div>
                    <div class="form-check form-check-inline ">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                      <label class="form-check-label" for="inlineRadio2">Tidak</label>
                    </div>
                  </div>
                  
                  </div> <!-- row py-2 -->


                
                 
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
                  <input type="text" id="vehicle1" name="vehicle1" style="width: 25px; height:25px">
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



      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
</div>



</div>