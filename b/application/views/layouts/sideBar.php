<section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <?php
                $CI =& get_instance();
                $CI->load->model('User_model');
                $user = $CI->User_model->get_user($_SESSION['user']->account);
                ?>
                <div class="image">
                    <img src="<?=$user['avatar']?>" width="48" height="48" alt="<?=base_url()?>public/assets/themes/admin/images/user.png" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=$user['account']?> (<?=$user['permissionID']?>)</div>
                    <div class="email"><?=$user['email']?></div>
                    
                </div>
              
            </div>
           
            <!-- Menu -->
            <div class="menu">
                <ul class="list">   
                    <li class="<?= isSelected('dashboard') ?>">
                        <a href="<?=base_url()?>dashboard">
                            <i class="material-icons">home</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <!-- <li class="<?= isSelected('admin') ?>">
                        <a href="<?=base_url()?>admin">
                            <i class="material-icons">home</i>
                            <span>Dashboard</span>
                        </a>
                    </li> -->
                     <!-- <?php if(authPermission('cource','index')){ ?> -->
                        <li class="<?= isSelected('course') ?>">
                            <a href="<?=base_url()?>cource">
                                <i class="material-icons">import_contacts</i>
                                <span>QL khóa học</span>
                            </a>
                        </li>
                    <!-- <?php } ?> -->
                    <li>
                        <a href="<?=base_url()?>cource">
                            <i class="material-icons">import_contacts</i>
                            <span>QL khóa học</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>clas">
                            <i class="material-icons">horizontal_splits</i>
                            <span>QL lớp học</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>user">
                            <i class="material-icons">assignment_ind</i>
                            <span>QL người dùng</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>user_clas/add">
                            <i class="material-icons">recent_actors</i>
                            <span>Ghi danh học viên</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>user_clas">
                            <i class="material-icons">layers</i>
                            <span>QL học viên</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>lesson">
                            <i class="material-icons">clear_all</i>
                            <span>QL bài học</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>admin">
                            <i class="material-icons">home</i>
                            <span>admin</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>admin/listST">
                            <i class="material-icons">contacts</i>
                            <span>DS học viên</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>student">
                            <i class="material-icons">layers</i>
                            <span>Khóa học của tôi</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
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
                <div role="tabpanel" class="tab-pane fade" id="settings">
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
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>