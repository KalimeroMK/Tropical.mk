<?php

include 'header.php';
?>
<!-- banner start -->
            
                <!-- breadcrumb start -->
                <!-- ================ -->
                <div class="breadcrumb-container">
                    <div class="container">
                        <ol class="breadcrumb">
                            <li><i class="fa fa-home pr-10"></i><a class="link-dark" href="/">Почетна</a></li>
                            <li class="active">Контакт</li>
                        </ol>
                    </div>
                </div>
                <!-- breadcrumb end -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 text-center col-md-offset-2 pv-20">
                            <h2 class="title">Контакт</h2>
                            <div class="separator mt-10"></div>
                            <p class="text-center">Би било супер да слушнеме ваше мислење. Доколку имате било какви прашања поврзани со веб страната ве молиме исконтактирајте не!</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- banner end -->

            <!-- main-container start -->
            <!-- ================ -->
            <section class="main-container">

                <div class="container">
                    <div class="row">

                        <!-- main start -->
                        <!-- ================ -->
                        <div class="main col-md-12 space-bottom">
                        <div class="alert alert-success hidden" id="MessageSent">
                                We have received your message, we will contact you very soon.
                            </div>
                            <div class="alert alert-danger hidden" id="MessageNotSent">
                                Oops! Something went wrong please refresh the page and try again.
                            </div>
                            <div class="contact-form">
                                <form id="contact-form" class="margin-clear" role="form">
                                    <div class="form-group has-feedback">
                                        <label for="name">Име*</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="">
                                        <i class="fa fa-user form-control-feedback"></i>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="email">Email*</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="">
                                        <i class="fa fa-envelope form-control-feedback"></i>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="subject">Наслов*</label>
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="">
                                        <i class="fa fa-navicon form-control-feedback"></i>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="message">Порака*</label>
                                        <textarea class="form-control" rows="6" id="message" name="message" placeholder=""></textarea>
                                        <i class="fa fa-pencil form-control-feedback"></i>
                                    </div>
                                    <input type="submit" value="Испрати" class="submit-button btn btn-default">
                                </form>
                            </div>
                        </div>
                        <!-- main end -->

                        <!-- sidebar start -->
                        <!-- ================ -->
                     
                        <!-- sidebar end -->
                    </div>
                </div>
            </section>
            <!-- main-container end -->
            <!-- section end -->
            <section class="section dark-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="call-to-action text-center">

                </div>
            </div>
        </div>
    </div>
</section>
            <?php
require_once "footer.php";
?>