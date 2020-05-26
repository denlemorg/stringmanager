<?php
namespace App;

use App\CheckInterface;
use App\UpdateInterface;

class Chainable
{

    private $str;

    private $checkObjects = [];
    private $updateObjects = [];

    public function __construct($str)
    {
        $this->str = $str;
    }

    /**
     * @param CheckInterface $checkUnit
     */
    public function addCheck(CheckInterface $checkUnit)
    {
        $this->checkObjects[] = $checkUnit;
    }

    /**
     * @param \App\UpdateInterface $updateUnit
     */
    public function addUpdate(UpdateInterface $updateUnit)
    {
        $this->updateObjects[] = $updateUnit;
    }

    public function run()
    {
        if (count($this->checkObjects) > 0) {
            foreach ($this->checkObjects as $k => $v) {
                $this->str = $v->checkString($this->str);
            }
        }
        if (count($this->updateObjects) > 0) {
            foreach ($this->updateObjects as $k => $v) {
                $this->str = $v->updateString($this->str);
            }
        }
    }

    public function getString()
    {
        return $this->str;
    }
}
