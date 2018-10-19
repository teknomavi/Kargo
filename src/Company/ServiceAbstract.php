<?php

namespace Teknomavi\Kargo\Company;

use Symfony\Component\OptionsResolver\OptionsResolver;

abstract class ServiceAbstract
{
    /**
     * @var String
     */
    protected $serviceUrl;
    /**
     * @var array
     */
    protected $options;
    /**
     * @var array
     */
    protected $defaultOptions = [
        'username' => '',
        'password' => '',
    ];

    public function __construct(array $options = [])
    {
        $resolver = new OptionsResolver();
        $resolver->setDefaults($this->defaultOptions);
        $this->options = $resolver->resolve($options);
    }
}
