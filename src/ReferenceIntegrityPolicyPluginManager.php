<?php

declare(strict_types=1);

namespace Drupal\reference_integrity;

use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Plugin\DefaultPluginManager;
use Drupal\reference_integrity\Annotation\ReferenceIntegrityPolicy;

/**
 * Default implementation of plugin.manager.reference_integrity.policy service.
 */
class ReferenceIntegrityPolicyPluginManager extends DefaultPluginManager implements ReferenceIntegrityPolicyPluginManagerInterface {

  /**
   * Constructs a new service instance.
   *
   * @param \Traversable $namespaces
   *   An object that implements \Traversable which contains the root paths
   *   keyed by the corresponding namespace to look for plugin implementations.
   * @param \Drupal\Core\Cache\CacheBackendInterface $cacheBackend
   *   The cache backend.
   * @param \Drupal\Core\Extension\ModuleHandlerInterface $moduleHandler
   *   The module handler service.
   */
  public function __construct(\Traversable $namespaces, CacheBackendInterface $cacheBackend, ModuleHandlerInterface $moduleHandler) {
    parent::__construct('Plugin/ReferenceIntegrity/Policy', $namespaces, $moduleHandler, ReferenceIntegrityPolicyPluginInterface::class, ReferenceIntegrityPolicy::class);
  }

}
