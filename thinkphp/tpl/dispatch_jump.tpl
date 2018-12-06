{__NOLAYOUT__}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <title>跳转提示</title>
    <link rel="stylesheet" type="text/css" href="__ADMIN__/css/xcConfirm.css"/>
    <script src="__ADMIN__/js/jquery-1.9.1.js" type="text/javascript" charset="utf-8"></script>
    <script src="__ADMIN__/js/xcConfirm.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
   <input type="hidden" id='msg' value="<?php echo(strip_tags($msg));?>" />
   <input type="hidden" id='wait' value="<?php echo($wait);?>" />
   <input type="hidden" id='href' value="<?php echo($url);?>" />


    <script type="text/javascript">

        (function(){              
            var wait = $('#wait').val(),
                href = $('#href').val();
                msg = $('#msg').val();                
            var txt=  msg;
            console.log(wait);
            window.wxc.xcConfirm(txt, window.wxc.xcConfirm.typeEnum.success);
                
            var interval = setInterval(function(){                
                var time = --wait;
                console.log(time);
                if(time <= 0) {
                    location.href = href;
                    clearInterval(interval);
                };
            }, 1000);
        })();
    </script>
</body>
</html>
