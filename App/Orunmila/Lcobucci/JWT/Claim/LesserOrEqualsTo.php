<?php
/**
 * This file is part of Lcobucci\JWT, a simple library to handle JWT and JWS
 *
 * @license http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */
namespace App\Orunmila\Lcobucci\JWT\Claim;

use App\Orunmila\Lcobucci\JWT\Claim;
use App\Orunmila\Lcobucci\JWT\ValidationData;
use App\Orunmila\Lcobucci\JWT\Claim\Basic;
use App\Orunmila\Lcobucci\JWT\Claim\Validatable;

/**
 * Validatable claim that checks if value is lesser or equals to the given data
 *
 * @deprecated This class will be removed on v4
 *            
 * @author Luís Otávio Cobucci Oblonczyk <lcobucci@gmail.com>
 * @since 2.0.0
 */
class LesserOrEqualsTo extends Basic implements Claim, Validatable
{

    /**
     *
     * {@inheritdoc}
     */
    public function validate(ValidationData $data)
    {
        if ($data->has($this->getName())) {
            return $this->getValue() <= $data->get($this->getName());
        }

        return true;
    }
}
