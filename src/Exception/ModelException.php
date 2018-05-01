<?php
/**
 * @package Nexcess-SDK
 * @license https://opensource.org/licenses/MIT
 * @copyright 2018 Nexcess.net, LLC
 */

declare(strict_types  = 1);

namespace Nexcess\Sdk\Exception;

use Nexcess\Sdk\Exception\Exception;

class ModelException extends Exception {

  /** @var int Attempt to access a non-existant model property. */
  const NO_SUCH_PROPERTY = 1;

  /** @var int Attempt to assign to a non-existant or readonly property. */
  const NO_SUCH_WRITABLE_PROPERTY = 2;

  /** @var int Syncing model properties failed. */
  const SYNC_FAILED = 3;

  /** @var int Attempt to create/update/delete a readonly API endpoint. */
  const READONLY_MODEL = 5;

  /** @var int Unknown model name. */
  const NO_SUCH_MODEL = 6;

  /** @var int Wrong model class provided to a Collection. */
  const WRONG_MODEL_FOR_COLLECTION = 7;

  /** @var int Api tokens can be viewed only when created. */
  const API_TOKEN_NOT_VIEWABLE = 8;

  /** {@inheritDoc} */
  const INFO = [
    self::NO_SUCH_PROPERTY => ['message' => 'no_such_property'],
    self::NO_SUCH_WRITABLE_PROPERTY =>
      ['message' => 'no_such_writable_property'],
    self::SYNC_FAILED => ['message' => 'sync_failed'],
    self::READONLY_MODEL => ['message' => 'readonly_model'],
    self::NO_SUCH_MODEL => ['message' => 'no_such_model'],
    self::WRONG_MODEL_FOR_COLLECTION =>
      ['message' => 'wrong_model_for_collection'],
    self::API_TOKEN_NOT_VIEWABLE => ['message' => 'api_token_not_viewable']
  ];
}