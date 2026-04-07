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

/* themes/contrib/solo/templates/navigation/menu--account.html.twig */
class __TwigTemplate_a6188034ef05ec801001d9d01b72bf9b extends Template
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
        // line 26
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 30
        yield "<div class=\"solo-clear solo-menu navigation-default solo-account-menu";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($tmp = ($context["keyboard_enabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" solo-keyboard-enabled") : ("")));
        yield "\"
     aria-label=\"";
        // line 31
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("User account menu"));
        yield "\"
     data-menu-name=\"";
        // line 32
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["menu_name"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 33
        if ((($context["login_popup_block"] ?? null) && (($context["current_path"] ?? null) != "/user/login"))) {
            // line 34
            yield "        <div id=\"login-button-open\" class=\"login-button-open\">
            <button class=\"solo-button-menu\"
                    data-drupal-selector=\"login-block-button-open-inner\"
                    aria-label=\"";
            // line 37
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Open login dialog"));
            yield "\"
                    aria-controls=\"popup-login-block\"
                    aria-expanded=\"false\"
                    aria-haspopup=\"dialog\"
                    type=\"button\">
                <span>";
            // line 42
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t(($context["login_text"] ?? null)));
            yield "</span>
                <span class=\"visually-hidden\">";
            // line 43
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Open login dialog"));
            yield "</span>
            </button>
        </div>
    ";
        }
        // line 47
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 47, $this->getSourceContext())->macro_menu_links(...[($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["menu_name"] ?? null), ($context["aria_id"] ?? null)]));
        yield "
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "keyboard_enabled", "menu_name", "login_popup_block", "current_path", "login_text", "items", "attributes", "aria_id", "loop"]);        yield from [];
    }

    // line 27
    public function macro_svg_icon($icon_value = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "icon_value" => $icon_value,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            // line 28
            yield "    ";
            yield from $this->load("@solo/partials/svg/_svg-menu-arrow.html.twig", 28)->unwrap()->yield($context);
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 49
    public function macro_menu_links($items = null, $attributes = null, $menu_level = null, $menu_name = null, $aria_id = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "items" => $items,
            "attributes" => $attributes,
            "menu_level" => $menu_level,
            "menu_name" => $menu_name,
            "aria_id" => $aria_id,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            // line 50
            yield "    ";
            $context["menu_level"] = (($context["menu_level"] ?? null) + 1);
            // line 51
            yield "    ";
            $context["menu_classes"] = ["navigation__menubar", "navigation__default", ("navigation__menubar-" . \Drupal\Component\Utility\Html::getClass(            // line 54
($context["menu_name"] ?? null)))];
            // line 56
            $context["submenu_classes"] = [("sub__menu sub__menu-" . \Drupal\Component\Utility\Html::getClass(            // line 57
($context["menu_name"] ?? null)))];
            // line 59
            $context["menubar_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["id" => (            // line 60
($context["menu_name"] ?? null) . \Drupal\Component\Utility\Html::getUniqueId("__menubar")), "role" => "menubar", "data-menu-level" =>             // line 62
($context["menu_level"] ?? null), "aria-orientation" => "horizontal"]);
            // line 65
            $context["submenu_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["id" => (            // line 66
($context["menu_name"] ?? null) . \Drupal\Component\Utility\Html::getUniqueId("__submenu")), "role" => "menu", "tabindex" => "-1", "aria-hidden" => "true", "data-menu-level" =>             // line 70
($context["menu_level"] ?? null), "aria-orientation" => "vertical"]);
            // line 73
            if ((($tmp = ($context["items"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 74
                yield "    ";
                if ((($context["menu_level"] ?? null) == 1)) {
                    // line 75
                    yield "        <ul ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["menu_classes"] ?? null)], "method", false, false, true, 75), "removeAttribute", ["region"], "method", false, false, true, 75), "html", null, true);
                    yield "
            ";
                    // line 76
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["menubar_attributes"] ?? null), "html", null, true);
                    yield ">
        ";
                } else {
                    // line 78
                    yield "            <ul ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [($context["menu_classes"] ?? null)], "method", false, false, true, 78), "addClass", [($context["submenu_classes"] ?? null)], "method", false, false, true, 78), "html", null, true);
                    yield "
                ";
                    // line 79
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["submenu_attributes"] ?? null), "html", null, true);
                    yield ">
            ";
                }
                // line 81
                yield "            ";
                // line 82
                yield "            ";
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
                    // line 83
                    yield "
            ";
                    // line 85
                    yield "            ";
                    $context["system_path"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 85), "isRouted", [], "method", false, false, true, 85)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 85), "getInternalPath", [], "method", false, false, true, 85)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 85), "toString", [], "method", false, false, true, 85)));
                    // line 86
                    yield "            ";
                    if ((($context["system_path"] ?? null) == "")) {
                        // line 87
                        yield "              ";
                        $context["system_path"] = "<front>";
                        // line 88
                        yield "            ";
                    }
                    // line 89
                    yield "
            ";
                    // line 91
                    yield "            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 91), "isRouted", [], "any", false, false, true, 91) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 91), "routeName", [], "any", false, false, true, 91) == "<nolink>"))) {
                        // line 92
                        yield "                ";
                        $context["link_type"] = "nolink";
                        // line 93
                        yield "            ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 93), "isRouted", [], "any", false, false, true, 93) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 93), "routeName", [], "any", false, false, true, 93) == "<button>"))) {
                        // line 94
                        yield "                ";
                        $context["link_type"] = "button";
                        // line 95
                        yield "            ";
                    } else {
                        // line 96
                        yield "                ";
                        $context["link_type"] = "link";
                        // line 97
                        yield "            ";
                    }
                    // line 98
                    yield "
            ";
                    // line 100
                    yield "            ";
                    $context["is_external"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 100), "isExternal", [], "method", false, false, true, 100);
                    // line 101
                    yield "            ";
                    $context["url_string"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 101), "toString", [], "method", false, false, true, 101);
                    // line 102
                    yield "            ";
                    $context["is_linkable"] = ((($context["link_type"] ?? null) != "nolink") && (($context["url_string"] ?? null) != ""));
                    // line 103
                    yield "
            ";
                    // line 104
                    $macros["͜macros"] = $this;
                    // line 105
                    yield "            ";
                    $context["aria_id"] = \Drupal\Component\Utility\Html::getUniqueId(((($context["menu_name"] ?? null) . "-sub__menu-") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 105)));
                    // line 106
                    yield "            ";
                    $context["dropdown_toggler_class"] = (((($context["menu_level"] ?? null) == 1)) ? ("dropdown-toggler-parent") : ("dropdown-toggler-child"));
                    // line 107
                    yield "            ";
                    $context["rendered_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 107));
                    // line 108
                    yield "
            ";
                    // line 109
                    $context["item_classes"] = [("btn-animate nav__menu-item nav__menu-item-" . \Drupal\Component\Utility\Html::getClass(                    // line 110
($context["menu_name"] ?? null))), (((                    // line 111
$context["item"] && (($context["menu_level"] ?? null) == 1))) ? ("nav__menubar-item") : ("")), (((                    // line 112
$context["item"] && (($context["menu_level"] ?? null) > 1))) ? ("nav__submenu-item") : ("")), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                     // line 113
$context["item"], "is_expanded", [], "any", false, false, true, 113)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("has-sub__menu") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,                     // line 114
$context["item"], "is_expanded", [], "any", false, false, true, 114) && ($context["is_linkable"] ?? null))) ? ("link-and-button") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,                     // line 115
$context["item"], "is_expanded", [], "any", false, false, true, 115) &&  !($context["is_linkable"] ?? null))) ? ("button-only") : ("")), ((( !CoreExtension::getAttribute($this->env, $this->source,                     // line 116
$context["item"], "is_expanded", [], "any", false, false, true, 116) && ($context["is_linkable"] ?? null))) ? ("link-only") : ("")), ((( !CoreExtension::getAttribute($this->env, $this->source,                     // line 117
$context["item"], "is_expanded", [], "any", false, false, true, 117) && (($context["link_type"] ?? null) == "nolink"))) ? ("no-link") : ("")), ((( !CoreExtension::getAttribute($this->env, $this->source,                     // line 118
$context["item"], "is_expanded", [], "any", false, false, true, 118) && (($context["link_type"] ?? null) == "button"))) ? ("keyboard-button") : ("")), ((( !CoreExtension::getAttribute($this->env, $this->source,                     // line 119
$context["item"], "is_expanded", [], "any", false, false, true, 119) && ($context["is_external"] ?? null))) ? ("external-link") : ("")), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                     // line 120
$context["item"], "in_active_trail", [], "any", false, false, true, 120)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-active") : (""))];
                    // line 123
                    yield "
            ";
                    // line 124
                    $context["dorpdown_toggler_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["data-drupal-selector" =>                     // line 125
($context["aria_id"] ?? null), "role" => "menuitem", "aria-controls" =>                     // line 127
($context["aria_id"] ?? null), "aria-haspopup" => "true", "aria-expanded" => "false", "tabindex" => "-1", "type" => "button", "data-menu-item-id" => CoreExtension::getAttribute($this->env, $this->source,                     // line 132
$context["loop"], "index", [], "any", false, false, true, 132)]);
                    // line 134
                    yield "
            ";
                    // line 136
                    yield "            ";
                    $context["additional_classes"] = "";
                    // line 137
                    yield "            ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 137) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 137), "getOption", ["attributes"], "method", false, false, true, 137)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 137), "getOption", ["attributes"], "method", false, false, true, 137), "class", [], "any", false, false, true, 137))) {
                        // line 138
                        yield "                ";
                        $context["additional_classes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 138), "getOption", ["attributes"], "method", false, false, true, 138), "class", [], "any", false, false, true, 138);
                        // line 139
                        yield "            ";
                    }
                    // line 140
                    yield "            ";
                    $context["class_list"] = ((is_iterable(($context["additional_classes"] ?? null))) ? (Twig\Extension\CoreExtension::join(($context["additional_classes"] ?? null), " ")) : (($context["additional_classes"] ?? null)));
                    // line 141
                    yield "
            ";
                    // line 143
                    yield "            ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 143)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 144
                        yield "            <li";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 144), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 144), "html", null, true);
                        yield " role='none' data-menu-parent=\"true\" data-link-type=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["link_type"] ?? null), "html", null, true);
                        yield "\">
            ";
                        // line 145
                        if ((($tmp = ($context["is_linkable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 146
                            yield "                ";
                            // line 147
                            yield "                ";
                            $context["c_link_classes"] = [("nav__menu-link nav__menu-link-" . \Drupal\Component\Utility\Html::getClass(($context["menu_name"] ?? null))), "url-added"];
                            // line 148
                            yield "                ";
                            if ((($tmp = ($context["class_list"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 149
                                yield "                    ";
                                $context["c_link_classes"] = Twig\Extension\CoreExtension::merge(($context["c_link_classes"] ?? null), [($context["class_list"] ?? null)]);
                                // line 150
                                yield "                ";
                            }
                            // line 151
                            yield "                <a href=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 151), "html", null, true);
                            yield "\" class=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["c_link_classes"] ?? null), " "), "html", null, true);
                            yield "\"";
                            // line 152
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 152) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 152), "getOption", ["attributes"], "method", false, false, true, 152)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 152), "getOption", ["attributes"], "method", false, false, true, 152), "title", [], "any", false, false, true, 152))) {
                                yield " title=\"";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 152), "getOption", ["attributes"], "method", false, false, true, 152), "title", [], "any", false, false, true, 152), "html", null, true);
                                yield "\" ";
                            }
                            // line 153
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 153) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 153), "getOption", ["attributes"], "method", false, false, true, 153)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 153), "getOption", ["attributes"], "method", false, false, true, 153), "target", [], "any", false, false, true, 153))) {
                                yield " target=\"";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 153), "getOption", ["attributes"], "method", false, false, true, 153), "target", [], "any", false, false, true, 153), "html", null, true);
                                yield "\" ";
                            }
                            // line 154
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 154) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 154), "getOption", ["attributes"], "method", false, false, true, 154)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 154), "getOption", ["attributes"], "method", false, false, true, 154), "rel", [], "any", false, false, true, 154))) {
                                yield " rel=\"";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 154), "getOption", ["attributes"], "method", false, false, true, 154), "rel", [], "any", false, false, true, 154), "html", null, true);
                                yield "\" ";
                            }
                            // line 155
                            if ((($tmp = ($context["is_external"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                yield " target=\"_blank\" rel=\"noopener\"";
                            }
                            // line 156
                            yield "tabindex=\"-1\" data-drupal-link-system-path=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["system_path"] ?? null), "html", null, true);
                            yield "\" role='menuitem'";
                            // line 157
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 157) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 157)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 157), "toString", [], "method", false, false, true, 157) == $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<current>")))) {
                                yield " aria-current=\"page\"";
                            }
                            yield ">
                    <span class=\"menu__url-title-enabled\">";
                            // line 158
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 158), "html", null, true);
                            yield "</span>
                </a>
                <button class=\"en-link dropdown-toggler ";
                            // line 160
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["dropdown_toggler_class"] ?? null), "html", null, true);
                            yield "\" ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["dorpdown_toggler_attributes"] ?? null), "html", null, true);
                            yield ">
                    <span class=\"visually-hidden\">";
                            // line 161
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("@title sub-navigation", ["@title" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 161)]));
                            yield "</span>
                    <span class=\"toggler-icon dropdown-arrow\">";
                            // line 162
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["͜macros"]->getTemplateForMacro("macro_svg_icon", $context, 162, $this->getSourceContext())->macro_svg_icon(...["M6 9l6 6 6-6"]));
                            yield "</span>
                </button>
            ";
                        } else {
                            // line 165
                            yield "                ";
                            // line 166
                            yield "                ";
                            $context["button_classes"] = ["ds-link", "dropdown-toggler", "nav__menu-button", ("nav__menu-button-" . \Drupal\Component\Utility\Html::getClass(                            // line 170
($context["menu_name"] ?? null))),                             // line 171
($context["dropdown_toggler_class"] ?? null)];
                            // line 173
                            yield "                ";
                            if ((($tmp = ($context["class_list"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 174
                                yield "                  ";
                                $context["button_classes"] = Twig\Extension\CoreExtension::merge(($context["button_classes"] ?? null), [($context["class_list"] ?? null)]);
                                // line 175
                                yield "                ";
                            }
                            // line 176
                            yield "                <button class=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["button_classes"] ?? null), " "), "html", null, true);
                            yield "\" ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["dorpdown_toggler_attributes"] ?? null), "html", null, true);
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 176) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 176), "getOption", ["attributes"], "method", false, false, true, 176)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 176), "getOption", ["attributes"], "method", false, false, true, 176), "title", [], "any", false, false, true, 176))) {
                                yield " title=\"";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 176), "getOption", ["attributes"], "method", false, false, true, 176), "title", [], "any", false, false, true, 176), "html", null, true);
                                yield "\" ";
                            }
                            yield "data-link-type=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["link_type"] ?? null), "html", null, true);
                            yield "\">
                    <span class=\"menu__url-title-disabled\">";
                            // line 177
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 177), "html", null, true);
                            yield "</span>
                    <span class=\"visually-hidden\">";
                            // line 178
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("@title sub-navigation", ["@title" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 178)]));
                            yield "</span>
                    <span class=\"toggler-icon dropdown-arrow\">";
                            // line 179
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["͜macros"]->getTemplateForMacro("macro_svg_icon", $context, 179, $this->getSourceContext())->macro_svg_icon(...["M6 9l6 6 6-6"]));
                            yield "</span>
                </button>
            ";
                        }
                        // line 182
                        yield "
            ";
                    } else {
                        // line 183
                        yield " ";
                        // line 184
                        yield "              ";
                        $context["link_title"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
                            // line 185
                            yield "                <span class=\"menu__url-title\">";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 185), "html", null, true);
                            yield "</span>
              ";
                            yield from [];
                        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 187
                        yield "            <li";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 187), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 187), "html", null, true);
                        yield " role='none' data-link-type=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["link_type"] ?? null), "html", null, true);
                        yield "\">
                ";
                        // line 188
                        if ((($context["link_type"] ?? null) == "nolink")) {
                            // line 189
                            yield "                    ";
                            // line 190
                            yield "                    <span class=\"nav__menu-nolink nav__menu-nolink-";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass(($context["menu_name"] ?? null)), "html", null, true);
                            yield " ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["class_list"] ?? null), "html", null, true);
                            yield "\"
                          role=\"menuitem\"
                          tabindex=\"-1\"";
                            // line 193
                            if (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 193) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 193), "getOption", ["attributes"], "method", false, false, true, 193)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 193), "getOption", ["attributes"], "method", false, false, true, 193), "title", [], "any", false, false, true, 193))) {
                                yield " title=\"";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 193), "getOption", ["attributes"], "method", false, false, true, 193), "title", [], "any", false, false, true, 193), "html", null, true);
                                yield "\" ";
                            }
                            yield ">
                        ";
                            // line 194
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["link_title"] ?? null), "html", null, true);
                            yield "
                    </span>
                ";
                        } elseif ((                        // line 196
($context["link_type"] ?? null) == "button")) {
                            // line 197
                            yield "                    ";
                            // line 198
                            yield "                    <button class=\"nav__menu-button nav__menu-button-";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass(($context["menu_name"] ?? null)), "html", null, true);
                            yield " ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["class_list"] ?? null), "html", null, true);
                            yield "\"
                            role=\"menuitem\"
                            tabindex=\"-1\"
                            type=\"button\"";
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
                    </button>
                ";
                        } else {
                            // line 206
                            yield "                    ";
                            // line 207
                            yield "                    ";
                            $context["link_classes"] = [("nav__menu-link nav__menu-link-" . \Drupal\Component\Utility\Html::getClass(                            // line 208
($context["menu_name"] ?? null)))];
                            // line 210
                            yield "                    ";
                            if ((($tmp = ($context["class_list"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 211
                                yield "                        ";
                                $context["link_classes"] = Twig\Extension\CoreExtension::merge(($context["link_classes"] ?? null), [($context["class_list"] ?? null)]);
                                // line 212
                                yield "                    ";
                            }
                            // line 213
                            yield "
                    ";
                            // line 215
                            yield "                    ";
                            if ((($tmp = ($context["is_external"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 216
                                yield "                        <a href=\"";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 216), "html", null, true);
                                yield "\" class=\"";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["link_classes"] ?? null), " "), "html", null, true);
                                yield "\"
                           role=\"menuitem\"
                           tabindex=\"-1\"
                           target=\"_blank\"
                           rel=\"noopener\"
                           data-drupal-link-system-path=\"";
                                // line 221
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["system_path"] ?? null), "html", null, true);
                                yield "\"";
                                // line 222
                                if (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 222) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 222), "getOption", ["attributes"], "method", false, false, true, 222)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 222), "getOption", ["attributes"], "method", false, false, true, 222), "title", [], "any", false, false, true, 222))) {
                                    yield " title=\"";
                                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 222), "getOption", ["attributes"], "method", false, false, true, 222), "title", [], "any", false, false, true, 222), "html", null, true);
                                    yield "\" ";
                                }
                                yield ">
                            ";
                                // line 223
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["link_title"] ?? null), "html", null, true);
                                yield "
                            <span class=\"visually-hidden\">";
                                // line 224
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("(opens in new tab)"));
                                yield "</span>
                        </a>
                    ";
                            } else {
                                // line 227
                                yield "                        ";
                                // line 228
                                yield "                        ";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(                                // line 229
($context["link_title"] ?? null), CoreExtension::getAttribute($this->env, $this->source,                                 // line 230
$context["item"], "url", [], "any", false, false, true, 230), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                                 // line 231
$context["item"], "attributes", [], "any", false, false, true, 231), "removeClass", [($context["item_classes"] ?? null)], "method", false, false, true, 231), "addClass", [($context["link_classes"] ?? null)], "method", false, false, true, 231), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                                 // line 232
$context["item"], "attributes", [], "any", false, false, true, 232), "setAttribute", ["role", "menuitem"], "method", false, false, true, 232), "setAttribute", ["tabindex", "-1"], "method", false, false, true, 232), "setAttribute", ["data-drupal-link-system-path",                                 // line 233
($context["system_path"] ?? null)], "method", false, false, true, 232), "setAttribute", [((((CoreExtension::getAttribute($this->env, $this->source,                                 // line 234
$context["item"], "in_active_trail", [], "any", false, false, true, 234) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 234)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 234), "toString", [], "method", false, false, true, 234) == $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<current>")))) ? ("aria-current") : ("data-inactive")), ((((CoreExtension::getAttribute($this->env, $this->source,                                 // line 235
$context["item"], "in_active_trail", [], "any", false, false, true, 235) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 235)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 235), "toString", [], "method", false, false, true, 235) == $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<current>")))) ? ("page") : ("true"))], "method", false, false, true, 233)), "html", null, true);
                                yield "
                    ";
                            }
                            // line 237
                            yield "                ";
                        }
                        // line 238
                        yield "            ";
                    }
                    // line 239
                    yield "                ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 239)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 240
                        yield "                    ";
                        $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", ["id", ($context["aria_id"] ?? null)], "method", false, false, true, 240), "setAttribute", ["tabindex", "-1"], "method", false, false, true, 240);
                        // line 241
                        yield "                    ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 241, $this->getSourceContext())->macro_menu_links(...[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 241), ($context["attributes"] ?? null), ($context["menu_level"] ?? null), ($context["menu_name"] ?? null)]));
                        yield "
                ";
                    }
                    // line 243
                    yield "            </li>
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
                // line 245
                yield "        ";
                // line 246
                yield "    </ul>
";
            }
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/solo/templates/navigation/menu--account.html.twig";
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
        return array (  610 => 246,  608 => 245,  593 => 243,  587 => 241,  584 => 240,  581 => 239,  578 => 238,  575 => 237,  570 => 235,  569 => 234,  568 => 233,  567 => 232,  566 => 231,  565 => 230,  564 => 229,  562 => 228,  560 => 227,  554 => 224,  550 => 223,  542 => 222,  539 => 221,  528 => 216,  525 => 215,  522 => 213,  519 => 212,  516 => 211,  513 => 210,  511 => 208,  509 => 207,  507 => 206,  501 => 203,  493 => 202,  484 => 198,  482 => 197,  480 => 196,  475 => 194,  467 => 193,  459 => 190,  457 => 189,  455 => 188,  448 => 187,  441 => 185,  438 => 184,  436 => 183,  432 => 182,  426 => 179,  422 => 178,  418 => 177,  404 => 176,  401 => 175,  398 => 174,  395 => 173,  393 => 171,  392 => 170,  390 => 166,  388 => 165,  382 => 162,  378 => 161,  372 => 160,  367 => 158,  361 => 157,  357 => 156,  353 => 155,  347 => 154,  341 => 153,  335 => 152,  329 => 151,  326 => 150,  323 => 149,  320 => 148,  317 => 147,  315 => 146,  313 => 145,  306 => 144,  303 => 143,  300 => 141,  297 => 140,  294 => 139,  291 => 138,  288 => 137,  285 => 136,  282 => 134,  280 => 132,  279 => 127,  278 => 125,  277 => 124,  274 => 123,  272 => 120,  271 => 119,  270 => 118,  269 => 117,  268 => 116,  267 => 115,  266 => 114,  265 => 113,  264 => 112,  263 => 111,  262 => 110,  261 => 109,  258 => 108,  255 => 107,  252 => 106,  249 => 105,  247 => 104,  244 => 103,  241 => 102,  238 => 101,  235 => 100,  232 => 98,  229 => 97,  226 => 96,  223 => 95,  220 => 94,  217 => 93,  214 => 92,  211 => 91,  208 => 89,  205 => 88,  202 => 87,  199 => 86,  196 => 85,  193 => 83,  175 => 82,  173 => 81,  168 => 79,  163 => 78,  158 => 76,  153 => 75,  150 => 74,  148 => 73,  146 => 70,  145 => 66,  144 => 65,  142 => 62,  141 => 60,  140 => 59,  138 => 57,  137 => 56,  135 => 54,  133 => 51,  130 => 50,  114 => 49,  107 => 28,  95 => 27,  85 => 47,  78 => 43,  74 => 42,  66 => 37,  61 => 34,  59 => 33,  55 => 32,  51 => 31,  46 => 30,  44 => 26,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/solo/templates/navigation/menu--account.html.twig", "/var/www/html/web/themes/contrib/solo/templates/navigation/menu--account.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 26, "macro" => 27, "if" => 33, "include" => 28, "set" => 50, "for" => 82];
        static $filters = ["t" => 31, "escape" => 32, "clean_class" => 54, "clean_unique_id" => 60, "render" => 107, "join" => 140, "merge" => 149];
        static $functions = ["create_attribute" => 59, "path" => 157, "link" => 228];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'include', 'set', 'for'],
                ['t', 'escape', 'clean_class', 'clean_unique_id', 'render', 'join', 'merge'],
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
