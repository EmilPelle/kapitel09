<?php
/**
 * ZF2 Buch Kapitel 9
 * 
 * Das Buch "Zend Framework 2 - Von den Grundlagen bis zur fertigen Anwendung"
 * von Ralf Eggert ist im Addison-Wesley Verlag erschienen. 
 * ISBN 978-3-8273-2994-3
 * 
 * @package    Pizza
 * @author     Ralf Eggert <r.eggert@travello.de>
 * @copyright  Alle Listings sind urheberrechtlich geschützt!
 * @link       http://www.zendframeworkbuch.de/ und http://www.awl.de/2994
 */

/**
 * namespace definition and usage
 */
namespace Pizza\Service;

/**
 * Pizza model service
 * 
 * Handles the pizza service model
 * 
 * @package    Pizza
 */
class PizzaService
{
    /**
     * Pizza list
     * 
     * @var array
     */
    protected $pizzaList = array(
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
    
    /**
     * Fetch pizza single by random
     * 
    * @return array pizza data
     */
    public function fetchSingleByRandom()
    {
        $random = array_rand($this->pizzaList);

        return $this->pizzaList[$random];
    }
}
