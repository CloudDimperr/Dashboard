
            <div class="admin__profile">
                <div class="admin__title">Admin</div>
                <div class="admin__avatar">
                    <div class="admin__avatartitle">Avatar</div>
                    <div class="admin__avatarimg">
                        <ion-icon name="person-circle-outline"></ion-icon>
                    </div>
                </div>
                <div class="admin__profileset">
                    <div class="admin__profilesettitle">Profile Settings</div>
                    <div class="admin__name">
                        <span class="admin__name--black">Nama : </span>
                        <span class="admin__name--gray">admin</span>
                    </div>
                    <div class="admin__nameedit">
                        <a href="<?= site_url('Admin/editnama');?>">
                            <ion-icon name="create-outline"></ion-icon>
                        </a>  
                    </div>    
                </div>
                <div class="admin__security">
                    <div class="admin__securitytitle">Security & Password</div>
                    <div class="admin__password">
                        <span class="admin__password--black">Your Password :</span>
                        <span class="admin__password--gray">*********</span>
                    </div>
                    <div class="admin__passwordedit">
                        <a href="<?= site_url('Admin/ubahpassword');?>">
                            <ion-icon name="create-outline"></ion-icon>
                        </a>
                    </div>
                </div>
            </div>
            <div class="admin__pweditpopup">
                <div class="admin__pwedittitle">Edit Password</div>
                <div class="admin__pweditchange">
                    <div class="admin__pweditold">
                        <div>Password Lama</div>
                        <label>
                            <input type="password" placeholder="Masukkan password lama..">
                        </label>
                    </div>
                    <div class="admin__pweditnew">
                        <div>Password Baru</div>
                        <label>
                            <input type="password" placeholder="Masukkan password baru..">
                        </label>
                    </div>
                    <div class="admin__pweditconfirm">
                        <div>Konfirmasi Password Baru</div>
                        <label>
                            <input type="password" placeholder="Konfirmasi password baru..">
                        </label>
                    </div>
                </div>
                <div class="admin__pweditcancel">
                    <a href="<?= base_url();?>Admin"">
                        <span>Batal</span>
                    </a>
                </div>
                <div class="admin__pweditsave">
                    <a href="<?= base_url();?>Admin"">
                        <span>Simpan</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
