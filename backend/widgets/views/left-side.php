<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
                <div class="pull-left image">
                    <img src="img/avatar3.png" class="img-circle" alt="User Image"/>
                </div>
            <div class="pull-left info">
                <?php
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
            <li class="active">
                <a href="index.html">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>