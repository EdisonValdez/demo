<?php
/**
 * Created by PhpStorm.
 * User: Yerno
 * Date: 4/12/15
 * Time: 12:03 PM
 */

namespace Edison\UserBundle\Controller;


use Edison\UserBundle\Entity\User;
use Edison\UserBundle\Form\RegisterFormType;
use Edison\DemoBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;


class RegisterController extends Controller
{
    /**
     * @Route("/register", name="user_register")
     *
     * @Template()
     */
        public function registerAction(Request $request)
        {
            $user = new User();
            $user->setUsername('Username');

            $form = $this->createForm(new RegisterFormType(),$user);

            $form->handleRequest($request);
            if($form->isValid()){
               $user = $form->getData();

              //$user->setPassword($this->encodePassword($user, $user->getPlainPassword()));

                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();

                $request->getSession()
                    ->getFlashBag()
                    ->add('success', 'Welcome to the Death Star! Have a magical day!')
                ;
                /*$request->getSession()->getFlashBag()
                    ->add('success', 'Welcome to the Demonstration! Have a magical day!');
                */
                $this->authenticateUser($user);

                $url = $this->generateUrl('demo');
                return $this->redirect($url);
            }
            return array('form' => $form->createView());
        }

   /* private function encodePassword(User $user, $plainPassword)
    {
        $encoder = $this->container->get('security.encoder_factory')
            ->getEncoder($user);
        return $encoder->encodePassword($plainPassword, $user->getSalt());
    }*/

    private function authenticateUser(User $user)
    {
        $providerKey = 'secured_area'; // your firewall name
        $token = new UsernamePasswordToken($user, null, $providerKey, $user->getRoles());

        $this->getSecurityContext()->setToken($token);
    }


} 