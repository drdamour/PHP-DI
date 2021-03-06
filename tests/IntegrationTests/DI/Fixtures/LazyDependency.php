<?php
/**
 * PHP-DI
 *
 * @link      http://mnapoli.github.io/PHP-DI/
 * @copyright Matthieu Napoli (http://mnapoli.fr/)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT (see the LICENSE file)
 */

namespace IntegrationTests\DI\Fixtures;

/**
 * Fixture class
 */
class LazyDependency
{

    /**
     * @return boolean
     */
    public function getValue()
    {
        return true;
    }

}
