<?php


use GuzzleHttp\Client;

class OrderTest extends \PHPUnit\Framework\TestCase
{
    /** @var Process */
    private static $process;

    public static function setUpBeforeClass() :void
    {
        self::$process = new \Symfony\Component\Process\Process(["php -S 0.0.0.0:8000 -t ./public/"]);
        self::$process->start();

        usleep(100000); //wait for server to get going
    }

    public static function tearDownAfterClass() :void
    {
        self::$process->stop();
    }

    public function testPOST()
    {
        // create our http client (Guzzle)
        $client = new Client([
            'base_uri' => 'http://0.0.0.0:8000',
            'http_errors' => false
        ]);

        $nickname = 'ObjectOrienter'.rand(0, 999);
        $data = array(
            'nickname' => $nickname,
            'avatarNumber' => 5,
            'tagLine' => 'a test dev!'
        );

        $response = $client->get('/');
        echo($response->getBody());die;
    }
}