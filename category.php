

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

                        <div class="billboard">
                            <img class="img-responsive" src="images/banner.png" alt="">
                        </div>

                        <!-- Filter -->
                        <div class="filter">
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul class="filter__group clearfix">
                                        <li>Cортировать по:</li>
                                        <li>
                                            <select class="filter__select">
                                                <option>Новинкам</option>
                                                <option>Новинкам</option>
                                                <option>Новинкам</option>
                                            </select>
                                        </li>
                                        <li>
                                            <select class="filter__select">
                                                <option>Цене</option>
                                                <option>1000-4000</option>
                                                <option>4000-10000</option>
                                                <option>10000-20000</option>
                                            </select>
                                        </li>
                                        <li>
                                            <select class="filter__select">
                                                <option>Акциям</option>
                                                <option>Акция 30%</option>
                                                <option>Акция 40%</option>
                                                <option>Акция 50%</option>
                                            </select>
                                        </li>
                                        <li>
                                            <select class="filter__select">
                                                <option>Размеру</option>
                                                <option>46</option>
                                                <option>48</option>
                                                <option>50</option>
                                                <option>52</option>
                                            </select>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="filter__group clearfix">
                                        <li>Коллекции:</li>
                                        <li>
                                            <label><input type="radio" name="filter__collection">Нарядная</label>
                                        </li>
                                        <li>
                                            <label><input type="radio" name="filter__collection">Donna</label>
                                        </li>
                                        <li>
                                            <label><input type="radio" name="filter__collection">Bella</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- ++ -->

                        <!-- Catalog -->
                        <div class="showcase">
                            <div class="row">

                                <div class="col-xs-6 col-sm-3 col-md-4 col-lg-3">
                                    <div class="showcase__item">
                                        <div class="showcase__image">
                                            <span class="showcase__sale showcase__sale30">30%</span>
                                            <img src="images/product_promo_02.jpg" alt="">
                                        </div>
                                        <div class="showcase__name">Платье 19660</div>
                                        <div class="showcase__price">
                                            <span class="showcase__price_new">от 1 000 до 3 000 руб.</span>
                                        </div>

                                        <div class="showcase__view">
                                            <ul class="showcase_thumb">
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="showcase__image">
                                                <span class="showcase__sale showcase__sale30">30%</span>
                                                <img src="images/product_promo_02.jpg" alt="">
                                                <a rel="gallery1" href="images/product_image01_large.jpg" class="showcase__link btn-modal"><span>быстрый просмотр</span></a>
                                            </div>
                                            <div class="showcase__name">Платье 19660</div>

                                            <div class="showcase__price">
                                                <span class="showcase__price_new">от 1 000 до 3 000 руб.</span>
                                            </div>
                                            
                                            <div class="showcase__fast">
                                                <div class="showcase__fast_title">Выберите размеры:</div>
                                                <ul class="showcase__size clearfix">
                                                    <li><label><input type="radio" name="size">48</label></li>
                                                    <li><label><input type="radio" name="size">50</label></li>
                                                    <li><label><input type="radio" name="size" checked>52</label></li>
                                                    <li><label><input type="radio" name="size">54</label></li>
                                                    <li><label><input type="radio" name="size">56</label></li>
                                                    <li><label><input type="radio" name="size">58</label></li>
                                                </ul>
                                                <button class="btn btn-purchase">В корзину</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-4 col-lg-3">
                                    <div class="showcase__item">
                                        <div class="showcase__image">
                                            <span class="showcase__sale showcase__sale">sale</span>
                                            <img src="images/product_promo_02.jpg" alt="">
                                        </div>
                                        <div class="showcase__name">Платье 19660</div>
                                        <div class="showcase__price">
                                            <span class="showcase__price_old">3 000 руб.</span>
                                            <span class="showcase__price_new">1 000руб.</span>
                                        </div>

                                        <div class="showcase__view">
                                            <ul class="showcase_thumb">
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="showcase__image">
                                                <span class="showcase__sale showcase__sale">sale</span>
                                                <img src="images/product_promo_02.jpg" alt="">
                                                <a rel="gallery1" href="images/product_image01_large.jpg" class="showcase__link btn-modal"><span>быстрый просмотр</span></a>
                                            </div>
                                            <div class="showcase__name">Платье 19660</div>

                                            <div class="showcase__price">
                                                <span class="showcase__price_old">3 000 руб.</span>
                                                <span class="showcase__price_new">1 000руб.</span>
                                            </div>

                                            <div class="showcase__fast">
                                                <div class="showcase__fast_title">Выберите размеры:</div>
                                                <ul class="showcase__size clearfix">
                                                    <li><label><input type="radio" name="size">48</label></li>
                                                    <li><label><input type="radio" name="size">50</label></li>
                                                    <li><label><input type="radio" name="size" checked>52</label></li>
                                                    <li><label><input type="radio" name="size">54</label></li>
                                                    <li><label><input type="radio" name="size">56</label></li>
                                                    <li><label><input type="radio" name="size">58</label></li>
                                                </ul>
                                                <button class="btn btn-purchase">В корзину</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-4 col-lg-3">
                                    <div class="showcase__item">
                                        <div class="showcase__image">
                                            <span class="showcase__sale showcase__sale20">20%</span>
                                            <img src="images/product_promo_02.jpg" alt="">
                                        </div>
                                        <div class="showcase__name">Платье 19660</div>
                                        <div class="showcase__price">
                                            <span class="showcase__price_old">3 000 руб.</span>
                                            <span class="showcase__price_new">1 000руб.</span>
                                        </div>

                                        <div class="showcase__view">
                                            <ul class="showcase_thumb">
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="showcase__image">
                                                <span class="showcase__sale showcase__sale20">20%</span>
                                                <img src="images/product_promo_02.jpg" alt="">
                                                <a rel="gallery1" href="images/product_image01_large.jpg" class="showcase__link btn-modal"><span>быстрый просмотр</span></a>
                                            </div>
                                            <div class="showcase__name">Платье 19660</div>

                                            <div class="showcase__price">
                                                <span class="showcase__price_old">3 000 руб.</span>
                                                <span class="showcase__price_new">1 000руб.</span>
                                            </div>

                                            <div class="showcase__fast">
                                                <div class="showcase__fast_title">Выберите размеры:</div>
                                                <ul class="showcase__size clearfix">
                                                    <li><label><input type="radio" name="size">48</label></li>
                                                    <li><label><input type="radio" name="size">50</label></li>
                                                    <li><label><input type="radio" name="size" checked>52</label></li>
                                                    <li><label><input type="radio" name="size">54</label></li>
                                                    <li><label><input type="radio" name="size">56</label></li>
                                                    <li><label><input type="radio" name="size">58</label></li>
                                                </ul>
                                                <button class="btn btn-purchase">В корзину</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-4 col-lg-3">
                                    <div class="showcase__item">
                                        <div class="showcase__image">
                                            <span class="showcase__sale showcase__new">new</span>
                                            <img src="images/product_promo_02.jpg" alt="">
                                        </div>
                                        <div class="showcase__name">Платье 19660</div>
                                        <div class="showcase__price">
                                            <span class="showcase__price_old">3 000 руб.</span>
                                            <span class="showcase__price_new">1 000руб.</span>
                                        </div>

                                        <div class="showcase__view">
                                            <ul class="showcase_thumb">
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="showcase__image">
                                                <span class="showcase__sale showcase__new">new</span>
                                                <img src="images/product_promo_02.jpg" alt="">
                                                <a rel="gallery1" href="images/product_image01_large.jpg" class="showcase__link btn-modal"><span>быстрый просмотр</span></a>
                                            </div>
                                            <div class="showcase__name">Платье 19660</div>

                                            <div class="showcase__price">
                                                <span class="showcase__price_old">3 000 руб.</span>
                                                <span class="showcase__price_new">1 000руб.</span>
                                            </div>

                                            <div class="showcase__fast">
                                                <div class="showcase__fast_title">Выберите размеры:</div>
                                                <ul class="showcase__size clearfix">
                                                    <li><label><input type="radio" name="size">48</label></li>
                                                    <li><label><input type="radio" name="size">50</label></li>
                                                    <li><label><input type="radio" name="size" checked>52</label></li>
                                                    <li><label><input type="radio" name="size">54</label></li>
                                                    <li><label><input type="radio" name="size">56</label></li>
                                                    <li><label><input type="radio" name="size">58</label></li>
                                                </ul>
                                                <button class="btn btn-purchase">В корзину</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-4 col-lg-3">
                                    <div class="showcase__item">
                                        <div class="showcase__image">
                                            <span class="showcase__sale showcase__sale30">30%</span>
                                            <img src="images/product_promo_02.jpg" alt="">
                                        </div>
                                        <div class="showcase__name">Платье 19660</div>
                                        <div class="showcase__price">
                                            <span class="showcase__price_old">3 000 руб.</span>
                                            <span class="showcase__price_new">1 000руб.</span>
                                        </div>

                                        <div class="showcase__view">
                                            <ul class="showcase_thumb">
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="showcase__image">
                                                <span class="showcase__sale showcase__sale30">30%</span>
                                                <img src="images/product_promo_02.jpg" alt="">
                                                <a rel="gallery1" href="images/product_image01_large.jpg" class="showcase__link btn-modal"><span>быстрый просмотр</span></a>
                                            </div>
                                            <div class="showcase__name">Платье 19660</div>

                                            <div class="showcase__price">
                                                <span class="showcase__price_old">3 000 руб.</span>
                                                <span class="showcase__price_new">1 000руб.</span>
                                            </div>

                                            <div class="showcase__fast">
                                                <div class="showcase__fast_title">Выберите размеры:</div>
                                                <ul class="showcase__size clearfix">
                                                    <li><label><input type="radio" name="size">48</label></li>
                                                    <li><label><input type="radio" name="size">50</label></li>
                                                    <li><label><input type="radio" name="size" checked>52</label></li>
                                                    <li><label><input type="radio" name="size">54</label></li>
                                                    <li><label><input type="radio" name="size">56</label></li>
                                                    <li><label><input type="radio" name="size">58</label></li>
                                                </ul>
                                                <button class="btn btn-purchase">В корзину</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-4 col-lg-3">
                                    <div class="showcase__item">
                                        <div class="showcase__image">
                                            <span class="showcase__sale showcase__sale30">30%</span>
                                            <img src="images/product_promo_02.jpg" alt="">
                                        </div>
                                        <div class="showcase__name">Платье 19660</div>
                                        <div class="showcase__price">
                                            <span class="showcase__price_old">3 000 руб.</span>
                                            <span class="showcase__price_new">1 000руб.</span>
                                        </div>

                                        <div class="showcase__view">
                                            <ul class="showcase_thumb">
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="showcase__image">
                                                <span class="showcase__sale showcase__sale30">30%</span>
                                                <img src="images/product_promo_02.jpg" alt="">
                                                <a rel="gallery1" href="images/product_image01_large.jpg" class="showcase__link btn-modal"><span>быстрый просмотр</span></a>
                                            </div>
                                            <div class="showcase__name">Платье 19660</div>

                                            <div class="showcase__price">
                                                <span class="showcase__price_old">3 000 руб.</span>
                                                <span class="showcase__price_new">1 000руб.</span>
                                            </div>

                                            <div class="showcase__fast">
                                                <div class="showcase__fast_title">Выберите размеры:</div>
                                                <ul class="showcase__size clearfix">
                                                    <li><label><input type="radio" name="size">48</label></li>
                                                    <li><label><input type="radio" name="size">50</label></li>
                                                    <li><label><input type="radio" name="size" checked>52</label></li>
                                                    <li><label><input type="radio" name="size">54</label></li>
                                                    <li><label><input type="radio" name="size">56</label></li>
                                                    <li><label><input type="radio" name="size">58</label></li>
                                                </ul>
                                                <button class="btn btn-purchase">В корзину</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-4 col-lg-3">
                                    <div class="showcase__item">
                                        <div class="showcase__image">
                                            <span class="showcase__sale showcase__sale30">30%</span>
                                            <img src="images/product_promo_02.jpg" alt="">
                                        </div>
                                        <div class="showcase__name">Платье 19660</div>
                                        <div class="showcase__price">
                                            <span class="showcase__price_old">3 000 руб.</span>
                                            <span class="showcase__price_new">1 000руб.</span>
                                        </div>

                                        <div class="showcase__view">
                                            <ul class="showcase_thumb">
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="showcase__image">
                                                <span class="showcase__sale showcase__sale30">30%</span>
                                                <img src="images/product_promo_02.jpg" alt="">
                                                <a rel="gallery1" href="images/product_image01_large.jpg" class="showcase__link btn-modal"><span>быстрый просмотр</span></a>
                                            </div>
                                            <div class="showcase__name">Платье 19660</div>

                                            <div class="showcase__price">
                                                <span class="showcase__price_old">3 000 руб.</span>
                                                <span class="showcase__price_new">1 000руб.</span>
                                            </div>

                                            <div class="showcase__fast">
                                                <div class="showcase__fast_title">Выберите размеры:</div>
                                                <ul class="showcase__size clearfix">
                                                    <li><label><input type="radio" name="size">48</label></li>
                                                    <li><label><input type="radio" name="size">50</label></li>
                                                    <li><label><input type="radio" name="size" checked>52</label></li>
                                                    <li><label><input type="radio" name="size">54</label></li>
                                                    <li><label><input type="radio" name="size">56</label></li>
                                                    <li><label><input type="radio" name="size">58</label></li>
                                                </ul>
                                                <button class="btn btn-purchase">В корзину</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-4 col-lg-3">
                                    <div class="showcase__item">
                                        <div class="showcase__image">
                                            <span class="showcase__sale showcase__sale30">30%</span>
                                            <img src="images/product_promo_02.jpg" alt="">
                                        </div>
                                        <div class="showcase__name">Платье 19660</div>
                                        <div class="showcase__price">
                                            <span class="showcase__price_old">3 000 руб.</span>
                                            <span class="showcase__price_new">1 000руб.</span>
                                        </div>

                                        <div class="showcase__view">
                                            <ul class="showcase_thumb">
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="showcase__image">
                                                <span class="showcase__sale showcase__sale30">30%</span>
                                                <img src="images/product_promo_02.jpg" alt="">
                                                <a rel="gallery1" href="images/product_image01_large.jpg" class="showcase__link btn-modal"><span>быстрый просмотр</span></a>
                                            </div>
                                            <div class="showcase__name">Платье 19660</div>

                                            <div class="showcase__price">
                                                <span class="showcase__price_old">3 000 руб.</span>
                                                <span class="showcase__price_new">1 000руб.</span>
                                            </div>

                                            <div class="showcase__fast">
                                                <div class="showcase__fast_title">Выберите размеры:</div>
                                                <ul class="showcase__size clearfix">
                                                    <li><label><input type="radio" name="size">48</label></li>
                                                    <li><label><input type="radio" name="size">50</label></li>
                                                    <li><label><input type="radio" name="size" checked>52</label></li>
                                                    <li><label><input type="radio" name="size">54</label></li>
                                                    <li><label><input type="radio" name="size">56</label></li>
                                                    <li><label><input type="radio" name="size">58</label></li>
                                                </ul>
                                                <button class="btn btn-purchase">В корзину</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-4 col-lg-3">
                                    <div class="showcase__item">
                                        <div class="showcase__image">
                                            <span class="showcase__sale showcase__sale30">30%</span>
                                            <img src="images/product_promo_02.jpg" alt="">
                                        </div>
                                        <div class="showcase__name">Платье 19660</div>
                                        <div class="showcase__price">
                                            <span class="showcase__price_old">3 000 руб.</span>
                                            <span class="showcase__price_new">1 000руб.</span>
                                        </div>

                                        <div class="showcase__view">
                                            <ul class="showcase_thumb">
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="showcase__image">
                                                <span class="showcase__sale showcase__sale30">30%</span>
                                                <img src="images/product_promo_02.jpg" alt="">
                                                <a rel="gallery1" href="images/product_image01_large.jpg" class="showcase__link btn-modal"><span>быстрый просмотр</span></a>
                                            </div>
                                            <div class="showcase__name">Платье 19660</div>

                                            <div class="showcase__price">
                                                <span class="showcase__price_old">3 000 руб.</span>
                                                <span class="showcase__price_new">1 000руб.</span>
                                            </div>

                                            <div class="showcase__fast">
                                                <div class="showcase__fast_title">Выберите размеры:</div>
                                                <ul class="showcase__size clearfix">
                                                    <li><label><input type="radio" name="size">48</label></li>
                                                    <li><label><input type="radio" name="size">50</label></li>
                                                    <li><label><input type="radio" name="size" checked>52</label></li>
                                                    <li><label><input type="radio" name="size">54</label></li>
                                                    <li><label><input type="radio" name="size">56</label></li>
                                                    <li><label><input type="radio" name="size">58</label></li>
                                                </ul>
                                                <button class="btn btn-purchase">В корзину</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-4 col-lg-3">
                                    <div class="showcase__item">
                                        <div class="showcase__image">
                                            <span class="showcase__sale showcase__sale30">30%</span>
                                            <img src="images/product_promo_02.jpg" alt="">
                                        </div>
                                        <div class="showcase__name">Платье 19660</div>
                                        <div class="showcase__price">
                                            <span class="showcase__price_old">3 000 руб.</span>
                                            <span class="showcase__price_new">1 000руб.</span>
                                        </div>

                                        <div class="showcase__view">
                                            <ul class="showcase_thumb">
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="showcase__image">
                                                <span class="showcase__sale showcase__sale30">30%</span>
                                                <img src="images/product_promo_02.jpg" alt="">
                                                <a rel="gallery1" href="images/product_image01_large.jpg" class="showcase__link btn-modal"><span>быстрый просмотр</span></a>
                                            </div>
                                            <div class="showcase__name">Платье 19660</div>

                                            <div class="showcase__price">
                                                <span class="showcase__price_old">3 000 руб.</span>
                                                <span class="showcase__price_new">1 000руб.</span>
                                            </div>

                                            <div class="showcase__fast">
                                                <div class="showcase__fast_title">Выберите размеры:</div>
                                                <ul class="showcase__size clearfix">
                                                    <li><label><input type="radio" name="size">48</label></li>
                                                    <li><label><input type="radio" name="size">50</label></li>
                                                    <li><label><input type="radio" name="size" checked>52</label></li>
                                                    <li><label><input type="radio" name="size">54</label></li>
                                                    <li><label><input type="radio" name="size">56</label></li>
                                                    <li><label><input type="radio" name="size">58</label></li>
                                                </ul>
                                                <button class="btn btn-purchase">В корзину</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-4 col-lg-3">
                                    <div class="showcase__item">
                                        <div class="showcase__image">
                                            <span class="showcase__sale showcase__sale30">30%</span>
                                            <img src="images/product_promo_02.jpg" alt="">
                                        </div>
                                        <div class="showcase__name">Платье 19660</div>
                                        <div class="showcase__price">
                                            <span class="showcase__price_old">3 000 руб.</span>
                                            <span class="showcase__price_new">1 000руб.</span>
                                        </div>

                                        <div class="showcase__view">
                                            <ul class="showcase_thumb">
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="showcase__image">
                                                <span class="showcase__sale showcase__sale30">30%</span>
                                                <img src="images/product_promo_02.jpg" alt="">
                                                <a rel="gallery1" href="images/product_image01_large.jpg" class="showcase__link btn-modal"><span>быстрый просмотр</span></a>
                                            </div>
                                            <div class="showcase__name">Платье 19660</div>

                                            <div class="showcase__price">
                                                <span class="showcase__price_old">3 000 руб.</span>
                                                <span class="showcase__price_new">1 000руб.</span>
                                            </div>

                                            <div class="showcase__fast">
                                                <div class="showcase__fast_title">Выберите размеры:</div>
                                                <ul class="showcase__size clearfix">
                                                    <li><label><input type="radio" name="size">48</label></li>
                                                    <li><label><input type="radio" name="size">50</label></li>
                                                    <li><label><input type="radio" name="size" checked>52</label></li>
                                                    <li><label><input type="radio" name="size">54</label></li>
                                                    <li><label><input type="radio" name="size">56</label></li>
                                                    <li><label><input type="radio" name="size">58</label></li>
                                                </ul>
                                                <button class="btn btn-purchase">В корзину</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-4 col-lg-3">
                                    <div class="showcase__item">
                                        <div class="showcase__image">
                                            <span class="showcase__sale showcase__sale30">30%</span>
                                            <img src="images/product_promo_02.jpg" alt="">
                                        </div>
                                        <div class="showcase__name">Платье 19660</div>
                                        <div class="showcase__price">
                                            <span class="showcase__price_old">3 000 руб.</span>
                                            <span class="showcase__price_new">1 000руб.</span>
                                        </div>

                                        <div class="showcase__view">
                                            <ul class="showcase_thumb">
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="showcase__image">
                                                <span class="showcase__sale showcase__sale30">30%</span>
                                                <img src="images/product_promo_02.jpg" alt="">
                                                <a rel="gallery1" href="images/product_image01_large.jpg" class="showcase__link btn-modal"><span>быстрый просмотр</span></a>
                                            </div>
                                            <div class="showcase__name">Платье 19660</div>

                                            <div class="showcase__price">
                                                <span class="showcase__price_old">3 000 руб.</span>
                                                <span class="showcase__price_new">1 000руб.</span>
                                            </div>

                                            <div class="showcase__fast">
                                                <div class="showcase__fast_title">Выберите размеры:</div>
                                                <ul class="showcase__size clearfix">
                                                    <li><label><input type="radio" name="size">48</label></li>
                                                    <li><label><input type="radio" name="size">50</label></li>
                                                    <li><label><input type="radio" name="size" checked>52</label></li>
                                                    <li><label><input type="radio" name="size">54</label></li>
                                                    <li><label><input type="radio" name="size">56</label></li>
                                                    <li><label><input type="radio" name="size">58</label></li>
                                                </ul>
                                                <button class="btn btn-purchase">В корзину</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-3 col-md-4 col-lg-3">
                                    <div class="showcase__item">
                                        <div class="showcase__image">
                                            <span class="showcase__sale showcase__sale30">30%</span>
                                            <img src="images/product_promo_02.jpg" alt="">
                                        </div>
                                        <div class="showcase__name">Платье 19660</div>
                                        <div class="showcase__price">
                                            <span class="showcase__price_old">3 000 руб.</span>
                                            <span class="showcase__price_new">1 000руб.</span>
                                        </div>

                                        <div class="showcase__view">
                                            <ul class="showcase_thumb">
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a rel="gallery1" class="btn-modal" href="images/product_image01_large.jpg">
                                                        <img class="img-responsive" src="images/product_thumb_01.jpg" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="showcase__image">
                                                <span class="showcase__sale showcase__sale30">30%</span>
                                                <img src="images/product_promo_02.jpg" alt="">
                                                <a rel="gallery1" href="images/product_image01_large.jpg" class="showcase__link btn-modal"><span>быстрый просмотр</span></a>
                                            </div>
                                            <div class="showcase__name">Платье 19660</div>

                                            <div class="showcase__price">
                                                <span class="showcase__price_old">3 000 руб.</span>
                                                <span class="showcase__price_new">1 000руб.</span>
                                            </div>

                                            <div class="showcase__fast">
                                                <div class="showcase__fast_title">Выберите размеры:</div>
                                                <ul class="showcase__size clearfix">
                                                    <li><label><input type="radio" name="size">48</label></li>
                                                    <li><label><input type="radio" name="size">50</label></li>
                                                    <li><label><input type="radio" name="size" checked>52</label></li>
                                                    <li><label><input type="radio" name="size">54</label></li>
                                                    <li><label><input type="radio" name="size">56</label></li>
                                                    <li><label><input type="radio" name="size">58</label></li>
                                                </ul>
                                                <button class="btn btn-purchase">В корзину</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <a href="#" class="btn btn-transparent">Показать еще</a>
                            </div>
                        </div>
                        <!-- ++ -->

                        <!-- Pagination -->
                        <div class="pagination">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="pagination__pages">
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li>...</li>
                                        <li><a href="#">10</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="pagination__view">
                                        <li><span>Показывать по:</span></li>
                                        <li><a href="#">12</a></li>
                                        <li><a href="#">24</a></li>
                                        <li><a href="#">Показывать все</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Hits -->
                        <?php include('includes/product__hits.inc.php') ?>
                        <!-- ++ -->
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
