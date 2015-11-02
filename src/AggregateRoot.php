<?php

namespace OG\Core\Domain;

/**
 * Common methods all aggregate roots must have.
 */
interface AggregateRoot extends Entity, HasEvents
{
}
