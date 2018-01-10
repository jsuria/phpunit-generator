<?php

namespace PhpUnitGen\Model\PropertyInterface;

/**
 * Interface FinalInterface.
 *
 * @author     Paul Thébaud <paul.thebaud29@gmail.com>.
 * @copyright  2017-2018 Paul Thébaud <paul.thebaud29@gmail.com>.
 * @license    https://opensource.org/licenses/MIT The MIT license.
 * @link       https://github.com/paul-thebaud/phpunit-generator
 * @since      Class available since Release 2.0.0.
 */
interface FinalInterface
{
    /**
     * @param bool $isFinal The new final value to set.
     */
    public function setIsFinal(bool $isFinal): void;

    /**
     * @return bool True if it is final.
     */
    public function isFinal(): bool;
}
