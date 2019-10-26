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

/* themes/security/templates/paragraphs/paragraph--hero-image.html.twig */
class __TwigTemplate_a7f8517f73828e87bef4bc7ccc6418312268479df866a0d70cbeeb5c0c362718 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 2, "block" => 10];
        $filters = ["clean_class" => 5, "escape" => 11];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
                ['clean_class', 'escape'],
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["classes"] = [0 => "paragraph", 1 => "cont", 2 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 5
($context["paragraph"] ?? null), "bundle", [])))), 3 => ((        // line 6
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : ("")), 4 => (( !$this->getAttribute(        // line 7
($context["paragraph"] ?? null), "isPublished", [], "method")) ? ("paragraph--unpublished") : (""))];
        // line 10
        $this->displayBlock('paragraph', $context, $blocks);
        // line 36
        echo "
";
    }

    // line 10
    public function block_paragraph($context, array $blocks = [])
    {
        // line 11
        echo "  <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
    ";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        // line 34
        echo "  </div>
";
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        // line 13
        echo "      
  <header class=\"masthead\" style=\"background: linear-gradient(to bottom, rgba(92, 77, 66, 0.8) 0%, rgba(92, 77, 66, 0.8) 100%), url('";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_hero_image", []), 0, [], "array")), "html", null, true);
        echo "');\">
    <div class=\"container h-100\">
      <div class=\"row h-100  align-items-center justify-content-center text-center\">
        <div class=\"col-lg-10 align-self-end pt-5\">
          <h1 class=\"text-uppercase text-white font-weight-bold pt-5\">";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_hero_titlte", [])), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"col-lg-8 align-self-baseline\">
          <h5 class=\"text-white-75 text-center p-3 font-weight-light text-white\">";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_hero_body", [])), "html", null, true);
        echo "</h5>
          <div class=\"col-lg-8 mx-auto\">
            ";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_button_link", [])), "html", null, true);
        echo "
          </div> 
       </div>
        
        
      </div>
    </div>
  </header>      
      
      
    ";
    }

    public function getTemplateName()
    {
        return "themes/security/templates/paragraphs/paragraph--hero-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 23,  103 => 21,  97 => 18,  90 => 14,  87 => 13,  84 => 12,  79 => 34,  77 => 12,  72 => 11,  69 => 10,  64 => 36,  62 => 10,  60 => 7,  59 => 6,  58 => 5,  57 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{%
  set classes = [
    'paragraph',
    'cont',
    'paragraph--type--' ~ paragraph.bundle|clean_class,
    view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
    not paragraph.isPublished() ? 'paragraph--unpublished'
  ]
%}
{% block paragraph %}
  <div{{ attributes.addClass(classes) }}>
    {% block content %}
      
  <header class=\"masthead\" style=\"background: linear-gradient(to bottom, rgba(92, 77, 66, 0.8) 0%, rgba(92, 77, 66, 0.8) 100%), url('{{ content.field_hero_image[0] }}');\">
    <div class=\"container h-100\">
      <div class=\"row h-100  align-items-center justify-content-center text-center\">
        <div class=\"col-lg-10 align-self-end pt-5\">
          <h1 class=\"text-uppercase text-white font-weight-bold pt-5\">{{ content.field_hero_titlte }}</h1>
        </div>
        <div class=\"col-lg-8 align-self-baseline\">
          <h5 class=\"text-white-75 text-center p-3 font-weight-light text-white\">{{ content.field_hero_body }}</h5>
          <div class=\"col-lg-8 mx-auto\">
            {{ content.field_button_link }}
          </div> 
       </div>
        
        
      </div>
    </div>
  </header>      
      
      
    {% endblock %}
  </div>
{% endblock paragraph %}

", "themes/security/templates/paragraphs/paragraph--hero-image.html.twig", "C:\\xampp\\htdocs\\security-test\\themes\\security\\templates\\paragraphs\\paragraph--hero-image.html.twig");
    }
}
