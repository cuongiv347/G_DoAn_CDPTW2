<template>
  <section class="footer" id=foot>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h1>{{message7}}</h1>
                    <p>{{message8}}
                    </p>
                    <a href="">{{message9}}</a>
                </div>
                <div class="col-md-4  col-sm-6">
                    <h1>{{message10}}</h1>
                    <div class="footer-blog clearfix">

                      <img :src='imgf'  class="img-responsive footer-photo" alt="blog photos">
                        <p class="footer-blog-text">{{message11}}</p>
                        <p class="footer-blog-date">{{message12}}</p>
                        </a>
                    </div>
                    <div class="footer-blog clearfix last">

                      <img :src='imgf1' class="img-responsive footer-photo" alt="blog photos">
                        <p class="footer-blog-text">{{message13}}</p>
                        <p class="footer-blog-date">{{message14}}</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4  col-sm-6">
                    <h1>{{message15}}</h1>
                    <div class="footer-social-icons">
                        <a href="https://www.facebook.com">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                        <a href="https://www.twitter.com">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="https://plus.google.com">
                            <i class="fa fa-google"></i>
                        </a>
                        <a href="https://www.youtube.com">
                            <i class="fa fa-youtube-play"></i>
                        </a>
                        <a href="https://www.vimeo.com">
                            <i class="fa fa-vimeo"></i>
                        </a>
                        <a href="https://www.pinterest.com">
                            <i class="fa fa-pinterest-p"></i>
                        </a>
                        <a href="http://www.linkedin.com">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </div>
                    <div class="footer-address">
                        <p><i class="fa fa-map-marker"></i>{{message16}}</p>
                        <p><i class="fa fa-phone"></i>{{message17}}</p>
                        <p><i class="fa fa-envelope-o"></i><a href="/cdn-cgi/l/email-protection" class="__cf_email__">{{message18}}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-copyrights">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p><i class="fa fa-copyright"></i>2015.Tomato.All rights reserved. Designed with <i
                                class="fa fa-heart primary-color"></i> by Surjithctly</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'comp-module11',
    data() {
        return {
         imgf: './img/thumb8.png',
        imgf1: './img/thumb9.png',
         message7: 'ABOUT US',
        message8: 'Duis leo justo, condimentum at purus eu,Aenean sed dolor sem. Etiam massa libero, auctor vitae egestas et, accumsan quis nunc.Duis leo justo, condimentum at purus eu, posuere pretium tellus.',
        message9: 'Read more →',
        message10: 'RECENT POST',
        message11: 'Hand picked ingredients for our best customers',
        message12: '29 may 2015',
        message13: 'Daily special foods that you will going to love',
        message14: '29 may 2015',
        message15: 'REACH US',
        message16: '28 Seventh Avenue, Neew York, 10014',
        message17: 'Phone: (415) 124-5678',
        message18: '[support@restaurant.com]',
        }
    }
}
</script>

<style>

</style>
