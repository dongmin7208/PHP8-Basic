<?php
        $folderName= 'hello';
        $makeDir= mkdir($folderName, '777');

        if($makeDir){
            echo "{$folderName} 完了";
        }else{
            echo "{$folderName} 失敗";
        }


