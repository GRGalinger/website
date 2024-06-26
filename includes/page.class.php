<?php



class Page {

    public function __construct() {

    }

    function route(){
        require_once('htdocs/welcome.php');
    }


    public function openHeader(){ ?>
        <!DOCTYPE html>
            <html lang="en">
                <head>
                    <link rel="stylesheet" type="text/css" href="css/page.css"/>
                    <link rel="stylesheet" type="text/css" href="css/custom.css"/>

                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!--                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">-->
                    <title>TBD - from page class</title>
                </head>
                <body>
<!--                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>-->

<!--                    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>-->
<!--                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>-->
    <?php }

    public function topNavigation(){ ?>
                    <div class="container-fluid" style="background: aliceblue;">
                        <div class="row" style="padding-top: 5px; padding-bottom: 10px;">
                            <div class="col-lg-4">
                                <h5 style="padding: 10px;">Dropdown</h5>
                            </div>

                            <div class="col-lg-4 d-flex justify-content-center">
                                <h5 style="font-size: 35px;">
                                    <span>G</span>
                                    <span style="position: relative; top: 10px;">R</span>
                                    <span style="position: relative; top: 20px;">G</span>
                                </h5>
                            </div>

                            <div class="col-lg-4">
                                <h5 style="padding: 10px; text-align: right;">Toggle</h5>
                            </div>

                        </div>
                    </div>
    <?php }

    public function closeHeader(){ ?>
                    <footer>
                        <!-- TDB - footer content-->
                    </footer>
                </body>
            </html>
    <?php }


}