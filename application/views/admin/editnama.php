
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
            <div class="admin__nameeditpopup">
                <div class="admin__nameedittitle">Edit Nama</div>
                <div class="admin__nameeditdetails">
                    <div>Nama</div>
                    <label>
                        <input type="text" placeholder="Masukkan Nama Baru..">
                    </label>
                </div>
                <div class="admin__nameeditcancel">
                    <a href="<?= base_url();?>Admin"">
                        <span>Batal</span>
                    </a>
                </div>
                <div class="admin__nameeditsave">
                    <a href="<?= base_url();?>Admin"">
                        <span>Simpan</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
