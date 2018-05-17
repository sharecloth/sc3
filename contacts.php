<?php include "_header.php";?>

    <!-- Promo Block -->
    <section class="u-bg-overlay g-bg-size-cover g-bg-pos-center g-bg-black-opacity-0_3--after" style="background-image: url(assets/img-temp/1920x800/img4.jpg);">
      <div class="container g-color-white text-center g-pos-rel g-z-index-1 g-py-150">
        <h1 class="h2 g-font-weight-300">It is good to meet you</h1>
        <h2 class="display-2 g-font-weight-600 text-uppercase g-letter-spacing-1">Contact us</h2>
      </div>
    </section>
    <!-- End Promo Block -->

	<section class="clearfix g-brd-bottom g-brd-gray-light-v4">
		<!-- Icons Block -->
		<div class="row no-gutters">
		  <div class="col-md-6 col-lg-3 g-brd-right--md g-brd-gray-light-v4">
		    <!-- Icon Blocks -->
		    <div class="text-center g-py-20">
		      <span class="u-icon-v1 u-icon-size--xl g-color-black g-mb-10">
		          <i class="icon-electronics-005 u-line-icon-pro"></i>
		        </span>
		      <h4 class="h5 g-font-weight-600 g-mb-5">Online call</h4>
		      <span class="d-block">
				<a class="zingayaButton zingaya0398fcfa7a2f41c7b9935d9b14296873" id="zingayaButton0398fcfa7a2f41c7b9935d9b14296873" href="https://zingaya.com/widget/0398fcfa7a2f41c7b9935d9b14296873" onclick="window.open(this.href+'?referrer='+escape(window.location.href)+'', '_blank', 'width=236,height=220,resizable=no,toolbar=no,menubar=no,location=no,status=no'); return false;">Call now</a></span>
		    </div>
		    <!-- End Icon Blocks -->
		  </div>
		  <div class="col-md-6 col-lg-3 g-brd-right--md g-brd-gray-light-v4">
		    <!-- Icon Blocks -->
		    <div class="text-center g-py-20">
		      <span class="u-icon-v1 u-icon-size--xl g-color-black g-mb-10">
		          <i class="icon-real-estate-027 u-line-icon-pro"></i>
		        </span>
		      <h4 class="h5 g-font-weight-600 g-mb-5">Chat now</h4>
		      <span class="d-block"><a id="support_chat" onclick="Chatra('show'); Chatra('openChat', true)" href="#">Open chat</a>
		    </div>
		    <!-- End Icon Blocks -->
		  </div>
		  <div class="col-md-6 col-lg-3 g-brd-right--md g-brd-gray-light-v4">
		    <!-- Icon Blocks -->
		    <div class="text-center g-py-20">
		      <span class="u-icon-v1 u-icon-size--xl g-color-black g-mb-10">
		          <i class="icon-communication-062 u-line-icon-pro"></i>
		        </span>
		      <h4 class="h5 g-font-weight-600 g-mb-5">Email</h4>
		      <span class="d-block">hi@sharecloth.com</span>
		    </div>
		    <!-- End Icon Blocks -->
		  </div>

		  <div class="col-md-6 col-lg-3">
		    <!-- Icon Blocks -->
		    <div class="text-center g-py-20">
		      <span class="u-icon-v1 u-icon-size--xl g-color-black g-mb-10">
		          <i class="icon-real-estate-027 u-line-icon-pro"></i>
		        </span>
		      <h4 class="h5 g-font-weight-600 g-mb-5">Mail address</h4>
		      <span class="d-block">ShareCloth, Inc.
			Suit 210-A, 300 Delaware Ave., Willmington, DE, United States, 90801</span>
		    </div>
		    <!-- End Icon Blocks -->
		  </div>
		</div>
		<!-- End Icons Block -->
	</section>

    <!-- Contacts -->
    <section class="container g-py-70">
      <div class="row">
		<div class="col-lg-6 g-mb-60">
			<h2 class="h3">Contact us</h2>
			  <p class="g-color-gray-dark-v3 g-font-size-16">We appreciate your interest to ShareCloth technologies and products. We'll get back to you as soon as possible</p>

			  <hr class="g-my-40">

			  <!-- Contact Form -->
            <form id="contact-us-form">
                <input type="hidden" name="formId" value="contactForm">
                <div class="form-group"><label for="type">Request type</label>
                    <select id="type" name="type"
                            class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-primary--focus g-brd-gray-light-v4 rounded-3 g-py-13 g-px-15">
                        <option value="On-demand Product" selected="1">On-demand Product</option>	
                        <option value="Products - 3D retail inquiry">Products - "3D retail" inquiry</option>
                        <option value="Products - Product development inquiry">Products - "Product development"
                            inquiry
                        </option>
                        <option value="Services request">Services request</option>
                        <option value="Feedback">Feedback</option>
                        <option value="Support">Support</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fname">Name <sup class="g-color-red">*</sup></label>
                            <input type="text"
                                   name="name"
                                   id="fname"
                                   class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-primary--focus g-brd-gray-light-v4 rounded-3 g-py-13 g-px-15">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group"><label for="email">Email <sup class="g-color-red">*</sup>
                            </label><input type="email"
                                           name="email"
                                           id="email"
                                           class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-primary--focus g-brd-gray-light-v4 rounded-3 g-py-13 g-px-15">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group"><label for="company">Company name <sup class="g-color-red">*</sup></label>
                            <input type="text"
                                   name="company"
                                   id="company"
                                   class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-primary--focus g-brd-gray-light-v4 rounded-3 g-py-13 g-px-15">
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group"><label for="position">Position </label>
                            <input type="text"
                                   name="position"
                                   id="position"
                                   class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-primary--focus g-brd-gray-light-v4 rounded-3 g-py-13 g-px-15">
                        </div>

                    </div>
                </div>



                <div class="form-group">
                    <label for="phone">Phone to call you back <sup class="g-color-red">*</sup></label>
                    <input
                            type="text" name="phone" id="phone"
                            class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-primary--focus g-brd-gray-light-v4 rounded-3 g-py-13 g-px-15">
                </div>
                <div class="form-group"><label for="comment">Comment</label><textarea name="comment"
                                                                                      id="comment"
                                                                                      class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-primary--focus g-brd-gray-light-v4 rounded-3 g-py-13 g-px-15"
                                                                                      cols="30"
                                                                                      rows="3"></textarea>
                </div>
                <div class="actions"><input type="submit" class="btn btn-lg u-btn-primary g-font-weight-600 g-font-size-default rounded-3 text-uppercase g-py-15 g-px-30" id="contact-form-button"
                                            value="Send Message">
                </div>
                <div class="form-result"></div>
            </form>
			  <!-- End Contact Form -->
		</div>
      </div>
    </section>
    <!-- End Contacts -->

    <hr class="g-brd-gray-light-v4 my-0">

    <!-- Clients -->
    <div class="container g-py-70">
      <div class="js-carousel" data-infinite="true" data-autoplay="true" data-slides-show="6" data-responsive='[{
               "breakpoint": 768,
               "settings": {
                 "slidesToShow": 1
               }
             }]'>
        <div class="js-slide u-block-hover">
          <img class="mx-auto g-width-80 u-block-hover__main--grayscale g-opacity-0_3 g-opacity-1--hover g-cursor-pointer" src="../../assets/img-temp/200x100/img1.png" alt="Image Description">
        </div>

        <div class="js-slide u-block-hover">
          <img class="mx-auto g-width-80 u-block-hover__main--grayscale g-opacity-0_3 g-opacity-1--hover g-cursor-pointer" src="../../assets/img-temp/200x100/img2.png" alt="Image Description">
        </div>

        <div class="js-slide u-block-hover">
          <img class="mx-auto g-width-80 u-block-hover__main--grayscale g-opacity-0_3 g-opacity-1--hover g-cursor-pointer" src="../../assets/img-temp/200x100/img3.png" alt="Image Description">
        </div>

        <div class="js-slide u-block-hover">
          <img class="mx-auto g-width-80 u-block-hover__main--grayscale g-opacity-0_3 g-opacity-1--hover g-cursor-pointer" src="../../assets/img-temp/200x100/img4.png" alt="Image Description">
        </div>

        <div class="js-slide u-block-hover">
          <img class="mx-auto g-width-80 u-block-hover__main--grayscale g-opacity-0_3 g-opacity-1--hover g-cursor-pointer" src="../../assets/img-temp/200x100/img5.png" alt="Image Description">
        </div>

        <div class="js-slide u-block-hover">
          <img class="mx-auto g-width-80 u-block-hover__main--grayscale g-opacity-0_3 g-opacity-1--hover g-cursor-pointer" src="../../assets/img-temp/200x100/img6.png" alt="Image Description">
        </div>

        <div class="js-slide u-block-hover">
          <img class="mx-auto g-width-80 u-block-hover__main--grayscale g-opacity-0_3 g-opacity-1--hover g-cursor-pointer" src="../../assets/img-temp/200x100/img7.png" alt="Image Description">
        </div>

        <div class="js-slide u-block-hover">
          <img class="mx-auto g-width-80 u-block-hover__main--grayscale g-opacity-0_3 g-opacity-1--hover g-cursor-pointer" src="../../assets/img-temp/200x100/img8.png" alt="Image Description">
        </div>

        <div class="js-slide u-block-hover">
          <img class="mx-auto g-width-80 u-block-hover__main--grayscale g-opacity-0_3 g-opacity-1--hover g-cursor-pointer" src="../../assets/img-temp/200x100/img9.png" alt="Image Description">
        </div>
      </div>
    </div>
    <!-- End Clients -->

<?php include "_footer.php";