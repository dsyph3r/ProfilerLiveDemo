<?php

namespace Profiler\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Profiler\DemoBundle\Exception\ProfileDemoException;

class DemoController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProfilerDemoBundle:Demo:index.html.twig');
    }

    public function methodAction()
    {
        return new Response("Response");
    }

    public function contentTypeAction()
    {
        return new Response("Content type");
    }

    public function statusCodeAction($code)
    {
        switch ($code) {
            case '200':
                return new Response("Content Type");
                break;

            case '302':
                return $this->redirect($this->generateUrl('ProfilerDemoBundle_homepage'));
                break;

            case '404':
                throw $this->createNotFoundException("404 Exception");
                break;

            case '500':
                throw new ProfileDemoException("500 Exception");
                break;
        }
    }

    public function extraAction($action)
    {
        switch ($action) {
            case 'doctrine':

                $em         = $this->getDoctrine()->getEntityManager();
                $contact    = $em->getRepository('ProfilerDemoBundle:Contact')->find(1);

                if (!$contact) {
                    throw $this->createNotFoundException('Unable to find contact.');
                }

                break;

            case 'email':

                $message = \Swift_Message::newInstance()
                    ->setSubject('Live Profiler Demo')
                    ->setFrom('live@example.com')
                    ->setTo('live@example.com')
                    ->setBody('Live Profiler Demo');

                $this->get('mailer')->send($message);

                break;

            case 'sub_request':
                return $this->render('ProfilerDemoBundle:Demo:extra.html.twig');
                break;
        }

        return new Response("Extra");
    }

    public function subRequestAction()
    {
        $em         = $this->getDoctrine()->getEntityManager();
        $contact    = $em->getRepository('ProfilerDemoBundle:Contact')->find(1);

        if (!$contact) {
            throw $this->createNotFoundException('Unable to find contact.');
        }
        return new Response("Sub Request");
    }

}
