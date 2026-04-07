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

/* @solo/partials/svg/_svg-logo.html.twig */
class __TwigTemplate_0f402286c2f5578f7684eda2e6eb678e extends Template
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
        yield "<svg class=\"solo-logo\" version=\"1.2\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 800 800\" width=\"100\" height=\"100\">
  <defs>
    <linearGradient id=\"solo-logo-primary-gradient\" gradientUnits=\"userSpaceOnUse\"></linearGradient>
    <radialGradient id=\"solo-logo-radial-gradient\" cx=\"0\" cy=\"0\" r=\"1\" href=\"#solo-logo-primary-gradient\" gradientTransform=\"matrix(400,0,0,400,400,400)\">
      <stop offset=\"0\" stop-color=\"#444\"/> <!-- Light color at the center -->
      <stop offset=\".99\" stop-color=\"#000\"/> <!-- Dark color towards the edge -->
      <stop offset=\"1\" stop-color=\"#000\"/>
    </radialGradient>
  </defs>
  <style>
    .solo-logo-outer-circle { fill: url(#solo-logo-radial-gradient); }
    .solo-logo-inner-pattern { fill: #fff; }
  </style>
  <path class=\"solo-logo-outer-circle\" d=\"M400 800c-221.2 0-400-178.8-400-400S178.8 0 400 0s400 178.8 400 400-178.8 400-400 400z\"/>
  <path class=\"solo-logo-inner-pattern\" d=\"M401.5 655q-44.4 0-83.1-10.9-38.2-11-64.9-26l-23.6 23.9h-29l-4.5-175.3h29.4q9.9 24.9 25.3 52.6 15.4 27.7 35.6 49.6 20.8 22.9 46.4 37.2 26 14.4 60.5 14.4 46.5 0 71.1-22.6 25-22.9 25-57.4 0-28.4-21.2-47.5-20.9-19.5-65-33.5-28.7-9.2-52.9-17.1-24-7.9-45.1-16.1-48.9-19.5-72.8-55.7-23.6-36.2-23.6-81 0-28.4 12.3-54.3 12.3-26.4 35.9-47.2 22.5-19.5 57.7-31.8 35.2-12.3 76.6-12.3 40.3 0 75.5 11.3 35.2 10.9 55.4 22.2l20.8-20.5h29.8l2.7 165.4h-29.4q-10.2-26.6-24.2-54.3-13.7-28.1-29.1-46.5-16.7-19.8-38.6-31.5-21.9-11.9-51.3-11.9-36.9 0-60.5 20.8-23.2 20.9-23.2 51.6 0 29.1 20.1 47.6 20.5 18.4 63.6 32.4 25.3 8.6 51.6 17.1 26.3 8.6 46.8 16.4 49.6 19.2 75.2 53 26 33.5 26 83.4 0 31.4-14.7 60.8-14.7 29.4-39.6 48.9-27.4 21.5-63.3 33.2-35.8 11.6-83.7 11.6z\"/>
</svg>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@solo/partials/svg/_svg-logo.html.twig";
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
        return new Source("", "@solo/partials/svg/_svg-logo.html.twig", "/var/www/html/web/themes/contrib/solo/partials/svg/_svg-logo.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
