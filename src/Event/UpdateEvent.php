<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Flex\Event;

use Composer\Script\Event;
use Composer\Script\ScriptEvents;

class UpdateEvent extends Event
{
    private $force;
    private $updatedRecipesOnly;

    public function __construct(bool $force, bool $updatedRecipesOnly)
    {
        $this->name = ScriptEvents::POST_UPDATE_CMD;
        $this->force = $force;
        $this->updatedRecipesOnly = $updatedRecipesOnly;
    }

    public function force(): bool
    {
        return $this->force;
    }

    public function updatedRecipesOnly(): bool
    {
        return $this->updatedRecipesOnly;
    }
}
