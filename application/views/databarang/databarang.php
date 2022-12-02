
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
                                <td><?= $i ?></td>
                                <td><?= $row->kode; ?></td>
                                <td><?= $row->nama; ?></td>
                                <td><?= $row->bahan; ?></td>
                                <td><?= $row->jumlah; ?></td>
                                <td><span class="dataitem__img"><img src="<?= base_url();?>/public/assets/<?= $row->gambar; ?>"></span></td>
                                <td><?= $row->keterangan; ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>Databarang/EditBarang/<?= $row->id ?>">
                                        <span class="dataitem__editicon"><ion-icon name="settings-outline"></ion-icon></span>
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
            </div>
        </div>
    </div>
