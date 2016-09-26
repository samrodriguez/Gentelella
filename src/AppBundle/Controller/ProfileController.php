<?php

/*
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * User profile controller
 *
 * @Route("/user")
 */
class ProfileController extends Controller
{
    /**
     * 
     * @Route("/profile", name="app_user_profile")
     *
     * @param Request $request
     * @return Response
     */
    public function displayProfileAction(Request $request)
    {
        return $this->render('user/pages/profile.html.twig', []);
    }

}