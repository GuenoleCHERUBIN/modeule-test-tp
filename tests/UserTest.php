<?php
namespace Test;

use App\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testIsValid()
    {
        $user1 = new User('Toto', 'TATI', 25, 'toto@email.com');
        $this->assertTrue($user1->isValid());

        $user2 = new User('Toto', 'TATI', 25, 'pasEmail.com');
        $this->assertTrue($user2->isValid());

        $user3 = new User('Toto', '', 25, 'toto@email.com');
        $this->assertTrue($user3->isValid());

        $user4 = new User('Toto', 'TATI', 10, 'toto@email.com');
        $this->assertTrue($user4->isValid());

        $user5 = new User('', 'TATI', 25, 'toto@email.com');
        $this->assertTrue($user5->isValid());

    }
}