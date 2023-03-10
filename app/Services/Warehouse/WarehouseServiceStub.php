<?php

namespace App\Services\Warehouse;

use App\Services\Warehouse\DTO\WarehouseOrderDTO;
use App\Services\Warehouse\ValueObject\WarehouseOrderStatus;

class WarehouseServiceStub implements WarehouseServiceInterface
{
    
    public function createNewOrder(WarehouseOrderDTO $orderDTO): bool
    {
        sleep(2);

        return true;
    }
    
    public function updateOrder(WarehouseOrderDTO $orderDTO): bool
    {
        return true;
    }
    
    public function cancelOrder(int $orderId): bool
    {
        return true;
    }
    
    public function getOrderStatus(int $orderId): WarehouseOrderStatus
    {
        return WarehouseOrderStatus::received;
    }
}
