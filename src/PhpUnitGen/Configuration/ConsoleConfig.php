<?php

namespace PhpUnitGen\Configuration;

use PhpUnitGen\Exception\InvalidConfigException;
use Respect\Validation\Validator;

/**
 * Class ConsoleConfig.
 *
 * @author     Paul Thébaud <paul.thebaud29@gmail.com>.
 * @copyright  2017-2018 Paul Thébaud <paul.thebaud29@gmail.com>.
 * @license    https://opensource.org/licenses/MIT The MIT license.
 * @link       https://github.com/paul-thebaud/phpunit-generator
 * @since      Class available since Release 2.0.0.
 */
class ConsoleConfig extends BaseConfig implements ConsoleConfigInterface
{
    /**
     * {@inheritdoc}
     */
    protected function validate($config): void
    {
        parent::validate($config);

        // Check boolean parameters
        if (! Validator::key('overwrite', Validator::boolType())->validate($config)) {
            throw new InvalidConfigException('"overwrite" parameter must be set as a boolean.');
        }

        if (! Validator::key('auto', Validator::boolType())->validate($config)) {
            throw new InvalidConfigException('"auto" parameter must be set as a boolean.');
        }
        if (! Validator::key('ignore', Validator::boolType())->validate($config)) {
            throw new InvalidConfigException('"ignore" parameter must be set as a boolean.');
        }

        // Check string parameters
        if (! Validator::key('include', Validator::stringType())->validate($config)) {
            throw new InvalidConfigException('"include" parameter must be set as a string.');
        }
        if (! Validator::key('exclude', Validator::stringType())->validate($config)) {
            throw new InvalidConfigException('"exclude" parameter must be set as a string.');
        }

        // Check that dirs exists
        if (! Validator::key('dirs', Validator::arrayType()->length(1, null))->validate($config)) {
            throw new InvalidConfigException('"dirs" parameter is not an array or does not contains elements.');
        }
        // Validate each dirs
        if (! Validator::arrayVal()
            ->each(Validator::stringType(), Validator::stringType())->validate($config['dirs'])
        ) {
            throw new InvalidConfigException('Some directories in "dirs" parameter are not strings.');
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasOverwrite(): bool
    {
        return $this->config['overwrite'];
    }

    /**
     * {@inheritdoc}
     */
    public function hasIgnore(): bool
    {
        return $this->config['ignore'];
    }

    /**
     * {@inheritdoc}
     */
    public function getIncludeRegex(): string
    {
        return $this->config['include'];
    }

    /**
     * {@inheritdoc}
     */
    public function getExcludeRegex(): string
    {
        return $this->config['exclude'];
    }

    /**
     * {@inheritdoc}
     */
    public function getDirectories(): array
    {
        return $this->config['dirs'];
    }
}
