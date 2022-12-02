    
    <div class="container">
        <div class="navigation">
            <ul class="navigation__list navigation__list--hovered">
                <li class="navigation__item navigation__item--hovered">
                    <a href="<?= base_url();?>Dashboard">
                        <span><img src="<?= base_url();?>/public/assets/okif.png"></span>
                        <span class="navigation__header">INVENTARIS OKIF FT-UH</span>
                    </a>
                </li>
                <li class="navigation__item">
                    <a href="<?= base_url();?>Admin" class="navigation__details navigation__details--hovered">
                        <span class="navigation__icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                        <span class="navigation__title">admin</span>
                    </a>
                </li>
                <li class="navigation__item">
                    <a href="#" class="navigation__details">
                        <span class="navigation__mainmenu">MAIN MENU</span>
                    </a>
                </li>
                <li class="navigation__item">
                    <a href="<?= base_url();?>Dashboard" class="navigation__details navigation__details--hovered">
                        <span class="navigation__icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="navigation__title">Dashboard</span>
                    </a>
                </li>
                <li class="navigation__item">
                    <a href="<?= base_url();?>Databarang" class="navigation__details navigation__details--hovered">
                        <span class="navigation__icon"><ion-icon name="albums-outline"></ion-icon></span>
                        <span class="navigation__title">Data Barang</span>
                    </a>
                </li>
                <li class="navigation__item">
                    <a href="#" class="navigation__details">
                        <span class="navigation__menusignout">SIGN OUT</span>
                    </a>
                </li>
                <li class="navigation__item">
                    <a href="<?= base_url();?>LogOut" class="navigation__details navigation__details--hovered">
                        <span class="navigation__icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="navigation__title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <div class="admin__btn">
                    <a href="<?= base_url();?>Admin" class="admin__btndetails">
                        <ion-icon name="person-circle-outline"></ion-icon> 
                        <span class="admin__btntitle">admin</span>
                    </a>
                </div>
            </div>
