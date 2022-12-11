
            <div class="admin__profile">
                <div class="admin__title">Admin</div>
                <div class="admin__card">
                    <div class="admin__avatar">
                        <div class="admin__avatarimg">
                            <ion-icon name="person-circle-outline"></ion-icon>
                        </div>
                    </div>
                    <div class="admin__profileset">
                        <a href="<?= base_url();?>Admin/EditNama">
                            <div class="admin__profilesettitle">Profile Settings</div>
                            <div class="admin__name">
                                <span class="admin__name--black">Nama : </span>
                                <span class="admin__name--gray">admin</span>
                            </div>
                            <div class="admin__nameedit">
                                    <ion-icon name="create-outline"></ion-icon> 
                            </div>    
                        </a>
                    </div>
                    <div class="admin__security">
                        <a href="<?= base_url();?>Admin/UbahPassword">
                            <div class="admin__securitytitle">Security & Password</div>
                            <div class="admin__password">
                                <span class="admin__password--black">Your Password :</span>
                                <span class="admin__password--gray">*********</span>
                            </div>
                            <div class="admin__passwordedit">
                                    <ion-icon name="create-outline"></ion-icon>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>