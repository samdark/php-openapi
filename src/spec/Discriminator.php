<?php

namespace cebe\openapi\spec;

use cebe\openapi\SpecBaseObject;

/**
 * When request bodies or response payloads may be one of a number of different schemas, a discriminator object can be used to aid in serialization, deserialization, and validation.
 *
 * @link https://github.com/OAI/OpenAPI-Specification/blob/3.0.2/versions/3.0.2.md#discriminatorObject
 *
 * @property-read string $propertyName
 * @property-read string[] $ mapping
 *
 * @author Carsten Brandt <mail@cebe.cc>
 */
class Discriminator extends SpecBaseObject
{
    /**
     * @return array array of attributes available in this object.
     */
    protected function attributes(): array
    {
        return [
            'propertyName' => 'string',
            ' mapping' => ['string', 'string'],
        ];
    }

    /**
     * Perform validation on this object, check data against OpenAPI Specification rules.
     *
     * Call `addError()` in case of validation errors.
     */
    protected function performValidation()
    {
        $this->requireProperties(['propertyName']);
    }
}
