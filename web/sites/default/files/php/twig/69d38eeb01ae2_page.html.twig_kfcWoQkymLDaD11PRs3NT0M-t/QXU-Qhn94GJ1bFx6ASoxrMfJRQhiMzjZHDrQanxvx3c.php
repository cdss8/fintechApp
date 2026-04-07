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

/* themes/contrib/solo/templates/layout/page.html.twig */
class __TwigTemplate_413d8593a146ccea3b556b0823a390d7 extends Template
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
        // line 59
        $context["svg_bars"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            // line 60
            yield from $this->load("@solo/partials/svg/_svg-bars.html.twig", 60)->unwrap()->yield($context);
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 62
        $context["svg_search"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            // line 63
            yield from $this->load("@solo/partials/svg/_svg-search.html.twig", 63)->unwrap()->yield($context);
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 65
        yield "
<!-- Start: Page Wrapper -->
";
        // line 67
        $context["page_wrapper_classes"] = (((((((((((((("page-wrapper" . (((($tmp =         // line 68
($context["site_width_class"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["site_width_class"] ?? null))) : (""))) . (((($tmp =         // line 69
($context["site_global_breakpoints"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["site_global_breakpoints"] ?? null))) : (""))) . (((($tmp =         // line 70
($context["site_menu_breakpoints"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["site_menu_breakpoints"] ?? null))) : (""))) . (((($tmp =         // line 71
($context["site_pagetitle_google_font"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["site_pagetitle_google_font"] ?? null))) : (""))) . (((($tmp =         // line 72
($context["site_pagetitle_animate_on"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["site_pagetitle_animate_on"] ?? null))) : (""))) . (((($tmp =         // line 73
($context["site_pagetitle_center"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["site_pagetitle_center"] ?? null))) : (""))) . (((($tmp =         // line 74
($context["title_size_l"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["title_size_l"] ?? null))) : (""))) . (((($tmp =         // line 75
($context["title_size_s"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["title_size_s"] ?? null))) : (""))) . (((($tmp =         // line 76
($context["classes_page_wrapper"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((" " . ($context["classes_page_wrapper"] ?? null))) : (""))) . (((($tmp =         // line 77
($context["opacity_page_wrapper"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" solo__fade-in") : (""))) . (((($tmp =         // line 78
($context["site_breadcrumb_scroll"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" solo__bc-scroll") : (""))) . (((($tmp =         // line 79
($context["site_regions_collapse_order"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" solo__collapse-order") : (""))) . (((($tmp =         // line 80
($context["site_flip_header_menu"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" menu-flipped") : (""))) . (((($tmp =         // line 81
($context["site_inline_items_on"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" solo__inline-items") : ("")));
        // line 83
        yield "
<div id=\"page-wrapper\" class=\"";
        // line 84
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page_wrapper_classes"] ?? null), "html", null, true);
        yield "\" ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes_page_wrapper"] ?? null), "html", null, true);
        yield ">

  ";
        // line 86
        if ((($context["site_regions_highlighted_disable"] ?? null) == 0)) {
            // line 87
            yield "  ";
            yield from $this->load("@solo/partials/_highlighted.html.twig", 87)->unwrap()->yield($context);
            // line 88
            yield "  ";
        }
        // line 89
        yield "  ";
        if (((($context["site_regions_highlighted_disable"] ?? null) == 1) && ($context["is_front"] ?? null))) {
            // line 90
            yield "  ";
            yield from $this->load("@solo/partials/_highlighted.html.twig", 90)->unwrap()->yield($context);
            // line 91
            yield "  ";
        }
        // line 92
        yield "  ";
        if (((($context["site_regions_highlighted_disable"] ?? null) == 2) &&  !($context["is_front"] ?? null))) {
            // line 93
            yield "  ";
            yield from $this->load("@solo/partials/_highlighted.html.twig", 93)->unwrap()->yield($context);
            // line 94
            yield "  ";
        }
        // line 95
        yield "
  ";
        // line 96
        yield from $this->load("@solo/partials/_primary-sidebar-menu.html.twig", 96)->unwrap()->yield($context);
        // line 97
        yield "
  ";
        // line 98
        yield from $this->load("@solo/partials/_fixed-search-block.html.twig", 98)->unwrap()->yield($context);
        // line 99
        yield "
  ";
        // line 100
        yield from $this->load("@solo/partials/_popup-login-block.html.twig", 100)->unwrap()->yield($context);
        // line 101
        yield "
  ";
        // line 102
        if ((($tmp = ($context["site_flip_header_menu"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 103
            yield "  ";
            yield from $this->load("@solo/partials/_primary-menu.html.twig", 103)->unwrap()->yield($context);
            // line 104
            yield "  ";
            yield from $this->load("@solo/partials/_header.html.twig", 104)->unwrap()->yield($context);
            // line 105
            yield "  ";
        } else {
            // line 106
            yield "  ";
            yield from $this->load("@solo/partials/_header.html.twig", 106)->unwrap()->yield($context);
            // line 107
            yield "  ";
            yield from $this->load("@solo/partials/_primary-menu.html.twig", 107)->unwrap()->yield($context);
            // line 108
            yield "  ";
        }
        // line 109
        yield "
  ";
        // line 110
        if ((($context["site_regions_welcome_disable"] ?? null) == 0)) {
            // line 111
            yield "  ";
            yield from $this->load("@solo/partials/_welcome-text.html.twig", 111)->unwrap()->yield($context);
            // line 112
            yield "  ";
        }
        // line 113
        yield "  ";
        if (((($context["site_regions_welcome_disable"] ?? null) == 1) && ($context["is_front"] ?? null))) {
            // line 114
            yield "  ";
            yield from $this->load("@solo/partials/_welcome-text.html.twig", 114)->unwrap()->yield($context);
            // line 115
            yield "  ";
        }
        // line 116
        yield "  ";
        if (((($context["site_regions_welcome_disable"] ?? null) == 2) &&  !($context["is_front"] ?? null))) {
            // line 117
            yield "  ";
            yield from $this->load("@solo/partials/_welcome-text.html.twig", 117)->unwrap()->yield($context);
            // line 118
            yield "  ";
        }
        // line 119
        yield "
  ";
        // line 120
        if ((($context["site_regions_top_disable"] ?? null) == 0)) {
            // line 121
            yield "  ";
            yield from $this->load("@solo/partials/_top-regions.html.twig", 121)->unwrap()->yield($context);
            // line 122
            yield "  ";
        }
        // line 123
        yield "  ";
        if (((($context["site_regions_top_disable"] ?? null) == 1) && ($context["is_front"] ?? null))) {
            // line 124
            yield "  ";
            yield from $this->load("@solo/partials/_top-regions.html.twig", 124)->unwrap()->yield($context);
            // line 125
            yield "  ";
        }
        // line 126
        yield "  ";
        if (((($context["site_regions_top_disable"] ?? null) == 2) &&  !($context["is_front"] ?? null))) {
            // line 127
            yield "  ";
            yield from $this->load("@solo/partials/_top-regions.html.twig", 127)->unwrap()->yield($context);
            // line 128
            yield "  ";
        }
        // line 129
        yield "
  ";
        // line 130
        yield from $this->load("@solo/partials/_system-messages.html.twig", 130)->unwrap()->yield($context);
        // line 131
        yield "
  ";
        // line 132
        yield from $this->load("@solo/partials/_page-title.html.twig", 132)->unwrap()->yield($context);
        // line 133
        yield "
  ";
        // line 134
        yield from $this->load("@solo/partials/_breadcrumb.html.twig", 134)->unwrap()->yield($context);
        // line 135
        yield "
  ";
        // line 136
        yield from $this->load("@solo/partials/_main-regions.html.twig", 136)->unwrap()->yield($context);
        // line 137
        yield "
  ";
        // line 138
        if ((($context["site_regions_bottom_disable"] ?? null) == 0)) {
            // line 139
            yield "  ";
            yield from $this->load("@solo/partials/_bottom-regions.html.twig", 139)->unwrap()->yield($context);
            // line 140
            yield "  ";
        }
        // line 141
        yield "  ";
        if (((($context["site_regions_bottom_disable"] ?? null) == 1) && ($context["is_front"] ?? null))) {
            // line 142
            yield "  ";
            yield from $this->load("@solo/partials/_bottom-regions.html.twig", 142)->unwrap()->yield($context);
            // line 143
            yield "  ";
        }
        // line 144
        yield "  ";
        if (((($context["site_regions_bottom_disable"] ?? null) == 2) &&  !($context["is_front"] ?? null))) {
            // line 145
            yield "  ";
            yield from $this->load("@solo/partials/_bottom-regions.html.twig", 145)->unwrap()->yield($context);
            // line 146
            yield "  ";
        }
        // line 147
        yield "
  ";
        // line 148
        if ((($context["site_regions_footer_disable"] ?? null) == 0)) {
            // line 149
            yield "  ";
            yield from $this->load("@solo/partials/_footer-regions.html.twig", 149)->unwrap()->yield($context);
            // line 150
            yield "  ";
        }
        // line 151
        yield "  ";
        if (((($context["site_regions_footer_disable"] ?? null) == 1) && ($context["is_front"] ?? null))) {
            // line 152
            yield "  ";
            yield from $this->load("@solo/partials/_footer-regions.html.twig", 152)->unwrap()->yield($context);
            // line 153
            yield "  ";
        }
        // line 154
        yield "  ";
        if (((($context["site_regions_footer_disable"] ?? null) == 2) &&  !($context["is_front"] ?? null))) {
            // line 155
            yield "  ";
            yield from $this->load("@solo/partials/_footer-regions.html.twig", 155)->unwrap()->yield($context);
            // line 156
            yield "  ";
        }
        // line 157
        yield "
  ";
        // line 158
        yield from $this->load("@solo/partials/_footer-menu.html.twig", 158)->unwrap()->yield($context);
        // line 159
        yield "
  ";
        // line 160
        yield from $this->load("@solo/partials/_copyright.html.twig", 160)->unwrap()->yield($context);
        // line 161
        yield "</div>
<!-- End: Page Wrapper -->
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["site_width_class", "site_global_breakpoints", "site_menu_breakpoints", "site_pagetitle_google_font", "site_pagetitle_animate_on", "site_pagetitle_center", "title_size_l", "title_size_s", "classes_page_wrapper", "opacity_page_wrapper", "site_breadcrumb_scroll", "site_regions_collapse_order", "site_flip_header_menu", "site_inline_items_on", "attributes_page_wrapper", "site_regions_highlighted_disable", "is_front", "site_regions_welcome_disable", "site_regions_top_disable", "site_regions_bottom_disable", "site_regions_footer_disable"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/solo/templates/layout/page.html.twig";
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
        return array (  296 => 161,  294 => 160,  291 => 159,  289 => 158,  286 => 157,  283 => 156,  280 => 155,  277 => 154,  274 => 153,  271 => 152,  268 => 151,  265 => 150,  262 => 149,  260 => 148,  257 => 147,  254 => 146,  251 => 145,  248 => 144,  245 => 143,  242 => 142,  239 => 141,  236 => 140,  233 => 139,  231 => 138,  228 => 137,  226 => 136,  223 => 135,  221 => 134,  218 => 133,  216 => 132,  213 => 131,  211 => 130,  208 => 129,  205 => 128,  202 => 127,  199 => 126,  196 => 125,  193 => 124,  190 => 123,  187 => 122,  184 => 121,  182 => 120,  179 => 119,  176 => 118,  173 => 117,  170 => 116,  167 => 115,  164 => 114,  161 => 113,  158 => 112,  155 => 111,  153 => 110,  150 => 109,  147 => 108,  144 => 107,  141 => 106,  138 => 105,  135 => 104,  132 => 103,  130 => 102,  127 => 101,  125 => 100,  122 => 99,  120 => 98,  117 => 97,  115 => 96,  112 => 95,  109 => 94,  106 => 93,  103 => 92,  100 => 91,  97 => 90,  94 => 89,  91 => 88,  88 => 87,  86 => 86,  79 => 84,  76 => 83,  74 => 81,  73 => 80,  72 => 79,  71 => 78,  70 => 77,  69 => 76,  68 => 75,  67 => 74,  66 => 73,  65 => 72,  64 => 71,  63 => 70,  62 => 69,  61 => 68,  60 => 67,  56 => 65,  52 => 63,  50 => 62,  46 => 60,  44 => 59,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/solo/templates/layout/page.html.twig", "/var/www/html/web/themes/contrib/solo/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 59, "include" => 60, "if" => 86];
        static $filters = ["escape" => 84];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include', 'if'],
                ['escape'],
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
