<?php

namespace app\modules\postal\sender\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetLibrariesForLegalDepositsResponse implements ResultInterface
{
    /**
     * @var array<int<0,max>, \app\modules\postal\sender\Type\LibraryForLegalDepositType>
     */
    private array $libraryForLegalDeposit;

    /**
     * @return array<int<0,max>, \app\modules\postal\sender\Type\LibraryForLegalDepositType>
     */
    public function getLibraryForLegalDeposit() : array
    {
        return $this->libraryForLegalDeposit;
    }

    /**
     * @param array<int<0,max>, \app\modules\postal\sender\Type\LibraryForLegalDepositType> $libraryForLegalDeposit
     * @return static
     */
    public function withLibraryForLegalDeposit(array $libraryForLegalDeposit) : static
    {
        $new = clone $this;
        $new->libraryForLegalDeposit = $libraryForLegalDeposit;

        return $new;
    }
}

