<div id="appVue6">
    <section class="special" id="special">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header wow fadeInDown">
                        <h1 class="white">{{h1_title_special}}<small>{{small_title_special}}</small></h1>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp">
                <div class="col-md-offset-1 col-md-10">
                    <div class="flexslider special-slider">
                        <ul class="slides" v-bind:title="message">
                            <li>
                                <div class="slider-img">
                                    <img :src='img_special' alt="" />
                                </div>
                                <div class="slider-content">
                                    <div class="page-header">
                                        <h1>{{h1_special}}<small>{{small_special}}</small></h1>
                                    </div>
                                    <p>{{p_special}}</p>
                                    <a class="btn btn-default" href="#" role="button">{{order}}</a>
                                    <a class="btn btn-secondary" href="#" role="button">{{add}}</a>
                                </div>
                            </li>
                            <li>
                                <div class="slider-img">
                                    <img :src='img_special' alt="" />
                                </div>
                                <div class="slider-content">
                                    <div class="page-header">
                                        <h1>{{h2_special}}<small>{{small_special}}</small></h1>
                                    </div>
                                    <p>{{p_special}}</p>
                                    <a class="btn btn-default" href="#" role="button">{{order}}</a>
                                    <a class="btn btn-secondary" href="#" role="button">{{add}}</a>
                                </div>
                            </li>
                            <li>
                                <div class="slider-img">
                                    <img :src='img_special' alt="" />
                                </div>
                                <div class="slider-content">
                                    <div class="page-header">
                                        <h1>{{h3_special}}<small>{{small_special}}</small></h1>
                                    </div>
                                    <p>{{p_special}}</p>
                                    <a class="btn btn-default" href="#" role="button">{{order}}</a>
                                    <a class="btn btn-secondary" href="#" role="button">{{add}}</a>
                                </div>
                            </li>
                        </ul>
                        <div class="direction-nav hidden-sm">
                            <div class="next">
                                <a><img :src='button_right' alt="" /></a>
                            </div>
                            <div class="prev">
                                <a><img :src='button_left' alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>