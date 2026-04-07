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

/* themes/contrib/solo/templates/navigation/menu--primary-menu.html.twig */
class __TwigTemplate_5448e94039deba99668447a2a086e413 extends Template
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
        // line 24
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 25
        $context["svg_bars"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            // line 26
            yield "    ";
            yield from $this->load("@solo/partials/svg/_svg-bars.html.twig", 26)->unwrap()->yield($context);
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 31
        yield "<div class=\"solo-clear solo-menu navigation-responsive navigation-primary-responsive";
        yield (((($tmp = ($context["click_hover"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (" " . ($context["click_hover"] ?? null)), "html", null, true)) : (""));
        yield (((($tmp = ($context["remove_arrow"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (" " . ($context["remove_arrow"] ?? null)), "html", null, true)) : (""));
        yield (((($tmp = ($context["menu_alignment"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (" " . ($context["menu_alignment"] ?? null)), "html", null, true)) : (""));
        yield (((($tmp = ($context["expand_left"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (" " . ($context["expand_left"] ?? null)), "html", null, true)) : (""));
        yield (((($tmp = ($context["primary_menu_branding"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (" " . ($context["primary_menu_branding"] ?? null)), "html", null, true)) : (""));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($tmp = ($context["keyboard_enabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" solo-keyboard-enabled") : ("")));
        yield "\"
     aria-label=\"";
        // line 32
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Main navigation"));
        yield "\"
     data-menu-name=\"";
        // line 33
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["menu_name"] ?? null), "html", null, true);
        yield "\"
     data-interaction-type=\"";
        // line 34
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("click_hover", $context)) ? (Twig\Extension\CoreExtension::default(($context["click_hover"] ?? null), "click")) : ("click")), "html", null, true);
        yield "\">
    ";
        // line 35
        if ((($tmp = ($context["primary_menu_branding"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "        ";
            yield from $this->load("@solo/partials/_menu-branding.html.twig", 36)->unwrap()->yield($context);
            // line 37
            yield "    ";
        }
        // line 38
        yield "    <div class=\"mobile-nav hamburger-icon solo-block\">
        <button class=\"solo-button-menu mobile-menubar-toggler-button\"
                data-drupal-selector=\"mobile-menubar-toggler-button\"
                tabindex='0'
                aria-label=\"";
        // line 42
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle main menu"));
        yield "\"
                aria-expanded=\"false\"
                aria-controls=\"";
        // line 44
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["menu_name"] ?? null) . \Drupal\Component\Utility\Html::getUniqueId("__menubar")), "html", null, true);
        yield "\"
                type=\"button\">
            <span aria-hidden=\"true\">";
        // line 46
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["svg_bars"] ?? null));
        yield "</span>
            <span class=\"visually-hidden\">";
        // line 47
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle main menu"));
        yield "</span>
        </button>
    </div>
    ";
        // line 50
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 50, $this->getSourceContext())->macro_menu_links(...[($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["menu_name"] ?? null), ($context["aria_id"] ?? null), ($context["megamenu"] ?? null), ($context["megamenu_layout"] ?? null), ($context["sub_mega"] ?? null), ($context["sub_menu_header"] ?? null)]));
        yield "
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "click_hover", "remove_arrow", "menu_alignment", "expand_left", "primary_menu_branding", "keyboard_enabled", "menu_name", "items", "attributes", "aria_id", "megamenu", "megamenu_layout", "sub_mega", "sub_menu_header", "loop"]);        yield from [];
    }

    // line 28
    public function macro_svg_icon($icon_value = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "icon_value" => $icon_value,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            // line 29
            yield "    ";
            yield from $this->load("@solo/partials/svg/_svg-menu-arrow.html.twig", 29)->unwrap()->yield($context);
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 52
    public function macro_menu_links($items = null, $attributes = null, $menu_level = null, $menu_name = null, $aria_id = null, $megamenu = null, $megamenu_layout = null, $sub_mega = null, $sub_menu_header = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "items" => $items,
            "attributes" => $attributes,
            "menu_level" => $menu_level,
            "menu_name" => $menu_name,
            "aria_id" => $aria_id,
            "megamenu" => $megamenu,
            "megamenu_layout" => $megamenu_layout,
            "sub_mega" => $sub_mega,
            "sub_menu_header" => $sub_menu_header,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            // line 53
            yield "    ";
            $context["menu_level"] = (($context["menu_level"] ?? null) + 1);
            // line 54
            yield "    ";
            $context["menu_classes"] = ["navigation__menubar", "navigation__responsive", "navigation__primary", \Drupal\Component\Utility\Html::getClass(            // line 58
($context["megamenu"] ?? null)), \Drupal\Component\Utility\Html::getClass(            // line 59
($context["megamenu_layout"] ?? null)), ("navigation__menubar-" . \Drupal\Component\Utility\Html::getClass(            // line 60
($context["menu_name"] ?? null)))];
            // line 62
            $context["submenu_classes"] = [("sub__menu sub__menu-" . \Drupal\Component\Utility\Html::getClass(            // line 63
($context["menu_name"] ?? null))), \Drupal\Component\Utility\Html::getClass(            // line 64
($context["sub_mega"] ?? null)), \Drupal\Component\Utility\Html::getClass(            // line 65
($context["sub_menu_header"] ?? null))];
            // line 67
            $context["menubar_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["id" => (            // line 68
($context["menu_name"] ?? null) . \Drupal\Component\Utility\Html::getUniqueId("__menubar")), "role" => "menubar", "data-menu-level" =>             // line 70
($context["menu_level"] ?? null), "aria-orientation" => "horizontal"]);
            // line 73
            $context["submenu_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["id" => (            // line 74
($context["menu_name"] ?? null) . \Drupal\Component\Utility\Html::getUniqueId("__submenu")), "role" => "menu", "tabindex" => "-1", "aria-hidden" => "true", "data-menu-level" =>             // line 78
($context["menu_level"] ?? null), "aria-orientation" => "vertical"]);
            // line 81
            yield "
";
            // line 82
            if ((($tmp = ($context["items"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 83
                yield "
  ";
                // line 84
                if ((($context["menu_level"] ?? null) == 1)) {
                    // line 85
                    yield "  <ul";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["menu_classes"] ?? null)], "method", false, false, true, 85), "removeAttribute", ["region"], "method", false, false, true, 85), "html", null, true);
                    yield " ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["menubar_attributes"] ?? null), "html", null, true);
                    yield ">
  ";
                } else {
                    // line 87
                    yield "  <ul";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [($context["menu_classes"] ?? null)], "method", false, false, true, 87), "addClass", [($context["submenu_classes"] ?? null)], "method", false, false, true, 87), "html", null, true);
                    yield " ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["submenu_attributes"] ?? null), "html", null, true);
                    yield ">
  ";
                }
                // line 89
                yield "
    ";
                // line 91
                yield "    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 92
                    yield "
    ";
                    // line 94
                    yield "    ";
                    $context["system_path"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 94), "isRouted", [], "method", false, false, true, 94)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 94), "getInternalPath", [], "method", false, false, true, 94)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 94), "toString", [], "method", false, false, true, 94)));
                    // line 95
                    yield "    ";
                    if ((($context["system_path"] ?? null) == "")) {
                        // line 96
                        yield "      ";
                        $context["system_path"] = "<front>";
                        // line 97
                        yield "    ";
                    }
                    // line 98
                    yield "
    ";
                    // line 100
                    yield "    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 100), "isRouted", [], "any", false, false, true, 100) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 100), "routeName", [], "any", false, false, true, 100) == "<nolink>"))) {
                        // line 101
                        yield "        ";
                        $context["link_type"] = "nolink";
                        // line 102
                        yield "    ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 102), "isRouted", [], "any", false, false, true, 102) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 102), "routeName", [], "any", false, false, true, 102) == "<button>"))) {
                        // line 103
                        yield "        ";
                        $context["link_type"] = "button";
                        // line 104
                        yield "    ";
                    } else {
                        // line 105
                        yield "        ";
                        $context["link_type"] = "link";
                        // line 106
                        yield "    ";
                    }
                    // line 107
                    yield "
    ";
                    // line 109
                    yield "    ";
                    $context["is_external"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 109), "isExternal", [], "method", false, false, true, 109);
                    // line 110
                    yield "    ";
                    $context["url_string"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 110), "toString", [], "method", false, false, true, 110);
                    // line 111
                    yield "    ";
                    $context["is_linkable"] = ((($context["link_type"] ?? null) != "nolink") && (($context["url_string"] ?? null) != ""));
                    // line 112
                    yield "
    ";
                    // line 113
                    $macros["͜macros"] = $this;
                    // line 114
                    yield "    ";
                    $context["aria_id"] = \Drupal\Component\Utility\Html::getUniqueId(((($context["menu_name"] ?? null) . "-sub__menu-") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 114)));
                    // line 115
                    yield "    ";
                    $context["dropdown_toggler_class"] = (((($context["menu_level"] ?? null) == 1)) ? ("dropdown-toggler-parent") : ("dropdown-toggler-child"));
                    // line 116
                    yield "    ";
                    $context["rendered_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 116));
                    // line 117
                    yield "
    ";
                    // line 118
                    $context["item_classes"] = [("btn-animate nav__menu-item nav__menu-item-" . \Drupal\Component\Utility\Html::getClass(                    // line 119
($context["menu_name"] ?? null))), (((                    // line 120
$context["item"] && (($context["menu_level"] ?? null) == 1))) ? ("nav__menubar-item") : ("")), (((                    // line 121
$context["item"] && (($context["menu_level"] ?? null) > 1))) ? ("nav__submenu-item") : ("")), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                     // line 122
$context["item"], "is_expanded", [], "any", false, false, true, 122)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("has-sub__menu") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,                     // line 123
$context["item"], "is_expanded", [], "any", false, false, true, 123) && ($context["is_linkable"] ?? null))) ? ("link-and-button") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,                     // line 124
$context["item"], "is_expanded", [], "any", false, false, true, 124) &&  !($context["is_linkable"] ?? null))) ? ("button-only") : ("")), ((( !CoreExtension::getAttribute($this->env, $this->source,                     // line 125
$context["item"], "is_expanded", [], "any", false, false, true, 125) && ($context["is_linkable"] ?? null))) ? ("link-only") : ("")), ((( !CoreExtension::getAttribute($this->env, $this->source,                     // line 126
$context["item"], "is_expanded", [], "any", false, false, true, 126) && (($context["link_type"] ?? null) == "nolink"))) ? ("no-link") : ("")), ((( !CoreExtension::getAttribute($this->env, $this->source,                     // line 127
$context["item"], "is_expanded", [], "any", false, false, true, 127) && (($context["link_type"] ?? null) == "button"))) ? ("keyboard-button") : ("")), ((( !CoreExtension::getAttribute($this->env, $this->source,                     // line 128
$context["item"], "is_expanded", [], "any", false, false, true, 128) && ($context["is_external"] ?? null))) ? ("external-link") : ("")), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                     // line 129
$context["item"], "in_active_trail", [], "any", false, false, true, 129)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-active") : (""))];
                    // line 132
                    yield "
    ";
                    // line 133
                    $context["dorpdown_toggler_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["data-drupal-selector" =>                     // line 134
($context["aria_id"] ?? null), "role" => "menuitem", "aria-controls" =>                     // line 136
($context["aria_id"] ?? null), "aria-haspopup" => "true", "aria-expanded" => "false", "tabindex" => "-1", "type" => "button", "data-menu-item-id" => CoreExtension::getAttribute($this->env, $this->source,                     // line 141
$context["loop"], "index", [], "any", false, false, true, 141)]);
                    // line 143
                    yield "
    ";
                    // line 145
                    yield "    ";
                    $context["additional_classes"] = "";
                    // line 146
                    yield "    ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 146) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 146), "getOption", ["attributes"], "method", false, false, true, 146)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 146), "getOption", ["attributes"], "method", false, false, true, 146), "class", [], "any", false, false, true, 146))) {
                        // line 147
                        yield "        ";
                        $context["additional_classes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 147), "getOption", ["attributes"], "method", false, false, true, 147), "class", [], "any", false, false, true, 147);
                        // line 148
                        yield "    ";
                    }
                    // line 149
                    yield "    ";
                    $context["class_list"] = ((is_iterable(($context["additional_classes"] ?? null))) ? (Twig\Extension\CoreExtension::join(($context["additional_classes"] ?? null), " ")) : (($context["additional_classes"] ?? null)));
                    // line 150
                    yield "
    ";
                    // line 152
                    yield "    ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 152)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 153
                        yield "    <li";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 153), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 153), "html", null, true);
                        yield " role='none' data-link-type=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["link_type"] ?? null), "html", null, true);
                        yield "\">
    ";
                        // line 154
                        if ((($tmp = ($context["is_linkable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 155
                            yield "        ";
                            // line 156
                            yield "        ";
                            $context["c_link_classes"] = [("nav__menu-link nav__menu-link-" . \Drupal\Component\Utility\Html::getClass(($context["menu_name"] ?? null))), "url-added"];
                            // line 157
                            yield "        ";
                            if ((($tmp = ($context["class_list"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 158
                                yield "            ";
                                $context["c_link_classes"] = Twig\Extension\CoreExtension::merge(($context["c_link_classes"] ?? null), [($context["class_list"] ?? null)]);
                                // line 159
                                yield "        ";
                            }
                            // line 160
                            yield "        <a href=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 160), "html", null, true);
                            yield "\" class=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["c_link_classes"] ?? null), " "), "html", null, true);
                            yield "\"";
                            // line 161
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 161) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 161), "getOption", ["attributes"], "method", false, false, true, 161)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 161), "getOption", ["attributes"], "method", false, false, true, 161), "title", [], "any", false, false, true, 161))) {
                                yield " title=\"";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 161), "getOption", ["attributes"], "method", false, false, true, 161), "title", [], "any", false, false, true, 161), "html", null, true);
                                yield "\" ";
                            }
                            // line 162
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 162) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 162), "getOption", ["attributes"], "method", false, false, true, 162)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 162), "getOption", ["attributes"], "method", false, false, true, 162), "target", [], "any", false, false, true, 162))) {
                                yield " target=\"";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 162), "getOption", ["attributes"], "method", false, false, true, 162), "target", [], "any", false, false, true, 162), "html", null, true);
                                yield "\" ";
                            }
                            // line 163
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 163) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 163), "getOption", ["attributes"], "method", false, false, true, 163)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 163), "getOption", ["attributes"], "method", false, false, true, 163), "rel", [], "any", false, false, true, 163))) {
                                yield " rel=\"";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 163), "getOption", ["attributes"], "method", false, false, true, 163), "rel", [], "any", false, false, true, 163), "html", null, true);
                                yield "\" ";
                            }
                            // line 164
                            if ((($tmp = ($context["is_external"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                yield " target=\"_blank\" rel=\"noopener\"";
                            }
                            // line 165
                            yield "tabindex=\"-1\" data-drupal-link-system-path=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["system_path"] ?? null), "html", null, true);
                            yield "\" role='menuitem'";
                            // line 166
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 166) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 166)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 166), "toString", [], "method", false, false, true, 166) == $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<current>")))) {
                                yield " aria-current=\"page\"";
                            }
                            yield ">
            <span class=\"menu__url-title-enabled\">";
                            // line 167
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 167), "html", null, true);
                            yield "</span>
        </a>
        <button class=\"en-link dropdown-toggler ";
                            // line 169
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["dropdown_toggler_class"] ?? null), "html", null, true);
                            yield "\" ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["dorpdown_toggler_attributes"] ?? null), "html", null, true);
                            yield ">
            <span class=\"visually-hidden\">";
                            // line 170
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("@title sub-navigation", ["@title" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 170)]));
                            yield "</span>
            <span class=\"toggler-icon dropdown-arrow\">";
                            // line 171
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["͜macros"]->getTemplateForMacro("macro_svg_icon", $context, 171, $this->getSourceContext())->macro_svg_icon(...["M6 9l6 6 6-6"]));
                            yield "</span>
        </button>
    ";
                        } else {
                            // line 174
                            yield "        ";
                            // line 175
                            yield "        ";
                            $context["button_classes"] = ["ds-link", "dropdown-toggler", "nav__menu-button", ("nav__menu-button-" . \Drupal\Component\Utility\Html::getClass(                            // line 179
($context["menu_name"] ?? null))),                             // line 180
($context["dropdown_toggler_class"] ?? null)];
                            // line 182
                            yield "        ";
                            if ((($tmp = ($context["class_list"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 183
                                yield "          ";
                                $context["button_classes"] = Twig\Extension\CoreExtension::merge(($context["button_classes"] ?? null), [($context["class_list"] ?? null)]);
                                // line 184
                                yield "        ";
                            }
                            // line 185
                            yield "        <button class=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["button_classes"] ?? null), " "), "html", null, true);
                            yield "\" ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["dorpdown_toggler_attributes"] ?? null), "html", null, true);
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 185) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 185), "getOption", ["attributes"], "method", false, false, true, 185)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 185), "getOption", ["attributes"], "method", false, false, true, 185), "title", [], "any", false, false, true, 185))) {
                                yield " title=\"";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 185), "getOption", ["attributes"], "method", false, false, true, 185), "title", [], "any", false, false, true, 185), "html", null, true);
                                yield "\" ";
                            }
                            yield "data-link-type=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["link_type"] ?? null), "html", null, true);
                            yield "\">
            <span class=\"menu__url-title-disabled\">";
                            // line 186
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 186), "html", null, true);
                            yield "</span>
            <span class=\"visually-hidden\">";
                            // line 187
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("@title sub-navigation", ["@title" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 187)]));
                            yield "</span>
            <span class=\"toggler-icon dropdown-arrow\">";
                            // line 188
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["͜macros"]->getTemplateForMacro("macro_svg_icon", $context, 188, $this->getSourceContext())->macro_svg_icon(...["M6 9l6 6 6-6"]));
                            yield "</span>
        </button>
    ";
                        }
                        // line 191
                        yield "
    ";
                    } else {
                        // line 192
                        yield " ";
                        // line 193
                        yield "      ";
                        $context["link_title"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
                            // line 194
                            yield "        <span class=\"menu__url-title\">";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 194), "html", null, true);
                            yield "</span>
      ";
                            yield from [];
                        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 196
                        yield "    <li";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 196), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 196), "html", null, true);
                        yield " role='none' data-link-type=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["link_type"] ?? null), "html", null, true);
                        yield "\">
        ";
                        // line 197
                        if ((($context["link_type"] ?? null) == "nolink")) {
                            // line 198
                            yield "            ";
                            // line 199
                            yield "            <span class=\"nav__menu-nolink nav__menu-nolink-";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass(($context["menu_name"] ?? null)), "html", null, true);
                            yield " ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["class_list"] ?? null), "html", null, true);
                            yield "\"
                  role=\"menuitem\"
                  tabindex=\"-1\"";
                            // line 202
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 202) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 202), "getOption", ["attributes"], "method", false, false, true, 202)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 202), "getOption", ["attributes"], "method", false, false, true, 202), "title", [], "any", false, false, true, 202))) {
                                yield " title=\"";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 202), "getOption", ["attributes"], "method", false, false, true, 202), "title", [], "any", false, false, true, 202), "html", null, true);
                                yield "\" ";
                            }
                            yield ">
                ";
                            // line 203
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["link_title"] ?? null), "html", null, true);
                            yield "
            </span>
        ";
                        } elseif ((                        // line 205
($context["link_type"] ?? null) == "button")) {
                            // line 206
                            yield "            ";
                            // line 207
                            yield "            <button class=\"nav__menu-button nav__menu-button-";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass(($context["menu_name"] ?? null)), "html", null, true);
                            yield " ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["class_list"] ?? null), "html", null, true);
                            yield "\"
                    role=\"menuitem\"
                    tabindex=\"-1\"
                    type=\"button\"";
                            // line 211
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 211) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 211), "getOption", ["attributes"], "method", false, false, true, 211)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 211), "getOption", ["attributes"], "method", false, false, true, 211), "title", [], "any", false, false, true, 211))) {
                                yield " title=\"";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 211), "getOption", ["attributes"], "method", false, false, true, 211), "title", [], "any", false, false, true, 211), "html", null, true);
                                yield "\" ";
                            }
                            yield ">
                ";
                            // line 212
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["link_title"] ?? null), "html", null, true);
                            yield "
            </button>
        ";
                        } else {
                            // line 215
                            yield "            ";
                            // line 216
                            yield "            ";
                            $context["link_classes"] = [("nav__menu-link nav__menu-link-" . \Drupal\Component\Utility\Html::getClass(                            // line 217
($context["menu_name"] ?? null)))];
                            // line 219
                            yield "            ";
                            if ((($tmp = ($context["class_list"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 220
                                yield "                ";
                                $context["link_classes"] = Twig\Extension\CoreExtension::merge(($context["link_classes"] ?? null), [($context["class_list"] ?? null)]);
                                // line 221
                                yield "            ";
                            }
                            // line 222
                            yield "
            ";
                            // line 224
                            yield "            ";
                            if ((($tmp = ($context["is_external"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 225
                                yield "                <a href=\"";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 225), "html", null, true);
                                yield "\" class=\"";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["link_classes"] ?? null), " "), "html", null, true);
                                yield "\"
                   role=\"menuitem\"
                   tabindex=\"-1\"
                   target=\"_blank\"
                   rel=\"noopener\"
                   data-drupal-link-system-path=\"";
                                // line 230
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["system_path"] ?? null), "html", null, true);
                                yield "\"";
                                // line 231
                                if (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 231) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 231), "getOption", ["attributes"], "method", false, false, true, 231)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 231), "getOption", ["attributes"], "method", false, false, true, 231), "title", [], "any", false, false, true, 231))) {
                                    yield " title=\"";
                                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 231), "getOption", ["attributes"], "method", false, false, true, 231), "title", [], "any", false, false, true, 231), "html", null, true);
                                    yield "\" ";
                                }
                                yield ">
                    ";
                                // line 232
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["link_title"] ?? null), "html", null, true);
                                yield "
                    <span class=\"visually-hidden\">";
                                // line 233
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("(opens in new tab)"));
                                yield "</span>
                </a>
            ";
                            } else {
                                // line 236
                                yield "                ";
                                // line 237
                                yield "                ";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(                                // line 238
($context["link_title"] ?? null), CoreExtension::getAttribute($this->env, $this->source,                                 // line 239
$context["item"], "url", [], "any", false, false, true, 239), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                                 // line 240
$context["item"], "attributes", [], "any", false, false, true, 240), "removeClass", [($context["item_classes"] ?? null)], "method", false, false, true, 240), "addClass", [($context["link_classes"] ?? null)], "method", false, false, true, 240), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                                 // line 241
$context["item"], "attributes", [], "any", false, false, true, 241), "setAttribute", ["role", "menuitem"], "method", false, false, true, 241), "setAttribute", ["tabindex", "-1"], "method", false, false, true, 241), "setAttribute", ["data-drupal-link-system-path",                                 // line 242
($context["system_path"] ?? null)], "method", false, false, true, 241), "setAttribute", [((((CoreExtension::getAttribute($this->env, $this->source,                                 // line 243
$context["item"], "in_active_trail", [], "any", false, false, true, 243) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 243)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 243), "toString", [], "method", false, false, true, 243) == $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<current>")))) ? ("aria-current") : ("data-inactive")), ((((CoreExtension::getAttribute($this->env, $this->source,                                 // line 244
$context["item"], "in_active_trail", [], "any", false, false, true, 244) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 244)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 244), "toString", [], "method", false, false, true, 244) == $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<current>")))) ? ("page") : ("true"))], "method", false, false, true, 242)), "html", null, true);
                                yield "
            ";
                            }
                            // line 246
                            yield "        ";
                        }
                        // line 247
                        yield "    ";
                    }
                    // line 248
                    yield "
    ";
                    // line 249
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 249)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 250
                        yield "      ";
                        $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", ["id", ($context["aria_id"] ?? null)], "method", false, false, true, 250), "setAttribute", ["tabindex", "-1"], "method", false, false, true, 250);
                        // line 251
                        yield "      ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 251, $this->getSourceContext())->macro_menu_links(...[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 251), ($context["attributes"] ?? null), ($context["menu_level"] ?? null), ($context["menu_name"] ?? null), ($context["aria_id"] ?? null), ($context["megamenu"] ?? null), ($context["megamenu_layout"] ?? null), ($context["sub_mega"] ?? null), ($context["sub_menu_header"] ?? null)]));
                        yield "
    ";
                    }
                    // line 253
                    yield "    </li>
    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 255
                yield "  </ul>
";
            }
            // line 256
            yield " ";
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/solo/templates/navigation/menu--primary-menu.html.twig";
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
        return array (  647 => 256,  643 => 255,  628 => 253,  622 => 251,  619 => 250,  617 => 249,  614 => 248,  611 => 247,  608 => 246,  603 => 244,  602 => 243,  601 => 242,  600 => 241,  599 => 240,  598 => 239,  597 => 238,  595 => 237,  593 => 236,  587 => 233,  583 => 232,  575 => 231,  572 => 230,  561 => 225,  558 => 224,  555 => 222,  552 => 221,  549 => 220,  546 => 219,  544 => 217,  542 => 216,  540 => 215,  534 => 212,  526 => 211,  517 => 207,  515 => 206,  513 => 205,  508 => 203,  500 => 202,  492 => 199,  490 => 198,  488 => 197,  481 => 196,  474 => 194,  471 => 193,  469 => 192,  465 => 191,  459 => 188,  455 => 187,  451 => 186,  437 => 185,  434 => 184,  431 => 183,  428 => 182,  426 => 180,  425 => 179,  423 => 175,  421 => 174,  415 => 171,  411 => 170,  405 => 169,  400 => 167,  394 => 166,  390 => 165,  386 => 164,  380 => 163,  374 => 162,  368 => 161,  362 => 160,  359 => 159,  356 => 158,  353 => 157,  350 => 156,  348 => 155,  346 => 154,  339 => 153,  336 => 152,  333 => 150,  330 => 149,  327 => 148,  324 => 147,  321 => 146,  318 => 145,  315 => 143,  313 => 141,  312 => 136,  311 => 134,  310 => 133,  307 => 132,  305 => 129,  304 => 128,  303 => 127,  302 => 126,  301 => 125,  300 => 124,  299 => 123,  298 => 122,  297 => 121,  296 => 120,  295 => 119,  294 => 118,  291 => 117,  288 => 116,  285 => 115,  282 => 114,  280 => 113,  277 => 112,  274 => 111,  271 => 110,  268 => 109,  265 => 107,  262 => 106,  259 => 105,  256 => 104,  253 => 103,  250 => 102,  247 => 101,  244 => 100,  241 => 98,  238 => 97,  235 => 96,  232 => 95,  229 => 94,  226 => 92,  208 => 91,  205 => 89,  197 => 87,  189 => 85,  187 => 84,  184 => 83,  182 => 82,  179 => 81,  177 => 78,  176 => 74,  175 => 73,  173 => 70,  172 => 68,  171 => 67,  169 => 65,  168 => 64,  167 => 63,  166 => 62,  164 => 60,  163 => 59,  162 => 58,  160 => 54,  157 => 53,  137 => 52,  130 => 29,  118 => 28,  109 => 50,  103 => 47,  99 => 46,  94 => 44,  89 => 42,  83 => 38,  80 => 37,  77 => 36,  75 => 35,  71 => 34,  67 => 33,  63 => 32,  53 => 31,  48 => 26,  46 => 25,  44 => 24,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/solo/templates/navigation/menu--primary-menu.html.twig", "/var/www/html/web/themes/contrib/solo/templates/navigation/menu--primary-menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 24, "set" => 25, "include" => 26, "macro" => 28, "if" => 35, "for" => 91];
        static $filters = ["escape" => 31, "t" => 32, "default" => 34, "clean_unique_id" => 44, "raw" => 46, "clean_class" => 58, "render" => 116, "join" => 149, "merge" => 158];
        static $functions = ["create_attribute" => 67, "path" => 166, "link" => 237];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'set', 'include', 'macro', 'if', 'for'],
                ['escape', 't', 'default', 'clean_unique_id', 'raw', 'clean_class', 'render', 'join', 'merge'],
                ['create_attribute', 'path', 'link'],
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
