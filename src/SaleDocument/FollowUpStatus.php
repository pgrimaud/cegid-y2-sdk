<?php

namespace Y2\SaleDocument;

class FollowUpStatus
{
    const __default = 'ToBeProcessed';
    const ToBeProcessed = 'ToBeProcessed';
    const Validated = 'Validated';
    const ToSupplyInCentral = 'ToSupplyInCentral';
    const ToSupplyInStore = 'ToSupplyInStore';
    const ToBeDeliveredByStore = 'ToBeDeliveredByStore';
    const InPreparation = 'InPreparation';
    const Prepared = 'Prepared';
    const ShipByCentral = 'ShipByCentral';
    const ShipByLogistic = 'ShipByLogistic';
    const ShipByStore = 'ShipByStore';
    const RequestedStoreBooking = 'RequestedStoreBooking';
    const BookedInStore = 'BookedInStore';
    const PickedUpInStore = 'PickedUpInStore';
    const Closed = 'Closed';
    const TransferedInStore = 'TransferedInStore';
    const AvailableInStore = 'AvailableInStore';
    const BookingRefused = 'BookingRefused';
    const Ordered = 'Ordered';
    const GoodTakenOut = 'GoodTakenOut';
    const RecievedByCustomer = 'RecievedByCustomer';
    const Booked = 'Booked';
    const AvailableInWarehouse = 'AvailableInWarehouse';
    const WaitingForReturn = 'WaitingForReturn';
    const AcceptedOrder = 'AcceptedOrder';
    const WaitingCommodity = 'WaitingCommodity';

}
