<?php

/*
 * This file is part of the PHP Bench package
 *
 * (c) Daniel Leech <daniel@dantleech.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PhpBench\Console;

use Symfony\Component\Console\Output\OutputInterface;

interface OutputAware
{
    public function setOutput(OutputInterface $output);
}