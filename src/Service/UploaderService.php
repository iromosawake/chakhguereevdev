<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;

class UploaderService
{
    public function __construct(private SluggerInterface $slugger)
    {
    }

    public function uploadImage(UploadedFile $imageFile, string $folder):string{
        //CREATION NOM FICHIER
        $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
        // this is needed to safely include the file name as part of the URL
        $safeFilename = $this->slugger->slug($originalFilename);
        $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

        // Move the file to the directory
        try {
            $imageFile->move($folder, $newFilename);
        } catch (FileException $e) {
            // ... handle exception if something happens during file upload
            $this->addFlash('error', $originalFilename. ' impossible d\'importer l\'image !' . $e->getMessage());
        }
        return $newFilename;
    }


}