<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas container">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="img/avatar3.png" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <?php

                use yii\helpers\Url;

                if (!Yii::$app->user->isGuest) {
                    $username = Yii::$app->user->identity->username;

                    echo "<p>Hello, $username</p>";
                    echo '<a href="#"><i class="fa fa-circle text-success"></i> Online</a>';
                } else {
                    echo '<p>Hello, Guest</p>';
                    echo '<a href="#"><i class="fa fa-circle text-danger"></i> Offline</a>';
                }
                ?>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">

            <li class="treeview">
                <a href="<?= Url::to(['/user-data']) ?>">
                    <i class="fa fa-comments" aria-hidden="true"></i>
                    <span>Kelib tushgan arizalar</span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?= Url::to(['/contact']) ?>">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span>Kontakt ma'lumotlar</span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?= Url::to(['/services']) ?>">
                    <i class="fa fa-check-square-o" aria-hidden="true"></i>
                    <span>Xizmatlar</span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?= Url::to(['/main-banner']) ?>">
                    <i class="fa fa-check-square-o" aria-hidden="true"></i>
                    <span>Asosiy Banner</span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?= Url::to(['/gallery']) ?>">
                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                    <span>Gallery</span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?= Url::to(['/banner-costs']) ?>">
                    <i class="fa fa-usd" aria-hidden="true"></i>
                    <span>Narxlar</span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?= Url::to(['/works']) ?>">
                    <i class="fa fa-cog" aria-hidden="true"></i>
                    <span>Works</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>