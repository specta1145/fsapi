<?php
namespace FSAPI\Tests\Unit\Nodes;


use FSAPI\Nodes\SysClockSource;

class SysClockSourceTest extends NodeTestCase implements NodeTests
{
    protected $node = null;
    public function __construct()
    {
        $this->node = new SysClockSource();
        parent::__construct();
    }
}