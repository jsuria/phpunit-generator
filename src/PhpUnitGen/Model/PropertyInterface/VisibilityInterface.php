<?php

namespace PhpUnitGen\Model\PropertyInterface;

/**
 * Interface VisibilityInterface.
 *
 * @author     Paul Thébaud <paul.thebaud29@gmail.com>.
 * @copyright  2017-2018 Paul Thébaud <paul.thebaud29@gmail.com>.
 * @license    https://opensource.org/licenses/MIT The MIT license.
 * @link       https://github.com/paul-thebaud/phpunit-generator
 * @since      Class available since Release 2.0.0.
 */
interface VisibilityInterface
{
    /**
     * @var null UNKNOWN If the visibility is unknown.
     */
    const UNKNOWN   = null;

    /**
     * @var int PUBLIC A public visibility.
     */
    const PUBLIC    = 1;

    /**
     * @var int PUBLIC A protected visibility.
     */
    const PROTECTED = 2;

    /**
     * @var int PUBLIC A private visibility.
     */
    const PRIVATE   = 3;

    /**
     * @param int|null $visibility The new visibility to set.
     */
    public function setVisibility(?int $visibility): void;

    /**
     * @return int|null The current visibility.
     */
    public function getVisibility(): ?int;
}
