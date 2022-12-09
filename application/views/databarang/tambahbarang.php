                    <div class="additem__card">
                        <div class="additem__title">Tambah Data Barang</div>
                        <form class="input__wrapper" action="">
                            <div class="form__input--row">
                                <div class="form__input--row1">
                                    <!-- Kode Barang -->
                                    <div class="form__input">
                                        <label for="text">Kode Barang</label>
        
                                        <input type="text" name="" id="text" placeholder="Masukkan Kode Barang...">
                                    </div>
        
                                    <!-- Nama Barang -->
                                    <div class="form__input">
                                        <label for="text">Nama Barang</label>
        
                                        <input type="text" name="" id="text" placeholder="Masukkan Nama Barang...">
                                    </div>
                                </div>
                                <div class="form__input--row2">
                                    <!-- Bahan/Merk -->
                                    <div class="form__input">
                                        <label for="text">Bahan/Merk</label>
        
                                        <input type="text" name="" id="text" placeholder="Masukkan Bahan/Merk...">
                                    </div>
        
                                    <!-- Jumlah Barang -->
                                    <div class="form__input">
                                        <label for="text">Jumlah Barang</label>
        
                                        <input type="text" name="" id="text" placeholder="Masukkan Jumlah Barang...">
                                    </div>
                                </div>
                            </div>

                            <!-- Gambar Barang -->
                            <div class="form__input--upload">
                                <label for="file">Gambar Barang </label>

                                <input type="file" name="" id="file">
                            </div>

                            <!-- Keterangan Barang -->
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
<!-- 
            <div class="dataitem">
                <div class="dataitem__header">
                    <div class="dataitem__title">
                        <h1>Data Barang</h1>
                    </div>
                    <div class="dataitem__fiture">
                        <div class="dataitem__add">
                            <a href="<?= site_url('Databarang/tambahbarang'); ?>" class="dataitem__adddetails">
                                <span>Tambah Barang<ion-icon name="add-circle-outline"></ion-icon></span>
                            </a>    
                        </div>
                        <div class="dataitem__search">
                            <label>
                                <input type="text" placeholder="Search...">
                                <ion-icon name="search-outline"></ion-icon>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="dataitem__details">
                    <table>
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Kode</td>
                                <td>Nama</td>
                                <td>Bahan/Merk</td>
                                <td>Jumlah</td>
                                <td>Gambar</td>
                                <td>Keterangan</td>
                                <td>Opsi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ( $dataBarang as $row ) : 
                            ?>
                                <tr>
                                <td><input type="checkbox"></td>
                                <td><?= $row->kode; ?></td>
                                <td><?= $row->nama; ?></td>
                                <td><?= $row->bahan; ?></td>
                                <td><?= $row->jumlah; ?></td>
                                <td><span class="dataitem__img"><img src="<?= base_url();?>/public/assets/<?= $row->gambar; ?>"></span></td>
                                <td><?= $row->keterangan; ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>Databarang/EditBarang/<?= $row->id ?>">
                                        <span class="dataitem__editicon"><ion-icon name="create-outline"></ion-icon></span>
                                    </a>  
                                    <a href="<?= base_url(); ?>Databarang/HapusBarang/<?= $row->id ?>">
                                        <span class="dataitem__deleteicon"><ion-icon name="trash-outline"></ion-icon></span>
                                    </a>
                                </td>
                                </tr>
                            <?php 
                                // $i += 1;
                                endforeach; 
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="dataitem__details">
                    <table>
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Kode</td>
                                <td>Nama</td>
                                <td>Bahan/Merk</td>
                                <td>Jumlah</td>
                                <td>Gambar</td>
                                <td>Keterangan</td>
                                <td>Opsi</td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                $i = 1; 
                                foreach ( $dataBarang as $row ) : 
                            ?>
                                <tr>
                                <td><?= $i ?></td>
                                <td><?= $row->kode; ?></td>
                                <td><?= $row->nama; ?></td>
                                <td><?= $row->bahan; ?></td>
                                <td><?= $row->jumlah; ?></td>
                                <td><span class="dataitem__img"><img src="<?= base_url();?>/public/assets/<?= $row->gambar; ?>"></span></td>
                                <td><?= $row->keterangan; ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>Databarang/EditBarang/<?= $row->id ?>">
                                        <span class="dataitem__editicon"><ion-icon name="create-outline"></ion-icon></span>
                                    </a>  
                                    <a href="<?= base_url(); ?>Databarang/HapusBarang/<?= $row->id ?>">
                                        <span class="dataitem__deleteicon"><ion-icon name="trash-outline"></ion-icon></span>
                                    </a>
                                </td>
                                </tr>
                            <?php 
                                $i += 1;
                                endforeach; 
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="popup">
                    <div class="item__header">Tambah Barang Baru</div>
                    <div class="item__details">
                        <div class="item__code">
                            <div>Kode Barang</div>
                            <label>
                                <input type="text" placeholder="Masukkan kode barang..">
                            </label>
                        </div>
                        <div class="item__name">
                            <div>Nama Barang</div>
                            <label>
                                <input type="text" placeholder="Masukkan nama barang..">
                            </label>
                        </div>
                        <div class="item__brand">
                            <div>Bahan/Merk</div>
                            <label>
                                <input type="text" placeholder="Masukkan bahan/merk barang..">
                            </label>
                        </div>
                        <div class="item__total">
                            <div>Jumlah Barang</div>
                            <label>
                                <input type="text" placeholder="Masukkan jumlah barang..">
                            </label>
                        </div>
                        <div class="item__img">
                            <div>Gambar Barang</div>
                            <form action="/action_page.php">
                                <input type="file" id="myFile" name="filename">
                            </form>
                        </div>
                        <div class="item__desc">
                            <div>Keterangan Barang</div>
                            <label>
                                <input type="text" placeholder="Masukkan keterangan barang..">
                            </label>
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
                </div>
            </div>
        </div>
    </div> -->
