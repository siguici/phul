<?php

declare(strict_types=1);

namespace Phul\Tests\Unit;

use Phul\Application;

it('should output "Hello World!"', function () {
    ob_start();
    Application::main();
    expect(ob_get_clean())->toEqual('Hello World!');
});
