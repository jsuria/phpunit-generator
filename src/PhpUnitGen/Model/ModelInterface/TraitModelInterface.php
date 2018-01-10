<?php

namespace PhpUnitGen\Model\ModelInterface;

/**
 * Interface TraitModelInterface.
 *
 * @author     Paul Thébaud <paul.thebaud29@gmail.com>.
 * @copyright  2017-2018 Paul Thébaud <paul.thebaud29@gmail.com>.
 * @license    https://opensource.org/licenses/MIT The MIT license.
 * @link       https://github.com/paul-thebaud/phpunit-generator
 * @since      Class available since Release 2.0.0.
 */
interface TraitModelInterface extends InterfaceModelInterface
{
    /**
     * @param AttributeModelInterface $attribute The new attribute to add.
     */
    public function addAttribute(AttributeModelInterface $attribute): void;

    /**
     * Check if an attribute exists.
     *
     * @param string $name The name of the attribute.
     *
     * @return bool True if it exists.
     */
    public function hasAttribute(string $name): bool;

    /**
     * Get an attribute if exists.
     *
     * @param string $name The name of the attribute.
     *
     * @return AttributeModelInterface|null The attribute if exists, else null.
     */
    public function getAttribute(string $name): ?AttributeModelInterface;

    /**
     * @return AttributeModelInterface[] All attributes contained.
     */
    public function getAttributes(): array;
}
