<?php

namespace Teknomavi\Kargo\Company;

use Symfony\Component\OptionsResolver\OptionsResolver;

abstract class CompanyAbstract
{
    /**
     * @var array
     */
    protected $options;
    protected $defaultOptions = array(
        'username'                => '',
        'password'                => '',
    );

    public function __construct(array $options = array())
    {
        $resolver = new OptionsResolver();
        $resolver->setDefaults($this->defaultOptions);
        $this->options = $resolver->resolve($options);
    }

    /**
     * Firmanın API servisinde Gönderi Oluşturma ile ilgili methodların mevcut ve aktif olduğunu belirtir.
     *
     * @return bool
     */
    public function hasCreateShipmentServices(): bool
    {
        return false;
    }

    /**
     * @return bool
     */
    public function hasPackageQueryServices(): bool
    {
        return false;
    }
}
