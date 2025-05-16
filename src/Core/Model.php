<?php

namespace UnluPaw\Core;

/**
 * Modelo.
 */
class Model {

    protected QueryBuilder $queryBuilder;

    public function __construct() {
        $this->queryBuilder = new QueryBuilder();
    }

}
