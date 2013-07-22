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

use Zend\Form\View\Helper\AbstractHelper;

/**
 * Random pizza view helper
 * 
 * @package    Pizza
 */
class RandomPizza extends AbstractHelper
{
    /**
     * Random pizza
     *
     * @var string
     */
    protected $random = null;
    
    /**
     * Get dependencies
     * 
     * @param string $random
     */
    public function __construct($random)
    {
        $this->setRandomPizza($random);
    }
    
    /**
     * Set pizza random
     * 
     * @param string $random
     */
    public function setRandomPizza($random)
    {
        $this->random = $random;
    }
    
    /**
     * Get pizza random
     * 
     * @return string
     */
    public function getRandomPizza()
    {
        return $this->random;
    }
    
    /**
     * Returns random pizza
     *
     * @return string
     */
    public function __invoke()
    {
        $html = '<div class="hero-unit">';
        $html.= '<h1>' . $this->getRandomPizza() . '</h1>';
        $html.= '</div>';
        
        return $html;
    }
}
