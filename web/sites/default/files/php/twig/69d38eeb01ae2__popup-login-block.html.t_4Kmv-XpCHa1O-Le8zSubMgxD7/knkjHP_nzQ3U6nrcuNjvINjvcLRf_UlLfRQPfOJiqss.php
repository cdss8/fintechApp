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

/* @solo/partials/_popup-login-block.html.twig */
class __TwigTemplate_2bb3c931f134d74cb0174ed4f9d886f1 extends Template
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
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "popup_login_block", [], "any", false, false, true, 1) && ($context["header_popup_login"] ?? null))) {
            // line 2
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("solo/solo-popup-login-block"), "html", null, true);
            yield "
  <!-- Start: Popup Login Block -->
  <div id=\"popup-login-block\"
       class=\"solo-outer lone popup-login-block solo-animate-opacity\"
       role=\"";
            // line 6
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["attributes_popup_login_block"] ?? null), "role", [], "any", true, true, true, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes_popup_login_block"] ?? null), "role", [], "any", false, false, true, 6), "dialog")) : ("dialog")), "html", null, true);
            yield "\"
       aria-hidden=\"true\"
       aria-label=\"";
            // line 8
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["attributes_popup_login_block"] ?? null), "aria-label", [], "array", true, true, true, 8)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["attributes_popup_login_block"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["aria-label"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["attributes_popup_login_block"] ?? null), "aria-label", [], "array", false, false, true, 8)), t("Login Block"))) : (t("Login Block"))), "html", null, true);
            yield "\"
       ";
            // line 9
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["attributes_popup_login_block"] ?? null), "role", "aria-label"), "html", null, true);
            yield ">
    <div id=\"popup-login-block-inner\" class=\"solo-inner solo-col popup-login-block-inner";
            // line 10
            yield (((($tmp = ($context["classes_popup_login_block"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (" " . ($context["classes_popup_login_block"] ?? null)), "html", null, true)) : (""));
            yield "\">
      <div id=\"login-button-close\" class=\"hamburger-icon hamburger-icon-close login-button-close\">
        <button class=\"solo-button-menu login-block-button-close-inner\"
                data-drupal-selector=\"login-block-button-close-inner\"
                aria-label=\"";
            // line 14
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Close Login Popup Block"));
            yield "\"
                aria-controls=\"popup-login-block\"
                aria-expanded=\"false\">
          <span aria-hidden=\"true\">";
            // line 17
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["svg_bars"] ?? null));
            yield "</span>
          <span class=\"visually-hidden\">";
            // line 18
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Close Login Popup Block"));
            yield "</span>
        </button>
      </div>
      ";
            // line 21
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "popup_login_block", [], "any", false, false, true, 21), "html", null, true);
            yield "
    </div>
  </div>
  <!-- End: Popup Login Block -->
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "header_popup_login", "attributes_popup_login_block", "classes_popup_login_block", "svg_bars"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@solo/partials/_popup-login-block.html.twig";
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
        return array (  89 => 21,  83 => 18,  79 => 17,  73 => 14,  66 => 10,  62 => 9,  58 => 8,  53 => 6,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@solo/partials/_popup-login-block.html.twig", "/var/www/html/web/themes/contrib/solo/partials/_popup-login-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 1];
        static $filters = ["escape" => 2, "default" => 6, "t" => 8, "without" => 9, "raw" => 17];
        static $functions = ["attach_library" => 2];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'default', 't', 'without', 'raw'],
                ['attach_library'],
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
