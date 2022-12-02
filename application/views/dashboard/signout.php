
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
            <div class="card">
                <div class="card__good">
                    <div>
                        <div class="card__goodrate"><?= $barangBaik ?></div>
                        <div class="card__name">Barang Baik</div>
                    </div>
                    <div class="card__goodicon">
                        <ion-icon name="thumbs-up-outline"></ion-icon>
                    </div>
                </div>
                <div class="card__bad">
                    <div>
                        <div class="card__badrate"><?= $barangKurangbaik?></div>
                        <div class="card__name">Barang Kurang Baik</div>
                    </div>
                    <div class="card__badicon">
                        <ion-icon name="thumbs-down-outline"></ion-icon>
                    </div>
                </div>
                <div class="card__damage">
                    <div>
                        <div class="card__damagerate"><?= $barangRusak ?></div>
                        <div class="card__name">Barang Rusak</div>
                    </div>
                    <div class="card__damageicon">
                        <ion-icon name="alert-outline"></ion-icon>
                    </div>
                </div>
                <div class="card__lost">
                    <div>
                        <div class="card__lostrate"><?= $barangHilang ?></div>
                        <div class="card__name">Barang Hilang</div>
                    </div>
                    <div class="card__losticon">
                        <ion-icon name="help-outline"></ion-icon>
                    </div>
                </div>
                <div class="card__item">
                    <div>
                        <div class="card__itemrate"><?= $jumlahBarang ?></div>
                        <div class="card__name">Jumlah Semua Barang</div>
                    </div>
                    <div class="card__itemicon">
                        <ion-icon name="file-tray-stacked-outline"></ion-icon>
                    </div>
                </div>
            </div>
            <div class="signout__popup">
                <div class="signout__details">Apa anda yakin ingin keluar?</div>
                <div class="signout__option">
                    <a href="<?= base_url(); ?>Dashboard">
                        <span class="signout__cancel">Batal</span>
                    </a>  
                    <a href="<?= base_url(); ?>Login">
                        <span class="signout">Keluar</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
