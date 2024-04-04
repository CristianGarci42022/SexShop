<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__2cecc9d5346e808811a313b895f5e009 */
class __TwigTemplate_f2c707ec6b18958d1c15dc7a8c9fff9c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashopWebsite/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashopWebsite/img/app_icon.png\" />

<title>Preferencias • ShopSex</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPreferences';
    var iso_user = 'es';
    var lang_is_rtl = '0';
    var full_language_code = 'es';
    var full_cldr_language_code = 'es-ES';
    var country_iso_code = 'CO';
    var _PS_VERSION_ = '8.0.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Se ha recibido un nuevo pedido en tu tienda.';
    var order_number_msg = 'Número de pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'Desde: ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'Un nuevo cliente se ha registrado en tu tienda.';
    var customer_name_msg = 'Nombre del cliente: ';
    var new_msg = 'Un nuevo mensaje ha sido publicado en tu tienda.';
    var see_msg = 'Leer este mensaje';
    var token = '04787a94985a8e9991f0b02d88a992bf';
    var token_admin_orders = tokenAdminOrders = '804ad8eac484869f82bec517fef2eefe';
    var token_admin_customers = '5902380e6cbb9bee3c34fe1e1992a923';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '75beeda8855f32df72c359ede969d24f';
    var currentIndex = 'index.php?controller=AdminPreferences';
    var employee_token = 'ab74b6250391b3b4a2a4c7070468661c';
    var choose_language_translate = 'Selecciona el idioma:';
    var default_language = '1';
    var admin_modules_link = '/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/improve/modules/manage?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y';
    var admin_notification_get_link = '/prestashopWebsite/admin8555c1ku6fo15kv";
        // line 42
        echo "rwmz/index.php/common/notifications?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y';
    var admin_notification_push_link = adminNotificationPushLink = '/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/common/notifications/ack?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y';
    var tab_modules_list = '';
    var update_success_msg = 'Actualización correcta';
    var search_product_msg = 'Buscar un producto';
  </script>



<link
      rel=\"preload\"
      href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/themes/new-theme/public/703cf8f274fbb265d49c6262825780e1.preload.woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashopWebsite/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashopWebsite/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashopWebsite/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashopWebsite\\/admin8555c1ku6fo15kvrwmz\\/\";
var baseDir = \"\\/prestashopWebsite\\/\";
var changeFormLanguageUrl = \"\\/prestashopWebsite\\/admin8555c1ku6fo15kvrwmz\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\";
var currency = {\"iso_code\":\"COP\",\"sign\":\"\$\",\"name\":\"Peso colombiano\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"COP\",\"currencySymbol\":\"\$\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDi";
        // line 68
        echo "gits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashopWebsite/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashopWebsite/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashopWebsite/js/admin.js?v=8.0.2\"></script>
<script type=\"text/javascript\" src=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashopWebsite/js/tools.js?v=8.0.2\"></script>
<script type=\"text/javascript\" src=\"/prestashopWebsite/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/prestashopWebsite/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/themes/default/js/vendor/nv.d3.min.js\"></script>

  

";
        // line 87
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-es adminpreferences\"
  data-base-url=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php\"  data-token=\"C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php?controller=AdminDashboard&amp;token=d2fa588ce3f5a81e81ea64fc56fe7412\"></a>
      <span id=\"shop_version\">8.0.2</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acceso rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=7312339533349db4a14b72d3152e93f6\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/improve/modules/manage?token=4285eaf378ca1cdb0367995643a6942f\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/sell/catalog/categories/new?token=4285eaf378ca1cdb0367995643a6942f\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/sell/cat";
        // line 121
        echo "alog/products/new?token=4285eaf378ca1cdb0367995643a6942f\"
                 data-item=\"Nuevo\"
      >Nuevo</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=2327442bad452f3fabcb865773684526\"
                 data-item=\"Nuevo cupón de descuento\"
      >Nuevo cupón de descuento</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/sell/orders?token=4285eaf378ca1cdb0367995643a6942f\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"82\"
        data-icon=\"icon-AdminParentPreferences\"
        data-method=\"add\"
        data-url=\"index.php/configure/shop/preferences/preferences?-a8Y\"
        data-post-link=\"http://localhost/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php?controller=AdminQuickAccesses&token=5619309f89ec60c8566f52541f459bd5\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"Configuraci&oacute;n - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Añadir página actual al Acceso Rápido
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php?controller=AdminQuickAccesses&token=5619309f89ec60c8566f52541f459bd5\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=";
        // line 160
        echo "\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php?controller=AdminSearch&amp;token=060c621cc3080fdd6b9bb8ddc1ea1562\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\" aria-label=\"Barra de búsqueda\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        toda la tienda
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"toda la tienda\" href=\"#\" data-value=\"0\" data-placeholder=\"¿Qué estás buscando?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> toda la tienda</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nombre del producto, referencia, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nombre\" href=\"#\" data-value=\"2\" data-placeholder=\"Nombre\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nombre</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por dirección IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por dirección IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID del pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Facturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Numero de Factura\" data-icon=\"icon-book\"><i class";
        // line 176
        echo "=\"material-icons\">book</i> Facturas</a>
        <a class=\"dropdown-item\" data-item=\"Carritos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrito\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carritos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nombre del módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">BÚSQUEDA</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancelar</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Acceso rápido</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=7312339533349db4a14b72d3152e93f6\"
             data-item=\"Evaluación del catálogo\"
    >Evaluación del catálogo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/improve/modules/manage?token=4285eaf378ca1cdb0367995643a6942f\"
             data-item=\"Módulos instalados\"
    >Módulos instalados</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/sell/catalog/categories/new?token=4285eaf378ca1cdb0367995643a6942f\"
             data-item=\"Nueva categoría\"
    >Nueva categoría</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/sell/catalog/products/new?token";
        // line 210
        echo "=4285eaf378ca1cdb0367995643a6942f\"
             data-item=\"Nuevo\"
    >Nuevo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=2327442bad452f3fabcb865773684526\"
             data-item=\"Nuevo cupón de descuento\"
    >Nuevo cupón de descuento</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/sell/orders?token=4285eaf378ca1cdb0367995643a6942f\"
             data-item=\"Pedidos\"
    >Pedidos</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"79\"
      data-icon=\"icon-AdminParentPreferences\"
      data-method=\"add\"
      data-url=\"index.php/configure/shop/preferences/preferences?-a8Y\"
      data-post-link=\"http://localhost/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php?controller=AdminQuickAccesses&token=5619309f89ec60c8566f52541f459bd5\"
      data-prompt-text=\"Por favor, renombre este acceso rápido:\"
      data-link=\"Configuraci&oacute;n - Lista\"
    >
      <i class=\"material-icons\">add_circle</i>
      Añadir página actual al Acceso Rápido
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php?controller=AdminQuickAccesses&token=5619309f89ec60c8566f52541f459bd5\">
    <i class=\"material-icons\">settings</i>
    Administrar accesos rápidos
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"https://localhost/prestashopWebsite/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Ver mi tie";
        // line 253
        echo "nda</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pedidos<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensajes<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay ped";
        // line 308
        echo "idos nuevos por ahora :(<br>
              ¿Has revisado tus &lt;strong&gt;&lt;a href=\"http://localhost/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php?controller=AdminCarts&amp;action=filterOnlyAbandonedCarts&amp;token=75c70f1d92ff6e763714a1c5fcfc2cf3\"&gt;carritos abandonados&lt;/a&gt;&lt;/strong&gt;?&lt;br&gt;?. ¡Tu próximo pedido podría estar ocultándose allí!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              ¿Se mantiene activo en las redes sociales en estos momentos?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay mensajes nuevo por ahora.<br>
              Parece que todos tus clientes están contentos :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_c";
        // line 351
        echo "ustomer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/prestashopWebsite/img/pr/default.jpg\" alt=\"Cristian\" /></span>
        <span class=\"employee_profile\">Bienvenido de nuevo, Cristian</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/configure/advanced/employees/1/edit?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\">
      <i class=\"material-icons\">edit</i>
      <span>Tu perfil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php?controller=AdminLogin&amp;logout=1&amp;token=4805ffeeb4bc65722a6e43fb6e4934a3\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Cerrar sesión</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/configure/advanced/employees/toggle-navigation?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http";
        // line 396
        echo "://localhost/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php?controller=AdminDashboard&amp;token=d2fa588ce3f5a81e81ea64fc56fe7412\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.0.2</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php?controller=AdminDashboard&amp;token=d2fa588ce3f5a81e81ea64fc56fe7412\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Inicio</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vender</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/sell/orders/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Pedidos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
         ";
        // line 437
        echo "                                                   
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/sell/orders/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/sell/orders/invoices/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Facturas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/sell/orders/credit-slips/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Facturas por abono
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/sell/orders/delivery-slips/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Albaranes de entrega
             ";
        // line 464
        echo "                   </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php?controller=AdminCarts&amp;token=75c70f1d92ff6e763714a1c5fcfc2cf3\" class=\"link\"> Carritos de compra
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/sell/catalog/products?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catálogo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/p";
        // line 496
        echo "restashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/sell/catalog/products?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/sell/catalog/categories?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Categorías
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/sell/catalog/monitoring/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Monitoreo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php?controller=AdminAttributesGroups&amp;token=70669d7b22f0287c99d653cf31a3ed6b\" class=\"link\"> Atributos y Características
                                </a>
                              </li>

                                                                                  
   ";
        // line 525
        echo "                           
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/sell/catalog/brands/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Marcas y Proveedores
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/sell/attachments/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Archivos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php?controller=AdminCartRules&amp;token=2327442bad452f3fabcb865773684526\" class=\"link\"> Descuentos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/sell/stocks/?_token=C8kB_7jgAQLD0aeFU22S";
        // line 552
        echo "8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/sell/customers/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clientes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/sell/customers/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-";
        // line 584
        echo "AdminAddresses\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/sell/addresses/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Direcciones
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php?controller=AdminCustomerThreads&amp;token=75beeda8855f32df72c359ede969d24f\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Servicio al Cliente
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php?controller=AdminCustomerThreads&amp;token=75beeda8855f32df72c359ede969d24f\" class=\"link\"> Servicio al Cliente
                                </a>
                   ";
        // line 612
        echo "           </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/sell/customer-service/order-messages/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Mensajes de Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php?controller=AdminReturn&amp;token=e6868898925dd7f3b72e451916e36bc6\" class=\"link\"> Devoluciones de mercancía
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php?controller=AdminStats&amp;token=7312339533349db4a14b72d3152e93f6\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Estadísticas
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                         ";
        // line 643
        echo "                           keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personalizar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/improve/modules/manage?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Módulos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/improve/modules/manage?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Administrador de módulos
                                </a>
                              </li>

      ";
        // line 680
        echo "                                                                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/improve/design/themes/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Diseño
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"125\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/improve/design/themes/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Tema y logotipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                ";
        // line 709
        echo "<a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/improve/design/mail_theme/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Tema Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/improve/design/cms-pages/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Páginas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/improve/design/modules/positions/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Posiciones
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php?controller=AdminImages&amp;token=d75966e8281e7d164dcfeba59f8c48e3\" class=\"link\"> Ajustes de imágenes
                                </a>
                              </li>

                                                                                  
   ";
        // line 738
        echo "                           
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/modules/link-widget/list?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Lista de enlaces
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php?controller=AdminCarriers&amp;token=bbcc1a902947ada0db2cbaedb59f4c5f\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Transporte
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php?controller=AdminCarriers&amp;token=bbcc1";
        // line 766
        echo "a902947ada0db2cbaedb59f4c5f\" class=\"link\"> Transportistas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/improve/shipping/preferences/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/improve/payment/payment_methods?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pago
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" da";
        // line 798
        echo "ta-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/improve/payment/payment_methods?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Métodos de pago
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/improve/payment/preferences?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/improve/international/localization/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Internacional
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel";
        // line 827
        echo "-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/improve/international/localization/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Localización
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/improve/international/zones/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Ubicaciones Geográficas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/improve/international/taxes/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Impuestos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=";
        // line 856
        echo "\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/improve/international/translations/settings?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Traducciones
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurar</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/configure/shop/preferences/preferences?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parámetros de la tienda
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"72\" id=\"subtab-AdminParentPreference";
        // line 890
        echo "s\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/configure/shop/preferences/preferences?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Configuración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/configure/shop/order-preferences/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Configuración de pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/configure/shop/product-preferences/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Configuración de Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/configure/shop/customer-preferences/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Configuración de clientes
                         ";
        // line 916
        echo "       </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/configure/shop/contacts/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Contacto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/configure/shop/seo-urls/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Tráfico &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php?controller=AdminSearchConf&amp;token=299b1bfc51336e0026ab3c38c3b00977\" class=\"link\"> Buscar
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
              ";
        // line 949
        echo "    <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/configure/advanced/system-information/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parámetros Avanzados
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/configure/advanced/system-information/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Información
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/configure/advanced/performance/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Rendimiento
                                </a>
                              </li>

                      ";
        // line 976
        echo "                                                            
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/configure/advanced/administration/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Administración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/configure/advanced/emails/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/configure/advanced/import/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Importar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvr";
        // line 1004
        echo "wmz/index.php/configure/advanced/employees/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Equipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/configure/advanced/sql-requests/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Base de datos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/configure/advanced/logs/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Registros/Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/configure/advanced/webservice-keys/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                     ";
        // line 1032
        echo "                                                         
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/configure/advanced/feature-flags/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Características nuevas y experimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/configure/advanced/security/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Configuración</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Preferencias          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ayuda\"
                 ";
        // line 1085
        echo "  data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fes%252Fdoc%252FAdminPreferences%253Fversion%253D8.0.2%2526country%253Des/Ayuda?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\"
                   id=\"product_form_open_help\"
                >
                  Ayuda
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <li class=\"nav-item\">
                    <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/configure/shop/preferences/preferences?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" id=\"subtab-AdminPreferences\" class=\"nav-link tab active current\" data-submenu=\"73\">
        ";
        // line 1104
        echo "              Configuración
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/configure/shop/maintenance/?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\" id=\"subtab-AdminMaintenance\" class=\"nav-link tab \" data-submenu=\"74\">
                      Mantenimiento
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Ayuda\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fes%252Fd";
        // line 1133
        echo "oc%252FAdminPreferences%253Fversion%253D8.0.2%2526country%253Des/Ayuda?_token=C8kB_7jgAQLD0aeFU22S8uvAOFQpDaR4pvVOceV-a8Y\"
            >
              Ayuda
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1154
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>¡Oh no!</h1>
  <p class=\"mt-3\">
    La versión para móviles de esta página no está disponible todavía.
  </p>
  <p class=\"mt-2\">
    Por favor, utiliza un ordenador de escritorio hasta que esta página sea adaptada para dispositivos móviles.
  </p>
  <p class=\"mt-2\">
    Gracias.
  </p>
  <a href=\"http://localhost/prestashopWebsite/admin8555c1ku6fo15kvrwmz/index.php?controller=AdminDashboard&amp;token=d2fa588ce3f5a81e81ea64fc56fe7412\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Atrás
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1188
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 87
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1154
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1188
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__2cecc9d5346e808811a313b895f5e009";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1355 => 1188,  1334 => 1154,  1323 => 87,  1314 => 1188,  1274 => 1154,  1251 => 1133,  1220 => 1104,  1199 => 1085,  1144 => 1032,  1114 => 1004,  1084 => 976,  1055 => 949,  1020 => 916,  992 => 890,  956 => 856,  925 => 827,  894 => 798,  860 => 766,  830 => 738,  799 => 709,  768 => 680,  729 => 643,  696 => 612,  666 => 584,  632 => 552,  603 => 525,  572 => 496,  538 => 464,  509 => 437,  466 => 396,  419 => 351,  374 => 308,  317 => 253,  272 => 210,  236 => 176,  218 => 160,  177 => 121,  138 => 87,  117 => 68,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__2cecc9d5346e808811a313b895f5e009", "");
    }
}
