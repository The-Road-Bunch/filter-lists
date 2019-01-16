<?php
/**
 * This file is part of the theroadbunch/filter-lists package.
 *
 * (c) Dan McAdams <danmcadams@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace RoadBunch\Tests\Lists;


use PHPUnit\Framework\TestCase;
use RoadBunch\Lists\Blacklist;
use RoadBunch\Lists\FilterList;
use RoadBunch\Lists\InvalidListTypeException;
use RoadBunch\Lists\ListFactory;
use RoadBunch\Lists\Whitelist;

/**
 * Class ListFactoryTest
 *
 * @author  Dan McAdams
 * @package RoadBunch\Tests\Lists
 */
class ListFactoryTest extends TestCase
{
    public function testCreateWhitelist()
    {
        $list = ListFactory::create(FilterList::TYPE_WHITELIST, []);
        $this->assertInstanceOf(Whitelist::class, $list);
    }

    public function testCreateBlacklist()
    {
        $list = ListFactory::create(FilterList::TYPE_BLACKLIST, []);
        $this->assertInstanceOf(Blacklist::class, $list);
    }

    public function testCreateInvalidListType()
    {
        $this->expectException(InvalidListTypeException::class);
        ListFactory::create('invalid_list_type', []);
    }
}
