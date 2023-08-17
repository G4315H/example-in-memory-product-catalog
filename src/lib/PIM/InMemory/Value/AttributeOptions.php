<?php

/**
 * @copyright Copyright (C) Ibexa AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace Ibexa\ExampleRemoteProductCatalog\PIM\InMemory\Value;

use Ibexa\Contracts\Core\Options\OptionsBag;

final class AttributeOptions implements OptionsBag
{
    public function all(): array
    {
        return [];
    }

    public function get(string $key, $default = null)
    {
        return $default;
    }

    public function has(string $key): bool
    {
        return false;
    }
}
