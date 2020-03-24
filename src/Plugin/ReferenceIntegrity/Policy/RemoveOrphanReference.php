<?php

declare(strict_types=1);

namespace Drupal\reference_integrity\Plugin\ReferenceIntegrity\Policy;

use Drupal\Core\Annotation\Translation;
use Drupal\reference_integrity\Annotation\ReferenceIntegrityPolicy;
use Drupal\reference_integrity\ReferenceIntegrityPolicyPluginBase;

/**
 * Removes the references to the deleted entity.
 *
 * @ReferenceIntegrityPolicy(
 *   id = "remove_references",
 *   label = @Translation("Remove references"),
 *   description = @Translation("Remove references to deleted entity."),
 * )
 */
class RemoveOrphanReference extends ReferenceIntegrityPolicyPluginBase {

}
