<?php
/**
 * ZF2 Buch Kapitel 9
 * 
 * Das Buch "Zend Framework 2 - Das Praxisbuch"
 * von Ralf Eggert ist im Galileo-Computing Verlag erschienen. 
 * ISBN 978-3-8362-2610-3
 * 
 * @package    Application
 * @author     Ralf Eggert <r.eggert@travello.de>
 * @copyright  Alle Listings sind urheberrechtlich geschützt!
 * @link       http://www.zendframeworkbuch.de/ und http://www.galileocomputing.de/3460
 */

/**
 * namespace definition and usage
 */
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Listing controller
 * 
 * Shows and executes the listings
 * 
 * @package    Application
 */
class ListingController extends AbstractActionController
{
    /**
     * Redirects to homepage
     */
    public function indexAction()
    {
        return $this->redirect()->toRoute('home');
    }
    
    /**
     * Show listing 09.01
     */
    public function listing0901Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 09.02
     */
    public function listing0902Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 09.03
     */
    public function listing0903Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 09.04
     */
    public function listing0904Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 09.05
     */
    public function listing0905Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 09.06
     */
    public function listing0906Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 09.07
     */
    public function listing0907Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 09.08
     */
    public function listing0908Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 09.09
     */
    public function listing0909Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 09.10
     */
    public function listing0910Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 09.11
     */
    public function listing0911Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 09.12
     */
    public function listing0912Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 09.13
     */
    public function listing0913Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 09.14
     */
    public function listing0914Action()
    {
        return new ViewModel();
    }

    /**
     * Show listing 09.15
     */
    public function listing0915Action()
    {
        return new ViewModel();
    }
}
