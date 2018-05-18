<?php
/**
 * Created by PhpStorm.
 * User: wilder17
 * Date: 18/05/18
 * Time: 09:18
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Challenge;
use AppBundle\Entity\Team;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Tournament controller.
 *
 * @Route("tournament")
 */
class TournamentController extends Controller
{
    /**
     * Lists all challenge entities.
     *
     * @Route("/", name="tournament_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $challenges = $em->getRepository('AppBundle:Challenge')->findAll();

        return $this->render('tournament/index.html.twig', array(
            'challenges' => $challenges,
        ));
    }
}