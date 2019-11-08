<template>
        <section class="home" >
            <div class="tittle-block">
                <div class="logo">
                    <a href="#">
                        <img :src="img1" alt="logo">
                    </a>
                </div>
                <h1>{{Delicious}}</h1>
                <h2>{{Tomato}}</h2>
            </div>
            <div class="scroll-down hidden-xs">
                <a href="#about">
                    <img :src="img2" alt="down-arrow">
                </a>
            </div>
        </section>
</template>
<script>
export default {
    name: 'comp-module2',
    data() {
        return {
           img1: 'images/logo.png',
           Delicious: 'DELICIOUS Food',
           Tomato: 'Tomato is a delitious restaurant website template',
           img2: 'images/arrow-down.png'
        }
    }
}
</script>

<style>

</style>
