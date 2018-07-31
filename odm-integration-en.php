<?php include "_header.php"; ?>

	<!-- Promo Block -->
	<section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall "
	         data-options='{direction: "fromtop", animation_duration: 25, direction: "reverse"}'>
	    <!-- Parallax Image -->
	    <div class="divimage dzsparallaxer--target w-100 g-bg-cover g-bg-size-cover g-bg-pos-top-center g-bg-black-opacity-0_3--after"
	         style="height: 140%; background-image: url(assets/sc/odm-2.jpg);"></div>
	    <!-- End Parallax Image -->

	    <!-- Promo Block Content -->
	    <div class="container g-color-white text-center g-py-150">
	        <h1 class="h1 text-uppercase mb-2">ShareCloth On-demand <br> <small>integration manual</small></h1>
	    </div>
	    <!-- Promo Block Content -->
	</section>
	<!-- End Promo Block -->

    <section class="how-to">
        <div class="container g-pt-50 g-pb-50">
            <div id="shortcode1">
                <div class="shortcode-html">
                    <!-- Static Process -->
                    <div class="row">
                        <div class="col-sm-6 col-lg-3 g-mb-60">
                            <!-- Static Process -->
                            <div class="text-center">
                                <i class="u-dot-line-v1-2 g-brd-transparent--before g-brd-gray-light-v2--after g-mb-20">
                                    <span class="u-dot-line-v1__inner g-bg-white g-bg-primary--before g-brd-gray-light-v2"></span>
                                </i>
                                <h3 class="h5 g-font-weight-600 g-mb-10">Application</h3>
                                <p class="mb-0">Register your store by submitting the application <a href="/contacts.php?from=odm">here</a></p>
                            </div>
                            <!-- End Static Process -->
                        </div>

                        <div class="col-sm-6 col-lg-3 g-mb-60">
                            <!-- Static Process -->
                            <div class="text-center">
                                <i class="u-dot-line-v1-2 g-brd-gray-light-v2--before g-brd-gray-light-v2--after g-mb-20">
                                    <span class="u-dot-line-v1__inner g-bg-white g-bg-primary--before g-brd-gray-light-v2"></span>
                                </i>
                                <h3 class="h5 g-font-weight-600 g-mb-10">Activating</h3>
                                <p class="mb-0">After reviewing the application, we’ll send system login information to your email</p>
                            </div>
                            <!-- End Static Process -->
                        </div>

                        <div class="col-sm-6 col-lg-3 g-mb-60">
                            <!-- Static Process -->
                            <div class="text-center">
                                <i class="u-dot-line-v1-2 g-brd-gray-light-v2--before g-brd-gray-light-v2--after g-mb-20">
                                    <span class="u-dot-line-v1__inner g-bg-white g-bg-primary--before g-brd-gray-light-v2"></span>
                                </i>
                                <h3 class="h5 g-font-weight-600 g-mb-10">Content management</h3>
                                <p class="mb-0">Fill your store account with data (fabrics, garments, discount coupons, delivery options)</p>
                            </div>
                            <!-- End Static Process -->
                        </div>

                        <div class="col-sm-6 col-lg-3 g-mb-60">
                            <!-- Static Process -->
                            <div class="text-center">
                                <i class="u-dot-line-v1-2 g-brd-gray-light-v2--before g-brd-transparent--after g-mb-20">
                                    <span class="u-dot-line-v1__inner g-bg-white g-bg-primary--before g-brd-gray-light-v2"></span>
                                </i>
                                <h3 class="h5 g-font-weight-600 g-mb-10">Integration</h3>
                                <p class="mb-0">Connect ShareCloth widget to your website using <a href="#integration">our guide</a></p>
                            </div>
                            <!-- End Static Process -->
                        </div>
                    </div>
                    <!-- End Static Process -->
                </div>
            </div>


            <div class="text-center mb-md-5">
                <a class="btn u-btn-primary u-shadow-v24 btn-lg" href="https://sharecloth-odm-demo.myshopify.com/products/beautiful-dress" target="_blank">
                    View Live Demo
                </a>
            </div>


            <header class="u-heading-v2-3--bottom g-brd-primary g-mb-20" id="integration">
                <h2 class="h4 u-heading-v2__title g-color-gray-dark-v2 g-font-weight-600 text-uppercase">The widget integration</h2>
            </header>


            <div class="mb-2">
                <div class="d-inline-block g-width-20 g-height-2 g-pos-rel g-top-minus-4 g-bg-primary mr-2"></div>
                <span class="g-color-gray-dark-v3 g-font-weight-600 g-font-size-16 text-uppercase">WIDGET INSTALLATION</span>
            </div>
            <p>Copy the code from the store management page and insert it on your page before the closing <code>&lt;/body&gt;</code> tag.</p>

            <div><img src="assets/sc/i-step1.png" class="img-fluid" /> </div>


            <hr />

            <div class="mb-2">
                <div class="d-inline-block g-width-20 g-height-2 g-pos-rel g-top-minus-4 g-bg-primary mr-2"></div>
                <span class="g-color-gray-dark-v3 g-font-weight-600 g-font-size-16 text-uppercase">PRODUCT CONFIGURATION</span>
            </div>

            <div class="mb-5"><img src="assets/sc/i-step2.png" class="img-fluid" /> </div>

            <div style="font-size: 18px;" class="mb-lg-5">
            <ol>
                <li>Make sure that product status is <span class="label u-label u-label-success">Product ready for sale</span> </li>
                <li>On the product page in your e-commerce add the trigger link that will open the widget when clicked. For the link to work correctly, it requires three attributes:
                    <ul>
                        <li><pre class="mb-0 display-inline">class="sharecloth-shop-trigger"</pre></li>
                        <li><pre class="mb-0 display-inline">data-sharecloth-mode="modal"</pre></li>
                        <li><pre class="mb-0 display-inline">data-sharecloth-product-id="Product ID"</pre> - where Product ID is the product’s ID in the On-demand system</li>
                    </ul>

                </li>
            </ol>
            </div>



            <header class="u-heading-v2-3--bottom g-brd-primary g-mb-20" id="integration">
                <h2 class="h4 u-heading-v2__title g-color-gray-dark-v2 g-font-weight-600 text-uppercase">CONNECTING WIDGET FOR SHOPIFY.com</h2>
            </header>

            <div class="mb-2">
                <div class="d-inline-block g-width-20 g-height-2 g-pos-rel g-top-minus-4 g-bg-primary mr-2"></div>
                <span class="g-color-gray-dark-v3 g-font-weight-600 g-font-size-16 text-uppercase">SAVE THE JS INSTALLATION FILE</span>
            </div>

            <div class="mb-5">
                <img src="assets/sc/i-step11-sh.png" class="img-fluid" alt="" />
            </div>



            <div class="mb-2">
                <div class="d-inline-block g-width-20 g-height-2 g-pos-rel g-top-minus-4 g-bg-primary mr-2"></div>
                <span class="g-color-gray-dark-v3 g-font-weight-600 g-font-size-16 text-uppercase">INSTALLATION OF NEW ASSET</span>
            </div>

            <p></p>

            <div class="mb-5">
                <img src="assets/sc/i-step1-sh.png" class="img-fluid" alt="" />
            </div>


            <p>Upload the file that was created during the first step as a new asset into the Shopify editing template</p>


            <div class="mb-2">
                <div class="d-inline-block g-width-20 g-height-2 g-pos-rel g-top-minus-4 g-bg-primary mr-2"></div>
                <span class="g-color-gray-dark-v3 g-font-weight-600 g-font-size-16 text-uppercase">Include scripts at THE FOOTER</span>
            </div>

            <div class="mb-5">
                <img src="assets/sc/i-step2-sh.png" class="img-fluid" alt="" />
            </div>

            <p>Copy the code below to insert it into Shopify template</p>
            <pre>
                <?=htmlspecialchars("
{{ 'vendor.js' | asset_url | script_tag }}
{{ 'script.js' | asset_url | script_tag }}
");?>
            </pre>


            <div class="mb-2">
                <div class="d-inline-block g-width-20 g-height-2 g-pos-rel g-top-minus-4 g-bg-primary mr-2"></div>
                <span class="g-color-gray-dark-v3 g-font-weight-600 g-font-size-16 text-uppercase">TWEAK PRODUCT METATAGS</span>
            </div>

            <p>To edit the metatags, you can use any application available from the Shopify store, for example:
            <a href="https://apps.shopify.com/metafields-editor?utm_content=contextual&utm_medium=shopify&utm_source=admin" target="_blank">
                MetaFields Editor</a>
            </p>

            <div class="row">
                <div class="col-md-6">
                    <img src="assets/sc/i-step3-sh.png" alt="" class="img-fluid" />
                </div>
                <div class="col-md-6">
                    <img src="assets/sc/i-step4-sh.png" alt="" class="img-fluid" />
                </div>
            </div>


            <p>Enter <strong>sharecloth</strong> as Namespace, and <strong>productId</strong> as Key. You should put the product ID from odm.sharecloth.com in the value field (it can be copied from the product editing page)
            </p>


            <div class="mb-2">
                <div class="d-inline-block g-width-20 g-height-2 g-pos-rel g-top-minus-4 g-bg-primary mr-2"></div>
                <span class="g-color-gray-dark-v3 g-font-weight-600 g-font-size-16 text-uppercase">CHANGE THE PRODUCT TEMPLATE</span>
            </div>

            <div class="mb-5">
                <img src="assets/sc/i-step5-sh.png" class="img-fluid" alt="" />
            </div>

            <pre>
                 <?=htmlspecialchars("
{% assign sharecloth = product.metafields.sharecloth %}          
          {% if sharecloth.productId != blank %}
	          <div>
              <a href=\"#\" style=\"padding: 10px 22px;\" class=\"btn product-form__cart-submit sharecloth-shop-trigger\"
                 data-sharecloth-product-id=\"{{ sharecloth.productId }}\" data-sharecloth-mode=\"modal\"
                 >               
                    Customize and Buy               
              </a>              
	          </div>          
          {% else %}
          <div class=\"product-form__item product-form__item--submit{% if section.settings.enable_payment_button %} product-form__item--payment-button{% endif %}{% if product.has_only_default_variant %} product-form__item--no-variants{% endif %}\">
              <button type=\"submit\" name=\"add\" id=\"AddToCart-{{ section.id }}\" {% unless current_variant.available %}disabled=\"disabled\"{% endunless %} class=\"btn product-form__cart-submit{% if section.settings.enable_payment_button %} btn--secondary-accent{% endif %}\">
                <span id=\"AddToCartText-{{ section.id }}\">
                  {% unless current_variant.available %}
                    {{ 'products.product.sold_out' | t }}
                  {% else %}
                    {{ 'products.product.add_to_cart' | t }}
                  {% endunless %}
                </span>
              </button>
              {% if section.settings.enable_payment_button %}
                {{ form | payment_button }}
              {% endif %}
            </div>          		          
          {% endif %}
");?>

            </pre>



        </div>
    </section>


<?php include "_footer.php";