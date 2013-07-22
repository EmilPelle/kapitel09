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
namespace Pizza;

use Zend\EventManager\EventInterface;
use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\BootstrapListenerInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\ControllerProviderInterface;
use Zend\ModuleManager\Feature\ServiceProviderInterface;
use Zend\ModuleManager\Feature\ViewHelperProviderInterface;

/**
 * Pizza module class
 * 
 * @package    Pizza
 */
class Module implements 
    BootstrapListenerInterface,
    ConfigProviderInterface,
    AutoloaderProviderInterface,
    ControllerProviderInterface,
    ServiceProviderInterface,
    ViewHelperProviderInterface
{
    /**
     * Listen to the bootstrap event
     *
     * @param MvcEvent $e
     * @return void
     */
    public function onBootstrap(EventInterface $e)
    {
        // get event manager
        $eventManager = $e->getApplication()->getEventManager();
        
        // Register a render event
        $eventManager->attach('render', array($this, 'registerJsonStrategy'), 100);
    }

    /**
     * Returns configuration to merge with application configuration
     *
     * @return array|\Traversable
     */
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    /**
     * Return an array for passing to Zend\Loader\AutoloaderFactory.
     *
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
    
    /**
     * Expected to return \Zend\ServiceManager\Config object or array to seed
     * such an object.
     *
     * @return array|\Zend\ServiceManager\Config
     */
    public function getControllerConfig()
    {
        return array(
            'invokables' => array(
                'pizza-json' => 'Pizza\Controller\JsonController',
            ),
        );
    }
    
    /**
     * Expected to return \Zend\ServiceManager\Config object or array to
     * seed such an object.
     *
     * @return array|\Zend\ServiceManager\Config
     */
    public function getViewHelperConfig()
    {
        return array(
            'factories' => array(
                'randomPizza' => 'Pizza\View\Helper\RandomPizzaFactory',
            ),
        );
    }
    
    /**
     * Expected to return \Zend\ServiceManager\Config object or array to
     * seed such an object.
     *
     * @return array|\Zend\ServiceManager\Config
     */
    public function getServiceConfig()
    {
        return array(
            'invokables' => array(
                'Pizza\Service' => 'Pizza\Service\PizzaService',
            ),
        );
    }
    
    /**
     * Register JSON Strategy
     *
     * @param MvcEvent $e
     * @return void
     */
    public function registerJsonStrategy($e)
    {
        // check controller
        $controller = $e->getRouteMatch()->getParam('controller');
        if (false === strpos($controller, 'json')) {
            return;
        }
        
        // get event manager
        $serviceManager = $e->getApplication()->getServiceManager();
        
        // get view and json strategy
        $view         = $serviceManager->get('Zend\View\View');
        $jsonStrategy = $serviceManager->get('ViewJsonStrategy');
        
        // attach json strategy
        $view->getEventManager()->attach($jsonStrategy, 100);
    }
}
