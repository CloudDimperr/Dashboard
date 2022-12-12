                    <div class="edititem__card">
                        <div class="edititem__title">Edit Data Barang</div>
                        <form class="input__wrapper" action="">
                            <div class="form__input--row">
                                <div class="form__input--row1">
                                    <div class="form__input">
                                        <label for="text">Kode Barang</label>
        
                                        <input type="text" name="" id="text" placeholder="Masukkan Kode Barang...">
                                    </div>
        
                                    <div class="form__input">
                                        <label for="text">Nama Barang</label>
        
                                        <input type="text" name="" id="text" placeholder="Masukkan Nama Barang...">
                                    </div>
                                </div>
                                <div class="form__input--row2">
                                    <div class="form__input">
                                        <label for="text">Bahan/Merk</label>
        
                                        <input type="text" name="" id="text" placeholder="Masukkan Bahan/Merk...">
                                    </div>
        
                                    <div class="form__input">
                                        <label for="text">Jumlah Barang</label>
        
                                        <input type="text" name="" id="text" placeholder="Masukkan Jumlah Barang...">
                                    </div>
                                </div>
                            </div>

                            <div class="form__input--upload">
                                <label for="file">Gambar Barang </label>

                                <input type="file" name="" id="file">
                            </div>

                            <div class="form__input--dropdowncust">
                                <button onclick="dropdownFunc()" type="button" class="form__input--dropbtn">
                                    Pilih Item <ion-icon name="chevron-down-outline"></ion-icon>
                                </button>
                                <div id="myDropdown" class="form__input--dropdowncontent">
                                    <a href="#">Baik</a>
                                    <a href="#">Kurang Baik</a>
                                    <a href="#">Rusak</a>
                                    <a href="#">Hilang</a>
                                </div>
                            </div>

                            <div class="item__addoption">
                                <a href="<?= base_url(); ?>Databarang">
                                    <span class="item__canceladd">Batal</span>
                                </a>
                                <a href="<?= base_url(); ?>Databarang">
                                    <span class="item__saveadd">Simpan</span>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            