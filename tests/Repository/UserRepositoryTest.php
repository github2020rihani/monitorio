<?php

namespace App\Tests\Repository;

use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserRepositoryTest extends KernelTestCase
{

    public function testCountUsers() {
        self::bootKernel(); //recuperer le noyeau kernel
        $users = self::$container->get(UsersRepository::class)->count([]);
        $this->assertEquals(27, $users);
    }

}