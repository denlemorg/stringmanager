<?php


class CheckChain
{

    private $str;

    private $stackObjects = [];

    public function __construct($str)
    {
        $this->str = $str;
    }

    /**
     * @param CheckUpdateInterface $checkUnit
     */
    public function add(CheckUpdateInterface $checkUnit)
    {
        $this->stackObjects[] = $checkUnit;
    }

    public function run()
    {
        if (count($this->stackObjects) > 0) {
            foreach ($this->stackObjects as $k => $v) {
                $this->str = $v->checkUpdateString($this->str);
            }
        }
    }

    public function getString()
    {
        return $this->str;
    }
}
