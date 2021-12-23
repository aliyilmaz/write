<?php

/**
 *
 * @package    write
 * @version    Release: 1.0.1
 * @license    GPL3
 * @author     Ali YILMAZ <aliyilmaz.work@gmail.com>
 * @category   File writer.
 * @link       https://github.com/aliyilmaz/write
 *
 */
class write extends Mind
{

    /**
     * File writer.
     *
     * @param array $data
     * @param string $filePath
     * @param string $delimiter
     * @return bool
     */
    public function write($data, $filePath, $delimiter = ':') {

        if(is_array($data)){
            $content    = implode($delimiter, $data);
        } else {
            $content    = $data;
        }

        if(isset($content)){
            $dirPath = $this->info($filePath, 'dirname');
            if(!empty($dirPath)){
                if(!is_dir($dirPath)){
                    mkdir($dirPath, 0777, true);
                }
            }
            if(!file_exists($filePath)){ touch($filePath); }
            if(file_exists($filePath)){ 
                $fileName        = fopen($filePath, "a+");
                fwrite($fileName, $content."\r\n");
                fclose($fileName);
            }

            return true;
        }

        return false;
    }
}
