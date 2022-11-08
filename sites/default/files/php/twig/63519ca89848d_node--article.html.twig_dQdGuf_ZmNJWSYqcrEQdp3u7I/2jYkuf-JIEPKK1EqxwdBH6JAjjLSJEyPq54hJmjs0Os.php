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

/* sites/all/modules/corporate_lite/templates/node--article.html.twig */
class __TwigTemplate_0380ca2441aa8dce0f45e76dab9ea08f extends \Twig\Template
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
        $this->parent = $this->loadTemplate("node.html.twig", "sites/all/modules/corporate_lite/templates/node--article.html.twig", 8);
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
        if (((((((($context["display_submitted"] ?? null) || twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "reading_time", [], "any", false, false, true, 11)) || twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "share_links", [], "any", false, false, true, 11)) || twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "font_resize", [], "any", false, false, true, 11)) || twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "post_progress", [], "any", false, false, true, 11)) || twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 11)) || (twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "comment", [], "any", false, false, true, 11) && (($context["comment_count"] ?? null) > 0)))) {
            // line 12
            echo "      ";
            if ((($context["display_submitted"] ?? null) || (twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "comment", [], "any", false, false, true, 12) && (($context["comment_count"] ?? null) > 0)))) {
                // line 13
                echo "        ";
                if (($context["display_submitted"] ?? null)) {
                    // line 14
                    echo "          <div class=\"node__user-info\">
            ";
                    // line 15
                    if (($context["author_picture"] ?? null)) {
                        // line 16
                        echo "              <div class=\"user-picture\">
                <div";
                        // line 17
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null), 17, $this->source), "html", null, true);
                        echo ">
                  ";
                        // line 18
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 18, $this->source), "html", null, true);
                        echo "
                </div>
              </div>
            ";
                    }
                    // line 22
                    echo "            ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 22, $this->source), "html", null, true);
                    echo "
          </div>
          <div class=\"node__submitted-date\">
            <div class=\"month\">";
                    // line 25
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->env->getFilter('format_date')->getCallable()($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "createdtime", [], "any", false, false, true, 25), 25, $this->source), "custom", "M"), "html", null, true);
                    echo "</div>
            <div class=\"day\">";
                    // line 26
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->env->getFilter('format_date')->getCallable()($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "createdtime", [], "any", false, false, true, 26), 26, $this->source), "custom", "d"), "html", null, true);
                    echo "</div>
            <div class=\"year\">";
                    // line 27
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->env->getFilter('format_date')->getCallable()($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "createdtime", [], "any", false, false, true, 27), 27, $this->source), "custom", "Y"), "html", null, true);
                    echo "</div>
          </div>
        ";
                }
                // line 30
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "comment", [], "any", false, false, true, 30) && (($context["comment_count"] ?? null) > 0))) {
                    // line 31
                    echo "          <div class=\"node__comments\">
            <i class=\"fa fa-comment\"></i>
            <div class=\"node__comments-count\">";
                    // line 33
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_count"] ?? null), 33, $this->source), "html", null, true);
                    echo "</div>
          </div>
        ";
                }
                // line 36
                echo "      ";
            }
            // line 37
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "reading_time", [], "any", false, false, true, 37)) {
                // line 38
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("corporate_lite/reading-time"), "html", null, true);
                echo "
        <div class=\"reading-time\">
          ";
                // line 40
                if ((($context["minutes"] ?? null) < 1)) {
                    // line 41
                    echo "            ";
                    echo t("1<div class=\"reading-time__text\">min read</div>", array());
                    // line 44
                    echo "          ";
                } else {
                    // line 45
                    echo "            ";
                    echo t("@minutes<div class=\"reading-time__text\">min read</div>", array("@minutes" =>                     // line 46
($context["minutes"] ?? null), ));
                    // line 48
                    echo "          ";
                }
                // line 49
                echo "        </div>
      ";
            }
            // line 51
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "affix_side", [], "any", false, false, true, 51)) {
                // line 52
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("corporate_lite/node-side-affix"), "html", null, true);
                echo "
        <div id=\"affix\">
      ";
            }
            // line 55
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "font_resize", [], "any", false, false, true, 55)) {
                // line 56
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("corporate_lite/font-resize"), "html", null, true);
                echo "
        <div class=\"content-font-settings\">
            <div class=\"font-resize\">
              <a href=\"#\" id=\"decfont\">A-</a>
              <a href=\"#\" id=\"incfont\">A+</a>
            </div>
        </div>
      ";
            }
            // line 64
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "post_progress", [], "any", false, false, true, 64)) {
                // line 65
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("corporate_lite/post-progress"), "html", null, true);
                echo "
        <div class=\"post-progress\">
          <div class=\"post-progress__value\"></div>
          <div class=\"post-progress__text\">";
                // line 68
                echo t("read", array());
                echo "</div>
          <div class=\"post-progress__bar\"></div>
        </div>
      ";
            }
            // line 72
            echo "      ";
            if (((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "share_links_print_position", [], "any", false, false, true, 72) == "node-side") && (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "share_links", [], "any", false, false, true, 72) || twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 72)))) {
                // line 73
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("corporate_lite/share-links"), "html", null, true);
                echo "
        <div class=\"share-links\">
          <ul>
            ";
                // line 76
                if (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "share_links", [], "any", false, false, true, 76)) {
                    // line 77
                    echo "              <li class=\"facebook";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 77)) ? (" print-button-enabled") : ("")));
                    echo "\">
                <a href=\"https://www.facebook.com/sharer/sharer.php?u=";
                    // line 78
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 78)]), "html", null, true);
                    echo "&t=";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 78), 78, $this->source), true), "html", null, true);
                    echo "\" onclick=\"window.open(this.href, 'facebook-share','width=580,height=296');return false;\">
                    <i class=\"fa fa-facebook\"><span class=\"sr-only\">facebook</span></i>
                </a>
              </li>
              <li class=\"twitter";
                    // line 82
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 82)) ? (" print-button-enabled") : ("")));
                    echo "\">
                <a href=\"http://twitter.com/share?text=";
                    // line 83
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 83), 83, $this->source), true), "html", null, true);
                    echo "&url=";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 83)]), "html", null, true);
                    echo "\" onclick=\"window.open(this.href, 'twitter-share', 'width=550,height=235');return false;\">
                    <i class=\"fa fa-twitter\"><span class=\"sr-only\">twitter</span></i>
                </a>
              </li>
              <li class=\"email";
                    // line 87
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 87)) ? (" print-button-enabled") : ("")));
                    echo "\">
                <a href=\"mailto:?Subject=";
                    // line 88
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 88), 88, $this->source), true), "html", null, true);
                    echo "&amp;Body=";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 88)]), "html", null, true);
                    echo "\">
                    <i class=\"fa fa-envelope-o\"><span class=\"sr-only\">email</span></i>
                </a>
              </li>
            ";
                }
                // line 93
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 93)) {
                    // line 94
                    echo "              <li class=\"print";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "share_links", [], "any", false, false, true, 94)) ? (" share-links-enabled") : ("")));
                    echo "\">
                <div class=\"print\">
                  <a href=\"javascript:window.print()\" class=\"print-button\">
                    <i class=\"fa fa-print\"><span class=\"sr-only\">print</span></i>
                  </a>
                </div>
              </li>
            ";
                }
                // line 102
                echo "          </ul>
        </div>
      ";
            }
            // line 105
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "affix_side", [], "any", false, false, true, 105)) {
                // line 106
                echo "        </div>
      ";
            }
            // line 108
            echo "      ";
            if (((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "share_links_print_position", [], "any", false, false, true, 108) == "bottom") && (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "share_links", [], "any", false, false, true, 108) || twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 108)))) {
                // line 109
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("corporate_lite/share-links"), "html", null, true);
                echo "
        ";
                // line 110
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("corporate_lite/fixed-share-links"), "html", null, true);
                echo "
        <div class=\"share-links\">
          <ul>
            ";
                // line 113
                if (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "share_links", [], "any", false, false, true, 113)) {
                    // line 114
                    echo "              <li class=\"facebook";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 114)) ? (" print-button-enabled") : ("")));
                    echo "\">
                <a href=\"https://www.facebook.com/sharer/sharer.php?u=";
                    // line 115
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 115)]), "html", null, true);
                    echo "&t=";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 115), 115, $this->source), true), "html", null, true);
                    echo "\" onclick=\"window.open(this.href, 'facebook-share','width=580,height=296');return false;\">
                    <i class=\"fa fa-facebook\"><span class=\"sr-only\">facebook</span></i>
                </a>
              </li>
              <li class=\"twitter";
                    // line 119
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 119)) ? (" print-button-enabled") : ("")));
                    echo "\">
                <a href=\"http://twitter.com/share?text=";
                    // line 120
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 120), 120, $this->source), true), "html", null, true);
                    echo "&url=";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 120)]), "html", null, true);
                    echo "\" onclick=\"window.open(this.href, 'twitter-share', 'width=550,height=235');return false;\">
                    <i class=\"fa fa-twitter\"><span class=\"sr-only\">twitter</span></i>
                </a>
              </li>
              <li class=\"email";
                    // line 124
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 124)) ? (" print-button-enabled") : ("")));
                    echo "\">
                <a href=\"mailto:?Subject=";
                    // line 125
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 125), 125, $this->source), true), "html", null, true);
                    echo "&amp;Body=";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 125)]), "html", null, true);
                    echo "\">
                    <i class=\"fa fa-envelope-o\"><span class=\"sr-only\">email</span></i>
                </a>
              </li>
            ";
                }
                // line 130
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "print_button", [], "any", false, false, true, 130)) {
                    // line 131
                    echo "              <li class=\"print";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, ($context["mt_setting"] ?? null), "share_links", [], "any", false, false, true, 131)) ? (" share-links-enabled") : ("")));
                    echo "\">
                <div class=\"print\">
                  <a href=\"javascript:window.print()\" class=\"print-button\">
                    <i class=\"fa fa-print\"><span class=\"sr-only\">print</span></i>
                  </a>
                </div>
              </li>
            ";
                }
                // line 139
                echo "          </ul>
        </div>
      ";
            }
            // line 142
            echo "    ";
        }
        // line 143
        echo "  </div>
";
    }

    // line 145
    public function block_meta_area($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 146
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 146, $this->source), "html", null, true);
        echo "
  ";
        // line 147
        if ( !($context["page"] ?? null)) {
            // line 148
            echo "    <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "node__title"], "method", false, false, true, 148), 148, $this->source), "html", null, true);
            echo ">
      <a href=\"";
            // line 149
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 149, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 149, $this->source), "html", null, true);
            echo "</a>
    </h2>
  ";
        }
        // line 152
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 152, $this->source), "html", null, true);
        echo "
  ";
        // line 153
        if (($context["display_submitted"] ?? null)) {
            // line 154
            echo "    <div class=\"node__meta\">
      <span";
            // line 155
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["author_attributes"] ?? null), "addClass", [0 => "node__submitted-info"], "method", false, false, true, 155), 155, $this->source), "html", null, true);
            echo ">
        ";
            // line 156
            echo t("<span class=\"node__submitted-info-text\">By</span> @author_name", array("@author_name" => ($context["author_name"] ?? null), ));
            // line 157
            echo "      </span>
    </div>
  ";
        }
    }

    // line 161
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 162
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("corporate_lite/node-article"), "html", null, true);
        echo "
  <div class=\"node__main-content-section\">
    ";
        // line 164
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 164, $this->source), "comment"), "html", null, true);
        echo "
  </div>
  ";
        // line 166
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 166), 166, $this->source), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "sites/all/modules/corporate_lite/templates/node--article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  418 => 166,  413 => 164,  407 => 162,  403 => 161,  396 => 157,  394 => 156,  390 => 155,  387 => 154,  385 => 153,  380 => 152,  372 => 149,  367 => 148,  365 => 147,  360 => 146,  356 => 145,  351 => 143,  348 => 142,  343 => 139,  331 => 131,  328 => 130,  318 => 125,  314 => 124,  305 => 120,  301 => 119,  292 => 115,  287 => 114,  285 => 113,  279 => 110,  274 => 109,  271 => 108,  267 => 106,  264 => 105,  259 => 102,  247 => 94,  244 => 93,  234 => 88,  230 => 87,  221 => 83,  217 => 82,  208 => 78,  203 => 77,  201 => 76,  194 => 73,  191 => 72,  184 => 68,  177 => 65,  174 => 64,  162 => 56,  159 => 55,  152 => 52,  149 => 51,  145 => 49,  142 => 48,  140 => 46,  138 => 45,  135 => 44,  132 => 41,  130 => 40,  124 => 38,  121 => 37,  118 => 36,  112 => 33,  108 => 31,  105 => 30,  99 => 27,  95 => 26,  91 => 25,  84 => 22,  77 => 18,  73 => 17,  70 => 16,  68 => 15,  65 => 14,  62 => 13,  59 => 12,  57 => 11,  54 => 10,  50 => 9,  39 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "sites/all/modules/corporate_lite/templates/node--article.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/drupal9/sites/all/modules/corporate_lite/templates/node--article.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 11, "trans" => 41);
        static $filters = array("escape" => 17, "format_date" => 25, "url_encode" => 78, "without" => 164);
        static $functions = array("attach_library" => 38, "url" => 78);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape', 'format_date', 'url_encode', 'without'],
                ['attach_library', 'url']
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
