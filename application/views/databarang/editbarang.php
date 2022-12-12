                    <div class="edititem__card">
                        <div class="edititem__title">Edit Data Barang</div>
                        <form class="input__wrapper" action="<?= base_url(); ?>Databarang/update/<?= $databarang->id; ?>" method="POST">
                            <div class="form__input--row">
                                <div class="form__input--row1">
                                    <div class="form__input">
                                        <label for="text">Kode Barang</label>
        
                                        <input type="text" name="kode" id="text" placeholder="Masukkan Kode Barang..." value="<?= $databarang->kode; ?>">
                                    </div>
        
                                    <div class="form__input">
                                        <label for="text">Nama Barang</label>
        
                                        <input type="text" name="nama" id="text" placeholder="Masukkan Nama Barang..." value="<?= $databarang->nama; ?>">
                                    </div>
                                </div>
                                <div class="form__input--row2">
                                    <div class="form__input">
                                        <label for="text">Bahan/Merk</label>
        
                                        <input type="text" name="bahan" id="text" placeholder="Masukkan Bahan/Merk..." value="<?= $databarang->bahan; ?>">
                                    </div>
        
                                    <div class="form__input">
                                        <label for="text">Jumlah Barang</label>
        
                                        <input type="text" name="jumlah" id="text" placeholder="Masukkan Jumlah Barang..." value="<?= $databarang->jumlah; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="form__input--upload">
                                <label for="file">Gambar Barang </label>

                                <input type="file" name="gambar" id="file">
                            </div>

                            <input type="hidden" name="gambar" value="<?= $databarang->gambar; ?>">

                            <div class="form__dropdown__wrapper">
                                <div class="form__dropdown__title">
                                    Keterangan Barang
                                </div>
                                <div class="form__input--dropdowncust">
                                    <label for="myDropdown" class="form__input--dropdowncontent" >Select an option:</label>
                                    <select id="myDropdown" class="form__input--dropbtn" value="<?= $databarang->keterangan; ?>" name="keterangan">
                                    <?php if ($databarang->keterangan == 'Baik') : ?>
                                        <option value="Baik" selected>Barang Baik</option>
                                        <?php else : ?>
                                            <option value="Baik">Barang Baik</option>
                                    <?php endif; ?>
                                    <?php if ($databarang->keterangan == 'Kurang_Baik') : ?>
                                        <option value="Kurang_Baik" selected>Kurang Baik</option>
                                        <?php else : ?>
                                            <option value="Kurang_Baik">Kurang Baik</option>
                                    <?php endif; ?>
                                    <?php if ($databarang->keterangan == 'Rusak') : ?>
                                        <option value="Rusak" selected>Rusak</option>
                                        <?php else : ?>
                                            <option value="Rusak">Rusak</option>
                                    <?php endif; ?>
                                    <?php if ($databarang->keterangan == 'Hilang') : ?>
                                        <option value="Hilang" selected>Hilang</option>
                                        <?php else : ?>
                                            <option value="Hilang">Hilang</option>
                                    <?php endif; ?>
                                    </select>
                                </div>
                            </div>

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

            