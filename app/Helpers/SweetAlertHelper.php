<?php

if (!function_exists('swal_confirm_config')) {
    function swal_confirm_config($options = []): array
    {
        $default = [
            'buttonsStyling' => false,
            'customClass' => [
                'confirmButton' => 'btn btn-primary',
                'cancelButton' => 'btn btn-outline-danger',
            ],
            'onConfirmed' => 'confirmed',
            'onCancelled' => 'cancelled',
            'confirmButtonText' => __('Yes, continue'),
            'cancelButtonText' => __('Back'),
        ];

        return array_merge($default, $options);
    }
}

if (!function_exists('swal_cancel_config')) {
    function swal_cancel_config($options = []): array
    {
        $default = [
            'buttonsStyling' => false,
            'customClass' => [
                'cancelButton' => 'btn btn-primary',
                'confirmButton' => 'btn btn-outline-danger',
            ],
            'onConfirmed' => 'cancelConfirmed',
            'onCancelled' => 'cancelCancelled',
            'confirmButtonText' => __('Yes, cancel'),
            'cancelButtonText' => __('Back'),
        ];

        return array_merge($default, $options);
    }
}

if (!function_exists('swal_delete_config')) {
    function swal_delete_config($options = []): array
    {
        $default = [
            'buttonsStyling' => false,
            'customClass' => [
                'confirmButton' => 'btn btn-primary',
                'cancelButton' => 'btn btn-outline-danger',
            ],
            'confirmButtonText' => __('Yes, delete'),
            'cancelButtonText' => __('Cancel'),
        ];

        return array_merge($default, $options);
    }
}