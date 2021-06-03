<?php


namespace Sparav\CustomerLicense\Model;

class CustomerLicenseRequest
{

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

    /**
     * @OA\Property(type="string", default=1)
     */
    public string $expires_at;

}
