<?php
/**
 * ZF2 Buch Kapitel 9
 * 
 * Das Buch "Zend Framework 2 - Das Praxisbuch"
 * von Ralf Eggert ist im Galileo-Computing Verlag erschienen. 
 * ISBN 978-3-8362-2610-3
 * 
 * @package    Pizza
 * @author     Ralf Eggert <r.eggert@travello.de>
 * @copyright  Alle Listings sind urheberrechtlich geschützt!
 * @link       http://www.zendframeworkbuch.de/ und http://www.galileocomputing.de/3460
 */

/**
 * namespace definition and usage
 */
namespace Pizza\View\Helper;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Random pizza view helper factory
 * 
 * @package    Pizza
 */
class RandomPizzaFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $locator = $serviceLocator->getServiceLocator();
        $service = $locator->get('Pizza\Service');
        $random  = $service->fetchSingleByRandom();
        $helper  = new RandomPizza($random);
        return $helper;
    }
}