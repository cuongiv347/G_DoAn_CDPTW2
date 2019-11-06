<template>
  <section class="team">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="page-header wow fadeInDown">
            <h1>
              {{h1_title}}
              <small>{{small_title}}</small>
            </h1>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-6 text-center">
          <div class="team-staff wow fadeInUp" data-wow-delay="0.2s">
            <img :src="img_1" class="img-responsive center-block" alt />
            <h4>{{h4_team}}</h4>
            <p>{{p_team}}</p>
            <ul class="team-social">
              <li>
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-google-plus"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 text-center">
          <div class="team-staff wow fadeInUp" data-wow-delay="0.4s">
            <img :src="img_2" class="img-responsive center-block" alt />
            <h4>{{h4_team}}</h4>
            <p>{{p_team}}</p>
            <ul class="team-social">
              <li>
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-google-plus"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 text-center">
          <div class="team-staff wow fadeInUp" data-wow-delay="0.6s">
            <img :src="img_3" class="img-responsive center-block" alt />
            <h4>{{h4_team}}</h4>
            <p>{{p_team}}</p>
            <ul class="team-social">
              <li>
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-google-plus"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 text-center">
          <div class="team-staff wow fadeInUp" data-wow-delay="0.8s">
            <img :src="img_4" class="img-responsive center-block" alt />
            <h4>{{h4_team}}</h4>
            <p>{{p_team}}</p>
            <ul class="team-social">
              <li>
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-google-plus"></i>
                </a>
              </li>
            </ul>
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
      h1_title: "Our Team",
      small_title: "The Hardworking Team behind the restaurant",
      h4_team: "Enter Name Here",
      p_team: "Designation here",
      img_1: "./images/1.png",
      img_2: "./images/2.png",
      img_3: "./images/3.png",
      img_4: "./images/4.png"
    };
  }
};
</script>

<style>
</style>
