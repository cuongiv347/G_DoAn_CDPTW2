<template>
  <section class="page_header">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="text-uppercase wow fadeInDown">{{about}}</h2>
          <p class="wow fadeInUp">{{p_about}}</p>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "module1",
  data() {
    return {
      about: "ABOUT US",
      p_about: "Read our Story, How we started and about the Team"
    };
  }
};
</script>

<style>
</style>
