<?php

declare(strict_types=1);

namespace Symplify\CodingStandard\Tests\Rules\RequireNewArgumentConstantRule\Fixture;

use Symfony\Component\Console\Input\InputOption;

new InputOption('config', 'c', InputOption::VALUE_REQUIRED, 'Config file');
