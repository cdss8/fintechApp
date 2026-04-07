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

/* themes/contrib/solo/templates/layout/html.html.twig */
class __TwigTemplate_922087036d10b18ac0595a767bf48694 extends Template
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
        $context["body_classes"] = [(((($tmp =         // line 27
($context["logged_in"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("user-logged-in") : ("")), (((($tmp =  !        // line 28
($context["root_path"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass(($context["root_path"] ?? null))))), (((($tmp =         // line 29
($context["node_type"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass(($context["node_type"] ?? null)))) : ("")), (((($tmp =         // line 30
($context["db_offline"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("db-offline") : (""))];
        // line 33
        yield "<!DOCTYPE html>
<html";
        // line 34
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["html_attributes"] ?? null), "html", null, true);
        yield ">
  <head>
    ";
        // line 36
        if ((array_key_exists("preloader_critical_css", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["preloader_critical_css"] ?? null)))) {
            // line 37
            yield "    <style>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["preloader_critical_css"] ?? null));
            yield "</style>
    ";
        }
        // line 39
        yield "    <head-placeholder token=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true);
        yield "\">
    <title>";
        // line 40
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, ($context["head_title"] ?? null), " | "));
        yield "</title>
    <css-placeholder token=\"";
        // line 41
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true);
        yield "\">
    <js-placeholder token=\"";
        // line 42
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true);
        yield "\">
  </head>
  <body";
        // line 44
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["body_classes"] ?? null)], "method", false, false, true, 44), "html", null, true);
        yield ">
    ";
        // line 45
        if ((($tmp = ($context["preloader_show"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 46
            yield "      ";
            yield from $this->load("@solo/partials/preloader.html.twig", 46)->unwrap()->yield($context);
            // line 47
            yield "    ";
        }
        // line 48
        yield "    ";
        if ((($tmp = ($context["back_to_top_show"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            yield "      ";
            yield from $this->load("@solo/partials/back-to-top.html.twig", 49)->unwrap()->yield($context);
            // line 50
            yield "    ";
        }
        // line 51
        yield "    ";
        // line 55
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["enabled_skip_links"] ?? null), "skip_header_content", [], "any", false, false, true, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 56
            yield "      <a href=\"#header-content\" class=\"visually-hidden focusable skip-link\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to header"));
            yield "</a>
    ";
        }
        // line 58
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["enabled_skip_links"] ?? null), "skip_navigation_content", [], "any", false, false, true, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 59
            yield "      <a href=\"#main-navigation-content\" class=\"visually-hidden focusable skip-link\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main navigation"));
            yield "</a>
    ";
        }
        // line 61
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["enabled_skip_links"] ?? null), "skip_main_content", [], "any", false, false, true, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 62
            yield "      <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
            yield "</a>
    ";
        }
        // line 64
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["enabled_skip_links"] ?? null), "skip_footer_content", [], "any", false, false, true, 64)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 65
            yield "      <a href=\"#footer-content\" class=\"visually-hidden focusable skip-link\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to footer"));
            yield "</a>
    ";
        }
        // line 67
        yield "
    ";
        // line 68
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page_top"] ?? null), "html", null, true);
        yield "
    ";
        // line 69
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page"] ?? null), "html", null, true);
        yield "
    ";
        // line 70
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page_bottom"] ?? null), "html", null, true);
        yield "
    <js-bottom-placeholder token=\"";
        // line 71
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true);
        yield "\">
  </body>
</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["logged_in", "root_path", "node_type", "db_offline", "html_attributes", "preloader_critical_css", "placeholder_token", "head_title", "attributes", "preloader_show", "back_to_top_show", "enabled_skip_links", "page_top", "page", "page_bottom"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/solo/templates/layout/html.html.twig";
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
        return array (  158 => 71,  154 => 70,  150 => 69,  146 => 68,  143 => 67,  137 => 65,  134 => 64,  128 => 62,  125 => 61,  119 => 59,  116 => 58,  110 => 56,  107 => 55,  105 => 51,  102 => 50,  99 => 49,  96 => 48,  93 => 47,  90 => 46,  88 => 45,  84 => 44,  79 => 42,  75 => 41,  71 => 40,  66 => 39,  60 => 37,  58 => 36,  53 => 34,  50 => 33,  48 => 30,  47 => 29,  46 => 28,  45 => 27,  44 => 26,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/solo/templates/layout/html.html.twig", "/var/www/html/web/themes/contrib/solo/templates/layout/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 26, "if" => 36, "include" => 46];
        static $filters = ["clean_class" => 28, "escape" => 34, "raw" => 37, "safe_join" => 40, "t" => 56];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
                ['clean_class', 'escape', 'raw', 'safe_join', 't'],
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
