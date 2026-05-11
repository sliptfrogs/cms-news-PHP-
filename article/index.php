<?php include('header.php');?>
<main class="home">
    <section class="trending">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-trending">
                        <div class="content-left">
                            TRENDING NOW
                        </div>
                        <div class="content-right">
                            <marquee behavior="" direction="left" onmouseover="this.stop()" onmouseout="this.start()">
                                <div class="text-news">
                                    <?php getTrading()?>
                                </div>
                            </marquee>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="latest-news">
        <div class="container">
            <div class="row">
                <div class="col-8 content-left">
                    <?php getHomeNews()?>
                </div>
                <div class="col-4 content-right">
                    <?php getHomeNews2()?>
                </div>
            </div>
        </div>
    </section>

    <section class="trending">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-trending">
                        <div class="content-left">
                            SPORT NEWS
                            <ion-icon name="chevron-forward-outline" ></ion-icon>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="news">
    <div class="container pt-2">
            <div class="row">
                <?php sportNews()?>
            </div>
        </div>
    </section>

    <section class="trending">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-trending">
                        <div class="content-left">
                            SOCIAL NEWS
                            <ion-icon name="chevron-forward-outline" ></ion-icon>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news">
        <div class="container">
            <div class="row">
                <?php socialNews()?>
            </div>
        </div>
    </section>
    <section class="trending">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-trending">
                        <div class="content-left">
                            ENTERTAINMENT NEWS
                            <ion-icon name="chevron-forward-outline" ></ion-icon>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news">
        <div class="container">
            <div class="row">
                <?php entertainmentNews()?>
            </div>
        </div>
    </section>
</main>
<?php include('footer.php'); ?>
