<template>
  <section class="about">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="page-header wow fadeInDown">
            <h1>
              {{a}}
              <small>{{b}}</small>
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
                    :src="c"
                    class="img-responsive"
                    alt="logo"
                  />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 about-photo hidden-xs">
                <img
                  :src="d"
                  class="img-responsive"
                  alt="logo"
                />
              </div>
              <div class="col-sm-6 about-photo hidden-xs">
                <img
                  :src="e"
                  class="img-responsive"
                  alt="logo"
                />
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <p>{{f}}<br />
          <p>{{g}}</p>
          <img :src="h" alt="signature" />
        </div>
      </div>
    </div>
  </section>
</template>
<script>
export default {
  name: "comp-module3",
  data() {
    return {
     a:'The restaurant',
     b:'A little about us and a breif history of how we started.',
     c:'images/thumb1.png',
     d:'images/thumb2.png',
     e: 'images/thumb3.png',
     f:'Cras ut viverra eros. Phasellus sollicitudin sapien id luctus tempor. Sed hend rerit inter dum sagittis. Donec nunc lacus, dapibus nec interdum eget, ultrices eget justo. Nam purus lacus, efficitur eget laoreet sed, finibus nec neque. Cras eget enim in diam dapibus sagittis. In massa est, dignissim in libero ac, fringilla ornare mi. Etiam interdum ligula purus.',
     g:'Ultrices eget justo. Nam purus lacus, efficitur eget laoreet sed, finibus nec neque. Cras eget enim in diam dapibus sagittis. In massa est, dignissim in libero ac, fringilla ornare.',
     h:'images/signature.png'
    };
  }
};
</script>

<style>
</style>
