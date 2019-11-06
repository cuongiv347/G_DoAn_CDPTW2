
<body>

    <section class="trusted" id="trus">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header wow fadeInDown">
                        <h1>{{message}}<small>{{message2}}</small></h1>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp">
                <div class="col-md-12">
                    <div class="trusted-sponsors">
                        <img :src='img1' alt="sponsors">
                        <img :src='img2' alt="sponsors">
                        <img :src='img3' alt="sponsors">
                        <img :src='img4' alt="sponsors">
                        <img :src='img5' alt="sponsors">
                        <img :src='img6' alt="sponsors">
                        <img :src='img7' alt="sponsors">
                        <img :src='img8' alt="sponsors">
                    </div>
                </div>
            </div>
        </div>

        <div class="trusted-quote">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-1 col-md-10">
                        <div class="trusted-slider">
                            <ul class="slides">
                                <li>
                                    <img :src="hinh1" alt="quote">
                                    <p class="quote-body">{{text1}}</p>
                                    <p class="quote-author">{{t1}} <span>{{t2}}</span></p>
                                </li>
                                <li>
                                    <img :src="hinh2" alt="quote">
                                    <p class="quote-body">{{text2}}</p>
                                    <p class="quote-author">{{t3}} <span>{{t4}}</span></p>
                                </li>
                                <li>
                                    <img :src="hinh3" alt="quote">
                                    <p class="quote-body">{{text3}}</p>
                                    <p class="quote-author">{{t5}} <span>{{t6}}</span></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
