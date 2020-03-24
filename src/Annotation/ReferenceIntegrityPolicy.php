<?php

declare(strict_types=1);

namespace Drupal\reference_integrity\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines a ReferenceIntegrityPolicy annotation object.
 *
 * @Annotation
 */
class ReferenceIntegrityPolicy extends Plugin {

  /**
   * The plugin ID.
   *
   * @var string
   */
  public $id;

  /**
   * The human-readable name of the plugin.
   *
   * @var \Drupal\Core\Annotation\Translation
   *
   * @ingroup plugin_translatable
   */
  public $label;

  /**
   * A short description of the plugin.
   *
   * @var \Drupal\Core\Annotation\Translation
   *
   * @ingroup plugin_translatable
   */
  public $description;

}
