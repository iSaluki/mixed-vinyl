<?php
namespace App\Entity;


class Form {

    protected string $task;

    protected ?/DateTimeInterface $dueDate;

    public function getTask(): string {
        return $this->task;
    }

    public function setTask(string $task): void
    {
        $this->task= $task;
    }
    public function getDueDate(): ?\DateTimeInterface
    {
        return $this->dueDate;
    }

    public function setDueDate(?\DateTimeInterface $dueDate) :void
    {
        $this->dueDate = $dueDate;
    }

}

?>