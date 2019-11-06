<template>
  <section class="about" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="page-header wow fadeInDown">
            <h1>
              {{h1_title_about}}
              <small>{{small_title_about}}</small>
            </h1>
          </div>
        </div>
      </div>
      <div class="row wow fadeInUp">
        <div class="col-md-4">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xs-12 hidden-sm about-photo">
                <div class="image-thumb">
                  <img
                    :src="img_1"
                    data-mfp-src="./images/thumb1.png"
                    class="img-responsive"
                    alt="logo"
                  />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 about-photo hidden-xs">
                <img :src="img_2" :data-mfp-src="img_2" class="img-responsive" alt="logo" />
              </div>
              <div class="col-sm-6 about-photo hidden-xs">
                <img :src="img_3" :data-mfp-src="img_3" class="img-responsive" alt="logo" />
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <p>{{p_1_about}}</p>
          <br />
          <p>{{p_2_about}}</p>
          <img :src="img_4" alt="signature" />
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
      h1_title_about: "the restaurant",
      small_title_about:
        "A little about us and a breif history of how we started.",
      img_1: "images/thumb1.png",
      img_2: "images/thumb2.png",
      img_3: "images/thumb3.png",
      p_1_about:
        "Cras ut viverra eros. Phasellus sollicitudin sapien id luctus tempor. Sed hend rer it inter dum sagittis. Donec nunc lacus, dapibus nec interdum eget, ultrices eget justo.Nam purus lacus, efficitur eget laoreet sed, finibus nec neque. Cras eget enim in diam dapibus sagittis. In massa est, dignissim in libero ac, fringilla ornare mi. Etiam interdum ligula purus.",
      p_2_about:
        "Ultrices eget justo. Nam purus lacus, efficitur eget laoreet sed, finibus nec neque.  Cras eget enim in diam dapibus sagittis. In massa est, dignissim in libero ac, fringilla ornare.",
      img_4: "./images/signature.png"
    };
  }
};
</script>

<style>
</style>
