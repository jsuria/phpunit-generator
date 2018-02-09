<?php

namespace PhpUnitGen\Parser\NodeParser;

use PhpParser\Node;
use PhpUnitGen\Model\FunctionModel;
use PhpUnitGen\Model\ModelInterface\PhpFileModelInterface;

/**
 * Class FunctionNodeParser.
 *
 * @author     Paul Thébaud <paul.thebaud29@gmail.com>.
 * @copyright  2017-2018 Paul Thébaud <paul.thebaud29@gmail.com>.
 * @license    https://opensource.org/licenses/MIT The MIT license.
 * @link       https://github.com/paul-thebaud/phpunit-generator
 * @since      Class available since Release 2.0.0.
 */
class FunctionNodeParser extends AbstractFunctionNodeParser
{
    /**
     * Parse a node to update the parent node model.
     *
     * @param Node\Stmt\Function_   $node   The node to parse.
     * @param PhpFileModelInterface $parent The parent node.
     */
    public function invoke(Node\Stmt\Function_ $node, PhpFileModelInterface $parent): void
    {
        $function = new FunctionModel();
        $function->setParentNode($parent);
        $function->setName($node->name);
        $function->setIsGlobal(true);

        $this->parseFunction($node, $function);

        if (($documentation = $node->getDocComment()) !== null) {
            $this->documentationNodeParser->invoke($documentation, $function);
        }

        $parent->addFunction($function);
    }
}
