<template>
  <section class="about2">
    <div class="container">
      <div class="row wow fadeInUp">
        <div class="col-md-5">
          <img :src="img_1" class="img-responsive" alt />
        </div>
        <div class="col-md-7 text-left">
          <h2 class="text-left">{{h2_about2}}</h2>
          <p>{{p_about2}}</p>
          <a class="btn btn-default" role="button" href="#menu">{{SOM}}</a>
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
      img_1: "./images/about.png",
      h2_about2: "Our Story",
      p_about2:
        "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passage",
      SOM: "See Our Menu"
    };
  }
};
</script>

<style>
</style>
