<?php
namespace FSAPI\Tests\Unit\Nodes;


use FSAPI\Nodes\SysInfoFriendlyName;

class SysInfoFriendlyNameTest extends NodeTestCase implements NodeTests
{
    protected $node = null;
    public function __construct()
    {
        $this->node = new SysInfoFriendlyName();
        parent::__construct();
    }
}