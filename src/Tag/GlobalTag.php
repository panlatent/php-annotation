<?php
/**
 * Annotation - Parsing PHPDoc style annotations from comments
 *
 * @author  panlatent@gmail.com
 * @link    https://github.com/panlatent/annotation
 * @license https://opensource.org/licenses/MIT
 */

namespace Panlatent\Annotation\Tag;

use Panlatent\Annotation\Tag;

class GlobalTag extends Tag
{
    protected $type;

    protected $globalName;

    protected $description;
}