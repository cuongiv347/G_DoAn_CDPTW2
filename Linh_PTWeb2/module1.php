<div class="body">
    <div class="main-wrapper" >
        <nav class="navbar navbar-fixed-top"id="appVue">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <img :src='img' alt="nav-logo">
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right" >
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">{{Home}}<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">{{Home1}}</a></li>
                                <li><a href="#">{{Home2}}</a></li>
                                <li><a href="#">{{Home3}}</a></li>
                                <li><a href="#">{{Home4}}</a></li>
                                <li><a href="#">{{Home5}}</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">{{Menu}}<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">{{Menu1}}</a></li>
                                <li><a href="#">{{Menu2}}</a></li>
                                <li><a href="#">{{Menu3}}</a></li>
                                <li><a href="#">{{Menu4}}</a></li>
                                <li><a href="#">{{Menu5}}</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">{{Reservation}}<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">{{Reservation1}}</a></li>
                                <li><a href="#">{{Reservation2}}</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">{{Pages}}<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                        <li><a href="#">{{Pages1}}</a></li>
                                <li><a href="#">{{Pages2}}</a></li>
                                <li><a href="#">{{Pages3}}</a></li>
                                <li><a href="#">{{Pages4}}</a></li>
                                <li><a href="#">{{Pages5}}</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">{{Recipe}}<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">{{Recipe1}}</a></li>
                                <li><a href="#">{{Recipe2}}</a></li>
                                <li><a href="#">{{Recipe3}}</a></li>
                                <li><a href="#">{{Recipe4}}</a></li>
                                <li>
                                    <a href="#">{{Recipe5}}<span class="caret-right"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">{{Recipe6}}</a></li>
                                        <li><a href="#">{{Recipe7}}</a></li>
                                        <li><a href="#">{{Recipe8}}</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">{{Blog}}<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">{{Blog1}}</a></li>
                                <li><a href="#">{{Blog2}}</a></li>
                                <li><a href="#">{{Blog3}}</a></li>
                                <li><a href="#">{{Blog4}}</a></li>
                                <li>
                                    <a href="#">{{Blog5}}<span class="caret-right"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">{{Blog6}}</a></li>
                                        <li><a href="#">{{Blog7}}</a></li>
                                        <li><a href="#">{{Blog8}}</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">{{Shop}}<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">{{Shop1}}</a></li>
                                <li><a href="#">{{Shop2}}</a></li>
                                <li><a href="#">{{Shop3}}</a></li>
                                <li>
                                    <a href="#">{{Shop4}}<span class="caret-right"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">{{Shop5}}</a></li>
                                        <li><a href="#">{{Shop6}}</a></li>
                                        <li><a href="#">{{Shop7}}</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">{{Shop8}}</a></li>
                                <li><a href="#">{{Shop9}}t</a></li>
                                <li><a href="#">{{Shop10}}</a></li>
                                <li><a href="#">{{Shop11}}</a></li>
                            </ul>
                        </li>
                        <li><a href="#">{{Contact}}</a></li>
                        <li class="dropdown">
                            <a class="css-pointer dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false"><i
                                    class="fa fa-shopping-cart fsc pull-left"></i><span
                                    class="cart-number">{{Number}}</span><span class="caret"></span></a>
                            <div class="cart-content dropdown-menu">
                                <div class="cart-title">
                                    <h4>{{Shopping}}</h4>
                                </div>
                                <div class="cart-items">
                                    <div class="cart-item clearfix">
                                        <div class="cart-item-image">
                                            <a href="#"><img src="images/cart-img1.jpg" alt="Breakfast with coffee"></a>
                                        </div>
                                        <div class="cart-item-desc">
                                            <a href="#">{{Desc}}</a>
                                            <span class="cart-item-price">{{Price}}</span>
                                            <span class="cart-item-quantity">{{Quantity}}</span>
                                            <i class="fa fa-times ci-close"></i>
                                        </div>
                                    </div>
                                    <div class="cart-item clearfix">
                                        <div class="cart-item-image">
                                            <a href="#"><img src="images/cart-img2.jpg" alt="Chicken stew"></a>
                                        </div>
                                        <div class="cart-item-desc">
                                            <a href="#">{{Desc1}}</a>
                                            <span class="cart-item-price">{{Price1}}</span>
                                            <span class="cart-item-quantity">{{Quantity1}}</span>
                                            <i class="fa fa-times ci-close"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-action clearfix">
                                    <span class="pull-left checkout-price">{{Price2}}</span>
                                    <a class="btn btn-default pull-right" href="#">{{View}}</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="b-settings-panel">
            <div class="settings-section">
                <span>
                    Boxed
                </span>
                <div class="b-switch">
                    <div class="switch-handle"></div>
                </div>
                <span>
                    Wide
                </span>
            </div>
            <hr class="dashed" style="margin: 15px 0px;">
            <h5>Main Background</h5>
            <div class="settings-section bg-list">
                <div class="bg-wood_pattern"></div>
                <div class="bg-shattered"></div>
                <div class="bg-vichy"></div>
                <div class="bg-random-grey-variations"></div>
                <div class="bg-irongrip"></div>
                <div class="bg-gplaypattern"></div>
                <div class="bg-diamond_upholstery"></div>
                <div class="bg-denim"></div>
                <div class="bg-crissXcross"></div>
                <div class="bg-climpek"></div>
            </div>
            <a data-src="css/style.css" class="reset"><span class="bg-wood_pattern">Reset</span></a>
            <div class="btn-settings"></div>
        </div>
    </div>
</div>
