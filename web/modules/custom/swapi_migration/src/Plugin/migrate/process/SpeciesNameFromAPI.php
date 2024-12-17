<?php

namespace Drupal\custom_migration_plugin\Plugin\migrate\process;

use Drupal\migrate\Plugin\migrate\process\ProcessPluginBase;
use GuzzleHttp\Client;
use Drupal\Core\Logger\LoggerChannelFactoryInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Fetches species names from the SWAPI based on URLs.
 *
 * @MigrateProcessPlugin(
 *   id = "species_name_from_api"
 * )
 */
class SpeciesNameFromAPI extends ProcessPluginBase {

    public function transform($value, MigrateExecutableInterface $migrate_executable, Row $row, $destination_property) {
        $species_names = [];
        
        if (is_array($value)) {
            foreach ($value as $url) {
                $species_name = $this->getSpeciesNameFromURL($url);
                if ($species_name) {
                    $species_names[] = $species_name;
                }
            }
        }
        
        return $species_names;
    }
    
    private function getSpeciesNameFromURL($url) {
        try {
            $response = \Drupal::httpClient()->get($url);
            $data = json_decode($response->getBody(), true);
            
            return isset($data['name']) ? $data['name'] : null;
        }
        catch (\Exception $e) {
            \Drupal::logger('swapi_migration')->error('Failed to fetch species from URL: @url. Error: @error', ['@url' => $url, '@error' => $e->getMessage()]);
        }
        return null;
    }
}
