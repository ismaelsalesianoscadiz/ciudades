<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'cciudades_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'c\\ciudadesBundle\\Controller\\DefaultController::homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cciudades_city' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'c\\ciudadesBundle\\Controller\\DefaultController::cityAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/city',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cciudades_countries' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'c\\ciudadesBundle\\Controller\\DefaultController::paisesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/countries',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cciudades_pais' => array (  0 =>   array (    0 => 'co',    1 => 'inicial',  ),  1 =>   array (    '_controller' => 'c\\ciudadesBundle\\Controller\\DefaultController::paisAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'inicial',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'co',    ),    2 =>     array (      0 => 'text',      1 => '/country',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cciudades_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'c\\ciudadesBundle\\Controller\\DefaultController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cciudades_recibirformulario' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'c\\ciudadesBundle\\Controller\\DefaultController::resultAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
