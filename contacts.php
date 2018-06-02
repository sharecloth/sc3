<?php include "_header.php";?>

    <!-- Promo Block -->
    <section class="u-bg-overlay g-bg-size-cover g-bg-pos-center g-bg-black-opacity-0_3--after" style="background-image: url(assets/sc/contacts-bg.jpg);">
      <div class="container g-color-white text-center g-pos-rel g-z-index-1 g-py-150">
        <h1 class="h2 g-font-weight-300">Look forward to meeting you!</h1>
        <h2 class="display-2 g-font-weight-600 text-uppercase g-letter-spacing-1">Contact us</h2>
      </div>
    </section>
    <!-- End Promo Block -->

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
                        <?php

                        $types = [
                            'odm' => '"On-demand solution" inquiry',
                            '3d-retail' => '"3D retail solution" inquiry',
                            'services' => 'Services request',
                            'feedback' => 'Feedback',
                            'support' => 'Support'
                        ];
                        $defaultType = !empty($_GET['from']) && in_array($_GET['from'], array_keys($types))
                            ?
                            $_GET['from'] : 'feedback';
                        ?>

                        <?php foreach ($types as $key => $value) { ?>
                            <?php $selected = $key == $defaultType ? 'selected="1"' : '';?>
                            <option <?=$selected;?> value="<?=str_replace('"', '', $value);?>"><?=$value;?></option>
                        <?php }?>
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

                <div class="form-check">
                    <label class="form-check-label g-mb-20">
                        <input id="agreement" type="checkbox" class="form-check-input mr-1" name="agreement">I give a consent to process my information according to <a href="/pages/privacy.php">privacy policy</a>
                    </label>
                </div>

                <div class="actions"><input type="submit" class="btn btn-lg u-btn-primary g-font-weight-600 g-font-size-default rounded-3 text-uppercase g-py-15 g-px-30" id="contact-form-button"
                                            value="Send Message">
                </div>
                <div class="form-result"></div>
            </form>
			  <!-- End Contact Form -->
		</div>
		<div class="col-lg-5 offset-lg-1 g-bg-gray-dark-v3">
			<div class="g-pa-50 g-pa-70--md">
		            <h2 class="h2 g-color-white">Our office</h2>

		            <!-- Contact Details -->
		            <ul class="list-unstyled g-color-white-opacity-0_7 g-font-weight-300 g-font-size-13 g-line-height-1_8 mb-0">
		              <li class="g-my-30">
		                <div class="media">
		                  <i class="d-flex g-color-primary g-font-size-20 mt-1 mr-4 icon-hotel-restaurant-235 u-line-icon-pro"></i>
		                  <div class="media-body">
		                    142 W 57th Street
							<br>New York, NY, United States
		                    <p><a class="g-color-white" href="https://www.google.com/maps/dir/?api=1&destination=142+W+57th+Street">Get a route</a></p>
		                  </div>
		                </div>
		              </li>
		              <li>
		                <div class="media">
		                  <i class="d-flex g-color-primary g-font-size-20 mt-1 mr-4 icon-education-097 u-line-icon-pro"></i>
		                  <div class="media-body">
		                    <h2 class="g-color-white-opacity-0_9 g-font-size-default g-font-weight-600 text-uppercase mb-3">Office hours:</h2>
		                    <div class="mb-3">
		                      <span class="d-block g-color-white">Monday - Firday</span>
		                      09:00 AM - 06:00 PM
		                    </div>
		                    <span class="d-block g-color-white">Weekend &amp; Holidays</span>
		                    Closed
		                  </div>
		                </div>
		              </li>
					  <li class="g-my-30">
						<div class="media">
							<div class="media-body">
					  			<span class="h2 g-color-white">Let's speak online</span>
							</div>
						</div>
					  </li>		      
					  <li class="g-my-30">
						<div class="media">
    					  <i class="d-flex g-color-primary g-font-size-20 mt-1 mr-4 icon-communication-062 u-line-icon-pro"></i>
						  <div class="media-body">
							 <!-- Chatra {literal} -->
				                <script>
				                    window.ChatraSetup = {
				                        startHidden: true
				                    };

				                    (function(d, w, c) {
				                        w.ChatraID = 'R2NDg9B8Tmo5E4uZd';
				                        var s = d.createElement('script');
				                        w[c] = w[c] || function() {
				                            (w[c].q = w[c].q || []).push(arguments);
				                        };
				                        s.async = true;
				                        s.src = (d.location.protocol === 'https:' ? 'https:': 'http:')
				                            + '//call.chatra.io/chatra.js';
				                        if (d.head) d.head.appendChild(s);
				                    })(document, window, 'Chatra');
				                </script>
				                <!-- /Chatra {/literal} -->
						      <span class="d-block"><a class="g-color-white" id="support_chat" onclick="Chatra('show'); Chatra('openChat', true); return false;" href="#">Start chatting</a>
						  </div>
						</div>
					  </li>
		              <li class="g-my-30">
		                <div class="media">
		                  <i class="d-flex g-color-primary g-font-size-20 mt-1 mr-4 icon-communication-033 u-line-icon-pro"></i>
		                  <div class="media-body">
		                    <a class="g-color-white zingayaButton zingaya0398fcfa7a2f41c7b9935d9b14296873" id="zingayaButton0398fcfa7a2f41c7b9935d9b14296873" href="https://zingaya.com/widget/0398fcfa7a2f41c7b9935d9b14296873" onclick="window.open(this.href+'?referrer='+escape(window.location.href)+'', '_blank', 'width=236,height=220,resizable=no,toolbar=no,menubar=no,location=no,status=no'); return false;">Online call</a></span>
		                  </div>
		                </div>
		              </li>
		            </ul>
		            <!-- End Contact Details -->
		          </div>
		</div>
      </div>
    </section>
    <!-- End Contacts -->

<?php include "_footer.php";