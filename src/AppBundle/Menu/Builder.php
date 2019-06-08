<?php

namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class Builder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav nav-pills');
        
        $menu->addChild('Home', ['route' => 'homepage']);

        // access services from the container!
        $em = $this->container->get('doctrine')->getManager();
        // findMostRecent and Blog are just imaginary examples
        //$blog = $em->getRepository('AppBundle:Blog')->findMostRecent();

        /*$menu->addChild('Latest Blog Post', [
            'route' => 'blog_show',
            'routeParameters' => ['id' => $blog->getId()]
        ]);*/

        $menu->addChild('Products', ['route' => 'product_index']);
        //$menu->addChild('Login', ['route' => 'login']);
        // you can also add sub levels to your menus as follows
        //$menu['Login']->addChild('Login', ['route' => 'login']);
        //$menu['Login']->addChild('Logout', ['route' => 'logout']);

        // ... add more children

        foreach ($menu as $child) {
            $child->setLinkAttribute('class', 'nav-link')
                ->setAttribute('class', 'nav-item active');
        }

        return $menu;
    }
}