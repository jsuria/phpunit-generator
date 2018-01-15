<?php

namespace PhpUnitGen\Model\ModelInterface;

use PhpUnitGen\Model\PropertyInterface\AbstractInterface;
use PhpUnitGen\Model\PropertyInterface\ClassLikeInterface;
use PhpUnitGen\Model\PropertyInterface\DocumentationInterface;
use PhpUnitGen\Model\PropertyInterface\FinalInterface;
use PhpUnitGen\Model\PropertyInterface\NameInterface;
use PhpUnitGen\Model\PropertyInterface\NamespaceInterface;
use PhpUnitGen\Model\PropertyInterface\NodeInterface;
use PhpUnitGen\Model\PropertyInterface\StaticInterface;
use PhpUnitGen\Model\PropertyInterface\VisibilityInterface;

/**
 * Interface FunctionModelInterface.
 *
 * @author     Paul Thébaud <paul.thebaud29@gmail.com>.
 * @copyright  2017-2018 Paul Thébaud <paul.thebaud29@gmail.com>.
 * @license    https://opensource.org/licenses/MIT The MIT license.
 * @link       https://github.com/paul-thebaud/phpunit-generator
 * @since      Class available since Release 2.0.0.
 */
interface FunctionModelInterface extends
    NameInterface,
    VisibilityInterface,
    StaticInterface,
    FinalInterface,
    AbstractInterface,
    NodeInterface,
    DocumentationInterface
{
    /**
     * @param ParameterModelInterface $parameter A new parameter for this function.
     */
    public function addParameter(ParameterModelInterface $parameter): void;

    /**
     * @return ParameterModelInterface[] All parameters of this function.
     */
    public function getParameters(): array;

    /**
     * @param ReturnModelInterface $return The new return to be set.
     */
    public function setReturn(ReturnModelInterface $return): void;

    /**
     * @return ReturnModelInterface The current return.
     */
    public function getReturn(): ReturnModelInterface;
}
