<?php

namespace App\Service;

use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\String\Slugger\SluggerInterface;

class UploaderService
{
    /**
     * Creates a slug for the given string and locale, using appropriate transliteration when needed.
     */
    public function __construct(private readonly SluggerInterface $slugger, private Filesystem $fs, private RequestStack $requestStack)
    {
    }

    public function uploadImage(UploadedFile $imageFile, string $folder, string $oldFIleName = null): string
    {
        //CREATION NOM FICHIER
        $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
        // this is needed to safely include the file name as part of the URL
        $safeFilename = $this->slugger->slug($originalFilename);
        $newFilename = substr($safeFilename . '-' . uniqid(),0,26). '.' . $imageFile->guessExtension() ;

        // Move the file to the directory
        try {
            $imageFile->move($folder, $newFilename);
        } catch (FileException $e) {
            // ... handle exception if something happens during file upload
            $session = $this->requestStack->getSession();
            $session->getFlashBag()->add('error', $originalFilename . ' impossible d\'importer l\'image ! Veuillez réessayer');
        }
        if ($oldFIleName) {
            $this->fs->remove($folder . '/' . $oldFIleName);
        }
        return $newFilename;
    }


}