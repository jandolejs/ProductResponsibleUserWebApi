<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Aiti\Responsibleuseradminui\Model;

class ProductResponsibleUserWebApiManagement implements \Aiti\Responsibleuseradminui\Api\ProductResponsibleUserWebApiManagementInterface
{

    /**
     * {@inheritdoc}
     */
    public function getProductResponsibleUserWebApi($param)
    {
        return 'hello api GET return the $param ' . $param;
    }
}

