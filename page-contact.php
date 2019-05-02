<?php
  get_header();
  get_template_part( 'templates/page-header');
?>


<section class="section pd-top--big pd-bottom--big">

  <div class="container">
      <h2 class="heading--secondary heading--blue text--centered mg-bottom--big">
          Contact
      </h2>
  </div><!-- container -->

  <div class="container--tight">

      <form action="/" class="sd-contact-form">

          <div class="sd-contact-form__header">
            <p>Leave us a message, we will get back to you soon</p>
          </div><!-- contact form header -->

          <div class="sd-contact-form__body">

             <div class="sd-contact-form__row">

                 <div class="sd-contact-form__group">
                    <input type="text" class="sd-contact-form__input" name="fullName" required>
                    <label for="fullName" class="sd-contact-form__label">*Full Name</label>
                 </div><!-- input group -->

                 <div class="sd-contact-form__group">
                    <input type="email" class="sd-contact-form__input" name="yourEmail" required>
                    <label for="yourEmail" class="sd-contact-form__label">*Email</label>
                 </div><!-- input group -->

             </div><!-- row -->

             <div class="sd-contact-form__row">

                 <div class="sd-contact-form__group">
                    <input type="text" class="sd-contact-form__input" name="yourCompany" >
                    <label for="yourCompany" class="sd-contact-form__label">Company/Organization</label>
                 </div><!-- input group -->

                 <div class="sd-contact-form__group">
                    <input type="number" class="sd-contact-form__input" name="yourPhoneNumber" >
                    <label for="yourPhoneNumber" class="sd-contact-form__label">Phone Number</label>
                    <span class="sd-contact-form__helper-text">We suggest to provide a phone number if it's an urgent matter</span>
                 </div><!-- input group -->

             </div><!-- row -->

             <div class="sd-contact-form__row">
                 <textarea name="yourMessage" id="" cols="30" rows="10" class="sd-contact-form__textarea"></textarea>
             </div><!-- row -->

             <input type="submit" class="sd-contact-form__send-button" value="Send Message">

          </div><!-- contact form body -->



      </form><!-- form -->

  </div>
</section>


<?php get_footer(); ?>
