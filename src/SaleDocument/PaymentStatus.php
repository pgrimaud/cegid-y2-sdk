<?php

namespace Y2\SaleDocument;

class PaymentStatus
{
    const __default = 'Pending';
    const Pending = 'Pending';
    const Totally = 'Totally';
    const Partially = 'Partially';
    const Debited = 'Debited';
    const PartiallyDebited = 'PartiallyDebited';
    const CreditIssued = 'CreditIssued';
    const CreditRefused = 'CreditRefused';
    const ToRedeem = 'ToRedeem';
    const PaymentCredited = 'PaymentCredited';
    const Refunded = 'Refunded';

}
