<?php

namespace App\Constant;

use Aws\S3\Exception\S3Exception;
use Aws\S3\S3Client;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;

class FileUpload
{
    private $s3;

    public function __construct()
    {
        $this->s3 = new S3Client([
            'version' => 'latest',
            'region' => env('MINIO_REGION'),
            'endpoint' => 'http://'.env('MINIO_ENDPOINT'),
            'use_path_style_endpoint' => true,
            'credentials' => [
                'key' => env('MINIO_KEY'),
                'secret' => env('MINIO_SECRET')
            ]
        ]);
    }

    /**
     * @TODO Connect to slack
     * Digunakan untuk melakukan upload pada Minio Server
     *
     * @param string $directory
     * @param UploadedFile $file
     * @return string|void
     */
    public function upload(string $directory, UploadedFile $file)
    {
        try
        {
            $extension = $file->extension();
            $name = $file->getClientOriginalName();
            // $filename = sha1(time().time()).".".$extension;
            $filename = $name;

            $this->s3->putObject([
                'Bucket' => env('MINIO_BUCKET'),
                'Key'    => $directory.'/'.$filename,
                'ContentLength' => $file->getSize(),
                'Body'   => $file->getContent()
            ]);

            return env('MINIO_BUCKET').'/'.$directory.'/'.$filename;
        }
        catch (S3Exception $s3Exception)
        {
            Log::error($s3Exception);
        }
    }
}
