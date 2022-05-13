<?php 

namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends BaseController
{
    /**
     * @Route("api/me", name="app_user_api_me")
     * #[IsGranted("Is_AUTHENTICATED_REMEMBERED")]
     */
    public function apiMe()
    {
        return $this->json($this->getUser(),200,[],[
            'groups' => ['user:read']
        ]);

    }
}