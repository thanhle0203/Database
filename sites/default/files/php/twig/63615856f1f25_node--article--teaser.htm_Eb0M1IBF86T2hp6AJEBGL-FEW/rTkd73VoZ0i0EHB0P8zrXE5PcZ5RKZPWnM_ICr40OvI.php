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

/* sites/all/modules/corporate_lite/templates/node--article--teaser.html.twig */
class __TwigTemplate_3739952270b7c17258d10c787c266948 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'node_side' => [$this, 'block_node_side'],
            'meta_area' => [$this, 'block_meta_area'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return "node.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node.html.twig", "sites/all/modules/corporate_lite/templates/node--article--teaser.html.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_node_side($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "  <div class=\"node__side\">
    ";
        // line 11
        if ((($context["display_submitted"] ?? null) || (twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "comment", [], "any", false, false, true, 11) && (($context["comment_count"] ?? null) > 0)))) {
            // line 12
            echo "      ";
            if (($context["display_submitted"] ?? null)) {
                // line 13
                echo "        <div class=\"node__user-info\">
          ";
                // line 14
                if (($context["author_picture"] ?? null)) {
                    // line 15
                    echo "            <div class=\"user-picture\">
              <div";
                    // line 16
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null), 16, $this->source), "html", null, true);
                    echo ">
                ";
                    // line 17
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 17, $this->source), "html", null, true);
                    echo "
              </div>
            </div>
          ";
                }
                // line 21
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 21, $this->source), "html", null, true);
                echo "
        </div>
        <div class=\"node__submitted-date\">
          <div class=\"month\">";
                // line 24
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->env->getFilter('format_date')->getCallable()($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "createdtime", [], "any", false, false, true, 24), 24, $this->source), "custom", "M"), "html", null, true);
                echo "</div>
          <div class=\"day\">";
                // line 25
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->env->getFilter('format_date')->getCallable()($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "createdtime", [], "any", false, false, true, 25), 25, $this->source), "custom", "d"), "html", null, true);
                echo "</div>
          <div class=\"year\">";
                // line 26
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->env->getFilter('format_date')->getCallable()($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "createdtime", [], "any", false, false, true, 26), 26, $this->source), "custom", "Y"), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 29
            echo "      ";
            if ((twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "comment", [], "any", false, false, true, 29) && (($context["comment_count"] ?? null) > 0))) {
                // line 30
                echo "        <div class=\"node__comments\">
          <i class=\"fa fa-comment\"></i>
          <div class=\"node__comments-count\">";
                // line 32
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_count"] ?? null), 32, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 35
            echo "    ";
        }
        // line 36
        echo "  </div>
";
    }

    // line 38
    public function block_meta_area($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 39, $this->source), "html", null, true);
        echo "
  ";
        // line 40
        if ( !($context["page"] ?? null)) {
            // line 41
            echo "    <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "node__title"], "method", false, false, true, 41), 41, $this->source), "html", null, true);
            echo ">
      <a href=\"";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 42, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 42, $this->source), "html", null, true);
            echo "</a>
    </h2>
  ";
        }
        // line 45
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 45, $this->source), "html", null, true);
        echo "
  ";
        // line 46
        if (($context["display_submitted"] ?? null)) {
            // line 47
            echo "    <div class=\"node__meta\">
      <span";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["author_attributes"] ?? null), "addClass", [0 => "node__submitted-info"], "method", false, false, true, 48), 48, $this->source), "html", null, true);
            echo ">
        ";
            // line 49
            echo t("<span class=\"node__submitted-info-text\">By</span> @author_name", array("@author_name" => ($context["author_name"] ?? null), ));
            // line 50
            echo "      </span>
    </div>
  ";
        }
    }

    // line 54
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("corporate_lite/node-article"), "html", null, true);
        echo "
  <div class=\"node__main-content-section\">
    ";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 57, $this->source), "comment"), "html", null, true);
        echo "
  </div>
  ";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "sites/all/modules/corporate_lite/templates/node--article--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 59,  180 => 57,  174 => 55,  170 => 54,  163 => 50,  161 => 49,  157 => 48,  154 => 47,  152 => 46,  147 => 45,  139 => 42,  134 => 41,  132 => 40,  127 => 39,  123 => 38,  118 => 36,  115 => 35,  109 => 32,  105 => 30,  102 => 29,  96 => 26,  92 => 25,  88 => 24,  81 => 21,  74 => 17,  70 => 16,  67 => 15,  65 => 14,  62 => 13,  59 => 12,  57 => 11,  54 => 10,  50 => 9,  39 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "sites/all/modules/corporate_lite/templates/node--article--teaser.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/drupal9/sites/all/modules/corporate_lite/templates/node--article--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 11, "trans" => 49);
        static $filters = array("escape" => 16, "format_date" => 24, "without" => 57);
        static $functions = array("attach_library" => 55);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape', 'format_date', 'without'],
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
