<?php

declare(strict_types=1);

namespace Flat3\Lodata\Tests\EntitySet;

use Flat3\Lodata\Tests\Drivers\WithFilesystemDriver;

class FilesystemTest extends EntitySet
{
    use WithFilesystemDriver;

    protected $selectProperty = 'path';
}
