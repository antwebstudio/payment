<?php
/**
 * Contains the PaymentMethod class.
 *
 * @copyright   Copyright (c) 2020 Attila Fulop
 * @author      Attila Fulop
 * @license     MIT
 * @since       2020-04-26
 *
 */

namespace Vanilo\Payment\Models;

use Illuminate\Database\Eloquent\Model;
use Vanilo\Payment\Contracts\PaymentStatus;
use Vanilo\Payment\Contracts\PaymentMethod;
use Vanilo\Contracts\Billpayer;
use Vanilo\Contracts\Shippable;

class Payment extends Model implements \Vanilo\Payment\Contracts\Payment
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function getId(): string {

    }
    
    public function getStatus(): PaymentStatus {
        
    }
    
    public function getMethod(): PaymentMethod {
        
    }
    
    public function getPayableType(): string {
        
    }
    
    public function getAmount(): float {
        
    }

    public function getCurrency(): string {
        
    }

    public function getBillpayer(): Billpayer {
        
    }

    public function needsShipping(): bool {
        
    }

    public function getShippable(): ?Shippable {
        
    }
}
