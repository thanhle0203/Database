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

/* sites/all/modules/zircon/templates/page.html.twig */
class __TwigTemplate_bed7efbe2e6726a0e3834680cfa77589 extends \Twig\Template
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
        // line 1
        echo "<div class=\"page\" class=\"page\" ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["page_css"] ?? null), 1, $this->source));
        echo ">

";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "show_skins_menu", [], "any", false, false, true, 3)) {
            // line 4
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "show_skins_menu", [], "any", false, false, true, 4), 4, $this->source));
            echo "
";
        }
        // line 6
        echo "  
<a name=\"Top\" id=\"Top\"></a>
<header id=\"header\" class=\"header\" role=\"header\">
  <div class=\"container\">
    ";
        // line 10
        if (($context["logo"] ?? null)) {
            // line 11
            echo "      <a id=\"logo\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 11, $this->source), "html", null, true);
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\" rel=\"home\">
        <img src=\"";
            // line 12
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null), 12, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\"/>
      </a>
    ";
        }
        // line 15
        echo "
    ";
        // line 16
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 17
            echo "      <div class=\"name-and-slogan\">

        ";
            // line 20
            echo "        ";
            if (($context["title"] ?? null)) {
                // line 21
                echo "          <strong class=\"site-name\">
            <a href=\"";
                // line 22
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 22, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 22, $this->source), "html", null, true);
                echo "</a>
          </strong>
        ";
            } else {
                // line 25
                echo "          <h1 class=\"site-name\">
            <a href=\"";
                // line 26
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 26, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 26, $this->source), "html", null, true);
                echo "</a>
          </h1>
        ";
            }
            // line 29
            echo "
        ";
            // line 30
            if (($context["site_slogan"] ?? null)) {
                // line 31
                echo "          <div class=\"site-slogan\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 31, $this->source), "html", null, true);
                echo "</div>
        ";
            }
            // line 33
            echo "      </div>
   ";
        }
        // line 35
        echo "   <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-menu-inner\">
      <span class=\"sr-only\">Toggle navigation</span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
    </button>

    ";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
        echo "
    
    ";
        // line 44
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 44)) {
            // line 45
            echo "      <div class=\"primary-menu\">
        ";
            // line 46
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 49
        echo "  </div>
</header>

  ";
        // line 52
        if ((($context["main_menu"] ?? null) || ($context["secondary_menu"] ?? null))) {
            // line 53
            echo "    <nav id=\"navigation\" class=\"navigation\" role=\"navigation\">
      <div class=\"container\">
        ";
            // line 55
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_menu"] ?? null), 55, $this->source), "html", null, true);
            echo "
        ";
            // line 56
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["secondary_menu"] ?? null), 56, $this->source), "html", null, true);
            echo "
      </div>
    </nav>
  ";
        }
        // line 60
        echo "
  ";
        // line 61
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 61)) {
            // line 62
            echo "    <nav id=\"main-menu\" class=\"navbar navbar-default\" role=\"navigation\">\t
  \t\t  <div class=\"collapse navbar-collapse\" id=\"main-menu-inner\">
          <div class=\"container\">
            ";
            // line 65
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
            echo "\t\t\t\t\t\t
          </div>
        </div>
    </nav>
  ";
        }
        // line 70
        echo "
  ";
        // line 71
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow", [], "any", false, false, true, 71)) {
            // line 72
            echo "    <section id=\"slideshow\" class=\"slideshow\">
      <div class=\"container\">
        ";
            // line 74
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 78
        echo "
  ";
        // line 79
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 79)) {
            // line 80
            echo "    <section id=\"featured\" class=\"featured\">
      <div class=\"container\">
        ";
            // line 82
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 86
        echo "
  ";
        // line 87
        if (($context["messages"] ?? null)) {
            // line 88
            echo "    <section id=\"messages\" class=\"messages\">
      <div class=\"container\">
        ";
            // line 90
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null), 90, $this->source), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 94
        echo "
  ";
        // line 95
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 95)) {
            // line 96
            echo "    <section id=\"help\" class=\"help\">
      <div class=\"container\">
        ";
            // line 98
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 101
        echo "    

  <section id=\"main\" class=\"main\" role=\"main\">
    <a id=\"main-content\"></a>
    <div class=\"container\">
      <div class=\"row\">
        
        ";
        // line 108
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 108)) {
            // line 109
            echo "          <aside class=\"sidebar-first sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
            ";
            // line 110
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
            echo "
          </aside>
        ";
        }
        // line 113
        echo "\t\t
        <div class=\"content col-lg-";
        // line 114
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_content_width", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
        echo " col-md-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_content_width", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
        echo " col-sm-12 col-xs-12\">
          ";
        // line 115
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
        echo "

          ";
        // line 117
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 117, $this->source), "html", null, true);
        echo "
          ";
        // line 118
        if (($context["title"] ?? null)) {
            // line 119
            echo "            <h1>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 119, $this->source), "html", null, true);
            echo "</h1>
          ";
        }
        // line 121
        echo "          ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 121, $this->source), "html", null, true);
        echo "

          ";
        // line 123
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tabs"] ?? null), 123, $this->source), "html", null, true);
        echo "

          ";
        // line 125
        if (($context["action_links"] ?? null)) {
            // line 126
            echo "            <nav class=\"action-links\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 126, $this->source), "html", null, true);
            echo "</nav>
          ";
        }
        // line 128
        echo "
          ";
        // line 129
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
        echo "

          <!--";
        // line 131
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 131, $this->source), "html", null, true);
        echo "-->
        </div>

        ";
        // line 134
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 134)) {
            // line 135
            echo "          <aside class=\"sidebar-second sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
            ";
            // line 136
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
            echo "
          </aside>
        ";
        }
        // line 139
        echo "      </div>
    </div>
  </section>

  ";
        // line 143
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_first_1", [], "any", false, false, true, 143)) {
            // line 144
            echo "    <section id=\"panel_first\" class=\"panel_first\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            ";
            // line 148
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_first_1", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </section>
  ";
        }
        // line 154
        echo "    
  ";
        // line 155
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_second_1", [], "any", false, false, true, 155) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_second_2", [], "any", false, false, true, 155)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_second_3", [], "any", false, false, true, 155)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_second_4", [], "any", false, false, true, 155))) {
            // line 156
            echo "    <section id=\"panel_second\" class=\"panel_second\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 160
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_second_1", [], "any", false, false, true, 160), 160, $this->source), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 163
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_second_2", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 166
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_second_3", [], "any", false, false, true, 166), 166, $this->source), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 169
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_second_4", [], "any", false, false, true, 169), 169, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </section>
  ";
        }
        // line 175
        echo "  
  ";
        // line 176
        if (($context["breadcrumb"] ?? null)) {
            // line 177
            echo "    <section id=\"breadcrumb\" class=\"breadcrumb\">
      <div class=\"container\">
        ";
            // line 179
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 179, $this->source), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 183
        echo "  <a href=\"#Top\" class=\"btn-btt\" title=\"Back to Top\" style=\"display: block;\"></a>          

  ";
        // line 185
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 185)) {
            // line 186
            echo "    <footer id=\"footer\" class=\"footer\" role=\"contentinfo\">
      <div class=\"container\">
        ";
            // line 188
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 188), 188, $this->source), "html", null, true);
            echo "
      </div>
    </footer>
  ";
        }
        // line 192
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "sites/all/modules/zircon/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 192,  435 => 188,  431 => 186,  429 => 185,  425 => 183,  418 => 179,  414 => 177,  412 => 176,  409 => 175,  400 => 169,  394 => 166,  388 => 163,  382 => 160,  376 => 156,  374 => 155,  371 => 154,  362 => 148,  356 => 144,  354 => 143,  348 => 139,  342 => 136,  339 => 135,  337 => 134,  331 => 131,  326 => 129,  323 => 128,  317 => 126,  315 => 125,  310 => 123,  304 => 121,  298 => 119,  296 => 118,  292 => 117,  287 => 115,  281 => 114,  278 => 113,  272 => 110,  269 => 109,  267 => 108,  258 => 101,  251 => 98,  247 => 96,  245 => 95,  242 => 94,  235 => 90,  231 => 88,  229 => 87,  226 => 86,  219 => 82,  215 => 80,  213 => 79,  210 => 78,  203 => 74,  199 => 72,  197 => 71,  194 => 70,  186 => 65,  181 => 62,  179 => 61,  176 => 60,  169 => 56,  165 => 55,  161 => 53,  159 => 52,  154 => 49,  148 => 46,  145 => 45,  143 => 44,  138 => 42,  129 => 35,  125 => 33,  119 => 31,  117 => 30,  114 => 29,  104 => 26,  101 => 25,  91 => 22,  88 => 21,  85 => 20,  81 => 17,  79 => 16,  76 => 15,  68 => 12,  61 => 11,  59 => 10,  53 => 6,  47 => 4,  45 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sites/all/modules/zircon/templates/page.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/drupal9/sites/all/modules/zircon/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3);
        static $filters = array("raw" => 1, "escape" => 11, "t" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['raw', 'escape', 't'],
                []
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
