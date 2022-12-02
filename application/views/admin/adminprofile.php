
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
                        <span>Nama : admin</span>
                    </div>
                    <div class="admin__nameedit">
                        <a href="<?= base_url();?>Admin/EditNama">
                            <ion-icon name="create-outline"></ion-icon>
                        </a>  
                    </div>    
                </div>
                <div class="admin__security">
                    <div class="admin__securitytitle">Security & Password</div>
                    <div class="admin__password">
                        <span>Your Password : *********</span>
                    </div>
                    <div class="admin__passwordedit">
                        <a href="<?= base_url();?>Admin/UbahPassword">
                            <ion-icon name="create-outline"></ion-icon>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
