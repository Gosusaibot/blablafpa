<?php

/* OCCoreBundle::layout.html.twig */
class __TwigTemplate_0b7516b5d98f0ffa7145388c53688a578fe17e0e9adb30ad9051ec2eddd35095 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e61163aeb269cc9b19ad849b60012068f07d661b43b5103ae8753903f0485fa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e61163aeb269cc9b19ad849b60012068f07d661b43b5103ae8753903f0485fa3->enter($__internal_e61163aeb269cc9b19ad849b60012068f07d661b43b5103ae8753903f0485fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle::layout.html.twig"));

        $__internal_a6a0308edded9f435c80e3243371efc1df17300098c98b1653eebbee5050ac2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6a0308edded9f435c80e3243371efc1df17300098c98b1653eebbee5050ac2f->enter($__internal_a6a0308edded9f435c80e3243371efc1df17300098c98b1653eebbee5050ac2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "
    ";
        // line 24
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2df548e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2df548e_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/2df548e_part_1_slider_1.js");
            // line 25
            echo "
    <script type=\"text/javascript\" src=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 26, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "2df548e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2df548e") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/2df548e.js");
            // line 25
            echo "
    <script type=\"text/javascript\" src=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 26, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 28
        echo "  </head>

  <body>


  <nav class=\"navbar navbar-light navbar-toggleable-md static-top bg-faded\" >
      <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\"><img src=\"../image/logonav.png\"> BlaBlafpa</a>
      <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        <ul class=\"navbar-nav mr-auto\">

          <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_core_home");
        echo "\">Accueil</a></li>
          ";
        // line 42
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AUTEUR")) {
            // line 43
            echo "          <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_core_add");
            echo "\">Ajouter une annonce</a></li>
          ";
        }
        // line 45
        echo "          ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 46
            echo "          <li class=\"nav-item\">Bonjour ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 46, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
            echo "</li>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
          ";
        } else {
            // line 49
            echo "          <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a></li>
          ";
        }
        // line 51
        echo "          <br>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_core_register");
        echo "\">Inscription</a>
        </ul>
        <form class=\"form-inline mt-2 mt-md-0\">
          <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\">
          <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\"></button>
        </form>
      </div>
    </nav>





 <!-- Carousel
    ================================================== 
    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">

      <div class=\"carousel-inner\" role=\"listbox\">
        <div class=\"item active\">
          <img class=\"first-slide\" src=\"../image/covoiturage3.jpg\" alt=\"First slide\">
          <div class=\"container\">
            <div class=\"carousel-caption\">
              <h1>En voiture !!!</h1>
              <div class=\"row\">
              <div class=\"col-lg-6\">
                <div class=\"input-group\">
                  <input type=\"text\" class=\"form-control\" placeholder=\"Search for...\" id=\"origin-input\">
                </div>
              </div>
              <div class=\"col-lg-6\">
                <div class=\"input-group\">
                  <input type=\"text\" class=\"form-control\" placeholder=\"Search for...\" id=\"destination-input\">
                  <span class=\"input-group-btn\">
                    <button class=\"btn btn-success\" type=\"button\">Go!</button>
                  </span>
                </div>
              </div>
            </div>
                        </div>
          </div>
        </div>
        
      
      </div>

    </div>/.carousel -->







    <input id=\"origin-input\" class=\"controls\" type=\"text\"
        placeholder=\"Lieu de départ\">

    <input id=\"destination-input\" class=\"controls\" type=\"text\"
        placeholder=\"Destination\">

    <div id=\"mode-selector\" class=\"controls\">

<h6>En voiture !<h6>
<div class=\"controls-none\">

      <input type=\"radio\" name=\"type\" id=\"changemode-walking\">
      <label for=\"changemode-walking\">Walking</label>

      <input type=\"radio\" name=\"type\" id=\"changemode-transit\">
      <label for=\"changemode-transit\">Transit</label>

      <input type=\"radio\" name=\"type\" id=\"changemode-driving\" checked=\"checked\">
      <label for=\"changemode-driving\">Driving</label>
      </div>
    </div>


    <div id=\"map\" class=\"jumbotron\"></div>

   <script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src=\"https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places\">

      function initMap() {
          var styledMapType = new google.maps.StyledMapType(
            [
            {
            featureType: 'poi.business',
            stylers: [{visibility: 'off'}]
          },
          {
            featureType: 'transit',
            elementType: 'labels.icon',
            stylers: [{visibility: 'off'}]
          },
                    {
            elementType: 'labels.icon',
            stylers: [{visibility: 'off'}]
          }
            ],
            {name: 'Styled Map'});
        var map = new google.maps.Map(document.getElementById('map'), {
          mapTypeControl: false,
          center: {lat: 48.5167, lng: -2.7833 },
            gestureHandling: 'cooperative',
            zoom: 9
        });
        //Associate the styled map with the MapTypeId and set it to display.
        map.mapTypes.set('styled_map', styledMapType);
        map.setMapTypeId('styled_map');
        new AutocompleteDirectionsHandler(map);
      }

       /**
        * @constructor
       */
      function AutocompleteDirectionsHandler(map) {
        this.map = map;
        this.originPlaceId = null;
        this.destinationPlaceId = null;
        this.travelMode = 'WALKING';
        var originInput = document.getElementById('origin-input');
        var destinationInput = document.getElementById('destination-input');
        var modeSelector = document.getElementById('mode-selector');
        this.directionsService = new google.maps.DirectionsService;
        this.directionsDisplay = new google.maps.DirectionsRenderer;
        this.directionsDisplay.setMap(map);

        var originAutocomplete = new google.maps.places.Autocomplete(
            originInput, {placeIdOnly: true});
        var destinationAutocomplete = new google.maps.places.Autocomplete(
            destinationInput, {placeIdOnly: true});

        this.setupClickListener('changemode-walking', 'WALKING');
        this.setupClickListener('changemode-transit', 'TRANSIT');
        this.setupClickListener('changemode-driving', 'DRIVING');

        this.setupPlaceChangedListener(originAutocomplete, 'ORIG');
        this.setupPlaceChangedListener(destinationAutocomplete, 'DEST');

        this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(originInput);
        this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(destinationInput);
        this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(modeSelector);
      }

      // Sets a listener on a radio button to change the filter type on Places
      // Autocomplete.
      AutocompleteDirectionsHandler.prototype.setupClickListener = function(id, mode) {
        var radioButton = document.getElementById(id);
        var me = this;
        radioButton.addEventListener('click', function() {
          me.travelMode = mode;
          me.route();
        });
      };

      AutocompleteDirectionsHandler.prototype.setupPlaceChangedListener = function(autocomplete, mode) {
        var me = this;
        autocomplete.bindTo('bounds', this.map);
        autocomplete.addListener('place_changed', function() {
          var place = autocomplete.getPlace();
          if (!place.place_id) {
            window.alert(\"Please select an option from the dropdown list.\");
            return;
          }
          if (mode === 'ORIG') {
            me.originPlaceId = place.place_id;
          } else {
            me.destinationPlaceId = place.place_id;
          }
          me.route();
        });

      };

      AutocompleteDirectionsHandler.prototype.route = function() {
        if (!this.originPlaceId || !this.destinationPlaceId) {
          return;
        }
        var me = this;

        this.directionsService.route({
          origin: {'placeId': this.originPlaceId},
          destination: {'placeId': this.destinationPlaceId},
          travelMode: this.travelMode
        }, function(response, status) {
          if (status === 'OK') {
            me.directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      };

    </script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAuLtOpElBBWt36WirTuruMgt1s0clbFcQ&libraries=places&callback=initMap\"
        async defer></script>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class=\"container\">


          ";
        // line 257
        $this->displayBlock('body', $context, $blocks);
        // line 259
        echo "  

      </div>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class=\"jumbotron\">

    


  <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class=\"container marketing album text-muted\">

        <div class=\"row featurette\">
          <div class=\"col-md-7\">
            <h2 class=\"featurette-heading\">First featurette heading. <span class=\"text-muted\">It'll blow your mind.</span></h2>
            <p class=\"lead\">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class=\"col-md-5\">
            <img class=\"featurette-image img-fluid mx-auto\" src=\"http://www.cergypontoise.fr/upload/docs/image/jpeg/2012-08/00732_p0_9998863.jpg\" alt=\"Generic placeholder image\">
          </div>
        </div>

        <hr class=\"featurette-divider\">

        <div class=\"row featurette\">
          <div class=\"col-md-7 push-md-5\">
            <h2 class=\"featurette-heading\">Oh yeah, it's that good. <span class=\"text-muted\">See for yourself.</span></h2>
            <p class=\"lead\">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class=\"col-md-5 pull-md-7\">
            <img class=\"featurette-image img-fluid mx-auto\" src=\"https://images.caradisiac.com/logos/5/9/5/3/185953/S7-Le-covoiturage-favoriserait-les-bons-comportements-sur-la-route-102191.jpg\" alt=\"Generic placeholder image\">
          </div>
        </div>

        

      </div>
    </div><!-- /.container -->

<div class=\"container\">
      <footer>
        <p class=\"float-right\"><a href=\"#\">Back to top</a></p>
        <p>&copy; 2017 Company, Inc. &middot; <a href=\"#\">Privacy</a> &middot; <a href=\"#\">Terms</a></p>
      </footer>

      </div>

  ";
        // line 309
        $this->displayBlock('javascripts', $context, $blocks);
        // line 314
        echo "
  </body>
</html>
";
        
        $__internal_e61163aeb269cc9b19ad849b60012068f07d661b43b5103ae8753903f0485fa3->leave($__internal_e61163aeb269cc9b19ad849b60012068f07d661b43b5103ae8753903f0485fa3_prof);

        
        $__internal_a6a0308edded9f435c80e3243371efc1df17300098c98b1653eebbee5050ac2f->leave($__internal_a6a0308edded9f435c80e3243371efc1df17300098c98b1653eebbee5050ac2f_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e9ae59677c3f2c2e9d6476ed103cb07105ca8fcf9a43b21a94e4677194e8678 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e9ae59677c3f2c2e9d6476ed103cb07105ca8fcf9a43b21a94e4677194e8678->enter($__internal_1e9ae59677c3f2c2e9d6476ed103cb07105ca8fcf9a43b21a94e4677194e8678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_13d857b41c60d8c4a973d8dc7621a1b8b403bd9f35de72e768634d2d752af1f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13d857b41c60d8c4a973d8dc7621a1b8b403bd9f35de72e768634d2d752af1f7->enter($__internal_13d857b41c60d8c4a973d8dc7621a1b8b403bd9f35de72e768634d2d752af1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_13d857b41c60d8c4a973d8dc7621a1b8b403bd9f35de72e768634d2d752af1f7->leave($__internal_13d857b41c60d8c4a973d8dc7621a1b8b403bd9f35de72e768634d2d752af1f7_prof);

        
        $__internal_1e9ae59677c3f2c2e9d6476ed103cb07105ca8fcf9a43b21a94e4677194e8678->leave($__internal_1e9ae59677c3f2c2e9d6476ed103cb07105ca8fcf9a43b21a94e4677194e8678_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b4c906eb52dd78152b745f5ffa5702100e392da1e6d343af31e8a3ae601cef73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4c906eb52dd78152b745f5ffa5702100e392da1e6d343af31e8a3ae601cef73->enter($__internal_b4c906eb52dd78152b745f5ffa5702100e392da1e6d343af31e8a3ae601cef73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8ba3abd98c315afec1dbb0998718061166787532c72b6ef45502dd20811f6c89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ba3abd98c315afec1dbb0998718061166787532c72b6ef45502dd20811f6c89->enter($__internal_8ba3abd98c315afec1dbb0998718061166787532c72b6ef45502dd20811f6c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "      ";
        // line 13
        echo "      <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
      <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\">
      <link rel=\"stylesheet\" href=\"http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css\">
      <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
      ";
        // line 17
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "dee2c48_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_dee2c48_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/dee2c48_main_1.css");
            // line 20
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 20, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" />
      ";
            // asset "dee2c48_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_dee2c48_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/dee2c48_platform_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 20, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" />
      ";
        } else {
            // asset "dee2c48"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_dee2c48") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/dee2c48.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 20, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" />
      ";
        }
        unset($context["asset_url"]);
        // line 22
        echo "    ";
        
        $__internal_8ba3abd98c315afec1dbb0998718061166787532c72b6ef45502dd20811f6c89->leave($__internal_8ba3abd98c315afec1dbb0998718061166787532c72b6ef45502dd20811f6c89_prof);

        
        $__internal_b4c906eb52dd78152b745f5ffa5702100e392da1e6d343af31e8a3ae601cef73->leave($__internal_b4c906eb52dd78152b745f5ffa5702100e392da1e6d343af31e8a3ae601cef73_prof);

    }

    // line 257
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ffa6fa6b3226e0c86919d3d005f0a4116ad1b1f74a0d5ef2fc67345dbdb5266 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ffa6fa6b3226e0c86919d3d005f0a4116ad1b1f74a0d5ef2fc67345dbdb5266->enter($__internal_7ffa6fa6b3226e0c86919d3d005f0a4116ad1b1f74a0d5ef2fc67345dbdb5266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e1d49813530c403423c9751990256b79db4aad4b2a476aacaf1ad546bd04334d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1d49813530c403423c9751990256b79db4aad4b2a476aacaf1ad546bd04334d->enter($__internal_e1d49813530c403423c9751990256b79db4aad4b2a476aacaf1ad546bd04334d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 258
        echo "          ";
        
        $__internal_e1d49813530c403423c9751990256b79db4aad4b2a476aacaf1ad546bd04334d->leave($__internal_e1d49813530c403423c9751990256b79db4aad4b2a476aacaf1ad546bd04334d_prof);

        
        $__internal_7ffa6fa6b3226e0c86919d3d005f0a4116ad1b1f74a0d5ef2fc67345dbdb5266->leave($__internal_7ffa6fa6b3226e0c86919d3d005f0a4116ad1b1f74a0d5ef2fc67345dbdb5266_prof);

    }

    // line 309
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_57efeab4e5cde0d1804c64b3e1501e2d2c0e9e0197749ac9fa2193d1127e74ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57efeab4e5cde0d1804c64b3e1501e2d2c0e9e0197749ac9fa2193d1127e74ba->enter($__internal_57efeab4e5cde0d1804c64b3e1501e2d2c0e9e0197749ac9fa2193d1127e74ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_00060d78b2a3a4b3fbfba96ceaa8b8b969d296ce08b07cdf0d214cf72fae622a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00060d78b2a3a4b3fbfba96ceaa8b8b969d296ce08b07cdf0d214cf72fae622a->enter($__internal_00060d78b2a3a4b3fbfba96ceaa8b8b969d296ce08b07cdf0d214cf72fae622a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 310
        echo "    ";
        // line 311
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"https://v4-alpha.getbootstrap.com/dist/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_00060d78b2a3a4b3fbfba96ceaa8b8b969d296ce08b07cdf0d214cf72fae622a->leave($__internal_00060d78b2a3a4b3fbfba96ceaa8b8b969d296ce08b07cdf0d214cf72fae622a_prof);

        
        $__internal_57efeab4e5cde0d1804c64b3e1501e2d2c0e9e0197749ac9fa2193d1127e74ba->leave($__internal_57efeab4e5cde0d1804c64b3e1501e2d2c0e9e0197749ac9fa2193d1127e74ba_prof);

    }

    public function getTemplateName()
    {
        return "OCCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  496 => 311,  494 => 310,  485 => 309,  475 => 258,  466 => 257,  456 => 22,  436 => 20,  432 => 17,  426 => 13,  424 => 12,  415 => 11,  397 => 9,  384 => 314,  382 => 309,  330 => 259,  328 => 257,  120 => 52,  117 => 51,  111 => 49,  106 => 47,  101 => 46,  98 => 45,  92 => 43,  90 => 42,  86 => 41,  71 => 28,  65 => 26,  62 => 25,  55 => 26,  52 => 25,  48 => 24,  45 => 23,  43 => 11,  38 => 9,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/CoreBundle/Resources/views/layout.html.twig #}

<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>{% block title %}OC Plateforme{% endblock %}</title>

    {% block stylesheets %}
      {# On charge le CSS de bootstrap depuis le site directement #}
      <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">
      <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\">
      <link rel=\"stylesheet\" href=\"http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css\">
      <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
      {% stylesheets filter=\"cssrewrite, ?scssphp\"
        'bundles/ocplatform/css/main.css'
        'bundles/ocplatform/css/platform.css' %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
      {% endstylesheets %}
    {% endblock %}

    {% javascripts 'bundles/ocplatform/js/*' %}

    <script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
    {% endjavascripts %}
  </head>

  <body>


  <nav class=\"navbar navbar-light navbar-toggleable-md static-top bg-faded\" >
      <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\"><img src=\"../image/logonav.png\"> BlaBlafpa</a>
      <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        <ul class=\"navbar-nav mr-auto\">

          <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('oc_core_home') }}\">Accueil</a></li>
          {% if is_granted('ROLE_AUTEUR') %}
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('oc_core_add') }}\">Ajouter une annonce</a></li>
          {% endif %}
          {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
          <li class=\"nav-item\">Bonjour {{ app.user.username }}</li>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a></li>
          {% else %}
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('fos_user_security_login') }}\">Connexion</a></li>
          {% endif %}
          <br>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('oc_core_register') }}\">Inscription</a>
        </ul>
        <form class=\"form-inline mt-2 mt-md-0\">
          <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\">
          <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\"></button>
        </form>
      </div>
    </nav>





 <!-- Carousel
    ================================================== 
    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">

      <div class=\"carousel-inner\" role=\"listbox\">
        <div class=\"item active\">
          <img class=\"first-slide\" src=\"../image/covoiturage3.jpg\" alt=\"First slide\">
          <div class=\"container\">
            <div class=\"carousel-caption\">
              <h1>En voiture !!!</h1>
              <div class=\"row\">
              <div class=\"col-lg-6\">
                <div class=\"input-group\">
                  <input type=\"text\" class=\"form-control\" placeholder=\"Search for...\" id=\"origin-input\">
                </div>
              </div>
              <div class=\"col-lg-6\">
                <div class=\"input-group\">
                  <input type=\"text\" class=\"form-control\" placeholder=\"Search for...\" id=\"destination-input\">
                  <span class=\"input-group-btn\">
                    <button class=\"btn btn-success\" type=\"button\">Go!</button>
                  </span>
                </div>
              </div>
            </div>
                        </div>
          </div>
        </div>
        
      
      </div>

    </div>/.carousel -->







    <input id=\"origin-input\" class=\"controls\" type=\"text\"
        placeholder=\"Lieu de départ\">

    <input id=\"destination-input\" class=\"controls\" type=\"text\"
        placeholder=\"Destination\">

    <div id=\"mode-selector\" class=\"controls\">

<h6>En voiture !<h6>
<div class=\"controls-none\">

      <input type=\"radio\" name=\"type\" id=\"changemode-walking\">
      <label for=\"changemode-walking\">Walking</label>

      <input type=\"radio\" name=\"type\" id=\"changemode-transit\">
      <label for=\"changemode-transit\">Transit</label>

      <input type=\"radio\" name=\"type\" id=\"changemode-driving\" checked=\"checked\">
      <label for=\"changemode-driving\">Driving</label>
      </div>
    </div>


    <div id=\"map\" class=\"jumbotron\"></div>

   <script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src=\"https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places\">

      function initMap() {
          var styledMapType = new google.maps.StyledMapType(
            [
            {
            featureType: 'poi.business',
            stylers: [{visibility: 'off'}]
          },
          {
            featureType: 'transit',
            elementType: 'labels.icon',
            stylers: [{visibility: 'off'}]
          },
                    {
            elementType: 'labels.icon',
            stylers: [{visibility: 'off'}]
          }
            ],
            {name: 'Styled Map'});
        var map = new google.maps.Map(document.getElementById('map'), {
          mapTypeControl: false,
          center: {lat: 48.5167, lng: -2.7833 },
            gestureHandling: 'cooperative',
            zoom: 9
        });
        //Associate the styled map with the MapTypeId and set it to display.
        map.mapTypes.set('styled_map', styledMapType);
        map.setMapTypeId('styled_map');
        new AutocompleteDirectionsHandler(map);
      }

       /**
        * @constructor
       */
      function AutocompleteDirectionsHandler(map) {
        this.map = map;
        this.originPlaceId = null;
        this.destinationPlaceId = null;
        this.travelMode = 'WALKING';
        var originInput = document.getElementById('origin-input');
        var destinationInput = document.getElementById('destination-input');
        var modeSelector = document.getElementById('mode-selector');
        this.directionsService = new google.maps.DirectionsService;
        this.directionsDisplay = new google.maps.DirectionsRenderer;
        this.directionsDisplay.setMap(map);

        var originAutocomplete = new google.maps.places.Autocomplete(
            originInput, {placeIdOnly: true});
        var destinationAutocomplete = new google.maps.places.Autocomplete(
            destinationInput, {placeIdOnly: true});

        this.setupClickListener('changemode-walking', 'WALKING');
        this.setupClickListener('changemode-transit', 'TRANSIT');
        this.setupClickListener('changemode-driving', 'DRIVING');

        this.setupPlaceChangedListener(originAutocomplete, 'ORIG');
        this.setupPlaceChangedListener(destinationAutocomplete, 'DEST');

        this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(originInput);
        this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(destinationInput);
        this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(modeSelector);
      }

      // Sets a listener on a radio button to change the filter type on Places
      // Autocomplete.
      AutocompleteDirectionsHandler.prototype.setupClickListener = function(id, mode) {
        var radioButton = document.getElementById(id);
        var me = this;
        radioButton.addEventListener('click', function() {
          me.travelMode = mode;
          me.route();
        });
      };

      AutocompleteDirectionsHandler.prototype.setupPlaceChangedListener = function(autocomplete, mode) {
        var me = this;
        autocomplete.bindTo('bounds', this.map);
        autocomplete.addListener('place_changed', function() {
          var place = autocomplete.getPlace();
          if (!place.place_id) {
            window.alert(\"Please select an option from the dropdown list.\");
            return;
          }
          if (mode === 'ORIG') {
            me.originPlaceId = place.place_id;
          } else {
            me.destinationPlaceId = place.place_id;
          }
          me.route();
        });

      };

      AutocompleteDirectionsHandler.prototype.route = function() {
        if (!this.originPlaceId || !this.destinationPlaceId) {
          return;
        }
        var me = this;

        this.directionsService.route({
          origin: {'placeId': this.originPlaceId},
          destination: {'placeId': this.destinationPlaceId},
          travelMode: this.travelMode
        }, function(response, status) {
          if (status === 'OK') {
            me.directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      };

    </script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAuLtOpElBBWt36WirTuruMgt1s0clbFcQ&libraries=places&callback=initMap\"
        async defer></script>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class=\"container\">


          {% block body %}
          {% endblock %}
  

      </div>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class=\"jumbotron\">

    


  <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class=\"container marketing album text-muted\">

        <div class=\"row featurette\">
          <div class=\"col-md-7\">
            <h2 class=\"featurette-heading\">First featurette heading. <span class=\"text-muted\">It'll blow your mind.</span></h2>
            <p class=\"lead\">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class=\"col-md-5\">
            <img class=\"featurette-image img-fluid mx-auto\" src=\"http://www.cergypontoise.fr/upload/docs/image/jpeg/2012-08/00732_p0_9998863.jpg\" alt=\"Generic placeholder image\">
          </div>
        </div>

        <hr class=\"featurette-divider\">

        <div class=\"row featurette\">
          <div class=\"col-md-7 push-md-5\">
            <h2 class=\"featurette-heading\">Oh yeah, it's that good. <span class=\"text-muted\">See for yourself.</span></h2>
            <p class=\"lead\">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class=\"col-md-5 pull-md-7\">
            <img class=\"featurette-image img-fluid mx-auto\" src=\"https://images.caradisiac.com/logos/5/9/5/3/185953/S7-Le-covoiturage-favoriserait-les-bons-comportements-sur-la-route-102191.jpg\" alt=\"Generic placeholder image\">
          </div>
        </div>

        

      </div>
    </div><!-- /.container -->

<div class=\"container\">
      <footer>
        <p class=\"float-right\"><a href=\"#\">Back to top</a></p>
        <p>&copy; 2017 Company, Inc. &middot; <a href=\"#\">Privacy</a> &middot; <a href=\"#\">Terms</a></p>
      </footer>

      </div>

  {% block javascripts %}
    {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"https://v4-alpha.getbootstrap.com/dist/js/bootstrap.min.js\"></script>
  {% endblock %}

  </body>
</html>
", "OCCoreBundle::layout.html.twig", "/var/www/blablafpa/src/OC/CoreBundle/Resources/views/layout.html.twig");
    }
}
