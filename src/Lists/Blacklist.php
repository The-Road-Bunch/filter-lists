<?php
/**
 * This file is part of the theroadbunch/filter-lists package.
 *
 * (c) Dan McAdams <danmcadams@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace RoadBunch\Lists;


/**
 * Class Blacklist
 *
 * @author  Dan McAdams
 * @package RoadBunch\Lists
 */
class Blacklist extends FilterList
{
    public function __construct(array $elements = [])
    {
        parent::__construct(static::TYPE_BLACKLIST, $elements);
    }
}
