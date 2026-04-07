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

/* @solo/partials/svg/_svg-rss.html.twig */
class __TwigTemplate_1a2231059d626f80cbee71e21170778b extends Template
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
        yield "<svg class=\"svg-icon rss\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"30pt\" height=\"30pt\" viewBox=\"0 0 30 30\" version=\"1.1\"><g><path class=\"path-update\" style=\"stroke:none;fill-rule:evenodd;fill:";
        yield (((($context["sm_icon_colors"] ?? null) == "")) ? ("--solo-ss") : ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sm_icon_colors"] ?? null), "html", null, true)));
        yield ";fill-opacity:1;\" d=\"M 15 0 C 6.714844 0 0 6.714844 0 15 C 0 23.285156 6.714844 30 15 30 C 23.285156 30 30 23.285156 30 15 C 30 6.714844 23.285156 0 15 0 Z M 8.089844 24.328125 C 6.742188 24.328125 5.648438 23.242188 5.648438 21.894531 C 5.648438 20.558594 6.742188 19.457031 8.089844 19.457031 C 9.441406 19.457031 10.535156 20.558594 10.539062 21.894531 C 10.539062 23.242188 9.445312 24.328125 8.089844 24.328125 Z M 14.230469 24.351562 C 14.230469 22.050781 13.335938 19.890625 11.714844 18.273438 C 10.09375 16.648438 7.941406 15.75 5.652344 15.75 L 5.652344 12.234375 C 12.328125 12.234375 17.765625 17.671875 17.765625 24.351562 Z M 20.472656 24.351562 C 20.472656 16.171875 13.824219 9.515625 5.65625 9.515625 L 5.65625 6 C 15.769531 6 24 14.234375 24 24.351562 Z M 20.472656 24.351562 \"/></g></svg>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["sm_icon_colors"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@solo/partials/svg/_svg-rss.html.twig";
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
        return array (  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@solo/partials/svg/_svg-rss.html.twig", "/var/www/html/web/themes/contrib/solo/partials/svg/_svg-rss.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 1];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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
