<?php

namespace App\Controller;

use App\Entity\Form;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class FormController extends AbstractController
{
    public function new(Request $request): Response
    {
        $task = new Form();
        $task->setTask('Create bean.store');
        $task->setDueDate(new \DateTimeImmutable("tomorrow"));

        $form = $this->createFormBuilder($task)
    }
}