<html>
    <head>
        <title>Upload File PHP Demo</title>

    </head>
    <body>
        <h1>Upload File PHP Demo</h1>
        <h2>By Erez Lahat</h2>
        <ul id='files window'>
            
        <?php 

            $files = glob('data/*.{txt}', GLOB_BRACE);
            foreach($files as $file) {

            //  $filedate =  date(" d m Y H:i:s. ", filectime($file))->setTimezone(new DateTimeZone('GMT')); 

            $filedateGMT =  gmdate(" d m Y H:i:s. ", filectime($file)+3*60*60); 
            echo "<li><a href=".$file." download>".basename ($file),  $filedateGMT."</a></li>"  ;
            
            }
        ?>
        </ul>

        
        
        <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload" accept=".txt">
        <input type="submit" value="Upload File" name="submit">
        </form>

        
    </body>
</html>