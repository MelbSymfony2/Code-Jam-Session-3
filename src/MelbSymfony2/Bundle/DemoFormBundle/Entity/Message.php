<?php
/*
 * Copyright Cameron Manderson (c) 2011 All rights reserved.
 * Date: 4/10/11
 */
namespace MelbSymfony2\Bundle\DemoFormBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table
 * @author camm (camm@flintinteractive.com.au)
 */
class Message 
{
    /**
     * @ORM\Id @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var
     */
    public $id;

    /**
     * @ORM\Column
     * @var
     */
    public $name;
    
    /**
     * @ORM\Column
     * @var
     */
    public $message;
}
