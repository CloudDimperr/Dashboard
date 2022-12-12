                    <div class="additem__card">
                        <div class="additem__title">Tambah Data Barang</div>
                        <form class="input__wrapper" action="<?= base_url();?>Databarang/add" method="POST" enctype="multipart/form-data">
                            <div class="form__input--row">
                                <div class="form__input--row1">
                                    <div class="form__input">
                                        <label for="text">Kode Barang</label>
        
                                        <input type="text" name="kode" id="text" placeholder="Masukkan Kode Barang...">
                                    </div>
        
                                    <div class="form__input">
                                        <label for="text">Nama Barang</label>
        
                                        <input type="text" name="nama" id="text" placeholder="Masukkan Nama Barang...">
                                    </div>
                                </div>
                                <div class="form__input--row2">
                                    <div class="form__input">
                                        <label for="text">Bahan/Merk</label>
        
                                        <input type="text" name="bahan" id="text" placeholder="Masukkan Bahan/Merk...">
                                    </div>
        
                                    <div class="form__input">
                                        <label for="text">Jumlah Barang</label>
        
                                        <input type="text" name="jumlah" id="text" placeholder="Masukkan Jumlah Barang...">
                                    </div>
                                </div>
                            </div>

                            <div class="form__input--upload">
                                <label for="file">Gambar Barang </label>

                                <input type="file" name="gambar" id="file">
                            </div>

                            <div class="form__dropdown__wrapper">
                                <div class="form__dropdown__title">
                                    Keterangan Barang
                                </div>
                                <div class="form__input--dropdowncust">
                                    <label for="myDropdown" class="form__input--dropdowncontent" >Select an option:</label>
                                    <select id="myDropdown" class="form__input--dropbtn" name="keterangan" placeholder="Select an option:">
                                        <option value="#" selected>Select an Option</option>
                                        <option value="Baik">Barang Baik</option>
                                        <option value="Kurang_Baik">Barang Kurang Baik</option>
                                        <option value="Rusak">Barang Rusak</option>
                                        <option value="Hilang">Barang Hilang</option>
                                    </select>
                                </div>
                            </div>

                            <input type="hidden" name="gambar" value="15.png">

                            <div class="item__addoption">
                                <a href="<?= base_url(); ?>Databarang">
                                    <span class="item__canceladd">Batal</span>
                                </a>
                                <button type="submit" name="submit" class="item__saveadd">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
