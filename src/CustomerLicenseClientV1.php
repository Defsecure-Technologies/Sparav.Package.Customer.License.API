<?php

namespace Sparav\CustomerLicense;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class CustomerLicenseClientV1
{

    /**
     * Adds a license to a customer.
     * Only customer_id is required and license type.
     * @param int $customer_id
     * @param string|null $license_type
     * @param string|null $license_username
     * @param string|null $license_password
     * @param int $device_type
     * @return Response
     */
    public function add(int $customer_id, ?string $license_type, ?string $license_username, ?string $license_password, int $device_type)
    {
        $response = Http::timeout(15)
            ->withBasicAuth(env('SPARAV_CUSTOMERLICENSE_API_AUTH_USERNAME'), env('SPARAV_CUSTOMERLICENSE_API_AUTH_PASSWORD'))
            ->post('https://sparavcustomerlicenseapiprod.azurewebsites.net/api/v1/customerlicense',
                [
                    'customer_id' => $customer_id,
                    'license_type' => $license_type,
                    'license_username' => $license_username,
                    'license_password' => $license_password,
                    'device_type'  => $device_type
                ]);
        return $response;
    }


    /**
     * @param int $customer_id
     * @param string|null $license_type
     * @param int|null $limit
     * @return Response
     */
    public function licenses(int $customer_id, ?string $license_type = null, ?int $limit = null) {

        $response = Http::timeout(15)
            ->withBasicAuth(env('SPARAV_CUSTOMERLICENSE_API_AUTH_USERNAME'), env('SPARAV_CUSTOMERLICENSE_API_AUTH_PASSWORD'))
            ->get("https://sparavcustomerlicenseapiprod.azurewebsites.net/api/v1/customerlicense/{$customer_id}",
                [
                    'license_type' => $license_type,
                    'limit' => $limit,
                ]);
        return $response;

    }



}