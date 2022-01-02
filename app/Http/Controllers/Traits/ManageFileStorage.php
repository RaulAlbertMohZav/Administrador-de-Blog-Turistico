<?php

namespace App\Http\Controllers\Traits;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;

trait ManageFileStorage
{
    public function getNameFileDB($url)
    {
        $arrayWords = new Collection(explode('/', $url));
        return $arrayWords->last();
    }

    public function existsFileStorage($urlBase, $nameFile)
    {
        return Storage::disk('public')->exists("{$urlBase}/{$nameFile}");
    }

    public function putFileStorage($urlBase, $filePdf)
    {
        return asset('storage/' . Storage::disk('public')->put($urlBase, $filePdf));
    }

    public function deleteFileStorage($url)
    {
        Storage::disk('public')->delete($url);
    }

    public function appStorageProcess($urlDB, $urlBase, $file)
    {
        $nameFile = $this->getNameFileDB($urlDB);

        if ($this->existsFileStorage($urlBase, $nameFile)) {
            $this->deleteFileStorage("{$urlBase}/{$nameFile}");
        }

        return $this->putFileStorage($urlBase, $file);
    }
}
