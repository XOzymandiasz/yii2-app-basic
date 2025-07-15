<?php

namespace app\modules\postal\sender\Type;

class EmailDeliveryMethodType extends DeliveryMethodType
{
    /**
     * @var string
     */
    private string $email;

    /**
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return static
     */
    public function withEmail(string $email) : static
    {
        $new = clone $this;
        $new->email = $email;

        return $new;
    }
}

