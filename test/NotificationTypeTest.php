<?php
namespace test;
use PHPUnit\Framework\TestCase;
use OnixComponents\NotificationType;

class NotificationTypeTest extends TestCase
{
    public function testNotificationType(){
        
        $nodoNotificationType = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                       <NotificationType>03</NotificationType>');
        
        $notificationType = new NotificationType($nodoNotificationType);
        $this->assertEquals('03', $notificationType->contenido);
    }
}

