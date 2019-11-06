<div id="appVue5">
    <section class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header wow fadeInDown">
                        <h1>{{h1_title_about}}<small>{{small_title_about}}</small></h1>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp">
                <div class="col-md-4">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 hidden-sm about-photo">
                                <div class="image-thumb">
                                    <img :src='img_1' data-mfp-src="./images/thumb1.png" class="img-responsive" alt="logo">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 about-photo hidden-xs">
                                <img :src='img_2' :data-mfp-src='img_2' class="img-responsive" alt="logo">
                            </div>
                            <div class="col-sm-6 about-photo hidden-xs">
                                <img :src='img_3' :data-mfp-src='img_3' class="img-responsive" alt="logo">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <p> {{p_1_about}} </p>
                    <br>
                    <p> {{p_2_about}} </p>
                    <img :src='img_4' alt="signature">
                </div>
            </div>
        </div>
    </section>
</div>