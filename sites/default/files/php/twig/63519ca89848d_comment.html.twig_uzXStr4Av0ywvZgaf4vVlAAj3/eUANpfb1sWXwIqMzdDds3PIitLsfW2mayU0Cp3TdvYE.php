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

/* sites/all/modules/corporate_lite/templates/comment.html.twig */
class __TwigTemplate_d3a82e7c2ffa885e9c67a7b1c48ca930 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("corporate_lite/comment"), "html", null, true);
        echo "
";
        // line 68
        if (($context["threaded"] ?? null)) {
            // line 69
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("classy/drupal.comment.threaded"), "html", null, true);
            echo "
";
        }
        // line 72
        $context["classes"] = [0 => "comment", 1 => "js-comment", 2 => (((        // line 75
($context["status"] ?? null) != "published")) ? (("comment--" . $this->sandbox->ensureToStringAllowed(($context["status"] ?? null), 75, $this->source))) : ("")), 3 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 76
($context["comment"] ?? null), "owner", [], "any", false, false, true, 76), "anonymous", [], "any", false, false, true, 76)) ? ("by-anonymous") : ("")), 4 => (((        // line 77
($context["author_id"] ?? null) && (($context["author_id"] ?? null) == twig_get_attribute($this->env, $this->source, ($context["commented_entity"] ?? null), "getOwnerId", [], "method", false, false, true, 77)))) ? ((("by-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["commented_entity"] ?? null), "getEntityTypeId", [], "method", false, false, true, 77), 77, $this->source)) . "-author")) : ("")), 5 => "clearfix"];
        // line 81
        echo "<article role=\"article\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 81), 81, $this->source), "role"), "html", null, true);
        echo ">
  ";
        // line 87
        echo "  <span class=\"hidden new-indicator\" data-comment-timestamp=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["new_indicator_timestamp"] ?? null), 87, $this->source), "html", null, true);
        echo "\"></span>

  ";
        // line 89
        if (($context["user_picture"] ?? null)) {
            // line 90
            echo "    <header>
      ";
            // line 91
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_picture"] ?? null), 91, $this->source), "html", null, true);
            echo "
    </header>
  ";
        }
        // line 94
        echo "
  <div class=\"comment__content-container\">
    ";
        // line 96
        if (($context["title"] ?? null)) {
            // line 97
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 97, $this->source), "html", null, true);
            echo "
      <h3";
            // line 98
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "title"], "method", false, false, true, 98), 98, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 98, $this->source), "html", null, true);
            echo "</h3>
      ";
            // line 99
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 99, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 101
        echo "    <div class=\"comment__meta\">
      <p class=\"comment__submitted\">";
        // line 102
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["submitted"] ?? null), 102, $this->source), "html", null, true);
        echo "</p>
      ";
        // line 103
        if (($context["parent"] ?? null)) {
            // line 104
            echo "        <p class=\"visually-hidden\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["parent"] ?? null), 104, $this->source), "html", null, true);
            echo "</p>
      ";
        }
        // line 106
        echo "    </div>
    <div";
        // line 107
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "comment__content"], "method", false, false, true, 107), 107, $this->source), "html", null, true);
        echo ">
      ";
        // line 108
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 108, $this->source), "html", null, true);
        echo "
    </div>
  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "sites/all/modules/corporate_lite/templates/comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 108,  118 => 107,  115 => 106,  109 => 104,  107 => 103,  103 => 102,  100 => 101,  95 => 99,  89 => 98,  84 => 97,  82 => 96,  78 => 94,  72 => 91,  69 => 90,  67 => 89,  61 => 87,  56 => 81,  54 => 77,  53 => 76,  52 => 75,  51 => 72,  45 => 69,  43 => 68,  39 => 67,);
    }

    public function getSourceContext()
    {
        return new Source("", "sites/all/modules/corporate_lite/templates/comment.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/drupal9/sites/all/modules/corporate_lite/templates/comment.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 68, "set" => 72);
        static $filters = array("escape" => 67, "without" => 81);
        static $functions = array("attach_library" => 67);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 'without'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
