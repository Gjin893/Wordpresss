<?php
/*
Template Name:Contact Page
*/

get_header();
?>

<div id="content" class="site-content">
    <main id ="main" class = "site-main">
        <section class="contact-hero">
            <div class="container">
                <h1>contact us</h1>
                <p>we'd love to hear from you</p>
            </div>

        </section>




        <section class="contact-form-section">
            <div class="container">
                <form action="" method="post " class="contact-form">

                <p>
                    <label for="name"> Your Name</label><br>
                    <input type="text" id="name" name="name" required>
                </p>

                
                <p>
                    <label for="email"> Your email</label><br>
                    <input type="email" id="email" name="email" required>
                </p>

                     
                <p>
                    <label for="subject"> Your subject:</label><br>
                    <input type="text" id="subject" name="subject" required>
                </p>
                  <p>
                    <label for="message"> message:</label><br>
              <textarea name="message" id="message" required></textarea>
                </p>
                <p>
                    <input type="submit" name="submit_contact" value="send message">
                </p>


                </form>


            </div>
        </section>
    </main>


</div>
<?php get_footer();?>