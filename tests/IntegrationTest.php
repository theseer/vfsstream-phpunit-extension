<?php declare(strict_types=1);

class IntegrationTest extends PHPUnit\Framework\TestCase {
    public function testExtensionLoadedAndvfsStreamAvailable() {
        $this->assertTrue(class_exists(\org\bovigo\vfs\vfsStream::class));
    }

}
