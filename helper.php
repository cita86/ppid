<?php
use Aws\S3\S3Client;

if(!function_exists('get_presigned_url'))
{

    /**
     * @param string $key Key dapat dilihat pada PATH atau PATH_TO_FILE
     * @param string $timeout Waktu yang diizinkan sebelum URL menjadi Invalidate (Default 10 menit)
     * @return string
     */
    function get_presigned_url(string $key, string $timeout = "+10 minutes"): string
    {
        $fileLocation = explode("/", $key);
        $s3 = new S3Client([
            'version' => 'latest',
            'region' => env('MINIO_REGION'),
            'endpoint' => "http://".env('MINIO_ENDPOINT'),
            'use_path_style_endpoint' => true,
            'credentials' => [
                'key' => env('MINIO_KEY'),
                'secret' => env('MINIO_SECRET')
            ]
        ]);


        $command = $s3->getCommand('GetObject', [
            'Bucket' => env('MINIO_BUCKET'),
            'Key'    => $fileLocation[0]."/".$fileLocation[1]
        ]);

        // Create a pre-signed URL for a request with duration of 10 miniutes
        $presignedRequest = $s3->createPresignedRequest($command, $timeout);

        // Get the actual presigned-url
        return (string)$presignedRequest->getUri();
    }
} 
?>