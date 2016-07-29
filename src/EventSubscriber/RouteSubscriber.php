<?php

namespace Drupal\udn_login\EventSubscriber;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

class RouteSubscriber extends RouteSubscriberBase {

  /**
   * Alters existing routes for a specific collection.
   *
   * @param \Symfony\Component\Routing\RouteCollection $collection
   *   The route collection for adding routes.
   */
  protected function alterRoutes(RouteCollection $collection) {
    /** @var Route $route */
    $route = $collection->get('user.login');
    if (isset($route)) {
      $route->setDefault('_form', '\Drupal\udn_login\Controller\UdnUserLoginForm');
    }
  }

}
