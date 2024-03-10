<?php

namespace App\Service;

use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\String\Slugger\SluggerInterface;
use Imagine\Gd\Imagine;
use Imagine\Image\Box;

class UploaderService
{
    private const MAX_WIDTH = 260;
    private const MAX_HEIGHT = 260;

    private $imagine;

    /**
     * Creates a slug for the given string and locale, using appropriate transliteration when needed.
     */
    public function __construct(private readonly SluggerInterface $slugger, private Filesystem $fs, private RequestStack $requestStack)
    {
        $this->imagine = new Imagine();
    }

    public function uploadImage(UploadedFile $imageFile, string $folder, string $oldFIleName = null): string
    {

        //CREATION NOM FICHIER
        $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
        // this is needed to safely include the file name as part of the URL
        $safeFilename = $this->slugger->slug($originalFilename);
        $newFilename = substr($safeFilename . '-' . uniqid(), 0, 26) . '.' . $imageFile->guessExtension();

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
            $this->resize($folder . '/' . $newFilename);
        }
        return $newFilename;
    }


    public function resize(string $filename): void
    {
        list($iwidth, $iheight) = getimagesize($filename);
        $ratio = $iwidth / $iheight;
        $width = self::MAX_WIDTH;
        $height = self::MAX_HEIGHT;
        if ($width / $height > $ratio) {
            $width = $height * $ratio;
        } else {
            $height = $width / $ratio;
        }
        try {
        $photo = $this->imagine->open($filename);
        } catch (Imagine\Exception\Exception $e) {
            dd('Imagin ne peut ouvrir le fichier');
        }
        $photo->resize(new Box($width, $height))->save($filename);
    }


}