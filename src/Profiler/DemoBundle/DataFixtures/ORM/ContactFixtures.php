<?php

namespace Profiler\DemoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Profiler\DemoBundle\Entity\Contact;

class ContactFixtures implements FixtureInterface
{
    public function load($manager)
    {
        $contact1 = new Contact();
        $contact1->setName('dsyph3r');
        $contact1->setEmail('d.syph.3r@gmail.com');
        $manager->persist($contact1);

        $manager->flush();
    }

}
