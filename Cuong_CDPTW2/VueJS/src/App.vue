<template>
  <div id="app">
    <div class="body">
      <div class="main-wrapper">
        <comp-module1 />
        <comp-module2 />
        <comp-module3 />
        <comp-module4 />
        <comp-module5 />
        <comp-module6 />
      </div>
    </div>
  </div>
</template>

<script>
import CompModule1 from "./components/module1.vue";
import CompModule2 from "./components/module2.vue";
import CompModule3 from "./components/module3.vue";
import CompModule4 from "./components/module4.vue";
import CompModule5 from "./components/module5.vue";
import CompModule6 from "./components/module6.vue";
export default {
  name: "app",
  data() {
    return {};
  },
  components: {
    CompModule1,
    CompModule2,
    CompModule3,
    CompModule4,
    CompModule5,
    CompModule6
  }
};
</script>

<style>
</style>
