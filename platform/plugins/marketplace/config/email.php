<?php

return [
    'name' => 'plugins/marketplace::marketplace.email.title',
    'description' => 'plugins/marketplace::marketplace.email.description',
    'templates' => [
        'store_new_order' => [
            'title' => 'plugins/marketplace::marketplace.email.store_new_order_title',
            'description' => 'plugins/marketplace::marketplace.email.store_new_order_description',
            'subject' => 'plugins/marketplace::marketplace.email.store_new_order_subject',
            'can_off' => true,
            'enabled' => true,
            'variables' => [
                'product_list' => 'plugins/ecommerce::ecommerce.product_list',
                'shipping_method' => 'plugins/ecommerce::ecommerce.shipping_method',
                'payment_method' => 'plugins/ecommerce::ecommerce.payment_method',
                'customer_name' => 'plugins/ecommerce::ecommerce.customer_name',
                'customer_phone' => 'plugins/ecommerce::ecommerce.customer_phone',
                'customer_address' => 'plugins/ecommerce::ecommerce.customer_address',
                'store_name' => 'plugins/marketplace::marketplace.store_name',
                'store_phone' => 'plugins/marketplace::marketplace.store_phone',
                'store_address' => 'plugins/marketplace::marketplace.store_address',
                'store_url' => 'plugins/marketplace::marketplace.store_url',
                'store' => 'plugins/marketplace::marketplace.email.store',
                'order' => 'plugins/marketplace::marketplace.email.order',
                'shipment' => 'plugins/marketplace::marketplace.email.shipment',
                'address' => 'plugins/marketplace::marketplace.email.address',
                'products' => 'plugins/marketplace::marketplace.email.products',
            ],
        ],
        'verify_vendor' => [
            'title' => 'plugins/marketplace::marketplace.email.verify_vendor_title',
            'description' => 'plugins/marketplace::marketplace.email.verify_vendor_description',
            'subject' => 'plugins/marketplace::marketplace.email.verify_vendor_subject',
            'can_off' => true,
            'enabled' => true,
            'variables' => [
                'customer_name' => 'plugins/ecommerce::ecommerce.customer_name',
                'customer_phone' => 'plugins/ecommerce::ecommerce.customer_phone',
                'customer_address' => 'plugins/ecommerce::ecommerce.customer_address',
                'store_name' => 'plugins/marketplace::marketplace.store_name',
                'store_phone' => 'plugins/marketplace::marketplace.store_phone',
                'store_address' => 'plugins/marketplace::marketplace.store_address',
                'store_url' => 'plugins/marketplace::marketplace.store_url',
                'store' => 'plugins/marketplace::marketplace.email.store',
            ],
        ],
        'vendor-account-approved' => [
            'title' => 'plugins/marketplace::marketplace.email.vendor_account_approved_title',
            'description' => 'plugins/marketplace::marketplace.email.vendor_account_approved_description',
            'subject' => 'plugins/marketplace::marketplace.email.vendor_account_approved_subject',
            'can_off' => true,
            'enabled' => true,
            'variables' => [
                'store_name' => 'plugins/marketplace::marketplace.store_name',
                'store_phone' => 'plugins/marketplace::marketplace.store_phone',
                'store_address' => 'plugins/marketplace::marketplace.store_address',
                'store_url' => 'plugins/marketplace::marketplace.store_url',
                'store' => 'plugins/marketplace::marketplace.email.store',
            ],
        ],
        'vendor-account-rejected' => [
            'title' => 'plugins/marketplace::marketplace.email.vendor_account_rejected_title',
            'description' => 'plugins/marketplace::marketplace.email.vendor_account_rejected_description',
            'subject' => 'plugins/marketplace::marketplace.email.vendor_account_rejected_subject',
            'can_off' => true,
            'enabled' => true,
            'variables' => [
                'store_name' => 'plugins/marketplace::marketplace.store_name',
                'store_phone' => 'plugins/marketplace::marketplace.store_phone',
                'store_address' => 'plugins/marketplace::marketplace.store_address',
                'store_url' => 'plugins/marketplace::marketplace.store_url',
                'store' => 'plugins/marketplace::marketplace.email.store',
            ],
        ],
        'pending-product-approval' => [
            'title' => 'plugins/marketplace::marketplace.email.pending_product_approval_title',
            'description' => 'plugins/marketplace::marketplace.email.pending_product_approval_description',
            'subject' => 'plugins/marketplace::marketplace.email.pending_product_approval_subject',
            'can_off' => true,
            'enabled' => true,
            'variables' => [
                'product_name' => 'plugins/marketplace::marketplace.product_name',
                'product_url' => 'plugins/marketplace::marketplace.product_url',
                'store_name' => 'plugins/marketplace::marketplace.store_name',
                'store_phone' => 'plugins/marketplace::marketplace.store_phone',
                'store_address' => 'plugins/marketplace::marketplace.store_address',
                'store_url' => 'plugins/marketplace::marketplace.store_url',
                'store' => 'plugins/marketplace::marketplace.email.store',
            ],
        ],
        'product-approved' => [
            'title' => 'plugins/marketplace::marketplace.email.product_approved_title',
            'description' => 'plugins/marketplace::marketplace.email.product_approved_description',
            'subject' => 'plugins/marketplace::marketplace.email.product_approved_subject',
            'can_off' => true,
            'enabled' => true,
            'variables' => [
                'store_name' => 'plugins/marketplace::marketplace.store_name',
                'store_phone' => 'plugins/marketplace::marketplace.store_phone',
                'store_address' => 'plugins/marketplace::marketplace.store_address',
                'store_url' => 'plugins/marketplace::marketplace.store_url',
                'store' => 'plugins/marketplace::marketplace.email.store',
            ],
        ],
        'withdrawal-approved' => [
            'title' => 'plugins/marketplace::marketplace.email.withdrawal_approved_title',
            'description' => 'plugins/marketplace::marketplace.email.withdrawal_approved_description',
            'subject' => 'plugins/marketplace::marketplace.email.withdrawal_approved_subject',
            'can_off' => true,
            'enabled' => true,
            'variables' => [
                'withdrawal_amount' => 'plugins/marketplace::marketplace.withdrawal_amount',
                'store_name' => 'plugins/marketplace::marketplace.store_name',
                'store_phone' => 'plugins/marketplace::marketplace.store_phone',
                'store_address' => 'plugins/marketplace::marketplace.store_address',
                'store_url' => 'plugins/marketplace::marketplace.store_url',
                'store' => 'plugins/marketplace::marketplace.email.store',
            ],
        ],
        'welcome-vendor' => [
            'title' => 'plugins/marketplace::marketplace.email.welcome_vendor_title',
            'description' => 'plugins/marketplace::marketplace.email.welcome_vendor_description',
            'subject' => 'plugins/marketplace::marketplace.email.welcome_vendor_subject',
            'can_off' => true,
            'enabled' => false,
            'variables' => [
                'vendor_name' => 'plugins/marketplace::marketplace.vendor_name',
                'store_name' => 'plugins/marketplace::marketplace.store_name',
            ],
        ],
        'contact-store' => [
            'title' => 'plugins/marketplace::marketplace.email.contact_store_title',
            'description' => 'plugins/marketplace::marketplace.email.contact_store_description',
            'subject' => 'plugins/marketplace::marketplace.email.contact_store_subject',
            'can_off' => true,
            'enabled' => true,
            'variables' => [
                'store_name' => 'plugins/marketplace::marketplace.store_name',
                'store_phone' => 'plugins/marketplace::marketplace.store_phone',
                'store_address' => 'plugins/marketplace::marketplace.store_address',
                'store_url' => 'plugins/marketplace::marketplace.store_url',
                'customer_message' => 'plugins/marketplace::marketplace.email.customer_message',
                'customer_name' => 'plugins/marketplace::marketplace.email.customer_name',
                'customer_email' => 'plugins/marketplace::marketplace.email.customer_email',
            ],
        ],
        'vendor-account-blocked' => [
            'title' => 'plugins/marketplace::marketplace.email.vendor_account_blocked_title',
            'description' => 'plugins/marketplace::marketplace.email.vendor_account_blocked_description',
            'subject' => 'plugins/marketplace::marketplace.email.vendor_account_blocked_subject',
            'can_off' => true,
            'enabled' => true,
            'variables' => [
                'store_name' => 'plugins/marketplace::marketplace.store_name',
                'store_phone' => 'plugins/marketplace::marketplace.store_phone',
                'store_address' => 'plugins/marketplace::marketplace.store_address',
                'store_url' => 'plugins/marketplace::marketplace.store_url',
                'block_reason' => 'plugins/marketplace::marketplace.email.block_reason',
                'block_date' => 'plugins/marketplace::marketplace.email.block_date',
            ],
        ],
        'vendor-account-unblocked' => [
            'title' => 'plugins/marketplace::marketplace.email.vendor_account_unblocked_title',
            'description' => 'plugins/marketplace::marketplace.email.vendor_account_unblocked_description',
            'subject' => 'plugins/marketplace::marketplace.email.vendor_account_unblocked_subject',
            'can_off' => true,
            'enabled' => true,
            'variables' => [
                'store_name' => 'plugins/marketplace::marketplace.store_name',
                'store_phone' => 'plugins/marketplace::marketplace.store_phone',
                'store_address' => 'plugins/marketplace::marketplace.store_address',
                'store_url' => 'plugins/marketplace::marketplace.store_url',
                'unblock_date' => 'plugins/marketplace::marketplace.email.unblock_date',
            ],
        ],
        'order_cancellation_to_vendor' => [
            'title' => 'plugins/marketplace::marketplace.email.order_cancellation_to_vendor_title',
            'description' => 'plugins/marketplace::marketplace.email.order_cancellation_to_vendor_description',
            'subject' => 'plugins/marketplace::marketplace.email.order_cancellation_to_vendor_subject',
            'can_off' => true,
            'enabled' => false,
            'variables' => [
                'customer_name' => 'plugins/ecommerce::ecommerce.customer_name',
                'order_id' => 'plugins/ecommerce::ecommerce.order_id',
                'cancellation_reason' => 'plugins/ecommerce::order.order_cancellation_reason',
                'product_list' => 'plugins/ecommerce::ecommerce.product_list',
            ],
        ],
    ],
];
