<section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?= base_url(); ?>images/feb.jpg" width="50" height="50" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin Smansa</div>
                    <div class="email">smansasky@yahoo.co.id</div>
                    <!-- <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
             
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="<?= $menuHome;?>">
                        <a href="<?=base_url("home");?>">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>

                    <li class="<?= $menuAdmin;?>">
                        <a href="<?=base_url("admin");?>">
                            <i class="material-icons">shield</i>
                            <span>Admin</span>
                        </a>
                    </li>

                    <li class="<?= $menuGuru;?>">
                        <a href="<?=base_url("guru");?>">
                            <i class="material-icons">person</i>
                            <span>Guru</span>
                        </a>
                    </li>

                    <li class="<?= $menuSiswa;?>">
                        <a href="<?=base_url("siswa");?>">
                            <i class="material-icons">group</i>
                            <span>Siswa</span>
                        </a>
                    </li> 


                    <li class="<?= $menuAkademik;?>">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">school</i>
                            <span> Akademik </span>
                        </a>
                        <ul class="ml-menu">
                            <li class="<?=$menuMapel;?>"><a href="<?=base_url("mapel");?>">
                            <i class="material-icons">library_books</i>
                            <span>Mata Pelajaran</span></a></li>

                             <li class="<?=$menuKelas;?>"><a href="<?=base_url("kelas");?>">
                              <i class="material-icons">account_balance</i>
                                <span>Kelas</span></a></li>
                            
                            <li class="<?=$menuNilai;?>"><a href="<?=base_url("nilai");?>"> <i class="material-icons">star</i>
                                 <span>Nilai</span></a></li>
                            
                        
                        </ul>
                    </li>
                    
                    <li class="<?= $menuCetak;?>">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">print</i>
                            <span> Cetak </span>
                        </a>
                        <ul class="ml-menu">
                            <li class="<?=$menuLaporanGuru;?>"><a href="<?=base_url("transaksi");?>">
                            <i class="material-icons">ballot</i>
                            <span>Laporan Guru</span></a></li>
                            
                            <li class="<?=$menuLaporanNilai;?>"><a href="<?=base_url("daftar_kebutuhan");?>">
                             <i class="material-icons">ballot</i>
                            <span>Laporan Nilai</span></a></li>
                            
                            <li class="<?=$menuLaporanKelas;?>"><a href="<?=base_url("simpan_uang");?>">
                             <i class="material-icons">ballot</i>
                            <span>Laporan Kelas</span></a></li>        
                           
                        </ul>
                    </li>

                

                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2020<a href="javascript:void(0);">Manajemen Nilai</a>.
                </div>
                <div class="copyright">
                    <a href="javascript:void(0);"><h5><center>SMAN 1 SEKAYAM</center></h5></a>
                </div>
                <div class="version">
                    <b>Version: </b> 4.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <!-- <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li> -->
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <!-- <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div> -->
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>