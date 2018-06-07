<?php
/**
 * @package Nexcess-SDK
 * @license https://opensource.org/licenses/MIT
 * @copyright 2018 Nexcess.net, LLC
 */

declare(strict_types  = 1);

namespace Nexcess\Sdk\Resource\CloudAccount\Tests;

use Nexcess\Sdk\ {
  Resource\CloudAccount\CloudAccount,
  Resource\Tests\ModelTestCase
};

/**
 * Unit test for cloud accounts (virtual hosting).
 */
class CloudAccountTest extends ModelTestCase {

  /** {@inheritDoc} */
  protected const _RESOURCE_PATH = __DIR__ . '/resources';

  /** {@inheritDoc} */
  protected const _RESOURCE_FROMARRAY = 'cloud-account-1.fromArray.json';

  /** {@inheritDoc} */
  protected const _RESOURCE_TOARRAY = 'cloud-account-1.toArray-shallow.php';

  /** {@inheritDoc} */
  protected const _RESOURCE_TOCOLLAPSEDARRAY =
    'cloud-account-1.toCollapsedArray.json';

  /** {@inheritDoc} */
  protected const _SUBJECT_FQCN = CloudAccount::class;
}
