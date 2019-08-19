<?php

namespace Y2\ItemInventory;

class QueryExecutionStatus
{
    const __default = 'Ok';
    const Ok = 'Ok';
    const IncorrectWarehouseId = 'IncorrectWarehouseId';
    const IncorrectStoreId = 'IncorrectStoreId';
    const StoreNotFound = 'StoreNotFound';
    const Unknown = 'Unknown';
}
