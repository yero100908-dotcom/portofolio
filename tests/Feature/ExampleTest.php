<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Yero Virdhan Akifan');
        $response->assertSee('rooteraplumbing.id');
        $response->assertSee('0815-1996-7047');
        $response->assertSee('Jaya &amp; Jawa', false);
        $response->assertSee('Rekayasa Perangkat Lunak');
        $response->assertSee('DOMINAN');
        $response->assertSee('20260803_091259.jpg');
    }

    public function test_the_rootera_experience_page_returns_a_successful_response(): void
    {
        $response = $this->get('/rootera-experience');

        $response->assertStatus(200);
        $response->assertSee('Rootera Plumbing');
        $response->assertSee('rooteraplumbing.id');
        $response->assertSee('0815-1996-7047');
        $response->assertSee('Jaya &amp; Jawa', false);
        $response->assertSee('SMK RPL');
        $response->assertSee('DOMINAN (70% FOKUS)');
        $response->assertSee('20260803_091259.jpg');
    }

    public function test_robots_txt_returns_successful_response(): void
    {
        $response = $this->get('/robots.txt');

        $response->assertStatus(200);
        $response->assertSee('User-agent');
    }

    public function test_sitemap_xml_returns_successful_response(): void
    {
        $response = $this->get('/sitemap.xml');

        $response->assertStatus(200);
        $response->assertSee('urlset');
    }
}
