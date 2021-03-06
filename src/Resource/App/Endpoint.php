<?php
/**
 * @package Nexcess-SDK
 * @license https://opensource.org/licenses/MIT
 * @copyright 2018 Nexcess.net, LLC
 */

declare(strict_types  = 1);

namespace Nexcess\Sdk\Resource\App;

use Nexcess\Sdk\ {
  Resource\App\App,
  Resource\Endpoint as ReadableEndpoint
};

/**
 * API actions for App environments.
 */
class Endpoint extends ReadableEndpoint {

  /** {@inheritDoc} */
  public const MODULE_NAME = 'App';

  /** {@inheritDoc} */
  protected const _URI = 'app';

  /** {@inheritDoc} */
  protected const _MODEL_FQCN = App::class;
}
