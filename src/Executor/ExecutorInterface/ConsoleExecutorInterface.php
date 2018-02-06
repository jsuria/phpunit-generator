<?php

namespace PhpUnitGen\Executor\ExecutorInterface;

use PhpUnitGen\Exception\Exception;

/**
 * Interface ConsoleExecutorInterface.
 *
 * @author     Paul Thébaud <paul.thebaud29@gmail.com>.
 * @copyright  2017-2018 Paul Thébaud <paul.thebaud29@gmail.com>.
 * @license    https://opensource.org/licenses/MIT The MIT license.
 * @link       https://github.com/paul-thebaud/phpunit-generator
 * @since      Class available since Release 2.0.0.
 */
interface ConsoleExecutorInterface
{
    /**
     * Execute all PhpUnitGen tasks from parsing to code generation for a configuration (retrieved from the container).
     *
     * @throws Exception If an error occurred during process.
     */
    public function invoke(): void;
}
