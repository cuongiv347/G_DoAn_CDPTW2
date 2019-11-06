<template>
  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="page-header wow fadeInDown">
            <h1 class="white">
              {{h1_s}}
              <small>{{small_s}}</small>
            </h1>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="services-slider wow fadeIn">
            <div class="service-content text-center">
              <img :src="img_1" class="center-block" alt />
              <h4 class="text-uppercase">{{h4_s1}}</h4>
              <p>{{commet1}}</p>
            </div>
            <div class="service-content text-center">
              <img :src="img_2" class="center-block" alt />
              <h4 class="text-uppercase">{{h4_s2}}</h4>
              <p>{{commet2}}</p>
            </div>
            <div class="service-content text-center">
              <img :src="img_1" class="center-block" alt />
              <h4 class="text-uppercase">{{h4_s1}}</h4>
              <p>{{commet3}}</p>
            </div>
            <div class="service-content text-center">
              <img :src="img_2" class="center-block" alt />
              <h4 class="text-uppercase">{{h4_s2}}</h4>
              <p>{{commet4}}</p>
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
      h1_s: "Special Service",
      small_s: "What Special services we are offering now",
      h4_s1: "Birthday Party",
      h4_s2: "Wedding Party",
      commet1:
        "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.",
      commet2:
        "Lorem Ipsum is simply dummy text of the printing. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer.",
      commet3:
        "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text ever since the 1500s, when an unknown printer.",
      commet4:
        "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text when an unknown printer.",
      img_1: "./images/ico1.png",
      img_2: "./images/ico2.png"
    };
  }
};
</script>

<style>
</style>
