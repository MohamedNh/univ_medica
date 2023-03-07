<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $anonymosUser = new User();
        $anonymosUser->setEmail('front@example.com');
        $anonymosUser->setUsername('test');
        $anonymosUser->setRoles(['IS_AUTHENTICATED_ANONYMOUSLY']);
        $anonymosUser->setPassword($this->passwordEncoder->encodePassword(
            $anonymosUser,
            'test'
        ));
        $manager->persist($anonymosUser);

        $frontUser = new User();
        $frontUser->setEmail('front@example.com');
        $frontUser->setUsername('frontuser');
        $frontUser->setRoles(['ROLE_FRONT']);
        $frontUser->setPassword($this->passwordEncoder->encodePassword(
            $frontUser,
            'test1234'
        ));
        $manager->persist($frontUser);

        $backUser = new User();
        $backUser->setEmail('back@example.com');
        $backUser->setUsername('Backuser');
        $backUser->setRoles(['ROLE_BACK']);
        $backUser->setPassword($this->passwordEncoder->encodePassword(
            $backUser,
            'test1234'
        ));
        $manager->persist($backUser);

        $manager->flush();
    }
}
