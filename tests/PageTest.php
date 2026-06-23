<?php

use PHPUnit\Framework\TestCase;

/**
 * Test class for web pages
 */
class PageTest extends TestCase
{
    /**
     * Test that index.php file exists
     */
    public function testIndexPageFileExists(): void
    {
        $this->assertFileExists(__DIR__ . '/../index.php');
    }

    /**
     * Test that formatarticle.php file exists
     */
    public function testFormatArticleFileExists(): void
    {
        $this->assertFileExists(__DIR__ . '/../web/formatarticle.php');
    }

    /**
     * Test that index.php is valid HTML5 document
     */
    public function testIndexPageHasValidHTML5Doctype(): void
    {
        $content = file_get_contents(__DIR__ . '/../index.php');
        $this->assertStringContainsString('<!DOCTYPE html>', $content);
    }

    /**
     * Test that index.php has proper HTML structure
     */
    public function testIndexPageHasHtmlStructure(): void
    {
        $content = file_get_contents(__DIR__ . '/../index.php');
        $this->assertStringContainsString('<html', $content);
        $this->assertStringContainsString('</html>', $content);
        $this->assertStringContainsString('<head>', $content);
        $this->assertStringContainsString('</head>', $content);
        $this->assertStringContainsString('<body>', $content);
        $this->assertStringContainsString('</body>', $content);
    }

    /**
     * Test that index.php has UTF-8 charset
     */
    public function testIndexPageHasUTF8Charset(): void
    {
        $content = file_get_contents(__DIR__ . '/../index.php');
        $this->assertStringContainsString('charset="UTF-8"', $content);
    }

    /**
     * Test that index.php includes Bootstrap CSS
     */
    public function testIndexPageIncludesBootstrapCSS(): void
    {
        $content = file_get_contents(__DIR__ . '/../index.php');
        $this->assertStringContainsString('bootstrap', strtolower($content));
    }

    /**
     * Test that index.php has viewport meta tag
     */
    public function testIndexPageHasViewportMetaTag(): void
    {
        $content = file_get_contents(__DIR__ . '/../index.php');
        $this->assertStringContainsString('viewport', $content);
    }

    /**
     * Test that index.php has a title
     */
    public function testIndexPageHasTitle(): void
    {
        $content = file_get_contents(__DIR__ . '/../index.php');
        $this->assertStringContainsString('<title>', $content);
        $this->assertStringContainsString('</title>', $content);
    }

    /**
     * Test that index.php has navbar
     */
    public function testIndexPageHasNavbar(): void
    {
        $content = file_get_contents(__DIR__ . '/../index.php');
        $this->assertStringContainsString('navbar', strtolower($content));
    }

    /**
     * Test that formatarticle.php has valid HTML5 doctype
     */
    public function testFormatArticleHasValidHTML5Doctype(): void
    {
        $content = file_get_contents(__DIR__ . '/../web/formatarticle.php');
        $this->assertStringContainsString('<!DOCTYPE html>', $content);
    }

    /**
     * Test that formatarticle.php has proper HTML structure
     */
    public function testFormatArticleHasHtmlStructure(): void
    {
        $content = file_get_contents(__DIR__ . '/../web/formatarticle.php');
        $this->assertStringContainsString('<html', $content);
        $this->assertStringContainsString('</html>', $content);
        $this->assertStringContainsString('<head>', $content);
        $this->assertStringContainsString('</head>', $content);
        $this->assertStringContainsString('<body>', $content);
        $this->assertStringContainsString('</body>', $content);
    }

    /**
     * Test that formatarticle.php has UTF-8 charset
     */
    public function testFormatArticleHasUTF8Charset(): void
    {
        $content = file_get_contents(__DIR__ . '/../web/formatarticle.php');
        $this->assertStringContainsString('charset="UTF-8"', $content);
    }

    /**
     * Test that formatarticle.php includes Bootstrap CSS
     */
    public function testFormatArticleIncludesBootstrapCSS(): void
    {
        $content = file_get_contents(__DIR__ . '/../web/formatarticle.php');
        $this->assertStringContainsString('bootstrap', strtolower($content));
    }

    /**
     * Test that formatarticle.php has viewport meta tag
     */
    public function testFormatArticleHasViewportMetaTag(): void
    {
        $content = file_get_contents(__DIR__ . '/../web/formatarticle.php');
        $this->assertStringContainsString('viewport', $content);
    }

    /**
     * Test that formatarticle.php has a title
     */
    public function testFormatArticleHasTitle(): void
    {
        $content = file_get_contents(__DIR__ . '/../web/formatarticle.php');
        $this->assertStringContainsString('<title>', $content);
        $this->assertStringContainsString('</title>', $content);
    }

    /**
     * Test that formatarticle.php has navbar
     */
    public function testFormatArticleHasNavbar(): void
    {
        $content = file_get_contents(__DIR__ . '/../web/formatarticle.php');
        $this->assertStringContainsString('navbar', strtolower($content));
    }

    /**
     * Test that index.php has footer with copyright
     */
    public function testIndexPageHasFooterCopyright(): void
    {
        $content = file_get_contents(__DIR__ . '/../index.php');
        $this->assertStringContainsString('Copyright', $content);
    }

    /**
     * Test that formatarticle.php has footer with copyright
     */
    public function testFormatArticleHasFooterCopyright(): void
    {
        $content = file_get_contents(__DIR__ . '/../web/formatarticle.php');
        $this->assertStringContainsString('Copyright', $content);
    }
}
