<template>
   	<section class="trusted" id="trus">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="page-header wow fadeInDown">
								<h1>{{message}}<small>{{message2}}</small></h1>
							</div>
						</div>
					</div>
					<div class="row wow fadeInUp">
						<div class="col-md-12">
							<div class="trusted-sponsors">
								<img :src='img1' alt="sponsors">
								<img :src='img2' alt="sponsors">
								<img :src='img3' alt="sponsors">
								<img :src='img4' alt="sponsors">
								<img :src='img5' alt="sponsors">
								<img :src='img6' alt="sponsors">
								<img :src='img7' alt="sponsors">
								<img :src='img8' alt="sponsors">
							</div>
						</div>
					</div>
				</div>

				<div class="trusted-quote">
					<div class="container">
						<div class="row">
							<div class="col-md-offset-1 col-md-10">
								<div class="trusted-slider">
									<ul class="slides">
										<li>
											<img :src="hinh1" alt="quote">
											<p class="quote-body">{{text1}}</p>
											<p class="quote-author">{{t1}} <span>{{t2}}</span></p>
										</li>
										<li>
											<img :src="hinh2" alt="quote">
											<p class="quote-body">{{text2}}</p>
											<p class="quote-author">{{t3}} <span>{{t4}}</span></p>
										</li>
										<li>
											<img :src="hinh3" alt="quote">
											<p class="quote-body">{{text3}}</p>
											<p class="quote-author">{{t5}} <span>{{t6}}</span></p>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
</template>

<script>
export default {
    name: 'comp-module8',
    data() {
        return {
             message: 'TRUSTED BY',
        message2: 'These fine folks trusted tha award winning restaurant',
        img1: './img/sponsor/foodsquare.png',
        img2: './img/sponsor/opentable.png',
        img3: './img/sponsor/tripadvisor.png',
        img4: './img/sponsor/zomato.png',
        img5: './img/sponsor/foodsquare.png',
        img6: './img/sponsor/opentable.png',
        img7: './img/sponsor/tripadvisor.png',
        img8: './img/sponsor/zomato.png',

        hinh1: 'img/quote.png',
        text1: 'The world’s a big, big stage for this notorious deli smack in the middle of the theatre district, infamously famous for its over-the-top corned beef and pastrami sandwiches, chopped liver, blintzes, celebrities, salami, smoked fish and New York’s finest cheesecake.',
        t1: 'Anthony Reed,', t2: 'New York',

        hinh2: 'img/quote.png',
        text2: 'You might not find dragon meat on the menu, but you’ll find pretty much anything else that walks, swims or flies, cooked up in more ways than there are people in the Guangdong province. This Midtown  mainstay has a 20-year history of delivering mouth-watering and Cantonese style chow.',
        t3: 'Gemma Arterton,', t4: 'Bay Area',
        hinh3: 'img/quote.png',
        text3: 'This NYC historical landmark in the heart of the Theatre District has been serving up suds and down home pub food since 1892, surviving prohibition by renting the front of its then Rockefeller Center façade to Greek florists, while the Hurley brothers ran a speak-easy in back.',
        t5: 'Zachary Burton,', t6: 'Sanfransisco'

        }
    }
}
</script>

<style>

</style>
