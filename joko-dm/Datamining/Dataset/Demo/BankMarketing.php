<?php

declare(strict_types=1);

namespace jokodm\Datamining\Dataset\Demo;
use jokodm\Datamining\Dataset\CsvDataset;

class BankMarketing extends CsvDataset
{
    public function __construct()
    {
        $filepath = __DIR__.'/../../data/bank-fs.csv';
        parent::__construct($filepath, 6, true);
    }
}
