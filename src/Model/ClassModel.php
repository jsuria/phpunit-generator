<?php

namespace PhpUnitGen\Model;

use PhpUnitGen\Model\ModelInterface\ClassModelInterface;
use PhpUnitGen\Model\PropertyTrait\AbstractTrait;
use PhpUnitGen\Model\PropertyTrait\FinalTrait;

/**
 * Class ClassModel.
 *
 * @author     Paul Thébaud <paul.thebaud29@gmail.com>.
 * @copyright  2017-2018 Paul Thébaud <paul.thebaud29@gmail.com>.
 * @license    https://opensource.org/licenses/MIT The MIT license.
 * @link       https://github.com/paul-thebaud/phpunit-generator
 * @since      Class available since Release 2.0.0.
 */
class ClassModel extends TraitModel implements ClassModelInterface
{
    use FinalTrait;
    use AbstractTrait;
}