<?php

$GLOBALS['title'] = "NewHydrogen";

$GLOBALS['desc'] = "";

$GLOBALS['keywords'] = "";

include('header.php'); ?>





<section class="contact">

    <div class="container">

        <div class="contact-title">

            <h1>Contact Us</h1>

            <p>

                NewHydrogen, Inc.

                <br>

                

                27936 Lost Canyon Road, Suite 202

                <br>



                Santa Clarita, CA 91387

                <br>



                T: (661) 251-0001

                <br>

                E: info@newhydrogen.com

            </p>

            

        </div>

        <div class="contact-form">

            <form action="./php/smartprocess.php" method="POST">

                <input type="text" class="form-control" placeholder="Name" name="name" id="name" required>

                <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>

                <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
                <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                <div class="contact-form-btn">

                    <button type="submit" class="theme-btn">Submit</button>

                </div>

            </form>

        </div>

    </div>

</section>





<?php

include('footer.php'); ?>