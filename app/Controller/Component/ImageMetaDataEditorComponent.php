<?php
/**
 * Requires PEL (PHP Exif Library) installed
 * http://lsolesen.github.com/pel/doc/
 * To install:
 * pear channel-discover pearhub.org
 * pear install pearhub/pel
 *
 * This class will manipulate Image MetaData using PEL
 *
 */
require_once('PelJpeg.php');

class ImageMetaDataEditorComponent extends Component {
    public $name = 'ImageMetaData';

    public function loadImageMetadata($filename) {
        $jpeg = new PelJpeg($filename);
    }

    public function setDescription() {
        
    }
}

?>