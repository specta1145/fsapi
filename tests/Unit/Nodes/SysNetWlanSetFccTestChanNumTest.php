<?php
namespace FSAPI\Tests\Unit\Nodes;


use FSAPI\Nodes\SysNetWlanSetFccTestChanNum;

class SysNetWlanSetFccTestChanNumTest extends NodeTestCase implements NodeTests
{
    protected $node = null;
    public function __construct()
    {
        $this->node = new SysNetWlanSetFccTestChanNum();
        parent::__construct();
    }
}