

<!doctype html>
<html class="no-js" lang="ru">

    <head>
        <?php include('includes/head.inc.php') ?>
    </head>

    <body>
        <!-- Header -->
        <?php include('includes/header.inc.php') ?>
        <!-- Header End-->

        <!-- Main block -->
        <section class="page">
            <div class="container">
                <div class="row">
                    <aside class="sidebar hidden-xs hidden-sm">

                        <!-- SideNav -->
                        <?php include('includes/sidenav.inc.php') ?>
                        <!-- SideNav End-->

                        <!-- History -->
                        <?php include('includes/history_view.inc.php') ?>
                        <!-- History End-->
                    </aside>
                    <div class="content">
                        <!-- Breadcrumb -->
                        <ul class="breadcrumb">
                            <li><a href="#">Каталог</a></li>
                            <li><a href="#">женская одежда</a></li>
                            <li><a href="#">платья</a></li>
                            <li>туника 171066</li>
                        </ul>
                        <!-- ++ -->
                        <h1>Моя корзина</h1>
                        <div class="basket">
                            <div class="basket__item">
                                <div class="row">
                                    <div class="col-md-4 col-lg-4">
                                        <div class="basket__title">Состав</div>
                                    </div>
                                    <div class="col-md-8 col-lg-8">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-4">
                                                <div class="basket__title">Цена</div>
                                            </div>
                                            <div class="col-md-2 col-lg-2">
                                                <div class="basket__title">Кол-во, шт.</div>
                                            </div>
                                            <div class="col-md-4 col-lg-4">
                                                <div class="basket__title">Сумма</div>
                                            </div>
                                            <div class="col-md-2 col-lg-2">
                                                <div class="basket__title">Удалить</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main block End-->

        <!-- Footer -->
        <?php include('includes/footer.inc.php') ?>
        <!-- Footer End-->

    </body>
</html>
