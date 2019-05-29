<?php

namespace Drupal\ck_layouts\Controller;
use Drupal\Core\Controller\ControllerBase; 
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Controller routines for forum routes.
 */
class CKLayoutsController extends ControllerBase {

  
    /**
     * {@inheritdoc}
     */
    public  function test( ) {
        $layoutPluginManager = \Drupal::service('plugin.manager.core.layout');
        // Provide any configuration to the layout plugin if necessary.
        $layoutInstanceConfiguration = [];
        $layoutInstance = $layoutPluginManager->createInstance('three_column', $layoutInstanceConfiguration);

        // Build the content for your regions.
        $regions = [
            'left' => [
                '#markup' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.',
             ],
           
            'center' => [
                '#markup' => 'Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est.',
            ],
            'right' => [
                '#markup' => 'At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est.',
            ],              
        ];

       
        // build the render array.
        return $layoutInstance->build($regions);
    }

 

}
