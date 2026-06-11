<?php

enum StockStatus: string
{
    case ACTIVE = 'ACTIVE';

    case EXPIRING_90_DAYS = 'EXPIRING_90_DAYS';

    case EXPIRING_30_DAYS = 'EXPIRING_30_DAYS';

    case EXPIRED = 'EXPIRED';
}