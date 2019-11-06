<template>
  <section class="special" id="special">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="page-header wow fadeInDown">
            <h1 class="white">
              {{h1_title_special}}
              <small>{{small_title_special}}</small>
            </h1>
          </div>
        </div>
      </div>
      <div class="row wow fadeInUp">
        <div class="col-md-offset-1 col-md-10">
          <div class="flexslider special-slider">
            <ul class="slides" v-bind:title="message">
              <li>
                <div class="slider-img">
                  <img :src="img_special" alt />
                </div>
                <div class="slider-content">
                  <div class="page-header">
                    <h1>
                      {{h1_special}}
                      <small>{{small_special}}</small>
                    </h1>
                  </div>
                  <p>{{p_special}}</p>
                  <a class="btn btn-default" href="#" role="button">{{order}}</a>
                  <a class="btn btn-secondary" href="#" role="button">{{add}}</a>
                </div>
              </li>
              <li>
                <div class="slider-img">
                  <img :src="img_special" alt />
                </div>
                <div class="slider-content">
                  <div class="page-header">
                    <h1>
                      {{h2_special}}
                      <small>{{small_special}}</small>
                    </h1>
                  </div>
                  <p>{{p_special}}</p>
                  <a class="btn btn-default" href="#" role="button">{{order}}</a>
                  <a class="btn btn-secondary" href="#" role="button">{{add}}</a>
                </div>
              </li>
              <li>
                <div class="slider-img">
                  <img :src="img_special" alt />
                </div>
                <div class="slider-content">
                  <div class="page-header">
                    <h1>
                      {{h3_special}}
                      <small>{{small_special}}</small>
                    </h1>
                  </div>
                  <p>{{p_special}}</p>
                  <a class="btn btn-default" href="#" role="button">{{order}}</a>
                  <a class="btn btn-secondary" href="#" role="button">{{add}}</a>
                </div>
              </li>
            </ul>
            <div class="direction-nav hidden-sm">
              <div class="next">
                <a>
                  <img :src="button_right" alt />
                </a>
              </div>
              <div class="prev">
                <a>
                  <img :src="button_left" alt />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "comp-module9",
  data() {
    return {
      h1_title_special: "TODAY S SPECIALS",
      small_title_special:
        "A little about us and a breif history of how we started.",
      img_special: "./images/thumb4.png",
      h1_special: "1 Pancake with Caramel",
      h2_special: "2 Pancake with Caramel",
      h3_special: "3 Pancake with Caramel",
      small_special:
        "If you are a fan of caramel cake, then you ll love our Pancake with caramel icecream. It s not thick,but very tasty.",
      p_special:
        "Ultrices In massa est, dignissim in libero ac, fringilla ornare mi.Ultrices eget justo. Nam purus lacus, efficitur eget laoreet sed, finibus nec neque. Cras eget enim in diam dapibus sagittis. accumsan, habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.",
      order: "Order Now",
      add: "Add to cart",

      button_right: "./images/right-arrow.png",
      button_left: "./images/left-arrow.png",
      message: "Bạn đã mở trang này vào " + new Date().toLocaleString()
    };
  }
};
</script>

<style>
</style>
