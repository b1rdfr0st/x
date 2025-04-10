<?php

return [
    'name' => 'Marketplace',
    'email' => [
        'title' => 'Marketplace',
        'description' => 'Config email templates for Marketplace',
        'store_new_order_title' => 'Notice about new order',
        'store_new_order_description' => 'Send email to the store owner when an order placed',
        'verify_vendor_title' => 'Verify vendor',
        'verify_vendor_description' => 'Send email to the admin when a vendor registers',
        'pending_product_approval_title' => 'Pending product approval',
        'pending_product_approval_description' => 'Send email to the admin when a vendor post their products',
        'vendor_account_approved_title' => 'Vendor account approved',
        'vendor_account_approved_description' => 'Send email to vendor when their account approved',
        'product_approved_title' => 'Product approved',
        'product_approved_description' => 'Send email to vendor when their product approved',
        'withdrawal_approved_title' => 'Withdrawal approved',
        'withdrawal_approved_description' => 'Send email to vendor when their withdrawal request approved',
        'vendor_account_rejected_title' => 'Vendor account rejected',
        'vendor_account_rejected_description' => 'Send email to vendor when their account rejected',
        'vendor_account_unblocked_title' => 'Vendor account unblocked',
        'vendor_account_unblocked_description' => 'Send email to vendor when their account unblocked',
        'vendor_account_blocked_title' => 'Vendor account blocked',
        'vendor_account_blocked_description' => 'Send email to vendor when their account blocked',
        'store_new_order_subject' => 'New order(s) at {{ site_title }}',
        'verify_vendor_subject' => 'New vendor at {{ site_title }} needs to be verified',
        'vendor_account_approved_subject' => 'Your account has been approved for selling at {{ site_title }}',
        'vendor_account_rejected_subject' => 'Your account has been rejected for selling at {{ site_title }}',
        'pending_product_approval_subject' => 'New product needs to be approved for selling at {{ site_title }}',
        'product_approved_subject' => 'Your product has been approved for selling at {{ site_title }}',
        'withdrawal_approved_subject' => 'Your withdrawal request has been approved',
        'welcome_vendor_title' => 'Welcome vendor',
        'welcome_vendor_description' => 'Send email to vendor after registered',
        'welcome_vendor_subject' => 'Welcome to {{ site_title }}!',
        'contact_store_title' => 'Contact Store',
        'contact_store_description' => 'Send email to the store owner when a customer contacts the store',
        'contact_store_subject' => 'New Customer Contact Message',
        'vendor_account_blocked_subject' => 'Your vendor account at {{ site_title }} has been blocked',
        'vendor_account_unblocked_subject' => 'Your vendor account at {{ site_title }} has been unblocked',
        'order_cancellation_to_vendor_title' => 'Order cancellation (will be sent to seller (vendor)',
        'order_cancellation_to_vendor_description' => 'Send to seller (vendor) when customer cancels an order',
        'order_cancellation_to_vendor_subject' => 'Order :order_id has been cancelled by customer',
        'store' => 'Store',
        'order' => 'Order',
        'shipment' => 'Shipment info',
        'address' => 'Shipping address',
        'products' => 'Order products',
        'customer_message' => 'Customer message',
        'customer_name' => 'Customer name',
        'customer_email' => 'Customer email',
        'block_reason' => 'Reason for blocking',
        'block_date' => 'Date of blocking',
        'unblock_date' => 'Date of unblocking',
    ],
    'current_balance' => 'Current balance',
    'settings' => [
        'title' => 'Settings',
        'description' => 'Settings for marketplace',
        'fee_per_order' => 'Fee per fee (%), suggest: 2 or 3',
        'default_commission_fee' => 'Default commission fee (%), suggest: 2 or 3',
        'enable_commission_fee_for_each_category' => 'Enable commission fee for each category?',
        'categories' => 'Categories',
        'select_categories' => 'Select categories..',
        'commission_fee' => 'Commission fee (%)',
        'commission_fee_by_category' => 'Commission fee by category (%)',
        'fee_withdrawal_amount' => 'Fee withdrawal',
        'withdrawal_fee_type' => 'Fee withdrawal type',
        'withdrawal_fee_types' => [
            'fixed' => 'Fixed amount',
            'percentage' => 'Percentage',
        ],
        'check_valid_signature' => 'Check valid signature in vendor\'s earnings',
        'verify_vendor' => 'Vendor verification (Vendor just can post their product listing after getting verified)',
        'verify_vendor_helper' => 'If enabled, the admin must verify the vendor before they can post their product listing.',
        'requires_vendor_documentations_verification' => 'Requires vendor documentations verification',
        'requires_vendor_documentations_verification_helper' => 'If enabled, vendors must upload their documentation files when applying to become a vendor.',
        'hide_become_vendor_menu_in_customer_dashboard' => 'Hide become vendor menu in customer dashboard',
        'hide_become_vendor_menu_in_customer_dashboard_description' => 'If enabled, the "Become a vendor" menu will be hidden in the customer dashboard.',
        'enable_product_approval' => 'Enable product approval',
        'enable_product_approval_description' => 'If enabled, the admin must approve the product before it is published.',
        'hide_store_phone_number' => 'Hide store phone number?',
        'hide_store_email' => 'Hide store email?',
        'hide_store_address' => 'Hide store address?',
        'hide_store_social_links' => 'Hide store social links?',
        'allow_vendor_manage_shipping' => 'Allow vendor manage shipping?',
        'allow_vendor_manage_shipping_description' => 'If it is enabled, the vendor can change shipping status of order to "delivering", "delivered", ...',
        'commission_fee_each_category_fee_name' => 'Commission fee of commission setting :key',
        'commission_fee_each_category_name' => 'Categories of commission setting :key',
        'add_new' => 'Add new',
        'payout_methods' => 'Payout methods',
        'max_upload_filesize' => 'Max upload filesize (MB)',
        'max_upload_filesize_placeholder' => 'Default: 10',
        'max_product_images_upload_by_vendor' => 'Max number of images for each product',
        'enable_vendor_registration' => 'Enable vendor registration',
        'enable_vendor_registration_helper' => 'If enabled, vendors can register an account on the site and post their products.',
        'minimum_withdrawal_amount' => 'Minimum withdrawal amount (Fixed)',
        'minimum_withdrawal_amount_helper' => 'Specify the minimum amount a vendor can withdraw. Default is 0.',
        'allow_vendor_delete_their_orders' => 'Allow vendors to delete their orders',
        'allow_vendor_delete_their_orders_description' => 'When enabled, vendors can manage their order list by removing unwanted entries. Use with caution as deleted orders may impact transaction records.',
        'enable_messaging_system' => 'Enable messaging system',
        'enable_messaging_system_description' => 'If enabled, vendors and customers can communicate with each other via the messaging system.',
        'term_and_privacy_policy_url' => 'Term and privacy policy URL',
        'show_vendor_registration_form_at_registration_page' => 'Show vendor registration form at registration page',
        'show_vendor_registration_form_at_registration_page_description' => 'If enabled, the vendor registration form will be displayed on the registration page.',
        'single_vendor_checkout' => 'Limit to One Vendor per Order',
        'single_vendor_checkout_help' => 'If enabled, customers can only purchase products from one vendor per order.',
        'display_order_total_info_for_each_store' => 'Display order total info for each store',
        'display_order_total_info_for_each_store_helper' => 'If enabled, the order total information will be displayed for each store in the order summary.',
        'media_file_types_can_be_uploaded_by_vendor' => 'Media file types can be uploaded by vendor',
        'media_file_types_can_be_uploaded_by_vendor_helper' => 'Specify the media file types that vendors can upload. Select them in the above list.',
    ],
    'theme_options' => [
        'name' => 'Marketplace',
        'description' => 'Theme options for Marketplace',
        'logo_vendor_dashboard' => 'Logo in the vendor dashboard (Default is the main logo)',
    ],
    'store_name' => 'Store name',
    'store_email' => 'Store email',
    'store_phone' => 'Store phone',
    'store_address' => 'Store address',
    'store_url' => 'Store URL',
    'product_name' => 'Product name',
    'product_url' => 'Product URL',
    'withdrawal_amount' => 'Withdrawal amount',
    'helpers' => [
        'store_status' => 'If you change the status other than ":status" this store\'s account will also change to ":customer"',
    ],
    'tables' => [
        'earnings' => 'Earnings',
        'products_count' => 'Products Count',
    ],
    'vendors' => 'Vendors',
    'payout_payment_methods' => [
        'bank_transfer' => 'Bank Transfer',
        'paypal' => 'PayPal',
    ],
    'reports' => [
        'name' => 'Reports',
        'total_fee_earnings' => 'Total fee earnings: :value',
        'total_fee' => 'Total fee',
        'total_amount' => 'Total amount',
        'store_revenues' => 'Store revenues',
        'sale_commissions' => 'Sale commissions',
        'fee' => 'Fee (:symbol)',
        'amount' => 'Amount (:symbol)',
    ],
    'vendor' => 'Vendor',
    'vendor_name' => 'Vendor name',
    'contact_store' => [
        'form_name' => 'Contact Store form',
    ],
    'store_statuses' => [
        'pending' => 'Pending',
        'published' => 'Approved',
        'blocked' => 'Blocked',
    ],
];
