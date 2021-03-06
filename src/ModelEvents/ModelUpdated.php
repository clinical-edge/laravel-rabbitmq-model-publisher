<?php


namespace CodeByKyle\RabbitMqModelPublisher\ModelEvents;

use CodeByKyle\RabbitMqModelPublisher\ModelEvent;
use CodeByKyle\RabbitMqModelPublisher\ModelEventTypes;

class ModelUpdated extends ModelEvent
{
    public $actionType = ModelEventTypes::UPDATED;
}