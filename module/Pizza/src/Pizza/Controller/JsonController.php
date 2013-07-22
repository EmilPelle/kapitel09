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
namespace Pizza\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;

/**
 * Json controller
 * 
 * Handles the pages for the Pizza module
 * 
 * @package    Pizza
 */
class JsonController extends AbstractActionController
{
    /**
     * Handle pizza intro page
     */
    public function indexAction()
    {
        $pizzaList = array(
            1 => 'Salami', 
            2 => 'Hawaii', 
            3 => 'Melone', 
            4 => 'Schinken', 
            5 => 'Thunfisch',
            6 => 'Speziale', 
            7 => 'Calzone', 
            8 => 'Vierjahreszeiten', 
            9 => 'Spinat',
        );

        return new JsonModel(array(
            'pizzaList'   => $pizzaList,
        ));
    }
}
