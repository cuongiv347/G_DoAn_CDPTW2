<template>
 <section class="subscribe" id=sub>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{message5}}</h1>
                    <p>{{message6}}</p>
                    <form class="form-inline" action="php/subscribe.php" id="invite" method="POST">
                        <div class="form-group">
                            <input class="e-mail form-control" name="email" id="address" type="email"
                                placeholder="Your Email Address" required>
                        </div>
                        <button type="submit" class="btn btn-default">
                            <i class="fa fa-angle-right"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'comp-module10',
    data() {
        return {
            message5: 'SUBSCRIBE',
        message6: 'Get updates about new dishes and upcoming events',
        }
    }
}
</script>

<style>

</style>
