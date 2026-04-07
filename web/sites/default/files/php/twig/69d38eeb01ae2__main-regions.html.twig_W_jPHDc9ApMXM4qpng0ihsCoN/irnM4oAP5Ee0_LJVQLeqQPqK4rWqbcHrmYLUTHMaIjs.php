<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @solo/partials/_main-regions.html.twig */
class __TwigTemplate_a6b4dda3d7ee189ab9a76af5b90854db extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["main_left"] = (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 1))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 1)) : (null));
        // line 2
        $context["main_middle"] = (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 2))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 2)) : (null));
        // line 3
        $context["main_right"] = (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 3))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 3)) : (null));
        // line 4
        yield "
";
        // line 5
        if (((($context["main_left"] ?? null) || ($context["main_middle"] ?? null)) || ($context["main_right"] ?? null))) {
            // line 6
            yield "
";
            // line 7
            $context["main_regions"] = 0;
            // line 8
            if ((($tmp = ($context["main_left"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 9
                yield "  ";
                $context["main_regions"] = (($context["main_regions"] ?? null) + 1);
                // line 10
                yield "  ";
                $context["sidebar_first_outer_classes"] = "region-outer main-box main-box-sides sidebar-box-first";
                // line 11
                yield "  ";
                $context["sidebar_first_inner_classes"] = (("region-inner main-box-inner sidebar-box-first-inner fade-inner" . (((($tmp = ($context["align_sidebar_first"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["align_sidebar_first"] ?? null))) : (""))) . (((($tmp = ($context["classes_sidebar_first"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["classes_sidebar_first"] ?? null))) : ("")));
            }
            // line 13
            yield "
";
            // line 14
            if ((($tmp = ($context["main_middle"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 15
                yield "  ";
                $context["main_regions"] = (($context["main_regions"] ?? null) + 1);
                // line 16
                yield "  ";
                $context["content_outer_classes"] = "region-outer main-box sidebar-box-main";
                // line 17
                yield "  ";
                $context["content_inner_classes"] = (("region-inner main-box-inner sidebar-box-main-inner fade-inner" . (((($tmp = ($context["align_content"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["align_content"] ?? null))) : (""))) . (((($tmp = ($context["classes_content"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["classes_content"] ?? null))) : ("")));
            }
            // line 19
            yield "
";
            // line 20
            if ((($tmp = ($context["main_right"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 21
                yield "  ";
                $context["main_regions"] = (($context["main_regions"] ?? null) + 1);
                // line 22
                yield "  ";
                $context["sidebar_second_outer_classes"] = "region-outer main-box main-box-sides sidebar-box-second";
                // line 23
                yield "  ";
                $context["sidebar_second_inner_classes"] = (("region-inner main-box-inner sidebar-box-second-inner fade-inner" . (((($tmp = ($context["align_sidebar_second"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["align_sidebar_second"] ?? null))) : (""))) . (((($tmp = ($context["classes_sidebar_second"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["classes_sidebar_second"] ?? null))) : ("")));
            }
            // line 25
            yield "
";
            // line 26
            $context["main_active"] = ("active-main-" . ($context["main_regions"] ?? null));
            // line 27
            yield "
";
            // line 28
            $context["main_outer"] = (((("solo-outer multi main-container" . (((($tmp =             // line 29
($context["main_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["main_active"] ?? null))) : (""))) . (((($tmp =             // line 30
($context["site_regions_main_border"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" has-border") : (""))) . (((($tmp =             // line 31
($context["site_regions_main_rounded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["site_regions_main_rounded"] ?? null))) : (""))) . (((($tmp =             // line 32
($context["classes_main_container"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["classes_main_container"] ?? null))) : ("")));
            // line 34
            yield "
";
            // line 35
            $context["main_inner"] = (("solo-inner solo-col main-container-inner" . (((($tmp =             // line 36
($context["main_layout"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["main_layout"] ?? null))) : (""))) . (((($tmp =             // line 37
($context["main_layout_order"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["main_layout_order"] ?? null))) : ("")));
            // line 39
            yield "
  <!-- Start: Main -->
  <div id=\"main-container\" class=\"";
            // line 41
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["main_outer"] ?? null), "html", null, true);
            yield "\" ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes_main_container"] ?? null), "html", null, true);
            yield ">
    <div id=\"main-container-inner\" class=\"";
            // line 42
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["main_inner"] ?? null), "html", null, true);
            yield "\">
      <!-- Start: Main Container -->

    ";
            // line 45
            if ((($tmp = ($context["main_left"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 46
                yield "      <!-- Start: Left SideBar -->
      <div id=\"sidebar-box-first\" class=\"";
                // line 47
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_first_outer_classes"] ?? null), "html", null, true);
                yield "\" role=\"complementary\" aria-label=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sidebar First"));
                yield "\">
        <div class=\"";
                // line 48
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_first_inner_classes"] ?? null), "html", null, true);
                yield "\" ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes_sidebar_first"] ?? null), "html", null, true);
                yield ">
          ";
                // line 49
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["main_left"] ?? null), "html", null, true);
                yield "
        </div>
      </div>
      <!-- End: Left SideBar -->
    ";
            }
            // line 54
            yield "
    ";
            // line 55
            if ((($tmp = ($context["main_middle"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 56
                yield "      <!-- Start: Main Content -->
      <div id=\"sidebar-box-main\" class=\"";
                // line 57
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_outer_classes"] ?? null), "html", null, true);
                yield "\" role=\"main\">
        <div class=\"";
                // line 58
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_inner_classes"] ?? null), "html", null, true);
                yield "\" ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes_content"] ?? null), "html", null, true);
                yield ">
          ";
                // line 59
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["enabled_skip_links"] ?? null), "skip_main_content", [], "any", false, false, true, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 60
                    yield "          <a id=\"main-content\" tabindex=\"-1\"></a>
          ";
                }
                // line 62
                yield "          ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["main_middle"] ?? null), "html", null, true);
                yield "
        </div>
      </div>
      <!-- End: Main Content -->
    ";
            }
            // line 67
            yield "
    ";
            // line 68
            if ((($tmp = ($context["main_right"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 69
                yield "      <!-- Start: Right SideBar -->
      <div id=\"sidebar-box-second\" class=\"";
                // line 70
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_second_outer_classes"] ?? null), "html", null, true);
                yield "\" role=\"complementary\" aria-label=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sidebar Second"));
                yield "\">
        <div class=\"";
                // line 71
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_second_inner_classes"] ?? null), "html", null, true);
                yield "\" ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes_sidebar_second"] ?? null), "html", null, true);
                yield ">
          ";
                // line 72
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["main_right"] ?? null), "html", null, true);
                yield "
        </div>
      </div>
      <!-- End: Right SideBar -->
    ";
            }
            // line 77
            yield "
      <!-- End: Main Container -->
    </div>
  </div>
<!-- End: Main -->
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "align_sidebar_first", "classes_sidebar_first", "align_content", "classes_content", "align_sidebar_second", "classes_sidebar_second", "site_regions_main_border", "site_regions_main_rounded", "classes_main_container", "main_layout", "main_layout_order", "attributes_main_container", "attributes_sidebar_first", "attributes_content", "enabled_skip_links", "attributes_sidebar_second"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@solo/partials/_main-regions.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  225 => 77,  217 => 72,  211 => 71,  205 => 70,  202 => 69,  200 => 68,  197 => 67,  188 => 62,  184 => 60,  182 => 59,  176 => 58,  172 => 57,  169 => 56,  167 => 55,  164 => 54,  156 => 49,  150 => 48,  144 => 47,  141 => 46,  139 => 45,  133 => 42,  127 => 41,  123 => 39,  121 => 37,  120 => 36,  119 => 35,  116 => 34,  114 => 32,  113 => 31,  112 => 30,  111 => 29,  110 => 28,  107 => 27,  105 => 26,  102 => 25,  98 => 23,  95 => 22,  92 => 21,  90 => 20,  87 => 19,  83 => 17,  80 => 16,  77 => 15,  75 => 14,  72 => 13,  68 => 11,  65 => 10,  62 => 9,  60 => 8,  58 => 7,  55 => 6,  53 => 5,  50 => 4,  48 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@solo/partials/_main-regions.html.twig", "/var/www/html/web/themes/contrib/solo/partials/_main-regions.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 5];
        static $filters = ["escape" => 41, "t" => 47];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 't'],
                [],
                $this->source
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
