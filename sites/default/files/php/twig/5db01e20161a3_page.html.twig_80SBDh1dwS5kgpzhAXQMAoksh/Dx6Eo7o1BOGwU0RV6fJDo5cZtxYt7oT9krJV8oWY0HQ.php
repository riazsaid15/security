<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/security/templates/page.html.twig */
class __TwigTemplate_6ae80cd39475e7bd3459eee80eeef2a792f82617921b50e1c776a7a033a81009 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@bootstrap_barrio/layout/page.html.twig", "themes/security/templates/page.html.twig", 1);
        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 73];
        $filters = ["escape" => 74];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doGetParent(array $context)
    {
        return "@bootstrap_barrio/layout/page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 72
    public function block_head($context, array $blocks = [])
    {
        // line 73
        if ((($this->getAttribute(($context["page"] ?? null), "secondary_menu", []) || $this->getAttribute(($context["page"] ?? null), "top_header", [])) || $this->getAttribute(($context["page"] ?? null), "top_header_form", []))) {
            // line 74
            echo "<nav";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_top_attributes"] ?? null)), "html", null, true);
            echo ">
  ";
            // line 75
            if (($context["container_navbar"] ?? null)) {
                // line 76
                echo "  <div class=\"container\">
    ";
            }
            // line 78
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])), "html", null, true);
            echo "
    ";
            // line 79
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_header", [])), "html", null, true);
            echo "
    ";
            // line 80
            if ($this->getAttribute(($context["page"] ?? null), "top_header_form", [])) {
                // line 81
                echo "    <div class=\"form-inline navbar-form float-right\">
      ";
                // line 82
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_header_form", [])), "html", null, true);
                echo "
    </div>
    ";
            }
            // line 85
            echo "    ";
            if (($context["container_navbar"] ?? null)) {
                // line 86
                echo "  </div>
  ";
            }
            // line 88
            echo "  </nav>
  ";
        }
        // line 90
        echo "  <nav ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", [0 => "navbar-default"], "method")), "html", null, true);
        echo ">
    ";
        // line 91
        if (($context["container_navbar"] ?? null)) {
            // line 92
            echo "    <div class=\"container\">
      ";
        }
        // line 94
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
      ";
        // line 95
        if (($this->getAttribute(($context["page"] ?? null), "primary_menu", []) || $this->getAttribute(($context["page"] ?? null), "header_form", []))) {
            // line 96
            echo "      <div class=\"navbar-collapse collapse w-100 order-1 order-lg-0 dual-collapse2\">
        ";
            // line 97
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
            echo "
      </div>
      <div class=\"mx-auto order-0 px-5\">
        <a class=\"navbar-brand\" href=\"#\"><img width=\"130px\" src=\"";
            // line 100
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logopath"] ?? null)), "html", null, true);
            echo "\"></a>
        <button class=\"navbar-toggler abs p-4\" type=\"button\" data-toggle=\"collapse\" data-target=\".dual-collapse2\">
          <i class=\"fas fa-bars navbar-toggler-icon\"></i>
        </button>
      </div>
      <div class=\"navbar-collapse collapse w-50 order-3 dual-collapse2\">
        ";
            // line 106
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu2", [])), "html", null, true);
            echo "
      </div>
      <div class=\"navbar-collapse collapse w-50 order-4  ml-lg-5 ml-0 dual-collapse2\">
        ";
            // line 109
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu3", [])), "html", null, true);
            echo "
      </div>
      ";
            // line 111
            if ($this->getAttribute(($context["page"] ?? null), "header_form", [])) {
                // line 112
                echo "      <div class=\"form-inline navbar-form float-right\">
        ";
                // line 113
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_form", [])), "html", null, true);
                echo "
      </div>
      ";
            }
            // line 116
            echo "
      ";
        }
        // line 118
        echo "      ";
        if (($context["sidebar_collapse"] ?? null)) {
            // line 119
            echo "      ";
        }
        // line 120
        echo "      ";
        if (($context["container_navbar"] ?? null)) {
            // line 121
            echo "    </div>
    ";
        }
        // line 123
        echo "  </nav>
  ";
    }

    // line 126
    public function block_content($context, array $blocks = [])
    {
        // line 127
        echo "  <div id=\"main\" class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\">
    ";
        // line 128
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
        echo "
    <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
      <main";
        // line 130
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null)), "html", null, true);
        echo ">
        <section class=\"section\">
          <a id=\"main-content\" tabindex=\"-1\"></a>
          ";
        // line 133
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
        </section>
        </main>
        ";
        // line 136
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 137
            echo "        <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_attributes"] ?? null)), "html", null, true);
            echo ">
          <aside class=\"section\" role=\"complementary\">
            ";
            // line 139
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
          </aside>
    </div>
    ";
        }
        // line 143
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 144
            echo "    <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_attributes"] ?? null)), "html", null, true);
            echo ">
      <aside class=\"section\" role=\"complementary\">
        ";
            // line 146
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
      </aside>
  </div>
  ";
        }
        // line 150
        echo "  </div>
  </div>
  ";
    }

    // line 154
    public function block_footer($context, array $blocks = [])
    {
        // line 155
        echo "  <div class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\">
    ";
        // line 156
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", []))) {
            // line 157
            echo "    <!-- Footer -->
      <!-- Footer Links -->
      <div class=\"text-center text-md-left mt-5 mx-sm-auto\">
        <!-- Grid row -->
        <div class=\"row mt-3\">
            <div class=\"col-lg-3 col-xl-3 mx-auto text-dark text-center mb-4\">
              ";
            // line 163
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
            echo "
            </div>
            <div class=\"col-lg-2 col-xl-2 text-dark mx-auto mb-4\">
              <h5 class=\"text-warning\">LINKS</h5>
              <p>";
            // line 167
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
            echo "</p>
            </div>
            <div class=\"col-lg-3 col-xl-2 text-dark mx-auto mb-4\">
              ";
            // line 170
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
            echo "
            </div>
            <div class=\"col-lg-4 col-xl-3 text-dark mx-auto mb-md-0 mb-4\">
              <h5 class=\"text-warning\">CONTACT US</h5>
              ";
            // line 174
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])), "html", null, true);
            echo "
            </div>
        </div>
        <!-- Grid row -->
      
      <!-- Footer Links -->
      ";
        }
        // line 181
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_fifth", [])) {
            // line 182
            echo "      <hr />
      <div class=\"footer-copyright text-center py-3 d-block\">
        ";
            // line 184
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fifth", [])), "html", null, true);
            echo "
      </div>
        </div>
      ";
        }
        // line 188
        echo "  </div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/security/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 188,  310 => 184,  306 => 182,  303 => 181,  293 => 174,  286 => 170,  280 => 167,  273 => 163,  265 => 157,  263 => 156,  258 => 155,  255 => 154,  249 => 150,  242 => 146,  236 => 144,  233 => 143,  226 => 139,  220 => 137,  218 => 136,  212 => 133,  206 => 130,  201 => 128,  196 => 127,  193 => 126,  188 => 123,  184 => 121,  181 => 120,  178 => 119,  175 => 118,  171 => 116,  165 => 113,  162 => 112,  160 => 111,  155 => 109,  149 => 106,  140 => 100,  134 => 97,  131 => 96,  129 => 95,  124 => 94,  120 => 92,  118 => 91,  113 => 90,  109 => 88,  105 => 86,  102 => 85,  96 => 82,  93 => 81,  91 => 80,  87 => 79,  82 => 78,  78 => 76,  76 => 75,  71 => 74,  69 => 73,  66 => 72,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@bootstrap_barrio/layout/page.html.twig\" %}

{#
/**
 * @file
 * Bootstrap Barrio's theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 * - logo: The url of the logo image, as defined in theme settings.
 * - site_name: The name of the site. This is empty when displaying the site
 *   name has been disabled in the theme settings.
 * - site_slogan: The slogan of the site. This is empty when displaying the site
 *   slogan has been disabled in theme settings.

 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.top_header: Items for the top header region.
 * - page.top_header_form: Items for the top header form region.
 * - page.header: Items for the header region.
 * - page.header_form: Items for the header form region.
 * - page.highlighted: Items for the highlighted region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.featured_top: Items for the featured top region.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.featured_bottom_first: Items for the first featured bottom region.
 * - page.featured_bottom_second: Items for the second featured bottom region.
 * - page.featured_bottom_third: Items for the third featured bottom region.
 * - page.footer_first: Items for the first footer column.
 * - page.footer_second: Items for the second footer column.
 * - page.footer_third: Items for the third footer column.
 * - page.footer_fourth: Items for the fourth footer column.
 * - page.footer_fifth: Items for the fifth footer column.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * Theme variables:
 * - navbar_top_attributes: Items for the header region.
 * - navbar_attributes: Items for the header region.
 * - content_attributes: Items for the header region.
 * - sidebar_first_attributes: Items for the highlighted region.
 * - sidebar_second_attributes: Items for the primary menu region.
 *
 * @see template_preprocess_page()
 * @see bootstrap_barrio_preprocess_page()
 * @see html.html.twig
 */
#}

{% block head %}
{% if page.secondary_menu or page.top_header or page.top_header_form %}
<nav{{ navbar_top_attributes }}>
  {% if container_navbar %}
  <div class=\"container\">
    {% endif %}
    {{ page.secondary_menu }}
    {{ page.top_header }}
    {% if page.top_header_form %}
    <div class=\"form-inline navbar-form float-right\">
      {{ page.top_header_form }}
    </div>
    {% endif %}
    {% if container_navbar %}
  </div>
  {% endif %}
  </nav>
  {% endif %}
  <nav {{ navbar_attributes.addClass('navbar-default') }}>
    {% if container_navbar %}
    <div class=\"container\">
      {% endif %}
      {{ page.header }}
      {% if page.primary_menu or page.header_form %}
      <div class=\"navbar-collapse collapse w-100 order-1 order-lg-0 dual-collapse2\">
        {{ page.primary_menu }}
      </div>
      <div class=\"mx-auto order-0 px-5\">
        <a class=\"navbar-brand\" href=\"#\"><img width=\"130px\" src=\"{{ logopath }}\"></a>
        <button class=\"navbar-toggler abs p-4\" type=\"button\" data-toggle=\"collapse\" data-target=\".dual-collapse2\">
          <i class=\"fas fa-bars navbar-toggler-icon\"></i>
        </button>
      </div>
      <div class=\"navbar-collapse collapse w-50 order-3 dual-collapse2\">
        {{ page.primary_menu2 }}
      </div>
      <div class=\"navbar-collapse collapse w-50 order-4  ml-lg-5 ml-0 dual-collapse2\">
        {{ page.primary_menu3 }}
      </div>
      {% if page.header_form %}
      <div class=\"form-inline navbar-form float-right\">
        {{ page.header_form }}
      </div>
      {% endif %}

      {% endif %}
      {% if sidebar_collapse %}
      {% endif %}
      {% if container_navbar %}
    </div>
    {% endif %}
  </nav>
  {% endblock %}

  {% block content %}
  <div id=\"main\" class=\"{{ container }}\">
    {{ page.breadcrumb }}
    <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
      <main{{ content_attributes }}>
        <section class=\"section\">
          <a id=\"main-content\" tabindex=\"-1\"></a>
          {{ page.content }}
        </section>
        </main>
        {% if page.sidebar_first %}
        <div{{ sidebar_first_attributes }}>
          <aside class=\"section\" role=\"complementary\">
            {{ page.sidebar_first }}
          </aside>
    </div>
    {% endif %}
    {% if page.sidebar_second %}
    <div{{ sidebar_second_attributes }}>
      <aside class=\"section\" role=\"complementary\">
        {{ page.sidebar_second }}
      </aside>
  </div>
  {% endif %}
  </div>
  </div>
  {% endblock %}

  {% block footer %}
  <div class=\"{{ container }}\">
    {% if page.footer_first or page.footer_second or page.footer_third or page.footer_fourth %}
    <!-- Footer -->
      <!-- Footer Links -->
      <div class=\"text-center text-md-left mt-5 mx-sm-auto\">
        <!-- Grid row -->
        <div class=\"row mt-3\">
            <div class=\"col-lg-3 col-xl-3 mx-auto text-dark text-center mb-4\">
              {{ page.footer_first }}
            </div>
            <div class=\"col-lg-2 col-xl-2 text-dark mx-auto mb-4\">
              <h5 class=\"text-warning\">LINKS</h5>
              <p>{{ page.footer_second }}</p>
            </div>
            <div class=\"col-lg-3 col-xl-2 text-dark mx-auto mb-4\">
              {{ page.footer_third }}
            </div>
            <div class=\"col-lg-4 col-xl-3 text-dark mx-auto mb-md-0 mb-4\">
              <h5 class=\"text-warning\">CONTACT US</h5>
              {{ page.footer_fourth }}
            </div>
        </div>
        <!-- Grid row -->
      
      <!-- Footer Links -->
      {% endif %}
      {% if page.footer_fifth %}
      <hr />
      <div class=\"footer-copyright text-center py-3 d-block\">
        {{ page.footer_fifth }}
      </div>
        </div>
      {% endif %}
  </div>
  {% endblock %}
", "themes/security/templates/page.html.twig", "C:\\xampp\\htdocs\\security\\themes\\security\\templates\\page.html.twig");
    }
}
