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
