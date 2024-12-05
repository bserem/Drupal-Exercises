<?php

namespace Drupal\vehicle_404\EventSubscriber;

use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Drupal\node\NodeInterface;


class Vehicle404Subscriber implements EventSubscriberInterface {

  /**
   * Responds to kernel request events.
   *
   * @param \Symfony\Component\HttpKernel\Event\RequestEvent $event
   *   The event to process.
   */
  public function onKernelRequest(RequestEvent $event) {
    $request = $event->getRequest();

    
    if ($request->attributes->get('_route') === 'entity.node.canonical') {
      $node = $request->attributes->get('node');

      
      if ($node instanceof NodeInterface && $node->bundle() === 'vehicle') {
        // Get the release date field value.
        $release_date = $node->get('field_release_date')->value;

        // Check if the release date is in 2020.
        if (!empty($release_date) && strpos($release_date, '2020') === 0) {
          // Throw a 404 error.
          throw new NotFoundHttpException();
        }
      }
    }
  }

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents() {
    $events['kernel.request'][] = ['onKernelRequest'];
    return $events;
  }

}
