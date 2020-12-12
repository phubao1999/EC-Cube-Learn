<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eccube\Repository;

use Eccube\Entity\ProductImage;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * ProductImageRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductImageRepository extends AbstractRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ProductImage::class);
    }
}
