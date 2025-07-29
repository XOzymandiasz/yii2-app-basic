<?php

namespace _support;

use UnitTester;
use yii\base\InvalidCallException;
use yii\base\Model;

/**
 * @property UnitTester $tester
 */
trait UnitModelTrait
{

    abstract public function getModel(): Model;


    protected function thenSuccessValidate(array $attributes = [], bool $clearErrors = true): void
    {
        $validate = $this->getModel()->validate($attributes, $clearErrors);
        if (!$validate) {
            codecept_debug($this->getModel()->getErrors());
        }
        $this->tester->assertTrue($validate);
    }

    protected function thenUnsuccessValidate(array $attributes = [], bool $clearErrors = true): void
    {
        $validate = $this->getModel()->validate($attributes, $clearErrors);
        codecept_debug($this->getModel()->getErrors());
        $this->tester->assertFalse($validate);

    }


    protected function thenSeeError(string $message, string $attribute): void
    {
        $this->tester->assertSame($message, $this->getModel()->getFirstError($attribute));
    }

    protected function thenDontSeeError(string $attribute): void
    {
        $this->tester->assertEmpty($this->getModel()->getErrors($attribute));
    }


    public function thenSuccessSave(): void
    {
        if (!$this->getModel()->hasMethod('save')) {
            throw new InvalidCallException('$model: ' . $this->getModel()::class . ' has not save() method.');
        }
        $save = (bool)$this->getModel()->save();
        if (!$save) {
            codecept_debug($this->getModel()->getErrors());
        }
        $this->tester->assertTrue($save);
    }

    public function thenUnsuccessSave(): void
    {
        if (!$this->getModel()->hasMethod('save')) {
            throw new InvalidCallException('$model: ' . $this->getModel()::class . ' has not save() method.');
        }
        $save = (bool)$this->getModel()->save();
        $this->tester->assertFalse($save);
    }


}
