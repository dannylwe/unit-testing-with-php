<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase {

    public function testGetFirstName() {
        
        $user = new \App\Models\User;
        $user->setFirstName('Billy');
        $this->assertEquals($user->getFirstName(), 'Billy');
    }

    public function testGetLastName() {
        
        $user = new \App\Models\User;
        $user->setLastName('Armstring');
        $this->assertEquals($user->getLastName(), 'Armstring');
    }

    public function testFullNameIsReturned() {
        $user = new \App\Models\User;
        $user->setFirstName('Billy');
        $user->setLastName('Armstring');
        $this->assertEquals($user->getFullName(), 'Billy Armstring');
    }

    public function testFirstAndLastNameAreTrimmed() {
        $user = new \App\Models\User;
        $user->setFirstName('Billy     ');
        $user->setLastName('     Armstring');
        $this->assertEquals($user->getFirstName(), 'Billy');
        $this->assertEquals($user->getLastName(), 'Armstring');
    }

    public function testEmailAddressCanBeSet() {
        $email = 'danny@gmail.com';
        $user = new \App\Models\User;
        $user->setEmail($email);
        $this->assertEquals($user->getEmail(), $email);
    }

    /** @test */
    public function check_email_vars_correct() {
        $email = 'danny@gmail.com';
        $user = new \App\Models\User;
        $user->setFirstName('Billy');
        $user->setLastName('Armstring');
        $user->setEmail($email);

        $emailVars = $user->getEmailVariables();
        
        $this->assertArrayHasKey('full_name', $emailVars);
        $this->assertArrayHasKey('email', $emailVars);
        
        $this->assertEquals($emailVars['full_name'], 'Billy Armstring');
        $this->assertEquals($emailVars['email'], $email);
    }
}