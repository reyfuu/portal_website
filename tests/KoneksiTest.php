<?php

use PHPUnit\Framework\TestCase;

/**
 * Test class for Koneksi.php
 * Tests the database connection configuration
 */
class KoneksiTest extends TestCase
{
    /**
     * Test that Koneksi.php file exists
     */
    public function testKoneksiFileExists(): void
    {
        $this->assertFileExists(__DIR__ . '/../Koneksi.php');
    }

    /**
     * Test that database configuration variables are set correctly in the file
     */
    public function testDatabaseConfigurationVariables(): void
    {
        $content = file_get_contents(__DIR__ . '/../Koneksi.php');
        
        $this->assertStringContainsString('$host="localhost"', $content);
        $this->assertStringContainsString('$user="root"', $content);
        $this->assertStringContainsString('$password=""', $content);
        $this->assertStringContainsString('$db="webnews_kita"', $content);
    }

    /**
     * Test that Koneksi.php uses mysqli_connect
     */
    public function testKoneksiUsesMysqliConnect(): void
    {
        $content = file_get_contents(__DIR__ . '/../Koneksi.php');
        
        $this->assertStringContainsString('mysqli_connect', $content);
    }

    /**
     * Test that Koneksi.php has error handling
     */
    public function testKoneksiHasErrorHandling(): void
    {
        $content = file_get_contents(__DIR__ . '/../Koneksi.php');
        
        $this->assertStringContainsString('if (!$kon)', $content);
        $this->assertStringContainsString('die', $content);
    }

    /**
     * Test that host is localhost
     */
    public function testHostIsLocalhost(): void
    {
        $content = file_get_contents(__DIR__ . '/../Koneksi.php');
        
        $this->assertStringContainsString('localhost', $content);
    }

    /**
     * Test that database name is webnews_kita
     */
    public function testDatabaseNameIsWebnewsKita(): void
    {
        $content = file_get_contents(__DIR__ . '/../Koneksi.php');
        
        $this->assertStringContainsString('webnews_kita', $content);
    }
}
