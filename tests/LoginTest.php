<?php

use PHPUnit\Framework\TestCase;

/**
 * Test class for Admin login functionality
 */
class LoginTest extends TestCase
{
    private $loginActionPath;
    
    protected function setUp(): void
    {
        $this->loginActionPath = __DIR__ . '/../Admin/login_action.php';
    }

    /**
     * Test that login_action.php file exists
     */
    public function testLoginActionFileExists(): void
    {
        $this->assertFileExists($this->loginActionPath);
    }

    /**
     * Test that login.php file exists
     */
    public function testLoginPageFileExists(): void
    {
        $this->assertFileExists(__DIR__ . '/../Admin/login.php');
    }

    /**
     * Test that logout.php file exists
     */
    public function testLogoutFileExists(): void
    {
        $this->assertFileExists(__DIR__ . '/../Admin/logout.php');
    }

    /**
     * Test that user.php file exists
     */
    public function testUserPageFileExists(): void
    {
        $this->assertFileExists(__DIR__ . '/../Admin/user.php');
    }

    /**
     * Test login_action.php has session_start
     */
    public function testLoginActionHasSessionStart(): void
    {
        $content = file_get_contents($this->loginActionPath);
        $this->assertStringContainsString('session_start()', $content);
    }

    /**
     * Test login_action.php includes Koneksi.php
     */
    public function testLoginActionIncludesKoneksi(): void
    {
        $content = file_get_contents($this->loginActionPath);
        $this->assertStringContainsString('include', $content);
        $this->assertStringContainsString('Koneksi.php', $content);
    }

    /**
     * Test login_action.php uses POST method for username
     */
    public function testLoginActionUsesPostForUsername(): void
    {
        $content = file_get_contents($this->loginActionPath);
        $this->assertStringContainsString('$_POST["username"]', $content);
    }

    /**
     * Test login_action.php uses POST method for password
     */
    public function testLoginActionUsesPostForPassword(): void
    {
        $content = file_get_contents($this->loginActionPath);
        $this->assertStringContainsString('$_POST["password"]', $content);
    }

    /**
     * Test login_action.php performs database query
     */
    public function testLoginActionPerformsDatabaseQuery(): void
    {
        $content = file_get_contents($this->loginActionPath);
        $this->assertStringContainsString('mysqli_query', $content);
    }

    /**
     * Test login_action.php checks number of rows
     */
    public function testLoginActionChecksNumRows(): void
    {
        $content = file_get_contents($this->loginActionPath);
        $this->assertStringContainsString('mysqli_num_rows', $content);
    }

    /**
     * Test login_action.php sets session variables on success
     */
    public function testLoginActionSetsSessionVariables(): void
    {
        $content = file_get_contents($this->loginActionPath);
        $this->assertStringContainsString('$_SESSION["id"]', $content);
        $this->assertStringContainsString('$_SESSION["username"]', $content);
        $this->assertStringContainsString('$_SESSION["name"]', $content);
        $this->assertStringContainsString('$_SESSION["email"]', $content);
    }

    /**
     * Test login_action.php redirects on successful login
     */
    public function testLoginActionRedirectsOnSuccess(): void
    {
        $content = file_get_contents($this->loginActionPath);
        $this->assertStringContainsString('header("Location:user.php")', $content);
    }

    /**
     * Test logout.php starts session
     */
    public function testLogoutStartsSession(): void
    {
        $content = file_get_contents(__DIR__ . '/../Admin/logout.php');
        $this->assertStringContainsString('session_start()', $content);
    }

    /**
     * Test logout.php destroys session
     */
    public function testLogoutDestroysSession(): void
    {
        $content = file_get_contents(__DIR__ . '/../Admin/logout.php');
        $this->assertStringContainsString('session_destroy()', $content);
    }

    /**
     * Test logout.php redirects to login page
     */
    public function testLogoutRedirectsToLogin(): void
    {
        $content = file_get_contents(__DIR__ . '/../Admin/logout.php');
        $this->assertStringContainsString("header('Location:login.php')", $content);
    }

    /**
     * Test user.php requires authentication
     */
    public function testUserPageRequiresAuthentication(): void
    {
        $content = file_get_contents(__DIR__ . '/../Admin/user.php');
        $this->assertStringContainsString('if (!isset($_SESSION["username"]))', $content);
    }
}
