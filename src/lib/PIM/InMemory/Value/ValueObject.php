<?php

/**
 * @copyright Copyright (C) Ibexa AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace Ibexa\ExampleRemoteProductCatalog\PIM\InMemory\Value;

use Ibexa\Contracts\Core\Repository\Values\ValueObject as BaseValueObject;

/**
 * Becouse \Ibexa\Contracts\Core\Repository\PermissionResolver requires \Ibexa\Contracts\Core\Repository\Values\ValueObject.
 */
abstract class ValueObject extends BaseValueObject
{
    public function __isset($property)
    {
        // Disable default \Ibexa\Contracts\Core\Repository\Values\ValueObject behaviour
        return false;
    }
}
