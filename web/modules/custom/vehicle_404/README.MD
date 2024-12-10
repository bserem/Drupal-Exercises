This is a module that returns 404 for a every content of type Vehicle with a release date of the year 2020
enable the module (plug and play)


Dec 10, 2024
added [if (\Drupal::routeMatch()->getRouteName() == 'entity.node.canonical')]
this check ensures that the 404 is only thrown if we are viewing the node documentation:
## Explanation

### 1. `\Drupal::routeMatch()`
This method retrieves the currently active route match object, which implements the `RouteMatchInterface`.

- **Documentation**: [Drupal::routeMatch() API Reference](https://api.drupal.org/api/drupal/core%21lib%21Drupal.php/function/Drupal%3A%3ArouteMatch/8.2.x)

### 2. `getRouteName()`
This method, called on the route match object, returns the name of the current route being processed.

- **Documentation**: [RouteMatch::getRouteName() API Reference](https://api.drupal.org/api/drupal/core%21lib%21Drupal%21Core%21Routing%21RouteMatch.php/class/RouteMatch/9.1.x)

### 3. `'entity.node.canonical'`
This is the route name for a node's canonical page. It typically corresponds to URLs like `/node/{nid}`. You can use this route name to determine if the user is viewing the main page of a specific node.

- **Documentation**: [Structure of Routes in Drupal](https://www.drupal.org/docs/drupal-apis/routing-system/structure-of-routes)
