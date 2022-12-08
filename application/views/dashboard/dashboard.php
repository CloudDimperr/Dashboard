
            <?php foreach ($databarang as $row) {
                if ($row->keterangan == 'Baik')
                {
                    $barangBaik += $row->jumlah;
                } elseif ($row->keterangan == 'Rusak')
                {
                    $barangRusak += $row->jumlah;
                } elseif ($row->keterangan == 'Kurang Baik')
                {
                    $barangKurangbaik += $row->jumlah;
                } elseif ($row->keterangan == 'Hilang') 
                {
                    $barangHilang += $row->jumlah;
                }

                $jumlahBarang += $row->jumlah;
            } 
            ?>
            <div class="dashboard">
                <div class="dashboard__title">Dashboard</div>
                <div class="card__viewallbtn">
                    <button onclick="viewAllFunc()">View All</button>
                </div>
                <div class="card">
                    <div class="card__good">
                        <a href="<?= base_url();?>Databarang">
                            <div class="card__goodrate"><?= $barangBaik ?></div>
                            <div class="card__goodname">Barang Baik</div>
                        </a>
                        <div class="card__goodicon">
                            <ion-icon name="thumbs-up-outline"></ion-icon>
                        </div>
                    </div>
                    <div class="card__bad">
                        <a href="<?= base_url();?>Databarang">
                            <div class="card__badrate"><?= $barangKurangbaik?></div>
                            <div class="card__badname">Barang Kurang Baik</div> 
                        </a> 
                        <div class="card__badicon">
                            <ion-icon name="thumbs-down-outline"></ion-icon>
                        </div>
                    </div>
                    <div class="card__damage">
                        <a href="<?= base_url();?>Databarang">
                            <div class="card__damagerate"><?= $barangRusak ?></div>
                            <div class="card__damagename">Barang Rusak</div>
                        </a>
                        <div class="card__damageicon">
                            <ion-icon name="alert-outline"></ion-icon>
                        </div>
                    </div>
                    <div class="card__lost">
                        <a href="<?= base_url();?>Databarang">
                            <div class="card__lostrate"><?= $barangHilang ?></div>
                            <div class="card__lostname">Barang Hilang</div>
                        </a>
                        <div class="card__losticon">
                            <ion-icon name="help-outline"></ion-icon>
                        </div>
                    </div>
                    <div id="carditem" class="card__item">
                        <a href="<?= base_url();?>Databarang">
                            <div class="card__itemrate"><?= $jumlahBarang ?></div>
                            <div class="card__itemname">Jumlah Semua Barang</div>
                        </a>
                        <div class="card__itemicon">
                            <ion-icon name="file-tray-stacked-outline"></ion-icon>
                        </div>
                    </div>
                </div>
                <div class="main__graph">
                    <div class="main__graphbox">
                        <div class="main__graphboxtitle">Bar Chart</div>
                        <canvas id="myChart"></canvas>
                    </div>
                    <div class="main__graphbox2">
                        <div class="main__graphboxtitle">Doughnut Chart</div>
                        <canvas id="myChart2"></canvas>
                    </div>
                </div>
                <div class="main__gallerybox">
                    <a href="<?= base_url();?>Galeri">
                        <div class="main__gbox">
                            <div class="main__galleryboxtitle">Gallery</div>
                            <div class="main__galleryboximg">
                                <div class="main__galleryboximg1">
                                    <img src="<?= base_url(); ?>public/assets/4.png" alt="photo">
                                </div>
                                <div class="main__galleryboximg2">
                                    <img src="<?= base_url(); ?>public/assets/1.png" alt="photo">
                                </div>
                                <div class="main__galleryboximg3">
                                    <img src="<?= base_url(); ?>public/assets/2.png" alt="photo">
                                </div>
                                <div class="main__galleryboximg4">
                                    <img src="<?= base_url(); ?>public/assets/3.png" alt="photo">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>    
            </div>
        </div>
    </div>
