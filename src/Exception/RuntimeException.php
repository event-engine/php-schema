<?php
/**
 * This file is part of event-engine/php-schema.
 * (c) 2018-2021 prooph software GmbH <contact@prooph.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace EventEngine\Schema\Exception;

class RuntimeException extends \RuntimeException implements SchemaException
{
    protected $code = 500;
}
