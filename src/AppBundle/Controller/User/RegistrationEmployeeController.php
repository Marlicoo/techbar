<?php
/**
 * Created by PhpStorm.
 * User: marlena
 * Date: 26.07.17
 * Time: 20:19
 */

namespace AppBundle\Controller\User;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RegistrationEmployeeController extends Controller
{

    public function registerAction()
    {
        return $this->container
            ->get('pugx_multi_user.registration_manager')
            ->register('AppBundle\Entity\User\Employee');
    }

}