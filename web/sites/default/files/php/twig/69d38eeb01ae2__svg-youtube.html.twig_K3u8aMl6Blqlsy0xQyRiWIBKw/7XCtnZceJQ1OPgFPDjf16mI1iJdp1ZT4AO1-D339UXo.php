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

/* @solo/partials/svg/_svg-youtube.html.twig */
class __TwigTemplate_f90227345d7bc9e1c54e04d2b55c88ae extends Template
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
        yield "<svg class=\"svg-icon youtube\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"30pt\" height=\"30pt\" viewBox=\"0 0 30 30\" version=\"1.1\"><g><path class=\"path-update\" style=\" stroke:none;fill-rule:evenodd;fill:";
        yield (((($context["sm_icon_colors"] ?? null) == "")) ? ("--solo-tb") : ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sm_icon_colors"] ?? null), "html", null, true)));
        yield ";fill-opacity:1;\" d=\"M 15 0 C 23.285156 0 30 6.714844 30 15 C 30 23.285156 23.285156 30 15 30 C 6.714844 30 0 23.285156 0 15 C 0 6.714844 6.714844 0 15 0 Z M 15.367188 8.75 L 14.632812 8.75 L 13.253906 8.765625 C 11.40625 8.796875 8.617188 8.882812 7.671875 9.121094 C 6.878906 9.316406 6.25 9.917969 6.015625 10.703125 C 5.789062 11.507812 5.695312 12.8125 5.652344 13.777344 L 5.625 14.796875 L 5.625 15.203125 L 5.636719 15.738281 C 5.664062 16.691406 5.75 18.347656 6.015625 19.296875 C 6.230469 20.066406 6.867188 20.671875 7.671875 20.878906 C 8.59375 21.113281 11.257812 21.199219 13.105469 21.230469 L 14.863281 21.25 L 16.3125 21.238281 C 18.128906 21.214844 21.300781 21.136719 22.324219 20.878906 C 23.121094 20.683594 23.75 20.082031 23.984375 19.296875 C 24.246094 18.359375 24.332031 16.738281 24.359375 15.777344 L 24.375 15.117188 L 24.371094 14.613281 C 24.355469 13.777344 24.289062 11.78125 23.984375 10.703125 C 23.75 9.917969 23.121094 9.316406 22.324219 9.121094 C 21.5 8.910156 19.261719 8.820312 17.476562 8.78125 Z M 13.082031 12.363281 L 17.984375 15 L 13.082031 17.636719 Z M 13.082031 12.363281 \"/></g></svg>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["sm_icon_colors"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@solo/partials/svg/_svg-youtube.html.twig";
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
        return new Source("", "@solo/partials/svg/_svg-youtube.html.twig", "/var/www/html/web/themes/contrib/solo/partials/svg/_svg-youtube.html.twig");
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
