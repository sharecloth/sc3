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
                                <h3 class="h5 g-font-weight-600 g-mb-10">Заявка</h3>
                                <p class="mb-0">Зарегистрируйте свой магазин, подав заявку на <a href="/contacts.php?from=odm">эту форму</a></p>
                            </div>
                            <!-- End Static Process -->
                        </div>

                        <div class="col-sm-6 col-lg-3 g-mb-60">
                            <!-- Static Process -->
                            <div class="text-center">
                                <i class="u-dot-line-v1-2 g-brd-gray-light-v2--before g-brd-gray-light-v2--after g-mb-20">
                                    <span class="u-dot-line-v1__inner g-bg-white g-bg-primary--before g-brd-gray-light-v2"></span>
                                </i>
                                <h3 class="h5 g-font-weight-600 g-mb-10">Активация</h3>
                                <p class="mb-0">После того, как мы рассмотрим заявку, к вам на почту, придут данные для входа в систему.</p>
                            </div>
                            <!-- End Static Process -->
                        </div>

                        <div class="col-sm-6 col-lg-3 g-mb-60">
                            <!-- Static Process -->
                            <div class="text-center">
                                <i class="u-dot-line-v1-2 g-brd-gray-light-v2--before g-brd-gray-light-v2--after g-mb-20">
                                    <span class="u-dot-line-v1__inner g-bg-white g-bg-primary--before g-brd-gray-light-v2"></span>
                                </i>
                                <h3 class="h5 g-font-weight-600 g-mb-10">Наполнение данными</h3>
                                <p class="mb-0">Заполните свой магазин данными (материалы, товары, купоны на скидку, способы доставки)</p>
                            </div>
                            <!-- End Static Process -->
                        </div>

                        <div class="col-sm-6 col-lg-3 g-mb-60">
                            <!-- Static Process -->
                            <div class="text-center">
                                <i class="u-dot-line-v1-2 g-brd-gray-light-v2--before g-brd-transparent--after g-mb-20">
                                    <span class="u-dot-line-v1__inner g-bg-white g-bg-primary--before g-brd-gray-light-v2"></span>
                                </i>
                                <h3 class="h5 g-font-weight-600 g-mb-10">Интеграция</h3>
                                <p class="mb-0">Используя <a href="#integration">наш guide</a> - подключите виджет к своему сайту.</p>
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
                <h2 class="h4 u-heading-v2__title g-color-gray-dark-v2 g-font-weight-600 text-uppercase">Подключение виджета</h2>
            </header>


            <div class="mb-2">
                <div class="d-inline-block g-width-20 g-height-2 g-pos-rel g-top-minus-4 g-bg-primary mr-2"></div>
                <span class="g-color-gray-dark-v3 g-font-weight-600 g-font-size-16 text-uppercase">Внедрение виджета</span>
            </div>
            <p>Скопируйте код со страницы управления магазином и вставьте на своей странице перед закрывающим тегом body.</p>

            <div><img src="assets/sc/i-step1.png" class="img-fluid" /> </div>


            <hr />

            <div class="mb-2">
                <div class="d-inline-block g-width-20 g-height-2 g-pos-rel g-top-minus-4 g-bg-primary mr-2"></div>
                <span class="g-color-gray-dark-v3 g-font-weight-600 g-font-size-16 text-uppercase">Конфигурация товара</span>
            </div>

            <div class="mb-5"><img src="assets/sc/i-step2.png" class="img-fluid" /> </div>

            <div style="font-size: 18px;" class="mb-lg-5">
            <ol>
                <li>Убидетесь, что статус товара - <span class="label u-label u-label-success">Product ready for sale</span> </li>
                <li>В своем магазине на странице товара добавьте триггер ссылку, по нажатию на которую будет открываться виджет.
    Важно, для триггера ссылки нужно добавить три обязательных атрибута:
                    <ul>
                        <li><pre class="mb-0 display-inline">class="sharecloth-shop-trigger"</pre></li>
                        <li><pre class="mb-0 display-inline">data-sharecloth-mode="modal"</pre></li>
                        <li><pre class="mb-0 display-inline">data-sharecloth-product-id="Product ID"</pre> - где Product ID - это ID товара в системе.</li>
                    </ul>

                </li>
            </ol>
            </div>



            <header class="u-heading-v2-3--bottom g-brd-primary g-mb-20" id="integration">
                <h2 class="h4 u-heading-v2__title g-color-gray-dark-v2 g-font-weight-600 text-uppercase">Подключение виджета для Shopify</h2>
            </header>

            <div class="mb-2">
                <div class="d-inline-block g-width-20 g-height-2 g-pos-rel g-top-minus-4 g-bg-primary mr-2"></div>
                <span class="g-color-gray-dark-v3 g-font-weight-600 g-font-size-16 text-uppercase">Сохраните JS файл подключения</span>
            </div>

            <div class="mb-5">
                <img src="assets/sc/i-step11-sh.png" class="img-fluid" alt="" />
            </div>



            <div class="mb-2">
                <div class="d-inline-block g-width-20 g-height-2 g-pos-rel g-top-minus-4 g-bg-primary mr-2"></div>
                <span class="g-color-gray-dark-v3 g-font-weight-600 g-font-size-16 text-uppercase">Внедрение нового asset</span>
            </div>

            <p></p>

            <div class="mb-5">
                <img src="assets/sc/i-step1-sh.png" class="img-fluid" alt="" />
            </div>


            <p>Загрузите файл, полученном при первом шаге как новый asset в редактировании шаблона shopify.</p>


            <div class="mb-2">
                <div class="d-inline-block g-width-20 g-height-2 g-pos-rel g-top-minus-4 g-bg-primary mr-2"></div>
                <span class="g-color-gray-dark-v3 g-font-weight-600 g-font-size-16 text-uppercase">Добавьте загрузку скриптов в footer</span>
            </div>

            <div class="mb-5">
                <img src="assets/sc/i-step2-sh.png" class="img-fluid" alt="" />
            </div>

            <p>Скопируйте код ниже для вставки в шаблон shopify</p>
            <pre>
                <?=htmlspecialchars("
{{ 'vendor.js' | asset_url | script_tag }}
{{ 'script.js' | asset_url | script_tag }}
");?>
            </pre>


            <div class="mb-2">
                <div class="d-inline-block g-width-20 g-height-2 g-pos-rel g-top-minus-4 g-bg-primary mr-2"></div>
                <span class="g-color-gray-dark-v3 g-font-weight-600 g-font-size-16 text-uppercase">Настройте мета теги у товара</span>
            </div>

            <p>Для редактирования метатегов можно использовать любое приложение, доступное в магазине shopify, например:
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


            <p>В качествет Namespace нужно ввести <strong>sharecloth</strong>, а в качестве Key <strong>productId</strong>.
            В поле значение следует ввести ID товара из odm.sharecloth.com (его можно будет скопировать со страницы редактирования товара)
            </p>


            <div class="mb-2">
                <div class="d-inline-block g-width-20 g-height-2 g-pos-rel g-top-minus-4 g-bg-primary mr-2"></div>
                <span class="g-color-gray-dark-v3 g-font-weight-600 g-font-size-16 text-uppercase">Измените шаблон товара</span>
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


            <hr />
            <header class="u-heading-v2-3--bottom g-brd-primary g-mb-20" id="integration">
                <h2 class="h4 u-heading-v2__title g-color-gray-dark-v2 g-font-weight-600 text-uppercase">Подключение виджета для squarespace.com</h2>
            </header>

            <div class="mb-2">
                <div class="d-inline-block g-width-20 g-height-2 g-pos-rel g-top-minus-4 g-bg-primary mr-2"></div>
                <span class="g-color-gray-dark-v3 g-font-weight-600 g-font-size-16 text-uppercase">Внедрение виджета</span>
            </div>
            <p>Скопируйте код со страницы управления магазином и вставьте его в разделе <i>Advanced - Code injection - Footer (/config/settings/advanced/injection)</i>.</p>
            <p>Кроме этого, подключите  jQuery, если он еще не используется в вашем макете.</p>

            <div><img src="assets/sc/i-step1.png" class="img-fluid" /> </div>
            <div><img src="assets/sc/i-step-sq-1.png" class="img-fluid" style="max-width: 772px;" /> </div>

            <pre>
            <?=htmlspecialchars('
<script src="//code.jquery.com/jquery-2.2.1.min.js"></script>
<script>
   window.jQuery || document.write(\'<script src="scripts/jquery-2.2.1.min.js"><\/script>\')
</script>

<script type="text/javascript" src="https://odm-api.sharecloth.com/embed/static/js?v=1.0&lang=en-us&shop_token=<token here>"></script>            
            ');?>
                </pre>


            <div class="mb-2">
                <div class="d-inline-block g-width-20 g-height-2 g-pos-rel g-top-minus-4 g-bg-primary mr-2"></div>
                <span class="g-color-gray-dark-v3 g-font-weight-600 g-font-size-16 text-uppercase">Подключение на странице товара</span>
            </div>

            <p>Существует два способа подключения. </p>
            <p><strong>1.</strong> Через вставку блока кода в разделе редактирования товара.</p>


            <div class="mb-5"><img src="assets/sc/i-step-sq-2.png" class="img-fluid" /> </div>


            <p><strong>2.</strong> Через режим разреботчика, путем правки макета одного товара: <strong></strong></p>

            <pre>
                <?=htmlspecialchars('
<div class="sqs-add-to-cart-button-wrapper" style="visibility: visible;" id="yui_3_17_2_1_1529404026049_546">
          <div class="sharecloth-shop-trigger"
           data-sharecloth-product-id="1" data-sharecloth-mode="modal">
            <div class="sqs-add-to-cart-button-inner">Customize and buy</div>
          </div>
        </div>                
                ');?>
            </pre>

        </div>
    </section>


<?php include "_footer.php";