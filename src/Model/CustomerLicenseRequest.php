<?php


namespace Sparav\CustomerLicense\Model;

class CustomerLicenseRequest
{


    public int $customer_id;

    /**
     * @OA\Property(type="string", default=1)
     */
    public string $license_username;

    /**
     * @OA\Property(type="string", default=1)
     */
    public string $license_password;

    /**
     * @OA\Property(type="integer", default=1)
     */
    public int $status;

    // sparvpn etc..
    public int $source;

    /**
     * @OA\Property(type="string", default=1)
     */
    public string $expires_at;

    public int $product_id;

}
