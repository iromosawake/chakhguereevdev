<?php
declare(strict_types=1);
namespace App\Controller;

use Auth0\SDK\API\Management;
use Auth0\SDK\Configuration\SdkConfiguration;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



final class CreateUserController extends AbstractController
{
    private SdkConfiguration $configuration;


    public function __construct(
        string $auth0Domain,
        string $auth0ClientId,
        string $auth0ManagementToken,
        string $auth0ClientSecret,
        string $auth0Audience,
        string $cookieSecret,
        string $loginCallback
    ) {
            $this->configuration = new SdkConfiguration(
                domain: $auth0Domain,
                clientId: $auth0ClientId,
                redirectUri: $loginCallback,
                clientSecret: $auth0ClientSecret,
                audience: [$auth0Audience],
                cookieSecret: $cookieSecret,
                managementToken: $auth0ManagementToken
            );

    }


    #[Route('/create-auth0-user', name: 'create-auth0-user')]
    public function __invoke(Request $req): Response
    {
        //session start
        $session = $req->getSession();

        $auth0Management = new Management($this->configuration);

        $response = $auth0Management->users()->create(
            'Username-Password-Authentication',
            [
                'email' => 's.alletti@gmail.com',
                'password' => 'Toto1234=:!',
                'verify_email' => true,
                "app_metadata" => ["invitedToMyApp" => true]
            ]
        );
        dd($req);
        return new Response($response->getBody()->getContents());
    }
}
