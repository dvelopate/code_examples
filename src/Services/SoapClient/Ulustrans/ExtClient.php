<?php declare(strict_types = 1);

namespace App\Services\SoapClient\Ulustrans;

use SoapClient;

class ExtClient
{
    /** @var string */
    private $username;

    /** @var string */
    private $password;

    /** @var string */
    private $uri;

    public function __construct(array $ulustransConfiguration)
    {
        $this->username = $ulustransConfiguration['username'];
        $this->password = $ulustransConfiguration['password'];
        $this->uri = $ulustransConfiguration['ext_uri'];
    }

    public function call(string $method, string $rootNode, $body): array
    {
        $client = new SoapClient($this->uri, []);

        $response = $client->__soapCall($method, [
            'username' => $this->username,
            'password' => $this->password,
            $rootNode => $body,
        ]);

        return $response;
    }
}
